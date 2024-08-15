@extends('layouts.barranavegacion')

<header class="baner-section">
    <img src="assets/fondo-del-inicio.jpg" alt="Hero Image" class="baner-image">    
    <div class="baner-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-3 fw-bolder mb-5"><span class="text-principal d-inline">NOTICIAS</span></h1>
            </div>
        </div>
    </div>
</header>

@section('title', 'Noticias')

@section('content')
<div class="container px-5 my-5">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <a class="btn btn-primary px-4 py-3" href="{{ route('noticias.create') }}">Crear Nueva Noticia</a>
    </div>

    <!-- Loop para mostrar las noticias -->
    @foreach ($noticias as $noticia)
        <div class="card shadow border-0 rounded-4 mb-5">
            <div class="card-body p-5">
                <div class="row align-items-center gx-5">
                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                        <div class="bg-light p-4 rounded-4">
                            <div class="text-primary fw-bolder mb-2">{{ $noticia->fecha }}</div>
                            <div class="small fw-bolder">CIP</div>
                            <div class="small text-muted">{{ $noticia->lugar }}</div>
                        </div>
                    </div>
                    <div class="col-lg-8">{{ $noticia->descripcion }}</div>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <a class="btn btn-sm btn-primary" href="{{ route('noticias.show', $noticia->id) }}">Ver</a>
                    <a class="btn btn-sm btn-success" href="{{ route('noticias.edit', $noticia->id) }}">Editar</a>
                    <form action="{{ route('noticias.destroy', $noticia->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar la noticia?')">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Paginación -->
    <div class="d-flex justify-content-center">
        {!! $noticias->links() !!}
    </div>
</div>
@endsection
