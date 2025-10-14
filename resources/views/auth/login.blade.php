@extends('layouts.appf')

@section('content')
<section id="stats" class="stats section">
    <div class="container" >
        <div class="mt-2 row">
            <div class="col-lg-12">
                <div class="highlights-section" data-aos="fade-up" data-aos-delay="700">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="highlights-content">
                                <h3 class="highlights-title">{{$global_option->webname}}</h3>
                                <p class="highlights-text">
                                    {{$global_option->description}}
                                </p>
                                <div class="highlights-features">
                                    <div class="feature-item" >
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Innovative curriculum design</span>
                                    </div>
                                    <div class="feature-item" >
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>World-class expertise</span>
                                    </div>
                                    <div class="feature-item" >
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Comprehensive student support</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <x-flash-message/>
                            <div class="contact-content">
                                <div class="contact-form-container">

                                    <div class="card">
                                        <div class="card-header">
                                            {{ __('Sign In') }}
                                        </div>
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('login') }}" class="pt-3">
                                                @csrf
                                                <div class="mb-3 row">
                                                    <div class="col-md-8 offset-md-2">
                                                        <div class="input-group">
                                                            <span class="input-group-text" ><i class="bi bi-person-square"></i></span>
                                                            <input type="text" class="form-control @error('login') is-invalid @enderror"  name="login" value="{{ old('login') }}" required autocomplete="email" placeholder="Email/Username/Phone Number" aria-label="email" aria-describedby="basic-addon1">
                                                            {{-- <input type="text" class="form-control @error('login') is-invalid @enderror"  name="login" value="{{ old('login') }}" required autocomplete="email" placeholder="Email/Username/Phone Number" aria-label="email" aria-describedby="basic-addon1"> --}}
                                                            @error('login')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <div class="col-md-8 offset-md-2">
                                                        <div class="input-group">
                                                            <span class="input-group-text" ><i class="bi bi-file-lock2"></i></span>
                                                            <input type="password" class="form-control @error('password') is-invalid @enderror"  name="password" value="{{ old('password') }}" required  placeholder="Password" autocomplete="current-password" aria-label="email" aria-describedby="basic-addon1">
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <div class="col-md-10 offset-md-2">
                                                        <div class="row">
                                                            <div class="col-md-6 ">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                                    <label class="form-check-label" for="remember">
                                                                        {{ __('Remember Me') }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 ">
                                                                @if (Route::has('password.request'))
                                                                <a class="text-decoration-none" href="{{ route('password.request') }}">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-0 row ">
                                                    <div class="col-md-10 offset-md-2">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Sign In') }}
                                                        </button>

                                                        @if (Route::has('register'))
                                                        <a class="text-decoration-none ms-3" href="{{ route('register') }}">
                                                            {{ __('Sign Up') }}
                                                        </a>
                                                        @endif

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
@endsection
