<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App; //para el pdf
use Illuminate\Support\Facades\Route; //para la ruta
//clase correo
use App\Mail\CotizadorMail;
//para correo
use Illuminate\Support\Facades\Mail;

class CotizadorController extends Controller
{
    public function __invoke(){
        return view('vistas.cotizador'); 
    }

    //para pdf
    public function pdf(Request $request){

        //dd($request);
        $request->validate([
            'nombreCotizador'=>'required',
            'empresaCotizador'=>'required',
            'marcaCotizador'=>'required',
            'paisCotizador'=>'required',
            'normaCotizador'=>'required',
            'tramiteCotizador'=>'required',
            'tipoCotizador'=>'required',
            'emailCotizador'=>'required',
            'telefonoCotizador'=>'required',
            'comentariosCotizador'=>'required',
        ]);

        //variables q nos regresa el formulario
        $nombreCotizador=$request->nombreCotizador;
        $empresaCotizador=$request->empresaCotizador;
        $marcaCotizador=$request->marcaCotizador;
        $paisCotizador=$request->paisCotizador;
        $normaCotizador=$request->normaCotizador;
        $tramiteCotizador=$request->tramiteCotizador;
        $tipoCotizador=$request->tipoCotizador;
        $emailCotizador=$request->emailCotizador;
        $telefonoCotizador=$request->telefonoCotizador;
        $comentariosCotizador=$request->comentariosCotizador;

        $dompdf = App::make("dompdf.wrapper");
        $dompdf->loadView("vistas.pdf", [
            "nombre" => $nombreCotizador,
            "empresa" => $empresaCotizador,
            "marca" => $marcaCotizador,
            "pais" => $paisCotizador,
            "norma" => $normaCotizador,
            "tramite" => $tramiteCotizador,
            "tipo" => $tipoCotizador,
            "email" => $emailCotizador,
            "telefono" => $telefonoCotizador,
            "comentarios" => $comentariosCotizador,
        ]);
        $dompdf->save("Prueba.pdf");// la guarda en public 
        
        //return $dompdf->stream(); 

        /*
        $pdf = $dompdf->output(); // esto te deja en la variable $pdf el contenido del documento PDF
        $filename = "./ejemplo".'.pdf'; //ruta
        file_put_contents($filename, $pdf);// guarda el pdf en la ruta
        */
        //return "pdf creado";
        //return redirect('correoCotizacion');
        //return $request->all();


        $correoCotizacion=new CotizadorMail;

        $destinatarios = [ 'deleonadriana681@gmail.com' , $emailCotizador];
        Mail::to($destinatarios)->send($correoCotizacion);
        return redirect()->route('cotizador.pdf')->with('info', 'Mensaje enviado');
    }
}
