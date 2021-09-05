<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\CategoryController;



Route::group(['middleware'=>['auth:web','verified']],function(){

    Route::get('/',[IndexController::class,'dashboard'])->name('dashboard');

    Route::group(['as'=>'article.'],function(){
        Route::resource('posts',PostController::class);
        Route::resource('categories',CategoryController::class);
    });

    Route::resource('users', UserController::class)->missing(function (User $username) {
        return "this request is missing";
    });
    Route::resource('media', MediaController::class);

    Route::name('users.')->prefix('users/trashed')->group(function(){
        Route::get('/all', [UserController::class,'trashed'])->name('trash');
        Route::put('restore/{user:username}',[UserController::class,'restore'])->name('restore');
        Route::delete('delete_permanently/{user:username}', [UserController::class,'deletePermanently'])->name('delete_permanently');
    });
    

    Route::get('/menu',function(){
        return view('page');
    })->name('menu');

    Route::get('/settings',function(){
        return view('page');
    })->name('settings');

});




require __DIR__.'/auth.php';
