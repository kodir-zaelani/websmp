@extends('layouts.appb')
@section('content')
@auth
@php
$currentUser = Auth::user()
@endphp
@endauth
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="overflow-hidden box bg-gradient-primary pull-up">
                <div class="py-0 box-body pe-0 ps-lg-50 ps-15">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-8">
                            <h1 class="text-white fs-40">Hello {{ $currentUser->name }} !</h1>
                            <p class="mb-0 text-white fs-20">
                                TK Tunas Beriman, Kota Samarinda, Kalimantan Timur
                            </p>
                        </div>
                        <div class="col-12 col-lg-4"><img src="{{ asset('')}}assets/images/svg-icon/color-svg/custom-15.svg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-0 bg-transparent box no-shadow">
                <div class="px-0 box-header no-border">
                    <h4 class="box-title">Current Running Courses</h4>
                    <ul class="box-controls pull-right d-md-flex d-none">
                        <li>
                            <button class="px-10 btn btn-primary-light">View All</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
            <div class="box pull-up">
                <div class="box-body">
                    <div class="rounded bg-primary">
                        <h5 class="p-10 text-center text-white">It & software</h5>
                    </div>
                    <p class="mb-0 fs-18">Quisque a felis quis</p>
                    <p class="mb-0 fs-18">Course A-Z</p>
                    <div class="d-flex justify-content-between mt-30">
                        <div>
                            <p class="mb-0 text-fade">Author</p>
                            <p class="mb-0">Maical Doe</p>
                        </div>
                        <div>
                            <p class="mb-5 fw-600">55%</p>
                            <div class="mb-0 progress progress-sm w-100">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
            <div class="box pull-up">
                <div class="box-body">
                    <div class="rounded bg-warning">
                        <h5 class="p-10 text-center text-white">Programming</h5>
                    </div>
                    <p class="mb-0 fs-18">Morbi finibus purus</p>
                    <p class="mb-0 fs-18">Course A-Z</p>
                    <div class="d-flex justify-content-between mt-30">
                        <div>
                            <p class="mb-0 text-fade">Author</p>
                            <p class="mb-0">Maical Doe</p>
                        </div>
                        <div>
                            <p class="mb-5 fw-600">65%</p>
                            <div class="mb-0 progress progress-sm w-100">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
            <div class="box pull-up">
                <div class="box-body">
                    <div class="rounded bg-danger">
                        <h5 class="p-10 text-center text-white">Networking</h5>
                    </div>
                    <p class="mb-0 fs-18">Duis at purus vel tortor</p>
                    <p class="mb-0 fs-18">Course A-Z</p>
                    <div class="d-flex justify-content-between mt-30">
                        <div>
                            <p class="mb-0 text-fade">Author</p>
                            <p class="mb-0">Maical Doe</p>
                        </div>
                        <div>
                            <p class="mb-5 fw-600">75%</p>
                            <div class="mb-0 progress progress-sm w-100">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
            <div class="box pull-up">
                <div class="box-body">
                    <div class="rounded bg-info">
                        <h5 class="p-10 text-center text-white">Network Security</h5>
                    </div>
                    <p class="mb-0 fs-18">Curabitur eget augue</p>
                    <p class="mb-0 fs-18">Course A-Z</p>
                    <div class="d-flex justify-content-between mt-30">
                        <div>
                            <p class="mb-0 text-fade">Author</p>
                            <p class="mb-0">Maical Doe</p>
                        </div>
                        <div>
                            <p class="mb-5 fw-600">45%</p>
                            <div class="mb-0 progress progress-sm w-100">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-12">
            <div class="mb-0 bg-transparent box no-shadow">
                <div class="px-0 box-header no-border">
                    <h4 class="box-title">Upcoming Lessons</h4>
                    <div class="box-controls pull-right d-md-flex d-none">
                        <a href="#">View All</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="rounded box bt-5 border-danger pull-up">
                    <div class="box-body">
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center pe-2 justify-content-between">
                                <h4 class="fw-500">
                                    Programming
                                </h4>
                                <div class="dropdown">
                                    <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                        <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                        <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                    </div>
                                </div>
                            </div>
                            <p class="fs-16">
                                Every Day 10am to 11am
                            </p>
                        </div>
                        <div class="mt-10 d-flex align-items-center justify-content-between">
                            <div class="d-flex">
                                <a href="#" class="overflow-hidden text-center me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle">
                                    <img src="{{ asset('')}}assets/images/avatar/avatar-1.png" class="h-50 align-self-end" alt="">
                                </a>
                                <a href="#" class="overflow-hidden text-center me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle">
                                    <img src="{{ asset('')}}assets/images/avatar/avatar-3.png" class="h-50 align-self-end" alt="">
                                </a>
                                <a href="#" class="overflow-hidden text-center me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle">
                                    <img src="{{ asset('')}}assets/images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                </a>
                            </div>
                            <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark"><i class="mdi mdi-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="rounded box bt-5 border-primary pull-up">
                    <div class="box-body">
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center pe-2 justify-content-between">
                                <h4 class="fw-500">
                                    Core Language
                                </h4>
                                <div class="dropdown">
                                    <a data-bs-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                        <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                        <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                    </div>
                                </div>
                            </div>
                            <p class="fs-16">
                                Every Day 12pm to 01pm
                            </p>
                        </div>
                        <div class="mt-10 d-flex align-items-center justify-content-between">
                            <div class="d-flex">
                                <a href="#" class="overflow-hidden text-center me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle">
                                    <img src="{{ asset('')}}assets/images/avatar/avatar-2.png" class="h-50 align-self-end" alt="">
                                </a>
                                <a href="#" class="overflow-hidden text-center me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle">
                                    <img src="{{ asset('')}}assets/images/avatar/avatar-5.png" class="h-50 align-self-end" alt="">
                                </a>
                                <a href="#" class="overflow-hidden text-center me-15 bg-lightest h-50 w-50 l-h-50 rounded-circle">
                                    <img src="{{ asset('')}}assets/images/avatar/avatar-6.png" class="h-50 align-self-end" alt="">
                                </a>
                            </div>
                            <button type="button" class="waves-effect waves-circle btn btn-circle btn-dark"><i class="mdi mdi-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <div class="mb-0 bg-transparent box no-shadow">
                <div class="px-0 box-header no-border">
                    <h4 class="box-title">Course</h4>
                </div>
            </div>
            <div>
                <div class="box mb-15 pull-up">
                    <div class="box-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="text-center rounded me-15 bg-warning h-50 w-50 l-h-60">
                                    <span class="icon-Book-open fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="mb-1 text-dark hover-primary fs-16">Informatic Course</a>
                                    <span class="text-fade">Johen Doe, 19 April</span>
                                </div>
                            </div>
                            <a href="#">
                                <span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box mb-15 pull-up">
                    <div class="box-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="text-center rounded me-15 bg-primary h-50 w-50 l-h-60">
                                    <span class="icon-Mail fs-24"></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="mb-1 text-dark hover-primary fs-16">Live Drawing</a>
                                    <span class="text-fade">Micak Doe, 12 June</span>
                                </div>
                            </div>
                            <a href="#">
                                <span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box mb-15 pull-up">
                    <div class="box-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="text-center rounded me-15 bg-danger h-50 w-50 l-h-60">
                                    <span class="icon-Book-open fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="mb-1 text-dark hover-primary fs-16">Contemporary Art</a>
                                    <span class="text-fade">Potar doe, 27 July</span>
                                </div>
                            </div>
                            <a href="#">
                                <span class="icon-Arrow-right fs-24"><span class="path1"></span><span class="path2"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center pull-up">
                    <a href="#" class="btn d-grid btn-primary-light">View all</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Resent Notifications</h4>
                </div>
                <div class="px-0 pt-0 pb-10 box-body">
                    <div class="media-list media-list-hover">
                        <a class="media media-single" href="#">
                            <h4 class="w-50 text-gray fw-500">10:10</h4>
                            <div class="rounded media-body ps-15 bs-5 border-primary">
                                <p>Morbi quis ex eu arcu.</p>
                                <span class="text-fade">by Johne</span>
                            </div>
                        </a>

                        <a class="media media-single" href="#">
                            <h4 class="w-50 text-gray fw-500">08:40</h4>
                            <div class="rounded media-body ps-15 bs-5 border-success">
                                <p>Proin iacul eros no odi.</p>
                                <span class="text-fade">by Amla</span>
                            </div>
                        </a>

                        <a class="media media-single" href="#">
                            <h4 class="w-50 text-gray fw-500">07:10</h4>
                            <div class="rounded media-body ps-15 bs-5 border-info">
                                <p>In mattis mi posuere.</p>
                                <span class="text-fade">by Josef</span>
                            </div>
                        </a>

                        <a class="media media-single" href="#">
                            <h4 class="w-50 text-gray fw-500">01:15</h4>
                            <div class="rounded media-body ps-15 bs-5 border-danger">
                                <p>Morbi quis ex eu arcu.</p>
                                <span class="text-fade">by Rima</span>
                            </div>
                        </a>

                        <a class="media media-single" href="#">
                            <h4 class="w-50 text-gray fw-500">23:12</h4>
                            <div class="rounded media-body ps-15 bs-5 border-warning">
                                <p>Morbi quis ex eu arcu.</p>
                                <span class="text-fade">by Alaxa</span>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Working Hours</h4>
                    <ul class="box-controls pull-right d-md-flex d-none">
                        <li class="dropdown">
                            <button class="px-10 dropdown-toggle btn btn-warning-light" data-bs-toggle="dropdown" href="#">Today</button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item active" href="#">Today</a>
                                <a class="dropdown-item" href="#">Yesterday</a>
                                <a class="dropdown-item" href="#">Last week</a>
                                <a class="dropdown-item" href="#">Last month</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="box-body">
                    <div id="revenue5"></div>
                    <div class="d-flex justify-content-center">
                        <p class="mx-20 d-flex align-items-center fw-600"><span class="badge badge-xl badge-dot badge-warning me-20"></span> Progress</p>
                        <p class="mx-20 d-flex align-items-center fw-600"><span class="badge badge-xl badge-dot badge-primary me-20"></span> Done</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-12">
            <div class="box">
                <div class="box-body">
                    <p class="text-fade">Total Courses</p>
                    <h3 class="mt-0 mb-20">19 <small class="text-success"><i class="fa fa-arrow-up ms-15 me-5"></i> 2 New</small></h3>
                    <div style="min-height: 198px;">
                        <div id="charts_widget_2_chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="box">
                <div class="box-body">
                    <p class="text-fade">Hours spent</p>
                    <h3 class="mt-0 mb-20">21 h 30 min <small class="text-danger"><i class="fa fa-arrow-down ms-25 me-5"></i> 15%</small></h3>
                    <div id="charts_widget_1_chart"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
