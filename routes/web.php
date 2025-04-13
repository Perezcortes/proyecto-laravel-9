<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

// Agrupa rutas controladas por PageController
Route::controller(PageController::class)->group(function () {     

    // Ruta principal que carga el método 'home' del PageController
    Route::get('/', 'home')->name('home');

    // Ruta para mostrar un post del blog utilizando su slug como identificador
    Route::get('blog/{post:slug}', 'post')->name('post');
});

// Redirige la ruta /dashboard a /posts
Route::redirect('dashboard', 'posts')->name('dashboard');

// Define rutas tipo resource (CRUD) para el controlador PostController,
// protegidas por el middleware 'auth' (solo accesibles para usuarios autenticados)
// exceptuando la ruta 'show' (mostrar un post individual)
Route::resource('posts', PostController::class)->middleware('auth')->except(['show']);

// Incluye las rutas de autenticación definidas en auth.php
require __DIR__.'/auth.php';
