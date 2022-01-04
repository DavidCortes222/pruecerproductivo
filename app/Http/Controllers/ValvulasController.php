<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValvulasController extends Controller
{
    public function __invoke(){
        return view('vistas.valvulas'); 
    }
}
