<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\API;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\CargoController;
use App\Http\Controllers\API\DepartamentoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Rutas para el controlador UserController
Route::get('users', [UserController::class, 'index']); // Ruta para mostrar todos los usuarios
Route::post('users', [UserController::class, 'store']); // Ruta para crear un usuario
Route::get('users/{id}', [UserController::class, 'show']); // Ruta para mostrar un usuario específico
Route::put('users/{id}', [UserController::class, 'update']); // Ruta para actualizar un usuario
Route::delete('users/{id}', [UserController::class, 'destroy']); // Ruta para eliminar un usuario


// Rutas para el controlador CargoController
Route::get('cargos', [CargoController::class, 'index']); // Listar todos los cargos
Route::post('cargos', [CargoController::class, 'store']); // Crear un nuevo cargo
Route::get('cargos/{id}', [CargoController::class, 'show']); // Mostrar un cargo por su ID
Route::put('cargos/{id}', [CargoController::class, 'update']); // Actualizar un cargo por su ID
Route::delete('cargos/{id}', [CargoController::class, 'destroy']); // Eliminar un cargo por su ID


// Rutas para el controlador DepartamentoController
Route::get('departamentos', [DepartamentoController::class, 'index']); // Mostrar todos los departamentos
Route::post('departamentos', [DepartamentoController::class, 'store']); // Crear un departamento
Route::get('departamentos/{id}', [DepartamentoController::class, 'show']); // Mostrar un departamento específico
Route::put('departamentos/{id}', [DepartamentoController::class, 'update']); // Actualizar un departamento
Route::delete('departamentos/{id}', [DepartamentoController::class, 'destroy']); 