<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cerrador
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 *
 * @property Lead[] $leads
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cerrador extends Model
{
    
    static $rules = ['name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
        public function scopeNombres($query, $nombres){
        if($nombres)
            return $query->where('name','like',"%$nombres%");
    }

}
