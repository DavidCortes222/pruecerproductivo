<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CotizadorMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject="Cotizacion PRUCER";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('correos.cotizacion') //agarra la vista
                    ->attach('Prueba.pdf'); //agarra el archivo de la carpeta public
    }
}
