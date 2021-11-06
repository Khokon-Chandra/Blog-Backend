<?php

use App\Http\Controllers\Frontend\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;

Route::get('/',[IndexController::class,'index'])->name('home');

Route::prefix('/')->name('frontend.')->group(function () {
    Route::get('/blogs',[BlogController::class,'index'])->name('blogs.index');
    Route::get('/blogs/{slug}',[BlogController::class,'show'])->name('blogs.show');
});
