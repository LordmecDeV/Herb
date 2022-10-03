<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class beneficioMail extends Mailable
{
    use Queueable, SerializesModels;
   public $beneficio;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($beneficio)
    {
        $this->beneficio = $beneficio;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.beneficio');
    }
}