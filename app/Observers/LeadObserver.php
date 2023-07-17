<?php

namespace App\Observers;

use App\Models\Lead;
use App\Mail\correo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class LeadObserver
{
      /**
     * Handle events after all transactions are committed.
     *
     * @var bool
     */
    public $afterCommit = true;
    /**
     * Handle the Lead "created" event.
     *
     * @param  \App\Models\Lead  $lead
     * @return void
     */
    public function creating(Lead $lead)
    {
                        
                                 $mailData = [
            'titulo' => 'nuevo lead:',
            'Email' => $lead->correo,
            'nombre' => $lead->nombre,
            
            'url' => 'http://crm.vacationcards.com/'
        ];
       
        
            Mail::to($lead->correo)->send( new correo($mailData));
         
           

           
        
    }

    /**
     * Handle the Lead "updated" event.
     *
     * @param  \App\Models\Lead  $lead
     * @return void
     */
    public function updated(Lead $lead)
    {
        //
    }

    /**
     * Handle the Lead "deleted" event.
     *
     * @param  \App\Models\Lead  $lead
     * @return void
     */
    public function deleted(Lead $lead)
    {
        //
    }

    /**
     * Handle the Lead "restored" event.
     *
     * @param  \App\Models\Lead  $lead
     * @return void
     */
    public function restored(Lead $lead)
    {

    }

    /**
     * Handle the Lead "force deleted" event.
     *
     * @param  \App\Models\Lead  $lead
     * @return void
     */
    public function forceDeleted(Lead $lead)
    {
        //
    }
}
