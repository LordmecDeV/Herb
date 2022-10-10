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
   public $title;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reembolso, $title)
    {
        $this->reembolso = $reembolso;
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
        return $this->markdown('mail.reembolso');
    }
}