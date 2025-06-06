<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblServiceCategories extends Model
{
    /** @use HasFactory<\Database\Factories\TblServiceCategoriesFactory> */
    use HasFactory;

    protected $fillable = [
        'category_name',
        'category_description',
        'category_image',
        'is_active',
        'created_at',
        'updated_at',
    ];
}
