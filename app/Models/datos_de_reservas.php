<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Distribuidore
 *
 * @property $id
 * @property $destino
 * @property $hotel
 * @property $noches
 * @property $fecha_entrada
 * @property $fecha_salida
 * @property $habitaciones
 * @property $tipo_habitaciones
 * @property $adultos
 * @property $menores
 * @property $plan
 * 
 * @property $created_at
 * @property $updated_at

 *

 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class datos_de_reservas extends Model
{
    use HasFactory;
      static $rules = [
        'destino' => 'required',
        'hotel' => 'required',
        'noches' => 'required',
        'fecha_entrada' => 'required',
        'fecha_salida' => 'required',
        'habitaciones' => 'required',
        'tipo_habitacion' => 'required',
        'adultos' => 'required',
        'menores' => 'required',
        'plan' => 'required',
        
    ];
        protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['destino','hotel','noches','fecha_entrada','fecha_salida','habitaciones','tipo_habitaciones','adultos','menores','plan','worksheet_id'];
}


