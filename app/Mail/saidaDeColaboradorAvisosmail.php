<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class saidaDeColaboradorAvisosmail extends Mailable
{
    use Queueable, SerializesModels;
   public $saidaDecolaborador;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($saidaDecolaborador)
    {
        $this->saidaDecolaborador = $saidaDecolaborador;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.procedimentoDeSaidaColaborador');
    }
}