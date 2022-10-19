<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nom_entreprise' => ['required', 'string', 'max:255'],
            'email_entreprise' => ['required', 'string', 'email', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $profil = Profil::create([
            'nom_entreprise'=> $request->nom_entreprise,
            'email_entreprise'=> $request->email_entreprise,
            'adresse'=> $request->adresse,
            'telephone'=> $request->telephone,
            'numero_ifu'=> $request->numero_ifu,
            'rccm'=> $request->rccm,
            'user_id'=> $user->id,
        ]);

        $role = Role::select('id')->where('name', 'admin')->first();
        $user->roles()->attach($role);
 
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
