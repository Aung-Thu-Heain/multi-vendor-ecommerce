<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;

/** admin route */
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/**admin profile route */
Route::get('profile', [AdminController::class, 'profile'])->name('profile');
Route::post('profile/update', [AdminController::class, 'profileUpdate'])->name('profile.update');
Route::post('password/update', [AdminController::class, 'passwordUpdate'])->name('password.update');
