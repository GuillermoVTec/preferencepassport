<?php

namespace App\model\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NuevoUsario extends Mailable
{
   
    use Queueable, SerializesModels, HasFactory;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($usuario)
    {
        $this->usuario = $usuario;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('memonuevcero@gmail.com', 'Sistema Automatizado de Envio de Notificaciones')->subject('Registro de un nuevo usuario')->view('email.nuevo-usuario', ['usuario' => $this->usuario]);
    }
}