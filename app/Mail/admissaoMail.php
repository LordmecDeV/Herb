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
   public $title;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($admissao, $title)
    {
        $this->admissao = $admissao;
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
        return $this->markdown('mail.admissao');
    }
}