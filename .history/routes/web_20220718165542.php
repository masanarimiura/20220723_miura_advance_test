<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'index']);
Route::post('/inquiry', [ContactController::class, 'input'])->name('todo.create');;
Route::post('/confirm', [ContactController::class, 'store']);
Route::get('/thanks', [ContactController::class, 'thanks']);

// Route::get('/manage', [ContactController::class, 'show']);

