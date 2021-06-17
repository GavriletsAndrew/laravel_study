<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movie()
    {
        $movieModel = Movie::all();
        return view('indexmovie', [
            'movieModel' => $movieModel
        ]);
    }
}
