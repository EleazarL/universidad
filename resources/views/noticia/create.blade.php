@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Noticia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Noticia</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('noticias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('noticia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
