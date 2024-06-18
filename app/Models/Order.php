<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order_detail;


class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    function order_details()
    {
        return $this->hasMany(Order_detail::class);
    }
}