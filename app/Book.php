<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = [
        'book_id',
        'category_id',
        'book_image',
        'book_name',
        'book_author',
        'book_desc',
        'book_shelves_no',
        'book_count',
        'book_reserved',
        'book_taken',
    ];
}
