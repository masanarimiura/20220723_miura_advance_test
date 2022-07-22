<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route::get('/', [ContactController::class, 'index']);
Route::post('/inquiry', [ContactController::class, 'store']);
Route::get('/confirm', [ContactController::class, 'show']);
Route::get('/thanks', [ContactController::class, 'inde']);



// Route::get('/manage', [ContactController::class, 'show']);

