@extends('welcome')

@section('content')

    <div class="row mb-4 d-flex align-items-center">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <img class="about-me-image" src="/images/deniz-memoji.jpeg" alt="about me image"/>
            </div>

            <div class="col-md-6 ">
                <span class="text-onyx font-noto fs-6"> Software Developer originated from Cyprus. </span>
                <span class="fs-3 text-onyx font-noto"> I love traveling, photography and deep conversations about mental
            health!</span>
                <span class="fs-5 font-noto text-onyx"> I love all animals! </span>
                <span class="fs-6 font-noto text-onyx"> I love to play drums, sing and play piano.</span>
                <span class="fs-5 font-noto text-onyx"> Natural social event planner and party starter! </span>
            </div>
            <div class="col-md-12 d-flex justify-content-end">
   <span class="text-onyx font-handwriting fs-3"> Currently at:
                         <span class="font-noto text-darkgreen">Cork IE <img class="icon-ireland"
                                                                             src="/images/ireland.png" alt="irish-flag"> </span>
                    </span>
            </div>
        </div>

    </div>
@endsection
