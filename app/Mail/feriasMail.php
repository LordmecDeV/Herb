<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class feriasMail extends Mailable
{
    use Queueable, SerializesModels;
   public $feriasMail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($feriasMail)
    {
        $this->feriasMail = $feriasMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.ferias');
    }
}