<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Category;
use App\Models\Collections;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    public function index()
    {
        $books       = Books::get();
        $categories  = Category::get();
        $collections = Collections::get();

        return view('reader.index', [
            'books' => $books,
            'categories' => $categories,
            'collections' => $collections
        ]);
    }
}