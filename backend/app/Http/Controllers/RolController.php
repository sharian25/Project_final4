<?php

namespace App\Http\Controllers;

use App\Models\rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return rol::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rol = new Rol();
        $rol-> rol =$request -> rol;
        $rol-> fecha_creación =$request -> fecha;
        $rol-> fecha_modificación =$request -> fecha;
        $rol-> usuario_creación =$request -> fecha;
        $rol-> usuario_modificación =$request -> fecha;
            $rol-> save();
        return "Se ha registrado un Nuevo Rol";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rol = Rol::where('id',$id)->get();

        if ($rol->isEmpty()) {
            //se maneja la falta del usuario con un mensaje!!
            return response()->json(['message' => 'Usuario no Registrado'], 404);
        }
        return $rol;
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rol = Rol::all() -> find($id);
            if (!$rol) {
                //se maneja la falta del usuario con un mensaje!!
                return response()->json(['message' => 'Usuario no encontrado'], 404);
            }
            $rol-> rol =$request -> rol;
            $rol-> fecha_creación =$request -> fecha;
            $rol-> fecha_modificación =$request -> fecha;
            $rol-> usuario_creación =$request -> fecha;
            $rol-> usuario_modificación =$request -> fecha;
            $rol-> save();

            return $rol;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rol = Rol::all() ->find($id);
        if (!$rol) {
            //se maneja la falta del usuario con un mensaje!!
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
        $rol -> delete();
        return "Se ha eliminiado el Usuario: {$id}";

    }
}
