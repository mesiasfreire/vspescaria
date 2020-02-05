<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContatoMail extends Mailable
{
    use Queueable, SerializesModels;

    private $contato;

    /**
     * Create a new message instance.
     *
     * @param array $contato
     */
    public function __construct(array $contato)
    {
        $this->contato = $contato;
    }
    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        $this->subject('Contato site');
        $this->to('contato@vspescaesportiva.com','Visctor Pescaria');
        return $this->view('emails.contato',compact('contato'));
    }
}
