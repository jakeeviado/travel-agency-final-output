<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblPackages extends Model
{
    /** @use HasFactory<\Database\Factories\TblPackagesFactory> */
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'package_name',
        'description',
        'duration',
        'is_active',
        'departure_date',
        'return_date',
        'is_featured',
        'is_popular',
        'is_discounted',
    ];
}
