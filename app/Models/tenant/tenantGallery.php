<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenantGallery extends Model
{
    use HasFactory;
    protected $table = 'galeri';
    protected $id = 'id';
    protected $fillable = [
        'nama',
        'deskripsi',
        'image',
    ];
}
