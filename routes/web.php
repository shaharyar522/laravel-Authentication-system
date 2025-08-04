<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/register','register')->name('register');
Route::view('/login','login')->name('login');
Route::post('registerSave',[UserController::class,'register'])->name('registerSave');

Route::post('loginMatch',[UserController::class,'login'])->name('loginMatch');

Route::get('logout',[UserController::class,'logout'])->name('logout');

Route::get('DashboardPage',[UserController::class,'DashboardPage'])->name('dashboard');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

