<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenantFasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';
    protected $id = 'id';
    protected $fillable = [
        'nama',
        'deskripsi',
        'image',
    ];
}
