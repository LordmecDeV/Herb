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
   public $title;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($adiantamentoReembolso, $title)
    {
        $this->adiantamentoReembolso = $adiantamentoReembolso;
        $this->title = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject($this->title);
        return $this->markdown('mail.adiantamentoReembolso');
    }
}