<?php

use App\Http\Controllers\todoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', [todoController::class, 'index'])->name('todo');
Route::post('/todo', [todoController::class, 'store'])->name('todo.post');
Route::put('/todo/{id}', [todoController::class, 'update'])->name('todo.update');
Route::delete('/todo/{id}', [todoController::class, 'destroy'])->name('todo.delete');