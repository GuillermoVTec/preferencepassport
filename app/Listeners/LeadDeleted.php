<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\LeadDeleted as eventLeadDeleted;
use App\Models\Lead;

class LeadDeleted
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Lead $lead)
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(eventLeadDeleted $event)
    {
        app('log')->info($event->lead."Lead Elimidado  por : ".auth()->user()->name);
    }
}
