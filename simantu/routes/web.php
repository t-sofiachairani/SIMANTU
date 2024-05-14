<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tugas', TugasController::class);
