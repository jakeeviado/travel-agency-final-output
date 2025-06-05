<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_services extends Model
{
    /** @use HasFactory<\Database\Factories\TblServicesFactory> */
    use HasFactory;

    protected $fillable = [
        'service_name',
        'service_short_description',
        'service_detailed_description',
        'service_price',
        'service_duration',
        'max_participants',
        'location',
        'country',
        'category_id',
        'is_active',
        'is_featured',
        'created_by',
        'updated_by',
    ];
}
