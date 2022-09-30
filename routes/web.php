<?php

use App\Models\contact;
use App\Models\courrier;
use App\Models\User;
use App\Models\collaborateur;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourrierController;
use App\Http\Controllers\CollaborateurController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('Enregistrer', [CourrierController::class, 'Create'])->name('new_courrier');

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



Route::get('EnregistrerCollaborateur', [CollaborateurController::class, 'Create'])->name('new_partner');

Route::get('save_new_collaborateur', [CollaborateurController::class, 'Store']);

Route::get('RechercherCollaborateur', function () {
    return view('seepartner')->with('collaborateur_arr', collaborateur::all());
});

Route::get('delete_partner/{id}', [CollaborateurController::class, 'destroy']);

Route::get('edit_partner/{id}', [CollaborateurController::class, 'edit']);

Route::get('update_partner/{id}', [CollaborateurController::class, 'update']);

Route::get('search', [CollaborateurController::class, 'search'])->name('partner.search');

*/

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('private', function () {
        return 'Bonjour Admin';
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', UsersController::class);
    });

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



    Route::get('EnregistrerCollaborateur', [UsersController::class, 'Create'])->name('new_partner');

    Route::get('save_new_collaborateur', [CollaborateurController::class, 'Store']);

    Route::get('RechercherCollaborateur', function () {
        return view('admin.users.see_users')->with('users', User::all());
    });

  /*  Route::get('delete_partner/{id}', [CollaborateurController::class, 'destroy']);

    Route::get('edit_partner/{id}', [CollaborateurController::class, 'edit']);

    Route::get('update_partner/{id}', [CollaborateurController::class, 'update']);
*/
    Route::get('search', [CollaborateurController::class, 'search'])->name('partner.search');
});

Route::middleware(['auth', 'role:partner'])->group(function () {
    Route::get('priv', function () {
        return 'Bonjour partner';
    });
});

require __DIR__.'/auth.php';
