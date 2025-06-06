<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblDestinations extends Model
{
    /** @use HasFactory<\Database\Factories\TblDestinationsFactory> */
    use HasFactory;

    protected $fillable = [
        'country',
        'city',
        'description',
        'image_url',
        'is_available',
        'is_top_destination',
    ];
}
