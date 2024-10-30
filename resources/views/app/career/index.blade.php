@extends('welcome')

@section('content')
    <div class="row mb-4 index-title">
        <h1 class="mb-2 font-playfair text-moss"> My Career</h1>
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
                                            <span class="month">Current</span>
                                    <span class="year text-onyx">2023</span>
                                    </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title font-cinzel">Software Developer @ Apple</h5>
                            <p class="description font-noto text-onyx fs-6">
                                - Drive software development and project management across Cork and Distribution Centres, proactively managing the Shop Floor System to support high-volume manufacturing operations.
                                <br>
                                - Collaborating with cross-functional stakeholders (machine engineers, operations managers, and quality assurance teams) to gather requirements, aligning solutions with product introductions and process optimisation needs.
                                <br>
                                <strong> Key Technologies: </strong> PHP, Symfony, MySQL, Bootstrap.

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
                            <h5 class="title">Backend Developer @ Manta Ray Media </h5>
                            <p class="description font-noto text-onyx fs-6">
                                - Maintained and improved Drupal-based websites and API services for various clients, ensuring high performance and reliability.
                                <br>
                                - Designed and styled custom content layouts according to specifications and user feedback, enhancing user experience.
                                <br>
                                <strong> Key Technologies: </strong> Symfony, jQuery, GraphQL, Drupal, Bootstrap, SCSS.

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
                                    <span class="year">2022</span>
                                    </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title">Sofware Developer @ CIU </h5>
                            <p class="description font-noto text-onyx fs-6">
                                - Improved and maintained an admin portal for tracking Covid-19 cases and contacts, contributing to national public health initiatives.
                                <br>
                                - Developed critical modules, including the Patients Module, used by national airports and health authorities.
                                <br>
                                <strong>Key technologies:</strong> Laravel, JavaScript, Bootstrap, MariaDB, WAMP, Trello.

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
                                    <span class="year">2021</span>
                                    </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title">  Software Engineer Intern @ Analiz Systems	</h5>
                            <p class="description font-noto text-onyx fs-6">
                                - Designed and implemented a phone book application with CRUD operations, gaining practical experience in C# and .NET frameworks.
                                <br>
                                <strong> Key technologies: </strong> .NET Framework, C#, Bootstrap, CSS.

                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->
                </div>
            </div>
        </div>

{{--        <div class="col-lg-12">--}}
{{--            @include('app.components.gallery')--}}
{{--        </div>--}}
    </div>

@endsection
