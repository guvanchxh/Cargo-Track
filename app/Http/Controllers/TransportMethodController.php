<?php

namespace App\Http\Controllers;

use App\Models\TransportMethod;
use Illuminate\Http\Request;

class TransportMethodController extends Controller
{
    public function index()
    {
        $transportMethods = TransportMethod::all();
        return response()->json($transportMethods);
    }

    public function show($id)
    {
        $transportMethod = TransportMethod::findOrFail($id);
        return response()->json($transportMethod);
    }

    public function store(Request $request)
    {
        $transportMethod = TransportMethod::create($request->all());
        return response()->json($transportMethod, 201);
    }

    public function update(Request $request, $id)
    {
        $transportMethod = TransportMethod::findOrFail($id);
        $transportMethod->update($request->all());
        return response()->json($transportMethod, 200);
    }

    public function destroy($id)
    {
        TransportMethod::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
