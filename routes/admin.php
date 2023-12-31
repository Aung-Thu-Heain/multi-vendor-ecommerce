<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SliderController;

/** admin route */
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/**admin profile route */
Route::get('profile', [AdminController::class, 'profile'])->name('profile');
Route::post('profile/update', [AdminController::class, 'profileUpdate'])->name('profile.update');
Route::post('password/update', [AdminController::class, 'passwordUpdate'])->name('password.update');

/**slider route */
Route::resource('slider', SliderController::class);

/**category route */
Route::resource('category', CategoryController::class);
