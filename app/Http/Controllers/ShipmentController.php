<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index()
    {
        $shipments = Shipment::all();
        return response()->json($shipments);
    }

    public function show($id)
    {
        $shipment = Shipment::findOrFail($id);
        return response()->json($shipment);
    }

    public function store(Request $request)
    {
        $shipment = Shipment::create($request->all());
        return response()->json($shipment, 201);
    }

    public function update(Request $request, $id)
    {
        $shipment = Shipment::findOrFail($id);
        $shipment->update($request->all());
        return response()->json($shipment, 200);
    }

    public function destroy($id)
    {
        Shipment::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
