<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Nota;
use App\Events\NotasSaved as NotasSavedEvent;

class NotasSaved
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Nota $nota)
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  App\Models\NotaSavedevent  $event
     * @return mixed
     */
    public function handle(NotasSavedEvent $event)
    {
        app('log')->info($event->nota."Nota guardad guardada por : ".auth()->user()->name);
    }
}


//agregar evcentos y listener 
//agregar los dispatch en modelo 
//modificar cada evento y listener 
//agregar eventos y ecuchas en eventservice