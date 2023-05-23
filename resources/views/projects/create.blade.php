@extends('welcome')
@section('content')
<h1> Create </h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('projects.update') }}">
@csrf
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="form-group col-md-12">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" placeholder="Description"> </textarea>
        </div>
        <div class="form-group col-md-12">
            <label for="project-type">Project Type</label>
            <input name="type" class="form-control" id="project-type" placeholder="Type of project">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
