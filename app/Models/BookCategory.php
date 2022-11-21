<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Category;

class BookCategory extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function book()
    {
        return $this->hasMany(Book::class, 'id', 'bookId');
    }

    public function category()
    {
        return $this->hasMany(Category::class, 'id', 'categoryId');
    }
}
