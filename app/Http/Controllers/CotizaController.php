<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CotizaController extends Controller
{
    public function __invoke(){
        return view('vistas.cotiza'); 
    }
}
