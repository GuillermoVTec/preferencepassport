<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Worksheet
 *
 * @property $id
 * @property $calificacion
 * @property $booking
 * @property $ocupaciont
 * @property $nombrec
 * @property $edadc
 * @property $ocupácionc
 * @property $estadocivilc
 * @property $ingresos
 * @property $tarjetas
 * @property $ciudad
 * @property $cp
 * @property $plataforma
 * @property $localizador
 * @property $moneda
 * @property $leads_id
 * @property $created_at
 * @property $updated_at
 *
 * @property DatosDeReserva[] $datosDeReservas
 * @property DetallesDePago[] $detallesDePagos
 * @property Lead $lead
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Worksheet extends Model

{
    protected $table = 'worksheet';
    static $rules = [
		'calificacion' => 'required',
		'booking' => 'required',
		'ocupaciont' => 'required',
		'nombrec' => 'required',
		'edadc' => 'required',
		'ocupácionc' => 'required',
		'estadocivilc' => 'required',
		'ingresos' => 'required',
		'tarjetas' => 'required',
		'ciudad' => 'required',
		'cp' => 'required',
		'plataforma' => 'required',
		'localizador' => 'required',
		'moneda' => 'required',
		'leads_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['calificacion','booking','ocupaciont','nombrec','edadc','ocupácionc','estadocivilc','ingresos','tarjetas','ciudad','cp','plataforma','localizador','moneda','leads_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datosDeReservas()
    {
        return $this->hasMany('App\Models\DatosDeReserva', 'worksheet_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallesDePagos()
    {
        return $this->hasMany('App\Models\DetallesDePago', 'worksheet_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lead()
    {
        return $this->hasOne('App\Models\Lead', 'id', 'leads_id');
    }
    

}
