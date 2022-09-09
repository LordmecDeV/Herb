<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class updateChamadoMail extends Mailable
{
    use Queueable, SerializesModels;
   public $atualizar;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($atualizar)
    {
        $this->atualizar = $atualizar;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.atualizar');
    }
}