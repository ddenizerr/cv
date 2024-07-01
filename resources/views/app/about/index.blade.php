@extends('welcome')

@section('content')

    <div class="d-flex flex-column mb-5">

        {{--        avatar--}}
        <div class="d-flex flex-row" style="height: 15rem; padding-left:7rem; padding-right: 7rem">
            <div class="col-6 d-flex align-items-center justify-content-center flex-nowrap p-4">
                <h1 class="flex-nowrap font-playfair text-moss">
                    <span style="font-size: 4rem; margin-left: 2rem">Who dat?</span>
                    <br>
                    <span class="" style="font-size: 7rem;">Who dat?</span>
                </h1>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center">
                <div class="position-absolute">
                    <img class="z-0" src="/images/about-me-avatar.png" alt="" style="width:27rem; height: 27rem">
                                        <span
                                            class="z-3 position-absolute start-50 translate-middle-x font-playfair fs-5 text-white p-4 text-center rounded-4 avatar-subtext">
                                        Traveler, deep conservationist, 🐶 & 🐱 lover, photographer, and all others...
                                    </span>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <img style="height: 25rem" src="/images/arrow-right-down.png" alt="">
        </div>

        {{--        traveller--}}
        <div class="d-flex flex-row-reverse mb-3"
             style="height: 10rem; padding-left:7rem; padding-right: 7rem">
            <div class="d-flex justify-content-end">
                <div class="row text-end g-3">
                    <h1 class="flex-nowrap font-playfair text-moss">
                        <span style="font-size: 4rem; margin-left: 2rem">Traveller</span>
                    </h1>
                    <span>
                        ultricies tempus sadipscing at honestatis vix duis no mentitum luptatum vivendo instructior leo felis omittantur melius cras explicari pericula mi eget aenean menandri possim accumsan molestiae quot referrentur natoque errem maiorum electram falli delicata maiestatis neglegentur intellegat aliquip suas melius etiam possit proin postea ludus reformidans fuisset magna libris viverra
                    </span>
                </div>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center flex-nowrap p-4 mb-5">
                @include('app.components.instagram-post')
            </div>
        </div>

        <div class="z-1 d-flex justify-content-start align-items-center">
            <div class="arrow-flipped-horizontal">
                <img style="height: 25rem" src="/images/arrow-right-down.png" alt="">
            </div>
        </div>
        {{--        music--}}
        <div class="d-flex flex-row mb-3" style="height: 15rem; padding-left:7rem; padding-right: 7rem">
            <div class="d-flex justify-content-end">
                <div class="row text-end">
                    <h1 class="flex-nowrap font-playfair text-moss">
                        <span style="font-size: 4rem; margin-left: 2rem"> Musical Soul </span>
                    </h1>
                    <span>Music was always an escape from the reality for me. I like to play piano, drums and sing, a lot! Someday, I will be out there, on whatever platform or stage, and sing my heart out, but time is not there yet... <br> Or is it? 🤔
                    </span>
                </div>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center p-4">

                <div class="div">
                    <audio controls class="w-100">
                        <source
                            src="/audio/gelyadagit.mp3"
                            type="audio/mpeg"
                        />
                    </audio>
                    <p><small class="font-handwriting fs-5 mt-3">Shout out to my talented friend <a
                                class="text-decoration-none" href="https://www.instagram.com/mustafabasrioglu/">Mustafa
                                Basrioglu</a> behind everything and <a class="text-decoration-none"
                                                                       href="https://www.instagram.com/yagmurolmez87/">Yagmur
                                Olmez</a> on the piano!</small></p>
                </div>

            </div>
        </div>
        <div class="z-1 d-flex justify-content-end align-items-end m-0 p-0">
            <div class="">
                <img style="height: 25rem" src="/images/arrow-right-down.png" alt="">
            </div>
        </div>
        {{-- people --}}
        <div class="d-flex flex-row-reverse mb-5" style="height: 15rem; padding-left:7rem; padding-right: 7rem">
            <div class="d-flex justify-content-end">
                <div class="row text-end">
                    <h1 class="flex-nowrap font-playfair text-moss">
                        <span style="font-size: 4rem; margin-left: 2rem">Brings people together</span>
                    </h1>
                    <span>
                        Oh, nothing to see here. Just bunch of social gatherins I planned, or things I baked to feed people, because there is small Cypriot grandmother living inside me.
                    </span>
                </div>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center flex-nowrap p-4 mb-5">

                @include('app.components.gallery')

            </div>
        </div>

    </div>
@endsection
