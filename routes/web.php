<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Backend\IndexController;
use App\Http\Controllers\Backend\MediaController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CommentController;

Route::group(['middleware'=>['auth:web','verified'],'prefix'=>'admin'],function(){

    Route::get('/',[IndexController::class,'dashboard'])->name('dashboard');
    Route::resource('posts',PostController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('users', UserController::class);
    Route::resource('comments', CommentController::class);
    Route::name('users.')->prefix('users/trashed')->group(function(){
        Route::get('/all', [UserController::class,'trashed'])->name('trash');
        Route::put('restore/{user:username}',[UserController::class,'restore'])->name('restore');
        Route::delete('delete_permanently/{user:username}', [UserController::class,'deletePermanently'])->name('delete_permanently');
    });





    Route::resource('media', MediaController::class);
    Route::get('/menu',function(){
        return view('backend.page');
    })->name('menu');

    Route::get('/settings',function(){
        return view('backend.page');
    })->name('settings');

});



require __DIR__.'/auth.php';
require __DIR__.'/frontend.php';
