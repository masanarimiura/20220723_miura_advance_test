<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index']);
Route::get('/find', [ContactController::class, 'find']);
Route::post('/find', [ContactController::class, 'search']);
