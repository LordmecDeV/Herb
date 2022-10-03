<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class reembolsoMail extends Mailable
{
    use Queueable, SerializesModels;
   public $reembolso;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reembolso)
    {
        $this->reembolso = $reembolso;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.reembolso');
    }
}