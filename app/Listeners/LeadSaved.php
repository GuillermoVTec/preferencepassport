<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Lead;
use App\Events\LeadSaved as EventLeadSaved;

class LeadSaved
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
     * @param  \App\Events\EventLeadSaved  $event
     * @return mixed

     */
    public function handle(EventLeadSaved $event)
    {
        app('log')->info($event->lead."Lead Actualizado  por : ".auth()->user()->name);
    }
}
