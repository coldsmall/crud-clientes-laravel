<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Ruta principal
Route::get('/', [ClienteController::class, 'index']);



// Papelera
Route::get('clientes/eliminados', [ClienteController::class, 'trashed'])
    ->name('clientes.trashed');

// CRUD
Route::resource('clientes', ClienteController::class);

Route::put('clientes/{id}/restore', [ClienteController::class, 'restore'])
    ->name('clientes.restore');

Route::delete('clientes/{id}/force-delete', [ClienteController::class, 'forceDelete'])
    ->name('clientes.forceDelete');