<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class adiantamentoReembolsoMail extends Mailable
{
    use Queueable, SerializesModels;
   public $adiantamentoReembolso;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($adiantamentoReembolso)
    {
        $this->adiantamentoReembolso = $adiantamentoReembolso;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.adiantamentoReembolso');
    }
}