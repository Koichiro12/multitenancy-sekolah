<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenantBerita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $id = 'id';
    protected $fillable = [
        'judul',
        'kategori',
        'deskripsi',
        'keyword',
        'image',
    ];
}
