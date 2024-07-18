<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        $cargos = Cargo::all();
        return response()->json($cargos);
    }

    public function show($id)
    {
        $cargo = Cargo::findOrFail($id);
        return response()->json($cargo);
    }

    public function store(Request $request)
    {
        $cargo = Cargo::create($request->all());
        return response()->json($cargo, 201);
    }

    public function update(Request $request, $id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->update($request->all());
        return response()->json($cargo, 200);
    }

    public function destroy($id)
    {
        Cargo::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

