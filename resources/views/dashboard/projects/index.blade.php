@extends('welcome')

@section('content')
    <div class="row d-flex justify-content-end">
        <div class="col-md-2">
        <a href="{{route('projects.create')}}" class="btn bg-moss text-white"><i class="fa-solid fa-plus"></i></a>
        </div>
    </div>
<projects-index></projects-index>
@endsection
