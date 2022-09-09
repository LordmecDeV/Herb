<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SuporteMail extends Mailable
{
    use Queueable, SerializesModels;
   public $suporte;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($suporte)
    {
        $this->suporte = $suporte;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.suporte');
    }
}