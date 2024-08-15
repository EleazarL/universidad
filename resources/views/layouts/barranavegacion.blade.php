<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('barradenavegacion')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href= "https://scontent.fvsa3-1.fna.fbcdn.net/v/t39.30808-6/424730121_792492029591716_3653845996680493784_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=FIZclJYZ-JwQ7kNvgEU97Fz&_nc_ht=scontent.fvsa3-1.fna&oh=00_AYC7JY8WGnQR3trTE7VlGLmejKxd8IbdDqB4poUpL-5xiA&oe=66B83F0B"/>
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
<body>
    <header>
        <!-- Aquí podrías incluir una barra de navegación -->
        <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/LOGO DORADO.png') }}" alt="Mi Sitio" style="max-height: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">INICIO</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('noticias.index') }}">NOTICIAS</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('maestrias') }}">MAESTRIAS</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}">CONTACTO</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://cipvirtual.mx" target="_blank">UNIVERSIDAD CIP</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>