@extends('welcome')

@section('content')
<a href="{{route('career.create')}}" class="btn btn-success"> Create </a>
<projects-index></projects-index>
@endsection
