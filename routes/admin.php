<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;

/** admin route */
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
