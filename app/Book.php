<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = ['title',
        'author',
        'price',
        'pages',
        'publisher',
        'year',
        'hardcover',
        ];
}
