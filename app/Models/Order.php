<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function cart()
    {
        return $this->belongsTo(Card::class);
    }
    public function orderDetals()
    {
        return $this->hasOne(OrderDetail::class);
    }
}
