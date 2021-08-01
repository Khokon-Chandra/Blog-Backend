<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group(['middleware'=>['auth:web','verified']],function(){

    Route::get('/',[IndexController::class,'dashboard'])->name('dashboard');
    
    Route::group(['as'=>'article.'],function(){
        Route::resource('posts',PostController::class);
        Route::resource('categories',CategoryController::class);
    });
    Route::resources([
        'users'=>UserController::class,
        'media'=>MediaController::class,
    ]);
    
    Route::get('/menu',function(){
        return view('page');
    })->name('menu');

    Route::get('/settings',function(){
        return view('page');
    })->name('settings');

});




require __DIR__.'/auth.php';
