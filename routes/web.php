<?php

use App\Models\Contact;
use App\Models\Courrier;
use App\Models\CourrierModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourrierController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\CourrierModelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

   


Route::get('save_courrier', [CourrierController::class, 'Create']);

Route::get('save_new_courrier', [CourrierController::class, 'Store']);

Route::get('search_courrier', function () {
    return view('see_courrier')->with('courrier_arr', Courrier::all());
});


Route::get('write_new_courrier', function () {
    return view('write_courrier')->with('contact_arr', Contact::all())->with('model_arr', CourrierModel::all());
});

Route::get('delete_courrier/{id}', [CourrierController::class, 'destroy']);

Route::get('edit_courrier/{id}', [CourrierController::class, 'edit']);

Route::get('update_courrier/{id}', [CourrierController::class, 'update']);

Route::get('search_specific_courrier', [CourrierController::class, 'search'])->name('courrier.search');



Route::get('list_model', [CourrierModelController::class, 'Create']);

Route::get('save_model', [CourrierModelController::class, 'Store']);

Route::get('save_new_model', function () {
    return view('new_model');
});


Route::get('save_contact', [ContactController::class, 'Create']);

Route::get('save_new_contact', [ContactController::class, 'Store']);

Route::get('search_contact', function () {
    return view('see_contact')->with('contact_arr', Contact::all());
});

Route::get('delete_contact/{id}', [ContactController::class, 'destroy']);

Route::get('edit_contact/{id}', [ContactController::class, 'edit']);

Route::get('update_contact/{id}', [ContactController::class, 'update']);

Route::get('search_specific_contact', [ContactController::class, 'search'])->name('contact.search');




Route::middleware('auth', 'role:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UsersController::class);
});

require __DIR__.'/auth.php';
