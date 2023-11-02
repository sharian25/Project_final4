<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logeo extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // El inicio de sesión fue exitoso
        $user = Auth::user();
     $token = $user->createToken('MyApp')->accessToken;

        return response()->json(['access_token' => $token], 200);
    }

    // El inicio de sesión falló
    return response()->json(['message' => 'Credenciales incorrectas'], 401);
}
}
