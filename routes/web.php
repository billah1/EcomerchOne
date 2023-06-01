<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\DashboarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\ProductController;



Route::get('/',[HomeController::class,'home'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dashboard',[DashboarController::class,'dashboard'])->name('dashboard');
    Route::resource('category',CategoryController::class);
    Route::resource('subcategory',SubCategoryController::class);
    Route::resource('childcategory',ChildCategoryController::class);
    Route::resource('products',ProductController::class);
});
