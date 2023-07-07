<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\LeadCreated as EventLeadCreated;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;
use App\Mail\correo;
use Carbon\Carbon;

class LeadCreated
{
   
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Lead $lead)
    {

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(EventLeadCreated $event)
    {
        app('log')->info($event->lead."Lead Creado  por : ".auth()->user()->name);
                        

            

    }
}
