<?php

namespace App\Models\tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantSettings extends Model
{
    use HasFactory;
    protected $fillable = [
        'settings_name',
        'value',
        'default',
        'status_settings',
    ];
}
