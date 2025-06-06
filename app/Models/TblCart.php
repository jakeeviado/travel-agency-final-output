<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblCart extends Model
{
    /** @use HasFactory<\Database\Factories\TblCartFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'pricing_id',
        'quantity',
        'participants',
        'travel_date',
        'total_price',
        'created_at',
        'updated_at',
    ];
}
