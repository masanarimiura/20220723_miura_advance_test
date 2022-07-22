<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'index']);
Route::post('/', [ContactController::class, 'input']);
Route::get('/confirm', [ContactController::class, 'retype']);
Route::post('/confirm', [ContactController::class, 'store']);
Route::get('/thanks', [ContactController::class, 'thanks']);
Route::get('/manage', [ContactController::class, 'manage'])->name('manage');
Route::post('/manage', [ContactController::class, 'search']);
Route::post('/delete', [ContactController::class, 'delete'])->name('delete');





