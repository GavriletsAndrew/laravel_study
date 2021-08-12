<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function get_films()
    {
        return $this->belongsToMany(Hall::class, 'hall_films');
    }

}
