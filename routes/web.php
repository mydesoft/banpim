<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProductController;

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/',  'login')->name('login');
    Route::post('/login',  'loginAction')->name('login-action');
    Route::get('register', 'register')->name('register');
    Route::post('/register', 'registerAction')->name('register-action');
    });
    
    Route::middleware(['auth'])->group(function(){
        Route::get('/logout', 'logout')->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category',  'category')->name('category');
        Route::get('/create-category',  'createCategory')->name('create-category');
        Route::post('/create-category',  'storeCategory')->name('store-category');
        Route::get('/category/{category}',  'viewCategory')->name('view-category');
        Route::patch('/category/{category}',  'updateCategory')->name('update-category');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/product',  'product')->name('product');
        Route::get('/create-product',  'createproduct')->name('create-product');
        Route::post('/create-product',  'storeproduct')->name('store-product');
        Route::get('/product/{product}',  'viewproduct')->name('view-product');
        Route::patch('/product/{product}',  'updateproduct')->name('update-product');
    });

    Route::controller(MediaController::class)->group(function () {
        Route::get('/media',  'media')->name('media');
        Route::get('/create-media',  'createmedia')->name('create-media');
        Route::post('/create-media',  'storemedia')->name('store-media');
        Route::get('/media/{media}',  'viewmedia')->name('view-media');
        Route::patch('/media/{media}',  'updatemedia')->name('update-media');
    });
});    
