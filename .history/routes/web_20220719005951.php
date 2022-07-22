<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'index']);
Route::post('/', [ContactController::class, 'input'])->name('input');
Route::get('/confirm', [ContactController::class, 'retype'])->name('confirm');
Route::post('/confirm', [ContactController::class, 'store'])->name('confirm');
Route::get('/thanks', [ContactController::class, 'thanks'])->name('thanks');



