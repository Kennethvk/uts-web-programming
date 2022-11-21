<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function getPublishers()
    {
        $publishers = Publisher::all();

        return view('publisher')->with('publishers', $publishers);
    }

    public function getPublisherDetail($id)
    {
        $publisherBooks = Book::where('publisherId', $id)->get();
        $publisher = Publisher::find($id);

        return view('publisherDetail')->with('books', $publisherBooks)->with('publisher', $publisher);
    }
}
