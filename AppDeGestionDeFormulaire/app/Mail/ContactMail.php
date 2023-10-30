<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contenu;
    /**
     * Create a new message instance.
     */
    public function __construct($contenu1)
    {
        $this->contenu = $contenu1;
    }

    
    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Un employé a rempli un formulaire.')
                    ->view('Courriel.courrielTest');
    }
}
