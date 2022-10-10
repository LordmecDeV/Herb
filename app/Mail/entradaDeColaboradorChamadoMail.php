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
   public $title2;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($chamadoEntrada, $title2)
    {
        $this->chamadoEntrada = $chamadoEntrada;
        $this->title2 = $title2;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject($this->title2);
        return $this->markdown('mail.chamadoEntradaDeColaborador');
    }
}
