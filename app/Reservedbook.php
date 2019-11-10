<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservedbook extends Model
{
    protected $fillable = [
        'book_id', 'user_id', 'status', 'return_date', 'returned_date',
    ];
}
