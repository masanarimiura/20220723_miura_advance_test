<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contactinquiry', [ContactController::class, 'input'])->name('inquiry');
Route::post('/confirm', [ContactController::class, 'store'])->name('confirm');
Route::get('/thanks', [ContactController::class, 'thanks'])->name('thanks');



