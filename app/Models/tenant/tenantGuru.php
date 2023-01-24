<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenantGuru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $id = 'id';
    protected $fillable = [
        'nama',
        'kategori',
        'image',
        'deskripsi',
    ];
}
