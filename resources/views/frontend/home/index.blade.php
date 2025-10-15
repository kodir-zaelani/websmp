@extends('layouts.appf')

@section('content')

@include('frontend.home.slider')
{{-- @include('frontend.home.hero') --}}
{{-- <section class="info-sekolah">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-12">
                <h6 class="py-3">Info Sekolah</h6>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
                <div class="px-2 bg-light ">
                    <marquee class="py-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                        Selamat datang di website kami teknologi.visitklaten.com - Sharing Teknologi - Berbagi Ilmu Tentang Teknologi
                    </marquee>
                </div>
            </div>
            <div class="col-lg-2 col-md-8 col-12">
                <h6 class="py-3">Date</h6>
            </div>
        </div>
    </div>
</section> --}}
@include('frontend.home.program')
@include('frontend.home.facility')
@include('frontend.home.haribesar')
@include('frontend.home.editorial')
@include('frontend.home.recent-news')
@include('frontend.home.blog')
@include('frontend.home.ptk')
@include('frontend.home.video')
@include('frontend.home.foto')
@include('frontend.home.events')

@endsection
