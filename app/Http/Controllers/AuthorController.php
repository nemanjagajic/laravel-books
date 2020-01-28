<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function showAll() {
        $authors = Author::all();
        return view('authors', compact('authors'));
    }

    public function showOne($id) {
        $author = \App\Author::find($id);
        return view('author-single', compact('author'));
    }
}
