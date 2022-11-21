<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Publisher;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'year',
        'synopsis',
        'image',
    ];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisherId', 'id');
    }
}
