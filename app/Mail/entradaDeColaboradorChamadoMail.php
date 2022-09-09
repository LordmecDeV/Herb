<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class entradaDeColaboradorChamadoMail extends Mailable
{
    use Queueable, SerializesModels;
   public $chamadoEntrada;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($chamadoEntrada)
    {
        $this->chamadoEntrada = $chamadoEntrada;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.chamadoEntradaDeColaborador');
    }
}
