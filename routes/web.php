<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/',[HomeController::class,'index'])->name('home');

// Blog
Route::get('/blog',[BlogController::class,'index'])->name('blog');