<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory($id)
    {

        $category = Category::find($id);
        $booksInCategoryList = BookCategory::where('categoryId', $id)->get();
        $count = 0;
        $books = [];
        foreach ($booksInCategoryList as $bookInCategoryList) {
            $books[$count] = $bookInCategoryList->book->first();
            $count++;
        }

        return view('category')->with('books', $books)->with('category', $category);
    }
}
