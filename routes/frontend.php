<?php

use App\Http\Controllers\Frontend\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Models\Menu;

Route::name('frontend.')->group(function () {
    Route::get('/',[IndexController::class,'index'])->name('home');
    Route::get('/posts',[PostController::class,'index'])->name('posts.index');
    Route::get('/{post}',[PostController::class,'show'])->name('posts.show');
    Route::get('category/{category}',[PostController::class,'findByCategory']);
    Route::get('tag/{tag}',[PostController::class,'findByTag']);
});


Route::fallback(function(){
    return view('errors.post_not_found',['menus'=>Menu::first()]);
});


