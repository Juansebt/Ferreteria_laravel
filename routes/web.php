<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\inicioC;
use App\Http\Controllers\ProductoController;
use Database\Seeders\CategoriaSeeder;
use Illuminate\Support\Facades\Route;

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

Route::get('/prueba', function () {
    return view('welcome');
})->name('saludo');

// Route::get('/inicio/{nombre}', [inicioC::class, 'saludar'])->name('hola');

// Route::get('/producto', [ProductoController::class, 'index']);
// Route::post('/producto', [ProductoController::class, 'store']);
// Route::put('/producto/{id}', [ProductoController::class, 'update']);
// Route::delete('/producto/{id}', [ProductoController::class, 'destroy']);

Route::get('/productos', function () {
    return view('productos');
});

Route::resource('/producto', ProductoController::class)->only(['index','store','update','destroy']);

Route::resource('/categoria', CategoriaController::class)->only(['index','store','update','destroy']);