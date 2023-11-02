<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return usuario::all();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->usuario = $request->usuario;
        $usuario->contraseña = $request->contraseña;
        $usuario->Habilitado = $request->Habilitado;
        $usuario->fecha = $request->fecha;
        $usuario->fecha_creación = $request->fecha_creación;
        $usuario->fecha_modificación = $request->fecha_modificación;
        $usuario->usuario_creación = $request->usuario_creación;
        $usuario->usuario_modificación = $request->usuario_modificación;
        $usuario->save();
        return "Se ha registrado un Nuevo Usuario";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = Usuario::where('id', $id)->get();
        if ($usuario->isEmpty()) {
            //se maneja la falta del usuario con un mensaje!!
            return response()->json(['message' => 'Usuario no Registrado'], 404);
        }

        return $usuario;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::all()->find($id);
        if (!$usuario) {
            //se maneja la falta del usuario con un mensaje!!
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
        $usuario->usuario = $request->usuario;
        $usuario->contraseña = $request->contraseña;
        $usuario->Habilitado = $request->Habilitado;
        $usuario->fecha = $request->fecha;
        $usuario->fecha_creación = $request->fecha_creación;
        $usuario->fecha_modificación = $request->fecha_modificación;
        $usuario->usuario_creación = $request->usuario_creación;
        $usuario->usuario_modificación = $request->usuario_modificación;
        $usuario->save();

        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $usuario = Usuario::all()->find($id);
        if (!$usuario) {
            //se maneja la falta del usuario con un mensaje!!
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
        $usuario->delete();
        return "Se ha eliminiado el Usuario: {$id}";
    }
}
