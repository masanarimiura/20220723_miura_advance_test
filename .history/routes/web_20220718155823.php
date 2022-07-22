<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CController;

Route::get('/', function () {
    return view('welcome');
});
