<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ProfileController;

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/register', function($register=null){
    return view('register');
});
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


require __DIR__.'/auth.php';
