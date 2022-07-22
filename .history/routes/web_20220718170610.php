<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'index']);
Route::post('/inquiry', [ContactController::class, 'input'])->name('');
Route::post('/confirm', [ContactController::class, 'store']);
Route::get('/thanks', [ContactController::class, 'thanks']);


Route::post('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/update', [TodoController::class, 'update'])->name('todo.update');
Route::post('/todo/delete', [TodoController::class, 'delete'])->name('todo.delete');

// Route::get('/manage', [ContactController::class, 'show']);

