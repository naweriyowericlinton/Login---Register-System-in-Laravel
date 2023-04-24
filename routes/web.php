<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('index.html', function () {
    return view('index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile.html', [App\Http\Controllers\frontController::class, 'myprofile'])->name('profile.html');
Route::post('/update-profile.html', [App\Http\Controllers\frontController::class, 'update_profile'])->name('update-profile.html');
Route::post('/update-password.html', [App\Http\Controllers\frontController::class, 'update_password'])->name('update-password.html');
Route::get('/users.html', [App\Http\Controllers\frontController::class, 'users'])->name('users.html');