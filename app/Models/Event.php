<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'occasion',
        'description',
        'summary',
        'event_date',
        'main_image',
        'gallery_images',
        'classes_involved',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'event_date' => 'date',
    ];
}
