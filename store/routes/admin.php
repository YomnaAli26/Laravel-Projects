<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware'=>['auth','auth.type:admin,super-admin'],
    'as'=>'dashboard.',
    'prefix'=>'dashboard'
], function (){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/categories/trash',[CategoryController::class,'trash'])->name('categories.trash');
    Route::put('/categories/{category}/restore',[CategoryController::class,'restore'])->name('categories.restore');
    Route::delete('/categories/{category}/force-delete',[CategoryController::class,'forceDelete'])->name('categories.force-delete');
    Route::resource('/categories',CategoryController::class);
    Route::resource('/products',ProductController::class);
    Route::get('/profile/edit',[ProfileController::class,'edit'])->name('profile.edit');
    Route::patch('/profile',[ProfileController::class,'update'])->name('profile.update');


});
