<?php

namespace App\Models;

use App\Models\Nota;
use Illuminate\Database\Eloquent\Model;
use App\Events\LeadDeleted;
use App\Events\LeadSaved;
use App\Events\LeadCreated;
use App\Mail\correo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
/**
 * Class Lead
 *
 * @property $id
 * @property $nombre
 * @property $edad
 * @property $estadocivil
 * @property $telefono1
 * @property $telefono2
 * @property $correo
 * @property $pais
 * @property $notal
 * @property $created_at
 * @property $updated_at
 * @property $user_id
 * @property $tarjeta
 * @property $statuses_id
 * @property $cerrador_id
 * @property Statuses $statuses
 * @property User $user
 * @property Nota $Nota
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lead extends Model
{
             /**
     * los event mapiados para el modelo model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        
        'deleted' => LeadDeleted::class,
        'created' => LeadCreated::class,
        'updated' => LeadSaved::class,
    ];
    static $rules = [

		'nombre' => 'required',
		'edad' => 'required',
		'estadocivil' => 'required',
		'telefono1' => 'required',
		'telefono2' => 'required',
		'correo' => 'required|string|email|max:255',
		'pais' => 'required',
        'notal' => 'required',
        'tarjeta' => 'requiered',
	
		
		'statuses_id' => 'required',
		
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tarjeta','nombre','edad','estadocivil','telefono1','telefono2','correo','pais','user_id','statuses_id','cerrador_id','created_at2','notal'];



    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function statuses()
    {
        return $this->hasOne('App\Models\statuses', 'id', 'statuses_id');
    }
            /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cerrador()
    {
        return $this->hasOne('App\Models\Cerrador', 'id', 'cerrador_id');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

       public function Nota()
  {
      return $this->hasMany('App\Models\Nota', 'leads_id', 'id');
  }
      public function scopeUsers($query, $users){
        if($users)
            return $query->where('user_id','like',"%$users%");
    }
    public function scopeNombres($query, $nombres){
        if($nombres)
            return $query->where('nombre','like',"%$nombres%");
    }
        public function scopeFechas($query,$fecha1, $fecha2){
        if($fecha1&&$fecha2)
            return $query->whereBetween('created_at2', [$fecha1, $fecha2]);


    }
        public function scopeStatus2($query, $status2){
        if($status2)
            return $query->where('statuses_id',"$status2");
    }
    //Evento se ejecuta cuando un usuario es creado

 


}
