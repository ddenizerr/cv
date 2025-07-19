@extends('welcome')

@section('content')
    <div class="mb-4 index-title">

        <div class="d-flex justify-content-around gap-4 flex-wrap">

            <div class="col-12 d-flex justify-content-between align-items-center flex-wrap gap-1">
                <div>
                    <book-a-call></book-a-call>
                </div>
                <div>
                    <socials></socials>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-4" id="app">
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

@endsection

