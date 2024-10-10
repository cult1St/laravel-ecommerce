<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransDetailsController;
use App\Models\Lga;
use App\Models\Order;
use App\Models\Product;
use App\Models\State;
use App\Models\Trans_details;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class, "show_index"])->name("index");

Route::get('/dashboard',[TransDetailsController::class, "view_index"])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
require __DIR__.'/myroutes.php';
