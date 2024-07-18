<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    /**
     * Display a listing of the cargos.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $cargos = Cargo::all();
        return response()->json($cargos);
    }

    /**
     * Store a newly created cargo in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $cargo = new Cargo();
        $cargo->name = $request->input('name');
        $cargo->description = $request->input('description');
        $cargo->save();

        return response()->json(['message' => 'Cargo created successfully', 'cargo' => $cargo]);
    }

    /**
     * Remove the specified cargo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->delete();

        return response()->json(['message' => 'Cargo deleted successfully']);
    }
}
