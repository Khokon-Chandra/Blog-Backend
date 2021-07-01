<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::group(['middleware'=>'auth'],function(){

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    /**
     * Post group is appear here
     */
    Route::prefix('posts')->group(function () {
           
        Route::get('/',[PostController::class,'index'])->name('post');
        Route::get('/add-new',[PostController::class,'create'])->name('post.add-new');
        Route::post('/add-new',[PostController::class,'store']);
        Route::get('/{post:slug}',[PostController::class,'edit'])->name('post.update');
        Route::post('/{post:slug}',[PostController::class,'update']);
        Route::get('/delete',[PostController::class,'destroy'])->name('post.delete');
        Route::get('/category',[CategoryController::class,'create'])->name('category');
    });

     /**
     * Users group is appear here
     */

    Route::prefix('users')->group(function () {
        Route::get('/',[UserController::class,'index'])->name('user');
        Route::get('/profile',[UserController::class,'profile'])->name('user.profile');
        Route::get('/{user:username}',[UserController::class,'show']);
        Route::post('/{user:username}',[UserController::class,'update']);
        Route::get('/add-new',[UserController::class,'create'])->name('user.add-new');
        
    });


    Route::get('/menu',function(){
        return "This section is comming soon !!";
    })->name('menu');
    Route::get('/media',function(){
        return "This section is comming soon !!";
    })->name('media');
    Route::get('/settings',function(){
        return "This section is comming soon !!";
    })->name('setting');

});




require __DIR__.'/auth.php';
