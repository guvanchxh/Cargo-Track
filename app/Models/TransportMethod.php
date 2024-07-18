<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransportMethod extends Model
{
    protected $fillable = ['method'];

    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }
}
