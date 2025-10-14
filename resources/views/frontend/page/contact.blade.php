@extends('layouts.appf')

@section('content')
<div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Kontak</h1>
        <nav class="breadcrumbs">
            <ol class="mx-2">
                <li><a href="/">Beranda</a></li>
                <li class="current">Kontak</li>
            </ol>
        </nav>
    </div>
</div>
<section id="contact" class="contact section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-main-wrapper">
            <div class="map-wrapper">
                @if ($global_option <> '0')
                {!!$global_option->maps!!}
                @endif
            </div>

            <div class="contact-content">
                <div class="contact-cards-container" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-card">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Location</h4>
                            @if ($global_option <> '0')
                            <p>
                                {{ !empty($global_option->city) ? $global_option->city:'Silahkan Sesuaikan ' }}, {{ !empty($global_option->postalcode) ? $global_option->postalcode:'Silahkan Sesuaikan ' }}<br>
                                    {{ !empty($global_option->state) ? $global_option->state:'Silahkan Sesuaikan ' }} <br>
                                    {{ !empty($global_option->country) ? $global_option->country:'Silahkan Sesuaikan ' }} <br><br>
                            </p>
                             @endif
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p>{{ !empty($global_option->email) ? $global_option->email:'Silahkan Sesuaikan ' }}</p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Call</h4>
                            <p>{{ !empty($global_option->phone) ? $global_option->phone:'Silahkan Sesuaikan ' }}</p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="icon-box">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Open Hours</h4>
                            <p>Monday-Friday: 7AM - 4PM</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="contact-form-container" data-aos="fade-up" data-aos-delay="400">
                    <h3>Get in Touch</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing.</p>

                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                            </div>
                            <div class="mt-3 col-md-6 form-group mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                            </div>
                        </div>
                        <div class="mt-3 form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                        </div>
                        <div class="mt-3 form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>

                        <div class="form-submit">
                            <button type="submit">Send Message</button>
                            <div class="social-links">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
</section>

@endsection
