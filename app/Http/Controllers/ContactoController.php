<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Contacto;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{

    public function __invoke(){
        return view('vistas.contacto'); 
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required', 
            'correo' => 'required|email', 
            'telefono' => 'required', 
            'servicio' => 'required', 
            'asunto' => 'required', 
            'mensaje' => 'required' 
        ]); 

        $correo =new Contacto($request->all());
        $destinatarios = [ 'deleonadriana681@gmail.com' , 'cortesdavid.programacion168@gmail.com'];
        Mail::to($destinatarios)->send($correo);
        //return redirect('contacto');
        //return view('vistas.contacto');
        return redirect()->route('contacto.store')->with('info', 'Mensaje enviado');
    }
}
