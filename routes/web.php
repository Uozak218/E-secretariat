<?php

use App\Models\contact;
use App\Models\courrier;
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

    

    
    Route::get('Enregistrer', [CourrierController::class, 'Create'])->name('new_courrier');

    Route::get('save_new_courrier', [CourrierController::class, 'Store']);

    Route::get('Rechercher', function () {
        return view('seecourrier')->with('courrier_arr', courrier::all());
    });

    Route::get('Rediger', function () {
        return view('rediger')->with('courrier_arr', courrier::all());
    });

    Route::get('delete_courrier/{id}', [CourrierController::class, 'destroy']);

    Route::get('edit_courrier/{id}', [CourrierController::class, 'edit']);

    Route::get('update_courrier/{id}', [CourrierController::class, 'update']);

    Route::get('searchcourrier', [CourrierController::class, 'search'])->name('courrier.search');


    

    Route::get('EnregistrerContact', [ContactController::class, 'Create'])->name('new_contact');

    Route::get('save_new_contact', [ContactController::class, 'Store']);

    Route::get('RechercherContact', function () {
        return view('seecontact')->with('contact_arr', contact::all());
    });

    Route::get('delete_contact/{id}', [ContactController::class, 'destroy']);

    Route::get('edit_contact/{id}', [ContactController::class, 'edit']);

    Route::get('update_contact/{id}', [ContactController::class, 'update']);

    Route::get('searchcontact', [ContactController::class, 'search'])->name('contact.search');

});

require __DIR__.'/auth.php';
