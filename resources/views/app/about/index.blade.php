@extends('welcome')

@section('content')

    <div class="d-flex flex-row mt-5" style="height: 15rem; padding-left:7rem; padding-right: 7rem">
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
                <span class="z-3 position-absolute start-50 translate-middle-x font-playfair fs-5 text-white p-4 text-center rounded-4 avatar-subtext">
                    Traveler, deep conservationist, 🐶 & 🐱 lover, photographer, and all others...
                </span>
            </div>
        </div>
    </div>


    {{--    <div class="row mb-4 d-flex align-items-center">--}}
    {{--        <div class="row d-flex align-items-center">--}}
    {{--            <div class="col-md-6">--}}
    {{--                <img class="about-me-image" src="/images/deniz-memoji.jpeg" alt="about me image"/>--}}
    {{--            </div>--}}

    {{--            <div class="col-md-6 ">--}}
    {{--                <span class="text-onyx font-noto fs-6"> Software Developer originated from Cyprus. </span>--}}
    {{--                <span class="fs-3 text-onyx font-noto"> I love traveling, photography and deep conversations about mental--}}
    {{--            health!</span>--}}
    {{--                <span class="fs-5 font-noto text-onyx"> I love all animals! </span>--}}
    {{--                <span class="fs-6 font-noto text-onyx"> I love to play drums, sing and play piano.</span>--}}
    {{--                <span class="fs-5 font-noto text-onyx"> Natural social event planner and party starter! </span>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-12 d-flex justify-content-end">--}}
    {{--   <span class="text-onyx font-handwriting fs-3"> Currently at:--}}
    {{--                         <span class="font-noto text-darkgreen">Cork IE <img class="icon-ireland"--}}
    {{--                                                                             src="/images/ireland.png" alt="irish-flag"> </span>--}}
    {{--                    </span>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--    </div>--}}
@endsection
