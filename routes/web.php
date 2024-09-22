<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaControlller;
use App\Http\Controllers\BayarController;
use Illuminate\Support\Facades\Route;

//home route
Route::resource('/', HomeController::class);

//siswa route
Route::resource('/siswa', SiswaControlller::class);

//bayar route
Route::resource('/bayar', BayarController::class);
