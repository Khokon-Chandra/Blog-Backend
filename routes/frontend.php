<?php

use App\Http\Controllers\Frontend\ContactInfoController;
use App\Http\Controllers\Frontend\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Models\Menu;

Route::name('frontend.')->group(function () {
    Route::get('/',[IndexController::class,'index'])->name('home');
    Route::get('/posts',[PostController::class,'index'])->name('posts.index');
    Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');
    Route::get('category/{category}',[PostController::class,'findByCategory'])->name('posts.category');
    Route::get('tag/{tag}',[PostController::class,'findByTag'])->name('posts.tag');
    Route::get('/contactus',[ContactInfoController::class,'index'])->name('contactPage');
    Route::post('/contactus',[ContactInfoController::class,'store'])->name('contactPage.store');
});


Route::fallback(function(){
    return view('errors.post_not_found',['menus'=>Menu::first()]);
});


