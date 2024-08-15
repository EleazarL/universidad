<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NoticiaController;


Route::get('/', function () {
    return view('index');
});

#RUTA DEL LOGIN Y LAS AUTENTICACION 
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


#LAS VISTAS DE LA PAGINA
use App\Http\Controllers\NavegacionController;

Route::get('/contacto', [NavegacionController::class, 'contacto'])->name('contacto');
Route::get('/maestrias', [NavegacionController::class, 'maestrias'])->name('maestrias');


#APARTADO DEL CRUD DONDE SE AUNTETIFICA LA SESION, Y DE PASO SE ENRUTA AL MODELO C:

Route::resource('noticias', NoticiaController::class);

