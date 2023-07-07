<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Distribuidore
 *
 * @property $id
 * @property $razonsocial
 * @property $representantelegal
 * @property $rfc
 * @property $direccion
 * @property $ciudad
 * @property $pais
 * @property $cp
 * @property $telefono
 * @property $date
 * @property $matriculaid
 * @property $created_at
 * @property $updated_at

 *

 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Distribuidore extends Model
{
    
    static $rules = [
		'razonsocial' => 'required',
		'representantelegal' => 'required',
		'rfc' => 'required',
		'direccion' => 'required',
		'ciudad' => 'required',
		'pais' => 'required',
		'cp' => 'required',
		'telefono' => 'required',
		'date' => 'required',
		'matriculaid' => 'required',
		
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['razonsocial','representantelegal','rfc','direccion','ciudad','pais','cp','telefono','date','matriculaid','user_id'];




  /**
  * Get the user that owns the phone.
  */
     public function User()
 {
    return $this->belongsTo('App\Models\User');
 } 
     public function scopeNombres($query, $nombres){
        if($nombres)
            return $query->where('matriculaid','like',"%$nombres%");
    }
        public function scopeFechas($query,$fecha1, $fecha2){
        if($fecha1&&$fecha2)
            return $query->whereBetween('date', [$fecha1, $fecha2]);


    }
}
