<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegacionController extends Controller
{
    public function contacto()
    {
        return view('contacto');
    }

    public function maestrias()
    {
        return view('maestrias');
    }


    
}
