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

       return  $this->to('contato@vspescaesportiva.com','Victor Souza')
                        ->cc($this->contato['email'],$this->contato['nome'])
                        ->subject('Contato Site Victor Souza Pescaria Esportiva')
                        ->view('emails.contato',['contato'=>$this->contato]);
    }
}
