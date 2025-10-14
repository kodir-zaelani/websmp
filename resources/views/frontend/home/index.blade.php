@extends('layouts.appf')

@section('content')

@include('frontend.home.slider')
{{-- @include('frontend.home.hero') --}}
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
