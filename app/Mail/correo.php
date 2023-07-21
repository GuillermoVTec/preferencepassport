<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;

class correo extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
        var_dump($lead->tarjeta);die();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         
            return $this->view('Email.leads')->subject($this->$mailData->tarjeta);
        
        
        
    }
}