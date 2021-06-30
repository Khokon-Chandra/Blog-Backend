<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;




Route::get('/settings/security', function () {
    return "your account is secured now";
})->middleware(['auth', 'password.confirm']);

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['middleware'=>'auth'],function(){

    Route::get('/profile',function(){
        return view('profile');
    })->name('profile');
    
    
    Route::get('/posts',[PostController::class,'index'])->name('post');
    
    Route::get('/posts/add-new',[PostController::class,'create'])->name('post.add-new');
    Route::post('/posts/add-new',[PostController::class,'store']);
    
    Route::get('/posts/{post:slug}',[PostController::class,'edit'])->name('post.update');
    Route::post('/posts/{post:slug}',[PostController::class,'update']);

    Route::post('/posts/delete',[PostController::class,'destroy'])->name('post.delete');

    Route::get('/posts/category',[CategoryController::class,'create'])->name('category');

});




require __DIR__.'/auth.php';
