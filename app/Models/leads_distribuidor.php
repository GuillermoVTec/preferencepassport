<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

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
 * @property $user_name
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Leads_distribuidor extends Model
{
    
    static $rules = [

        'nombre' => 'required',
        'edad' => 'required',
        'estadocivil' => 'required',
        'telefono1' => 'required',
        'telefono2' => 'required',
        'correo' => 'required',
        'tarjeta' => 'requiered',
        'pais' => 'required',
        'password'=>'requiered',
        'idioma' => 'required',
        

        
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idioma','password','tarjeta','id_lead','nombre','edad','estadocivil','telefono1','telefono2','correo','pais','user_name','id_vendedor_name','created_at2','notal'];




    public function scopeNombres($query, $nombres){
        if($nombres)
            return $query->where('nombre','like',"%$nombres%");
    }
        public function scopeFechas($query,$fecha1, $fecha2){
        if($fecha1&&$fecha2)
            return $query->whereBetween('created_at2', [$fecha1, $fecha2]);


    }


}