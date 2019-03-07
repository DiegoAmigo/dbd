<?php

namespace App\Mail;

use App\Reserva;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mailCompra extends Mailable
{
    use Queueable, SerializesModels;


    public $idReserva;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( Reserva $idReserva)
    {
        $this->idReserva= $idReserva;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.reservaLista');
    }
}
