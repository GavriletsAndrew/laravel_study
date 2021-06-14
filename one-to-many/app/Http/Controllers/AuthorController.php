<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authorModel = Author::all();
        return view('index', [
            'authorModel' => $authorModel
        ]);
    }
}
