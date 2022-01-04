<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FluxometroController extends Controller
{
    public function __invoke(){
        return view('vistas.fluxometro'); 
    }
}
