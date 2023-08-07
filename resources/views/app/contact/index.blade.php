@extends('welcome')

@section('content')
    <div class="my-2">
        <h1 class="font-cinzel index-title"> Contact </h1>
    </div>
    <div class="row p-3">
        <!-- Image -->
        <div class="col-lg-4 col-md-4  col-sm-2 d-none d-xs-block d-sm-block contact-form-image text-onyx">
            Contact form imagesdfafasdfasdf fgsdgdfgdsg
        </div>
        <!-- Form -->
        <div class="col-lg-8 col-md-8 col-sm-10 bg-white">
            <div class="row">
                <div class=" p-1">
                    <div class="input-group">
                        <span class="input-group-text bg-onyx" id="basic-addon1"><i class="fa-regular fa-user text-white"></i></span>
                        <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                </div>
                <div class=" p-1">
                    <div class="input-group">
                        <span class="input-group-text bg-onyx" id="basic-addon1"><i class="fa-regular fa-envelope text-white"></i></span>
                        <input type="text" class="form-control" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="p-1">
                    <div class="input-group">
                        <span class="input-group-text bg-onyx w-25" id="basic-addon1"><i class="fa-solid fa-mobile-screen text-white"></i></span>
                        <input type="text" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class=" p-1">
                    <div class="input-group">
                        <span class="input-group-text bg-onyx" id="basic-addon1"><i class="fa-regular fa-message text-white"></i></span>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
