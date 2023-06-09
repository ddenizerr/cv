<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/js/app.js', 'resources.css.app.css'])
        <!-- Fonts -->
    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Deniz Denizer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Blog</a>
                    </li>
                </ul>
                {{--            <form class="d-flex" role="search">--}}
                {{--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
                {{--                <button class="btn btn-outline-success" type="submit">Search</button>--}}
                {{--            </form>--}}
            </div>
        </div>
    </nav>
    <div id="app"></div>
    </body>
</html>
