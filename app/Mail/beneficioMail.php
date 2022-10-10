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
   public $title;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($beneficio, $title)
    {
        $this->beneficio = $beneficio;
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
        return $this->markdown('mail.beneficio');
    }
}