<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{

    use HasFactory;

    public function halla()
    {
        return $this->hasOne(Hall::class);
    }
}
