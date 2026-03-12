<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return redirect('/productos');
});

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