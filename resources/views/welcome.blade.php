<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Deniz Denizer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- ICONS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Fonts -->
    {{--    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">--}}
    {{--    <link--}}
    {{--        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"--}}
    {{--        rel="stylesheet">--}}
    {{--    <link--}}
    {{--        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"--}}
    {{--        rel="stylesheet">--}}
    {{--    <link--}}
    {{--        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"--}}
    {{--        rel="stylesheet">--}}
    {{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
    {{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
    <link
        href="https://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&family=Cinzel:wght@400;500;600;700;800;900&family=Homemade+Apple&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="main-body">

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid navbar-custom navbar-shadow">
        <a class="navbar-brand navbar-colors text-center" href="{{route('home.index')}}"><img class="navbar-brand-logo"
                                                                                              src="/images/deniz-logo-narrow.png"
                                                                                              alt="Deniz Denizer"></a>
        <div class="d-flex flex-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> <i class="bi bi-list bg-primary"></i></span>
            </button>
        </div>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projects">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Blog</a>
                </li>
            </ul>
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Contact Me</a>
                </li>
            </ul>
            {{--            <form class="d-flex" role="search">--}}
            {{--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
            {{--                <button class="btn btn-outline-success" type="submit">Search</button>--}}
            {{--            </form>--}}
        </div>
    </div>
</nav>

<div class="container">
    <div id="app">
        @yield('content')
    </div>
</div>

{{--<footer class="d-flex flex-wrap justify-content-between align-items-center">--}}
{{--    <p class="col-md-4 mb-0 footer-trademark">© {{\Carbon\Carbon::now()->year}} Deniz Denizer</p>--}}

{{--    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">--}}
{{--        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>--}}
{{--    </a>--}}

{{--    <ul class="nav col-md-4 justify-content-end">--}}
{{--        <li class="nav-item"><a href="#" class="nav-link px-2 footer-text">Home</a></li>--}}
{{--        <li class="nav-item"><a href="#" class="nav-link px-2 footer-text">Features</a></li>--}}
{{--        <li class="nav-item"><a href="#" class="nav-link px-2 footer-text">Pricing</a></li>--}}
{{--        <li class="nav-item"><a href="#" class="nav-link px-2 footer-text">FAQs</a></li>--}}
{{--        <li class="nav-item"><a href="#" class="nav-link px-2 footer-text">About</a></li>--}}
{{--    </ul>--}}
{{--</footer>--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>
</html>
