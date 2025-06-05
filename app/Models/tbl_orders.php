<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_orders extends Model
{
    /** @use HasFactory<\Database\Factories\TblOrdersFactory> */
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'order-number',
        'total_amount',
        'status',
        'payment_status',
        'payment_method',
        'booking_date',
        'travel_start_date',
        'travel_end_date',
        'created_at',
        'updated_at',
    ];
}
