<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::group(['middleware'=>'auth'],function(){

    Route::get('/',[IndexController::class,'dashboard'])->name('dashboard');

    Route::prefix('posts')->group(function () {
        Route::get('/',[PostController::class,'index'])->name('post');
        Route::get('/add-new',[PostController::class,'create'])->name('post.add-new');
        Route::post('/add-new',[PostController::class,'store']);
        Route::get('/{post:slug}',[PostController::class,'edit'])->name('post.update');
        Route::post('/{post:slug}',[PostController::class,'update']);
        Route::post('/delete/{post:slug}',[PostController::class,'destroy'])->name('post.delete');
        Route::get('/category',[CategoryController::class,'create'])->name('category');
    });

    Route::prefix('users')->group(function () {
        Route::get('/',[UserController::class,'index'])->name('user');
        Route::get('/profile',[UserController::class,'profile'])->name('user.profile');
        Route::get('/{user:username}',[UserController::class,'show']);
        Route::post('/{user:username}',[UserController::class,'update'])->name('user.update');
        Route::get('/add-new',[UserController::class,'create'])->name('user.add-new');
        Route::post('/delete/{user:username}',[UserController::class,'destroy'])->name('user.delete');
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
