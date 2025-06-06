<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblPricings extends Model
{
    /** @use HasFactory<\Database\Factories\TblPricingsFactory> */
    use HasFactory;

    protected $fillable = [
        'pricing_id',
        'price',
        'currency',
        'valid_from',
        'valid_until',
        'is_active',
    ];
}
