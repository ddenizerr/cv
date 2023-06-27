@extends('welcome')

@section('content')
    <div class="my-2">
        <h1 class="font-cinzel index-title"> Hello Sailor! </h1>
        <p class="mt-4 index-text">
            I am a full stack developer located in London (atm). Actively working in industry since 2021. You can find so many information about my goofy handmade website from where I am right know, what I am up-to and so-on! So, enjoy!
        </p>
    </div>

    <div class="row">
        @include('app.components.nav-cards')
    </div>
    <div class="row mt-4">
        @include('app.components.quote')
    </div>

@endsection
