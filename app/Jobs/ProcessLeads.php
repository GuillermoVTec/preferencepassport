<?php

namespace App\Jobs;

use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\correo;
use Illuminate\Support\Facades\Mail;
class ProcessLeads implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


/**
     * The podcast instance.
     *
     * @var \App\Models\Podcast
     */
    protected $lead;
  
    
 
    /**
     * Create a new job instance.
     *
     * @param  App\Models\Lead  $podcast
     * @return void
     */
     
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
        
        //var_dump($lead->tarjeta);die();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
   
        $lead = $this->lead;
        $mailData = [
            'titulo' => 'nuevo lead:',
            'Email' => $lead->correo,
            'nombre' => $lead->nombre,
            'tarjeta' => $lead->tarjeta,
            'password'=> $lead->password,
            'url' => 'https://preferencepassport.com/preferencepassport/login' 


        ];
            var_dump($lead->correo);die();
            Mail::to($lead->correo)->send(new correo($mailData));
            
        
      
       
    }
}
