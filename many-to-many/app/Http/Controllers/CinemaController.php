<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function movie()
    {
        $cinemaModel = Cinema::all();
        return view('index', [
            'cinemaModel' => $cinemaModel
        ]);
    }
}
