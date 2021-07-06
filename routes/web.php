<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group(['middleware'=>'auth'],function(){

    Route::get('/',[IndexController::class,'dashboard'])->name('dashboard');
    Route::resource('posts',PostController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('users',UserController::class);

    Route::get('users/profile',[UserController::class,'profile'])->name('users.profile');


    Route::get('/menu',function(){
        return "This section is comming soon !!";
    })->name('menu');
    Route::get('/media',function(){
        return "This section is comming soon !!";
    })->name('media');
    Route::get('/settings',function(){
        return "This section is comming soon !!";
    })->name('settings');

});




require __DIR__.'/auth.php';
