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
        "state_division",
        "address_line1",
        "address_line2",
        "postal_code",
        "company",
        "order_id",
    ];
}
