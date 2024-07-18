<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = ['name', 'description', 'weight', 'order_id'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
