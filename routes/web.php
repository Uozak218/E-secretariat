<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth', 'role:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UsersController::class);
});

require __DIR__.'/auth.php';
