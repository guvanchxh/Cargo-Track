<?php

namespace App\Http\Controllers;

use App\Models\DeliveryStatus;
use Illuminate\Http\Request;

class DeliveryStatusController extends Controller
{
    public function index()
    {
        $deliveryStatuses = DeliveryStatus::all();
        return response()->json($deliveryStatuses);
    }

    public function show($id)
    {
        $deliveryStatus = DeliveryStatus::findOrFail($id);
        return response()->json($deliveryStatus);
    }

    public function store(Request $request)
    {
        $deliveryStatus = DeliveryStatus::create($request->all());
        return response()->json($deliveryStatus, 201);
    }

    public function update(Request $request, $id)
    {
        $deliveryStatus = DeliveryStatus::findOrFail($id);
        $deliveryStatus->update($request->all());
        return response()->json($deliveryStatus, 200);
    }

    public function destroy($id)
    {
        DeliveryStatus::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
