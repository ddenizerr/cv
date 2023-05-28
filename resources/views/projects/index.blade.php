@extends('welcome')

@section('content')
<a href="{{route('projects.create')}}" class="btn btn-success"> Create </a>
<projects-index :projects="{{$projects}}"></projects-index>


<!-- Modal -->

@endsection
