<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    // many to many
    public function planets()
    {
        return $this->belongsToMany(Planet::class);
    }
}
