<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\HomeController;
use App\Http\Controllers\Panel\UserController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\PostController;

Route::get('home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'user','as'=>'user.'], function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('show/{user}', [UserController::class, 'show'])->name('show');
    Route::get('edit/{user}', [UserController::class, 'edit'])->name('edit');
    Route::get('destroy/{user}', [UserController::class, 'destroy'])->name('destroy');
    Route::post('update/{user}', [UserController::class, 'update'])->name('update');
});

Route::resource('post', PostController::class);
Route::resource('category', CategoryController::class);
