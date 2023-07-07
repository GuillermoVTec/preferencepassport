<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
 use App\Models\Lead;
 use App\Observers\LeadObserver;



 use App\Observers\UserObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
      
            \App\Events\UserSaved::class => [\App\Listeners\UserSaved::class,],
            \App\Events\NotasSaved::class => [\App\Listeners\NotasSaved::class,],
            \App\Events\LeadDeleted::class => [\App\Listeners\LeadDeleted::class,],
            \App\Events\LeadCreated::class => [\App\Listeners\LeadCreated::class,],
            \App\Events\LeadSaved::class => [\App\Listeners\LeadSaved::class,],
            \App\Events\LeadEmail::class => [\App\Listeners\LeadEmail1::class,],
            
        
        
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
          //Lead::observe(LeadObserver::class);
        
    }
}
