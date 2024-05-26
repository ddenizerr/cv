@extends('welcome')

@section('content')
{{--    <div class="my-2">--}}
{{--        <h1 class="font-cinzel"> Hi, I am <span class="font-better text-moss">Deniz</span> </h1>--}}
{{--        <p class="mt-4 index-text">--}}
{{--            I am a software developer located in Cork, IR. You can find so many--}}
{{--            information about my goofy handmade website from where I am right know, what I am up-to and so-on! Thus,--}}
{{--            enjoy!--}}
{{--            <br>--}}
{{--            <small class="text-darkgreen">Little Irish Trivia: If you want to say Hello in Irish: "póg mo thóin". ~pogue--}}
{{--                muh hone~ </small>--}}
{{--        </p>--}}
{{--    </div>--}}

    <div class="row">
        @include('app.components.cards')
    </div>

{{--    <div class="row">--}}
{{--        @include('app.components.nav-cards')--}}
{{--    </div>--}}
{{--    <div class="row p-4 mt-4">--}}
{{--        @include('app.components.quote')--}}
{{--    </div>--}}

@endsection
