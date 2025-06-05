<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_servicePricing extends Model
{
    /** @use HasFactory<\Database\Factories\TblServicePricingFactory> */
    use HasFactory;

    protected $fillable = [
        'service_id',
        'pricing_name',
        'pricing_amount',
        'pricing_currency',
        'minimum_participants',
        'maximum_participants',
        'valid_from',
        'valitd_until',
        'is_active',
        'created_at',
        'updated_at',
    ];
}
