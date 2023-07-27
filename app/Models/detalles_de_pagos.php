<?php

namespace App\Models;
use Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
/**
 * Class Distribuidore
 *
 * @property $id
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
 * @property $forma_de_pago
 * @property $status_de_pago
 * @property $pago_asignado
 * @property $num_aprovacion
 * @property $nota
 * @property $comprovante
 * @property $worksheet_id
 * @property $created_at
 * @property $updated_at

 *

 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class detalles_de_pagos extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

        static $rules = [
        'costo_total' => 'required',
        'pakeo_agente' => 'required',
        'activacion' => 'required',
        'reporte_fee' => 'required',
        'pago_inicial' => 'required',
        'pendiente_de_pago' => 'required',
        'fecha_limite' => 'required',
        'fecha_de_pago' => 'required',
        'cantidad' => 'required',
        'concepto' => 'required',
        'forma_de_pago' => 'required',
        'status_de_pago' => 'required',
        'pago_asignado' => 'required',
        'num_aprovacion' => 'required',
        'nota' => 'required',
        'comprovante' => 'required',
        'worksheet_id' => 'required',
        
    ];
     protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['costo_total','pakeo_agente','activacion','reporte_fee','pago_inicial','pendiente_de_pago','fecha_limite','fecha_de_pago','cantidad','concepto','status_de_pago','pago_asignado','num_aprovacion','nota','comprovante','worksheet_id'];

    public function getProfilePictureUrlAttribute(): string
{
    return Storage::disk('comprovantes')->url($this->comprovante);
}
}
