<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\VendorController;


/** vendor route */
Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');
Route::get('profile', [VendorController::class, 'profile'])->name('profile');
Route::put('profile-update', [VendorController::class, 'profileUPdate'])->name('profile.update');
Route::post('password-update', [VendorController::class, 'passwordUpdate'])->name('password.update');
