<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'index'])->name('inquiry');
Route::post('/inquiry', [ContactController::class, 'input'])->name('inquiry');
Route::post('/confirm', [ContactController::class, 'store'])->name('confirm');
Route::get('/thanks', [ContactController::class, 'thanks'])->name('thanks');


Route::post('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/update', [TodoController::class, 'update'])->name('todo.update');
Route::post('/todo/delete', [TodoController::class, 'delete'])->name('todo.delete');

// Route::get('/manage', [ContactController::class, 'show']);

