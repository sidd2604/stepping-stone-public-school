<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'image',
        'whatsapp',
        'gmail',
        'twitter',
        'linkedin',
        'brief_details',
        'long_note',
    ];
}
