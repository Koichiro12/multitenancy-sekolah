<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenantArtikel extends Model
{
    use HasFactory;


    protected $table = 'artikel';
    protected $id = 'id';
    protected $fillable = [
        'judul',
        'kategori',
        'deskripsi',
        'keyword',
        'image',
    ];
}
