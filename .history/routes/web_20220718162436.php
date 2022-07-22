<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route::get('/', [ContactController::class, 'index']);
Route::get('/thanks', [ContactController::class, 'thanks']);
Route::post('/inquiry', [ContactController::class, 'store']);
Route::get('/confirm', [ContactController::class, 'show']);



// Route::get('/manage', [ContactController::class, 'show']);

