<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::view('/login','login');

Route::post('/', function () {
    $credentials = request ()->only('user','password');
    if (Auth::attempt($credentials)) ; {
        return 'estas logeado';
    }
    return 'tu logeo falló';
});

//como hacer que utilice la tabla usuarios