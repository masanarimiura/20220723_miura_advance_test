<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'index'])->name('index');
Route::post('/inquiry', [ContactController::class, 'input'])->name('inquiry');
Route::post('/confirm', [ContactController::class, 'store'])->name('confirm');
Route::get('/thanks', [ContactController::class, 'thanks'])->name('thanks');



