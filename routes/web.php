<?php

use App\Http\Controllers\Halo\HaloController;
use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/halo', function () {
//     return view('coba.halo');
// });

Route::get('/halo', [HaloController::class, 'index']);

// Route::get('/todo', function () {
//     return view('todo.app');
// });

Route::get('/todo', [TodoController::class, 'index'])->name('todo');
Route::post('/todo', [TodoController::class, 'store'])->name('todo.post');
