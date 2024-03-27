<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "phone",
        "country",
        "shipping_cost",
        "payment_type",
        "grand_total",
        "coupon_discount",
        "delivery_time",
        "reward_discount",
        "state_division",
        "address_line1",
        "address_line2",
        "postal_code",
        "company",
        "order_code",
    ];

    public function orderitems(): HasMany
    {
        return $this->hasMany(Orderitem::class);
    }
}
