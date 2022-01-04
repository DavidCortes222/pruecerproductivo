<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegaderasController extends Controller
{
    public function __invoke(){
        return view('vistas.regaderas'); 
    }
}
