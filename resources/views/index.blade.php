@extends('layouts.barranavegacion')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<header class="hero-section">
    <img src="assets/fondo-del-inicio.jpg" alt="Hero Image" class="hero-image">    
    <div class="hero-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="text-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div class="text-uppercase">CONOCE &middot; NUESTRAS &middot; MAESTRIAS</div>
                    </div>
                    <div class="fs-3 fw-light text-inicio">ESCRIBIENDO HISTORIAS DE EXITOS</div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="text-principal d-inline">MAESTRIAS</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ route('noticias.index') }}">NOTICIAS</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('maestrias') }}">MAESTRIAS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">ACERCA DE NOSOTROS</span></h2>
                    <p class="lead fw-light mb-4">UNIVERSIDAD CIP</p>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('title', 'Noticias')


@section('content')
    
@endsection

@section('footer')
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-icon text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="mb-3 mb-md-0 text-icon">© 2024 RIAE, Inc</span>
        </div>

        <ul class="ICON col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-icon" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="text-icon" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="text-icon" href="#"><img src="assets/logo.png" width="24" height="24" alt="Logo"></a></li>
        </ul>
    </footer>
@endsection

@section('scripts')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
@endsection

