<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'title',
        'description',
        'ticket',
        'offer',
        'date',
        'location',
        'time',
        'poster',
        'updates',
        'video',
        'about_event',
        'note',
        'about_event_more',
    ];

    public $timestamps = false;
}
