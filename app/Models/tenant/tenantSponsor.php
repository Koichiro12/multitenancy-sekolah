<?php

namespace App\Models\tenant;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenantSponsor extends Model
{
    use HasFactory;
    protected $table = 'sponsor';
    protected $id = 'id';
    protected $fillable = [
        'nama',
        'image',
    ];
}
