<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserSaved as UserSavedEvent;
use App\Models\User;
class UserSaved 
{

    /**
     * Create the event listener.
    * 
     * @return void
     */
    public function __construct(User $user)
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserSavedEvent  $event
     * @return mixed
     */
    public function handle(UserSavedEvent $event)
    {
         app('log')->info($event->user."Usuario guardado"."por: ".auth()->user()->name);
    }
}
