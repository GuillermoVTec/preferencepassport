<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Worksheet
 *
 * @property $id
 * @property $banco
 * @property $titular
 * @property $afiliacion
 * @property $digitos
 * @property $vigencia
 * @property $CVV
 * @property $nota
 * @property $imagen
 * @property $detalles_de_pagos_id
 * @package App
 * @property $created_at
 * @property $updated_at
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class forma_de_pago extends Model
{
    use HasFactory;



         static $rules = [
        'banco' => 'required',
        'titular' => 'required',
        'afiliacion' => 'required',
        'digitos' => 'required',
        'vigencia' => 'required',
        'CVV' => 'required',
        'nota' => 'required',
        'imagen' => 'required',
        'detalles_de_pagos_id' => 'required',

        
    ];
     protected $table = 'forma_de_pago';
     protected $perPage = 20;
     /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['banco','titular','afiliacion','digitos','vigencia','CVV','nota','imagen','detalles_de_pagos_id'];
}
