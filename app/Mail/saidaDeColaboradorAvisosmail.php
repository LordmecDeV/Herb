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
   public $title2;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($saidaDecolaborador, $title2)
    {
        $this->saidaDecolaborador = $saidaDecolaborador;
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
        return $this->markdown('mail.procedimentoDeSaidaColaborador');
    }
}