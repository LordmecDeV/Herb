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
   public $title;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($atualizar, $title)
    {
        $this->atualizar = $atualizar;
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
        return $this->markdown('mail.atualizar');
    }
}