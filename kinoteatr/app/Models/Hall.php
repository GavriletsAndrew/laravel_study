<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    public function film()
    {
        return $this->belongsToMany(Film::class, 'hall_films');
    }

    public function cinematest()
    {
        return $this->hasMany(Hall::class);
    }

    public function hallmatest()
    {
        return $this->belongsToMany(Cinema::class);
    }
}
