<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Backend\IndexController;
use App\Http\Controllers\Backend\MediaController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\RolePermissionController;
use App\Http\Controllers\Backend\TagController;





Route::group(['middleware'=>['auth:web','verified'],'prefix'=>'admin'],function(){

    Route::get('/',[IndexController::class,'dashboard'])->name('dashboard');


    Route::resource('posts',PostController::class);


    Route::resource('categories',CategoryController::class);
    Route::resource('tags',TagController::class);
    Route::resource('users', UserController::class);
    Route::resource('comments', CommentController::class);
    Route::name('users.')->prefix('users/trashed')->group(function(){
        Route::get('/all', [UserController::class,'trashed'])->name('trash');
        Route::put('restore/{user:username}',[UserController::class,'restore'])->name('restore');
        Route::delete('delete_permanently/{user:username}', [UserController::class,'deletePermanently'])->name('delete_permanently');
    });





    Route::resource('media', MediaController::class);
    Route::resource('menus', MenuController::class);
    Route::post('/menus/add-to-menu',[MenuController::class,'addToMenu'])->name('menus.addToMenu');

    Route::name('access_control.')->group(function () {
        Route::get('/roles',[RolePermissionController::class,'listOfRoles'])->name('roles');
        Route::get('/roles/create',[RolePermissionController::class,'createRole'])->name('roles.create');
        Route::get('/permissions',[RolePermissionController::class,'listOfPermissions'])->name('permissions');
        Route::get('/permissions/create',[RolePermissionController::class,'createPermission'])->name('permissions.create');
    });

    Route::get('/settings',function(){
        return view('backend.page');
    })->name('settings');

});





require __DIR__.'/frontend.php';
require __DIR__.'/auth.php';

