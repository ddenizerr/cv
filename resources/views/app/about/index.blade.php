@extends('welcome')

@section('content')

    <div class="container mt-5">
        <div class="d-flex flex-column">
        {{--        avatar--}}
            <div class="row mb-5 p-4 align-items-center">
                <div class="col-md-6 col-12 text-center p-4">
                    <h1 class="font-playfair text-moss">
                        <span class="d-block who-dat-large">Who dat?</span>
                        <span class="who-dat-xl">Who dat?</span>
                    </h1>
                </div>
                <div class="col-md-6 col-12 d-flex mb-2 align-items-center justify-content-center">
                    <div class="position-relative">
                        <img class="z-0 img-fluid" src="/images/deniz-irish-memoji.png" alt="Deniz Memoji">
                        <span class="avatar-subtext text-onyx z-3 position-absolute start-50 translate-middle-x p-4 text-center rounded-4 fs-6">
                Traveler, deep conservationist, 🐶, 🐱 and animal lover, photographer, and all others...
            </span>
                    </div>
                </div>
            </div>

            <hr class="my-4">
        {{--        traveller--}}
        <div class="row mt-5 p-4 align-items-center">
            <div class="d-flex justify-content-end">
                <div class="row text-end g-3">
                    <h1 class="flex-nowrap font-playfair text-moss">
                        <span style="font-size: 4rem; margin-left: 2rem">Traveller</span>
                    </h1>
                    <span>
                        We live on this planet and we need to explore every one bit of it! And I only discovered 10% of it so way more to go! 🌍
                    </span>
                </div>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center flex-nowrap p-4 mb-5">
                @include('app.components.instagram-post')
            </div>
        </div>
            <hr class="my-4">
        {{--        music--}}
        <div class="row mt-5 p-4 align-items-center">
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

            <hr class="my-4">

        {{-- people --}}
        <div class="row mt-5 p-4 align-items-center" style="height: 15rem; padding-left:7rem; padding-right: 7rem">
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
            <div class="p-4 mb-5">

                @include('app.components.gallery')

            </div>
        </div>
        </div>
    </div>
@endsection
