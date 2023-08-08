@extends('welcome')

@section('content')
    <div class="row font-cinzel mb-4 d-flex align-items-center">
        <h1 class="text-onyx"> DENIZ DENIZER </h1>
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <img class="about-me-image" src="/images/aboutmeimage.png" alt="about me image"/>
            </div>

            <div class="col-md-6 ">
                <span class="text-onyx font-noto fs-6"> Software Developer originated from Cyprus. </span>
                <span class="fs-3 text-onyx font-noto"> I love traveling, photography and deep conversations about mental
            health!</span>
                <span class="fs-5 font-noto text-onyx"> I love all animals! </span>
                <span class="fs-6 font-noto text-onyx"> I love to play drums, sing and play piano.</span>
            </div>
            <div class="col-md-12 d-flex justify-content-end">
   <span class="text-onyx font-handwriting fs-3"> Currently at:
                         <p class="font-noto text-darkgreen">Ireland   <img class="icon-ireland"
                                                                           src="/images/ireland.png" alt="">   </p>
                    </span>
            </div>
        </div>

        <div class="row">
            @include('app.components.nav-cards')
        </div>

    </div>
@endsection
