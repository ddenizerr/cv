<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Deniz Denizer</title>
    <meta name="description" content="Hi there! Welcome to my small world!">
    <meta charset="utf-8">
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Deniz Denizer">
    <meta property="og:description" content="Visit denizdenizer.me to explore my world.">
    <meta property="og:image" content="{{ asset('/public/images/navbar-hero-transparent.png') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags (for Twitter sharing) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Deniz Denizer ">
    <meta name="twitter:description" content="Visit denizdenizer.me to explore my world.">
    <meta name="twitter:image" content="{{ asset('images/navbar-hero-transparent.png') }}">
    <link rel="icon" href="/images/favicon-transparent.png" type="image/png" sizes="192x192">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- ICONS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- FONTS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&family=Cinzel:wght@400;500;600;700;800;900&family=Homemade+Apple&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- BACKGROUNDS -->
    <link href="https://unpkg.com/pattern.css" rel="stylesheet">

    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script async src="//www.instagram.com/embed.js"></script>
</head>
<body class="main-body ">
<nav class="navbar navbar-expand-lg mb-5">
    <div class="container-fluid fixed-top navbar-custom navbar-shadow ">
        <a class="navbar-brand navbar-colors text-center " href="{{route('home.index')}}"><img class="navbar-brand-logo"
                                                                                               src="/images/navbar-hero-transparent.png"
                                                                                               alt="Deniz Denizer"></a>
        <div class="d-flex flex-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> <i class="bi bi-list bg-primary"></i></span>
            </button>
        </div>


        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="nav text-decoration-none">
                <li class="nav-item">
                    <a class="nav-link text-onyx  " aria-current="page" href="{{route('about.index')}}">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-onyx" href="{{route('career.index')}}">Career</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{route('contact.index')}}">Contact Me</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row" id="app">
        @yield('content')
    </div>
</div>


<div class="d-flex flex-end mt-5">
    <footer class="d-flex flex-wrap justify-content-between align-items-center border-top mt-1 bg-white">
        <div class="col-lg-4 d-flex align-items-center mx-3">
                    <span
                        class="font-cinzel footer-text-size">Deniz Denizer {{\Illuminate\Support\Carbon::now()->year}}</span>
        </div>
        <div class="col-lg-4">
            <ul class="nav justify-content-end list-unstyled d-flex mx-3">
                <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/_curlydeveloper/"><i
                            class="fa-brands fa-instagram social-color"></i></a>
                </li>
                <li class="ms-3"><a class="text-muted" href="https://www.linkedin.com/in/ddenizer"><i
                            class="fa-brands fa-linkedin-in social-color"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="https://github.com/ddenizerr"><i
                            class="fa-brands fa-github social-color"></i></a>
                </li>
            </ul>
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


</body>
</html>
