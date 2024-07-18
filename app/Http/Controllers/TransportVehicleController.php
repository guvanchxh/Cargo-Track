<?php

namespace App\Http\Controllers;

use App\Models\TransportVehicle;
use Illuminate\Http\Request;

class TransportVehicleController extends Controller
{
    public function index()
    {
        $transportVehicles = TransportVehicle::all();
        return response()->json($transportVehicles);
    }

    public function show($id)
    {
        $transportVehicle = TransportVehicle::findOrFail($id);
        return response()->json($transportVehicle);
    }

    public function store(Request $request)
    {
        $transportVehicle = TransportVehicle::create($request->all());
        return response()->json($transportVehicle, 201);
    }

    public function update(Request $request, $id)
    {
        $transportVehicle = TransportVehicle::findOrFail($id);
        $transportVehicle->update($request->all());
        return response()->json($transportVehicle, 200);
    }

    public function destroy($id)
    {
        TransportVehicle::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
