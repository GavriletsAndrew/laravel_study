<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $BookModel = Book::all();
        return view('indexbook',[
            'BookModel' => $BookModel
            ]);
    }
}
