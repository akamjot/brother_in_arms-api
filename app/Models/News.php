<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'image',
        'title',
        'description',
        'date'
    ];

    public $timestamps = false;
}
