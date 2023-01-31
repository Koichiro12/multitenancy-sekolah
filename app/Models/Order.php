<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
         'kode_paket',
         'domains',
         'nama',
         'email',
         'phone',
         'alamat',
         'pesan',
         'status_order',
    ];
}
