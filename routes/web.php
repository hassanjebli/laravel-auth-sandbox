<?php

use App\Http\Controllers\Back\BackHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontHomeController;



//front
Route::prefix('front')->middleware('auth')->name('front.')->group(function () {
    Route::get('/', FrontHomeController::class)->name('index');
});
//admin
Route::prefix('back')->name('back.')->group(function () {
    Route::get('/', BackHomeController::class)
        // ->middleware('admin')
        ->name('index');

    Route::view('/login', 'back.auth.login');
    Route::view('/register', 'back.auth.register');
    Route::view('/forgot-password', 'back.auth.forgot-password');
});


require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

