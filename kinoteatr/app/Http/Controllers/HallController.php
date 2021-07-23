<?php

namespace App\Http\Controllers;

use App\Models\Cinema;

class HallController extends Controller
{
    public function hall()
    {
        $hallModel = Cinema::all();
        return view('index', [
            'hallModel' => $hallModel,
        ]);
    }
}

