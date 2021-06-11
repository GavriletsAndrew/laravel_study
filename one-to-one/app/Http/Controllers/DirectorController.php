<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index()
    {
        $DirectorModel = Director::all();
        return view('index', [
            'DirectorModel' => $DirectorModel
        ]);
    }
}
