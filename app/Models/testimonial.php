<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'testi_image',
        'testi_name',
        'testi_profesion',
        'testi_desc',
    ];
}
