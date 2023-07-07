<?php

namespace App\Models;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Model;
use App\Events\NotasSaved;
use App\Events\NotasDeleted;

/**
 * Class Nota modificado desde git locall por segunda ves desd eotra branch
 *
 * @property $id
 * @property $nota
 *  @property $user
 * @property $created_at
 * @property $updated_at
 * @property $leads_id
 *
 * @property Lead $Lead
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nota extends Model
{
         /**
     * los event mapiados para el modelo model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'saved' => NotasSaved::class,
        'deleted' => NotasDeleted::class,
    ];

    static $rules = [
		'nota' => 'required',
		'leads_id' => 'required',
        'user' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nota','leads_id','user'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lead()
      {
          return $this->belongsTo('App\Models\Lead', 'id', 'leads_id');
      }

}
