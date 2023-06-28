@extends('welcome')
@section('content')
<h1 class="text-moss"> Create </h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<a href="{{route('projects.index')}}" class="btn btn-secondary">Back</a>

<form method="post" action="{{ route('projects.store') }} " enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="form-row">
        <div class="form-group col-md-12 text-moss">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="form-group col-md-12 text-moss">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" placeholder="Description"> </textarea>
        </div>
        <div class="form-group col-md-12 text-moss">
            <label for="project-type">Project Type</label>
            <input name="type" class="form-control" id="project-type" placeholder="Type of project">
        </div>
        <div class="form-group col-md-12 mb-2">
            <label class="form-label text-moss" for="image_path">Showcase Image</label>
            <input type="file" class="form-control" id="image" name="image"/>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
