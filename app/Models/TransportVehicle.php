<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransportVehicle extends Model
{
    protected $fillable = ['type', 'license_plate', 'capacity'];

    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }
}

