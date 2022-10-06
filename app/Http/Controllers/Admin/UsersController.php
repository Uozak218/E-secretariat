<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = User::all();
        return view('admin.users.liste')->with('users', $users);
    }

    public function create()
    {
       return view('admin.users.create', ['roles' => Role::all()]);
    }

    public function store(Request $request)
    {
        $user = User::create($request->except(['_token', 'roles']));

        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        
        return view('admin.users.edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
