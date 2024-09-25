<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\IndexController;
use App\Http\Controllers\Backend\MediaController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\RolePermissionController;
use App\Http\Controllers\Backend\TagController;




Route::get('/', [IndexController::class, 'dashboard'])->name('dashboard.index');
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


Route::prefix('roles')->name('roles.')->group(function () {
    Route::get('/', [RolePermissionController::class, 'listOfRoles'])->name('index');
    Route::get('/create', [RolePermissionController::class, 'createRole'])->name('create');
    Route::post('', [RolePermissionController::class, 'storeRole'])->name('store');

    Route::get('/{id}/edit', [RolePermissionController::class, 'editRole'])->name('edit');
    Route::put('/', [RolePermissionController::class, 'updateRole'])->name('update');
    Route::delete('{id}', [RolePermissionController::class, 'destroyRole'])->name('destroy');

    Route::post('/givepermission', [RolePermissionController::class, 'givePermissionTo'])->name('givePermission');
});

Route::get('/permissions', [RolePermissionController::class, 'listOfPermissions'])->name('permissions');
Route::get('/permissions/create', [RolePermissionController::class, 'createPermission'])->name('permissions.create');
Route::post('/permissions', [RolePermissionController::class, 'storePermission'])->name('permissions.store');


Route::get('/settings', function () {
    return view('backend.page');
})->name('settings');
