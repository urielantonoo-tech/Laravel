<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
});
Route::get('/hola', function () {
    return "Hola Mundo desde Laravel";
});
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

Route::get('/productos', function () {

    $productos = Session::get('productos', ["Laptop", "Mouse", "Teclado"]);

    return view('productos', ['productos' => $productos]);
});

Route::post('/productos', function (Request $request) {

    $productos = Session::get('productos', ["Laptop", "Mouse", "Teclado"]);

    $productos[] = $request->input('producto');

    Session::put('productos', $productos);

    return redirect('/productos');
});