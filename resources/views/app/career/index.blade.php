@extends('welcome')

@section('content')
    <div class="row mb-4 index-title">


        <div class="row">
            <div class="col-6" id="app">
                <google-map></google-map>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center gap-4 mt-3">
            <a href="https://www.linkedin.com/in/ddenizer" target="_blank" class="text-decoration-none"
               style="color: #7c3aed; font-size: 2rem;">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://github.com/ddenizerr" target="_blank" class="text-decoration-none"
               style="color: #7c3aed; font-size: 2rem;">
                <i class="fab fa-github"></i>
            </a>
        </div>

        <div class="mt-5 d-grid">
            <a href="{{ route('download-cv') }}" class="btn text-white" style="background-color: #7c3aed;">Download My
                CV</a>
        </div>
    </div>



@endsection

