<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function getBooks(){

        $books = Book::all();

        return view('home')->with('books',$books);
    }

    public function getBookDetail($id){

        $book = Book::find($id);

        return view('bookDetail')->with('book', $book);
    }
}
