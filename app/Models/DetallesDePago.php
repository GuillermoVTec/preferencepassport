<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallesDePago
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $costo_total
 * @property $pakeo_agente
 * @property $activacion
 * @property $reporte_fee
 * @property $pago_inicial
 * @property $pendiente_de_pago
 * @property $fecha_limite
 * @property $fecha_de_pago
 * @property $cantidad
 * @property $concepto
 * @property $status_de_pago
 * @property $pago_asignado
 * @property $num_aprovacion
 * @property $nota
 * @property $comprovante
 * @property $forma_de_pago
 * @property $worksheet_id
 *
 * @property FormaDePago[] $formaDePagos
 * @property Worksheet $worksheet
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetallesDePago extends Model
{
    
    static $rules = [
		'worksheet_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['costo_total','pakeo_agente','activacion','reporte_fee','pago_inicial','pendiente_de_pago','fecha_limite','fecha_de_pago','cantidad','concepto','status_de_pago','pago_asignado','num_aprovacion','nota','comprovante','forma_de_pago','worksheet_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function formaDePagos()
    {
        return $this->hasMany('App\Models\FormaDePago', 'detalles_de_pagos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function worksheet()
    {
        return $this->hasOne('App\Models\Worksheet', 'id', 'worksheet_id');
    }
    

}
