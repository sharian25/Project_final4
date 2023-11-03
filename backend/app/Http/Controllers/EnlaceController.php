<?php

namespace App\Http\Controllers;

use App\Models\enlace;
use Illuminate\Http\Request;

class EnlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return enlace::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $enlace = new Enlace();
        $enlace->descripción = $request->descripción;
        $enlace->fecha_creación = $request->fecha_creación;
        $enlace->fecha_modificación = $request->fecha_modificación;
        $enlace->usuario_creación = $request->usuario_creación;
        $enlace->usuario_modificación = $request->usuario_modificación;
        $enlace-> save();
        return "Se ha creado un Nuevo Enlace";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enlace = Enlace::where('id', $id)->get();
        if ($enlace->isEmpty()) {
            //se maneja la falta del enlace con un mensaje!!
            return response()->json(['message' => 'Usuario no Registrado'], 404);
        }
        return $enlace;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(enlace $enlace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enlace = Enlace::all()->find($id);
        if (!$enlace) {
            //se maneja la falta del enlace con un mensaje!!
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
        $enlace->descripción = $request->descripción;
        $enlace->fecha_creación = $request->fecha_creación;
        $enlace->fecha_modificación = $request->fecha_modificación;
        $enlace->usuario_creación = $request->usuario_creación;
        $enlace->usuario_modificación = $request->usuario_modificación;
        $enlace->save();

        return $enlace;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $enlace = Enlace::all()->find($id);
        if (!$enlace) {
            //se maneja la falta del enlace con un mensaje!!
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
        $enlace->delete();
        return "Se ha eliminiado el Usuario: {$id}";
}

}

