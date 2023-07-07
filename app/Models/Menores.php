<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Distribuidore
 *
 * @property $id
 * @property $datos_de_reservas_id
 * @property $edad
 * @property $created_at
 * @property $updated_at

 *

 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Menores extends Model
{
    use HasFactory;
     static $rules = [
        'datos_de_reservas_id' => 'required',
        'edad' => 'required',

        
    ];
     protected $perPage = 20;
     /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['datos_de_reservas_id','edad'];
}
