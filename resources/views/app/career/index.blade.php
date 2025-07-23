@extends('welcome')

@section('content')
    <div class="mb-4 index-title">
        <div class="row">

            <div class="d-flex justify-content-between flex-wrap">
                <div class="col-12 col-md-10 col-lg-3 mb-2">
                    <experience></experience>
                </div>
                <div class="col-12 col-md-10 col-lg-4 flex-grow mb-2">
                    <google-map></google-map>
                </div>
                <div class="col-12 col-md-10 col-lg-4">
                    <book-card></book-card>
                </div>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 mt-3">
                <div class="w-100 w-md-50">
                    <book-a-call></book-a-call>
                </div>
                <div class="w-100 w-md-50 text-md-end text-center">
                    <socials></socials>
                </div>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 mt-3">
                <div class="w-100 w-md-50">
                    <projects></projects>
                </div>
            </div>

        </div>
    </div>

@endsection

