<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; //para la ruta

use App\Mail\Correo;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function __invoke(){
        return view('vistas.index'); 
    }

    public function contactanos(Request $request){

        //dd("Hello from Terminal");
        //dd($request);
        $request->validate([
            'nombreC'=>'required',
            'emailC'=>'required',
            'mensajeC'=>'required',
        ]);

        $nombre = $request->nombreC;
        $email = $request->emailC; 
        $mensaje = $request->mensajeC;

        $correo =new Correo($request->all());

        $destinatarios = [ 'deleonadriana681@gmail.com' , 'cortesdavid.programacion168@gmail.com'];
        Mail::to($destinatarios)->send($correo);
        
        //return redirect()->route('cotizador.pdf');
        //return redirect()->to('index');
        return redirect()->route('index.contactanos')->with('info', 'Mensaje enviado');
    }


}
