<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $primaryKey = 'cart_id';

    protected $fillable = ["quantity","product_id","user_id","temp_user_id"];


    public function product(){
        return $this->belongsTo(Product::class);
    }
}
