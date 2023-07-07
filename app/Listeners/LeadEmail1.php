<?php

namespace App\Listeners;

use App\Events\LeadEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\correo;

class LeadEmail1
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\LeadEmail  $event
     * @return void
     */
    public function handle(LeadEmail $event)
    {
             $mailData = [
            'titulo' => 'nuevo lead:',
            'Email' => $event->email,
            'nombre' => $event->name,
            'url' => 'http://crm.vacationcards.com/'
        ];
       
        
        
       // Mail::to($event->email)->send(new correo($mailData));
    }
}
