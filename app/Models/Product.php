<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        "name",
        "unit",
        "user_id",
        "category_id",
        "brand_id",
        "purchase_qty",
        "refundable",
        "thumbnail_image",
        "unit_price",
        "quantity",
        "description",
        "sku",
        "featured",
    ];
}
