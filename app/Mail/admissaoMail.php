<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class admissaoMail extends Mailable
{
    use Queueable, SerializesModels;
   public $admissao;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($admissao)
    {
        $this->admissao = $admissao;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.admissao');
    }
}