<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenantAlumni extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'alumni';
    protected $id = 'id';
    protected $fillable = [
        'judul',
        'prestasi',
        'deskripsi',
        'image',
    ];
}
