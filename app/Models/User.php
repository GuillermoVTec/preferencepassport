<?php

namespace App\Models;

use Storage;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Events\UserSaved;
use App\Events\UserDeleted;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles, InteractsWithMedia;
     /**
     * los event mapiados para el modelo model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'saved' => UserSaved::class,
        'deleted' => UserDeleted::class,
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
    * Get the phone associated with the user.
    */
         public function Distribuidore()
    {
        return $this->hasOne(Distribuidore::class);
     }



    public function registerMediaConversions(Media $media = null): void

    {
        $this->addMediaConversion('thumb')
            ->width(50)
            ->height(50);
    }
    public function getProfilePictureUrlAttribute(): string
{
    return Storage::disk('avatars2')->url($this->profile_picture);
}
    public function scopeNombres($query, $nombres){
        if($nombres)
            return $query->where('name','like',"%$nombres%");
    }
}
