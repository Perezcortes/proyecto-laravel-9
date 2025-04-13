<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// Rutas accesibles solo para usuarios no autenticados (invitados)
Route::middleware('guest')->group(function () {
    // Muestra el formulario de inicio de sesión
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    // Procesa la solicitud de inicio de sesión (envío del formulario)
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

// Rutas accesibles solo para usuarios autenticados
Route::middleware('auth')->group(function () {
    // Cierra la sesión del usuario
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
