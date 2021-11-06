<?php

use App\Http\Controllers\Frontend\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;



Route::name('frontend.')->group(function () {
    Route::get('/',[IndexController::class,'index'])->name('home');
    Route::get('/posts',[PostController::class,'index'])->name('posts.index');
    Route::get('/{post}',[PostController::class,'show'])->name('posts.show');
    Route::get('category/{category}',[PostController::class,'onCategory']);
});


