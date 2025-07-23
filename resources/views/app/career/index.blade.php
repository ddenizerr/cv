@extends('welcome')

@section('content')
    <div class="mb-4 index-title">

        <div class="row">

            <div class="col-12 flex-grow d-flex align-items-center justify-content-between">
                    <book-a-call></book-a-call>
                    <socials></socials>
            </div>

            <div class="d-flex justify-content-between mt-2">
                <div class="col-12 col-md-10 col-lg-4 flex-grow " id="app">
                    <google-map></google-map>

                </div>
                <div class="col-12 col-md-10 col-lg-4" id="app">
                    <book-card></book-card>

                </div>
                <div class="col-12 col-md-10 col-lg-3 " id="app">
                    <experience></experience>

                </div>
            </div>


        </div>


    </div>

@endsection

