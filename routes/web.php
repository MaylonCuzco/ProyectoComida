<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SesionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', [ClientesController::class, 'registroForm']);
Route::post('/registro', [ClientesController::class, 'registro']);

Route::get('/productos/crear', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');



Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/promociones', [ProductoController::class, 'index']);




/* Sesion */
    /* Acciones */
    Route::get('/login', [SesionController::class, 'login']);
    Route::get('/cerrarSesion', [SesionController::class, 'cerrarSesion']);
    /* Vista */
    Route::post('/iniciarSesion', [SesionController::class, 'iniciarSesion']);
    Route::post('/registrarse', [SesionController::class, 'registrarse']);


/* Vistas de administrador */
Route::group(['middleware' => 'role:admin'], function() {
    Route::get('/productosAdmin', [ProductoController::class, 'administracion']);
    Route::get('/editarProduto/{id}', [ProductoController::class, 'editarProducto']);
    Route::get('/eliminar/{id}', [ProductoController::class, 'eliminar']);
    Route::post('/guardarEdicion', [ProductoController::class, 'guardarEdicion']);
});