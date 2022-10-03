<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class movimentacaoColaboradorMail extends Mailable
{
    use Queueable, SerializesModels;
   public $movimentacao;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($movimentacao)
    {
        $this->movimentacao = $movimentacao;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.movimentacaoColaborador');
    }
}