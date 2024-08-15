@extends('layouts.barranavegacion')



@section('title', 'Noticias')

<header class="baner-section">
    <img src="assets/fondo-del-inicio.jpg" alt="Hero Image" class="baner-image">    
    <div class="baner-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-3 fw-bolder mb-5"><span class="text-principal d-inline">MAESTRIAS</span></h1>
            </div>
        </div>
    </div>
</header>
<body>
    <main class="flex-shrink-0">
        <!-- Projects Section-->
        <section class="py-5">
            <div class="container px-5 mb-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Project Card 1-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">ALTA DIRECCIÓN</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                                    </div>
                                    <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 2-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">MARKETING DIGITAL</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                                    </div>
                                    <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                                </div>
                            </div>
                        </div>

                        <!-- Project Card 3-->
                        <div class="card overflow-hidden shadow rounded-4 border-0">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">EDUCACION ESPECIAL</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                                    </div>
                                    <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>

            
        </section>
        <!-- Call to action section-->
        <section class="py-5 bg-gradient-primary-to-secondary text-white">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="display-4 fw-bolder mb-4">¡ESTUDIA 100% ONLINE!
                    </h2>
                    <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contactanos</a>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                <div class="col-auto">
                    <a class="small" href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
@section('content')
    
@endsection