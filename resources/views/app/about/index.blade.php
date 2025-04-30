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
                        <img class="z-0 img-fluid" src="/images/avatars/memoji-casual.png" style="width:325px; height: 325px;" alt="Deniz Memoji">
                        <span class="avatar-subtext text-onyx z-3 position-absolute start-50 translate-middle-x p-4 text-center rounded-4 fs-6">
                Traveller, deep conservationist, 🐶, 🐱 and animal lover, photographer, and all others...
            </span>
                    </div>
                </div>
            </div>

            <hr class="my-4">
        {{--        traveller--}}
        <div class="row mt-5 p-4 align-items-center">
            <div class="col-md-6 col-12 order-md-2 text-end mb-4 mb-md-0">
                <h1 class="font-playfair text-moss" style="font-size: 3rem;">
                    Traveller
                </h1>
                <p class="fs-5 mt-3">
                    We live on this planet and we need to explore every bit of it! 🌍 <br class="d-none d-md-inline">
                    I’ve only discovered 10% so far and so much more to go!
                </p>
            </div>
            <div class="col-md-6 col-12 order-md-1 d-flex justify-content-center">
                <div class="w-100" style="max-width: 400px;">
                    @include('app.components.instagram-post')
                </div>
            </div>
        </div>
            <hr class="my-4">
        {{--        music--}}
        <div class="row mt-5 p-4 align-items-center">
            <div class="col-md-6 col-12 text-end mb-4 mb-md-0">
                <h1 class="font-playfair text-moss" style="font-size: 3rem;">Musical Soul</h1>
                <p class="fs-5 mt-3">
                    Music has always been my escape from reality. I love to play the piano, drums, and sing, a lot!<br class="d-none d-md-inline">
                    One day, I’ll be on a platform or stage pouring my heart into a performance…<br class="d-none d-md-inline">
                    Or is that day already here? 🤔
                </p>
                <p><small class="font-handwriting fs-5 mt-3">
                    Shout out to my talented friend
                    <a class="text-decoration-none" href="https://www.instagram.com/mustafabasrioglu/">Mustafa Basrioglu</a>
                    behind everything and
                    <a class="text-decoration-none" href="https://www.instagram.com/yagmurolmez87/">Yagmur Olmez</a>
                    on the piano!
                </small></p>
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-center">
                <audio controls class="w-100" style="max-width: 400px;">
                    <source src="/audio/gelyadagit.mp3" type="audio/mpeg" />
                </audio>
            </div>
        </div>

            <hr class="my-4">

        {{-- people --}}
        <div class="row mt-5 p-4 align-items-center">
            <div class="col-md-6 col-12 text-end mb-4 mb-md-0">
                <h1 class="font-playfair text-moss" style="font-size: 3rem;">
                    Brings People Together
                </h1>
                <p class="fs-5 mt-3">
                    Oh, nothing to see here, just some of the social gatherings I planned or the treats I baked to feed people.
                    There’s a tiny Cypriot grandmother living inside me after all! 🧁
                </p>
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-center">
                <div class="w-100" style="max-width: 500px;">
                    @include('app.components.gallery')
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
