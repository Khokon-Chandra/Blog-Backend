<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MediaController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\TagController;




Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('posts', PostController::class);
Route::resource('categories', CategoryController::class);
Route::resource('tags', TagController::class);

/**
 * User Routes here
 */
Route::resource('users', UserController::class);



Route::get('users/trashes/all', [UserController::class, 'trashed'])->name('users.trash');
Route::put('users/trashes/restore/{user:username}', [UserController::class, 'restore'])->name('users.restore');
Route::delete('users/trashes/delete_permanently/{user:username}', [UserController::class, 'deletePermanently'])->name('users.delete_permanently');


Route::resource('comments', CommentController::class);


Route::resource('media', MediaController::class);
Route::post('/media/storeOnce', [MediaController::class, 'storeSingleFile'])->name('media.single.store');
Route::resource('menus', MenuController::class);
Route::post('/menus/add-to-menu', [MenuController::class, 'addToMenu'])->name('menus.addToMenu');


Route::resource('roles', RoleController::class);
Route::post('roles/givepermission', [RoleController::class, 'givePermissionTo'])->name('roles.givePermission');

Route::resource('permissions', PermissionController::class);


Route::get('/settings', function () {
    return view('backend.setting.index');
})->name('settings');
