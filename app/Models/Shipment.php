<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = ['order_id', 'transport_vehicle_id', 'transport_method_id', 'shipment_date'];

    public function transportVehicle()
    {
        return $this->belongsTo(TransportVehicle::class);
    }

    public function transportMethod()
    {
        return $this->belongsTo(TransportMethod::class);
    }
    public function deliveryStatuses()
    {
        return $this->hasMany(DeliveryStatus::class);
    }
}
