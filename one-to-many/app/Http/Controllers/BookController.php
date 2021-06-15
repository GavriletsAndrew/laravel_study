<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function author()
    {
        $bookModel = Book::all();
        return view('book', [
            'bookModel' => $bookModel,
        ]);
    }
}
