<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Statut;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = User::all();
        $statuts = Statut::all();

        return view('admin.users.liste_partner')->with('users', $users)->with('statuts', $statuts);
    }

    public function create()
    {
       return view('admin.users.create_partner', ['roles' => Role::all()], ['statuts' => Statut::all()]);
    }

    public function store(Request $request)
    {

        $user = User::create($request->except(['_token', 'roles'], ['_token', 'statuts']));
        $user->roles()->sync($request->roles);
        $user->statut()->sync($request->statuts);

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        $statuts = Statut::all();

        return view('admin.users.edit_partner', [
            'user' => $user,
            'roles' => $roles,
            'statuts' => $statuts
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        $user->statut()->sync($request->statuts);

        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->statut()->detach();
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
