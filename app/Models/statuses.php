<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statuses extends Model
{
    use HasFactory;

 

  public function lead() {
        return $this->hasMany(Lead::class);
    }
}
