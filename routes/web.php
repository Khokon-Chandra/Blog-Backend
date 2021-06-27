<?php

use Illuminate\Support\Facades\Route;


Route::post('/post',function(){
    return "posted";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
