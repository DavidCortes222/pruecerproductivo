<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Correo extends Mailable
{
    use Queueable, SerializesModels;

    public $subject="Contactanos PRUCER";

    public $datos;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datosContacto)
    {
        $this->datos=$datosContacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('correos.correo'); //agarra la vista 
    }
}