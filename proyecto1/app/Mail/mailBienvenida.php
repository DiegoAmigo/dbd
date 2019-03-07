<?php

namespace App\Mail;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mailBienvenida extends Mailable
{
    use Queueable, SerializesModels;


    public $cliente;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $cliente)
    {
        $this->cliente = $cliente;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.bienvenida');
    }
}
