<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::post('/inquiry', [ContactController::class, 'input']);
Route::post('/inquiry', [ContactController::class, 'input']);
Route::post('/confirm', [ContactController::class, 'store']);
Route::get('/thanks', [ContactController::class, 'thanks']);

// Route::get('/manage', [ContactController::class, 'show']);

