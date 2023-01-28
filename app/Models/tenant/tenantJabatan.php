<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenantJabatan extends Model
{
    use HasFactory;

    protected $table = 'tenant_jabatans';
    protected $id = 'id';
    protected $fillable = [
        'nama',
    ];
}
