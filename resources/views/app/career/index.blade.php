@extends('welcome')

@section('content')
    <div class="row mb-4 index-title">
        <h1 class="mb-2 font-handwriting"> My Career</h1>
        {{--            <div class="col-lg-6">--}}
        {{--                <Projects></Projects>--}}
        {{--            </div>--}}
        <div class="col-lg-12">

            {{--            <a href="{{route('home.downloadPDF')}}">CV</a>--}}
            {{--TIMELINE--}}
            <div class="container">
                <div class="main-timeline">

                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                    <span class="date">
                                            <span class="month text-onyx">Current</span>
                                    <span class="year text-onyx">2023</span>
                                    </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title">Software Developer @ Apple</h5>
                            <p class="description font-noto text-onyx fs-6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa
                                scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur.
                                Praesent dapibus dolor felis, eu ultrices elit molestie.
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->

                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                    <span class="date">
                                            <span class="month text-onyx">3 Months</span>
                                    <span class="year text-onyx">2023</span>
                                    </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title">Backend Developer @ MRM </h5>
                            <p class="description font-noto text-onyx fs-6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa
                                scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur.
                                Praesent dapibus dolor felis, eu ultrices elit molestie.
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->

                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                    <span class="date">
                                            <span class="month">1 Years</span>
                                    <span class="year">2015</span>
                                    </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title">Sofware Developer @ CIU </h5>
                            <p class="description font-noto text-onyx fs-6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa
                                scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur.
                                Praesent dapibus dolor felis, eu ultrices elit molestie.
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->

                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                    <span class="date">
                                            <span class="month">2 Years</span>
                                    <span class="year">2016</span>
                                    </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title">Backend Developer</h5>
                            <p class="description font-noto text-onyx fs-6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa
                                scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur.
                                Praesent dapibus dolor felis, eu ultrices elit molestie.
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->

                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                    <span class="date">
                                            <span class="month">2 Years</span>
                                    <span class="year">2018</span>
                                    </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title">Backend Developer</h5>
                            <p class="description font-noto text-onyx fs-6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa
                                scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur.
                                Praesent dapibus dolor felis, eu ultrices elit molestie.
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->

                </div>
            </div>
        </div>

        <div class="col-lg-12">
            @include('app.components.gallery')
        </div>
    </div>

@endsection
