<?php

namespace App\Http\Controllers;

use App\Models\collaborateur;
use App\Models\contact;
use Illuminate\Http\Request;

class CollaborateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newpartner');
    }

    public function store(Request $request)
    {
        $partner = new collaborateur();
        $partner->name = $request->input('name');
        $partner->email = $request->input('email');
        $partner->telephone = $request->input('telephone');
        $partner->status = $request->input('status');
        $partner->save();
        return redirect('/dashboard');
    }

    public function edit(collaborateur $collaborateur, $id)
    {
        $partner = collaborateur::find($id);
        return view('editpartner')->with('collaborateur_arr', $partner); 
    }

    public function update(Request $request, collaborateur $collaborateur, $id)
    {
        $partner = collaborateur::find($id);
        $partner->name = $request->input('name');
        $partner->email = $request->input('email');
        $partner->telephone = $request->input('telephone');
        $partner->status = $request->input('status');
        $partner->save();
        return redirect('/dashboard');
    }

    public function search(collaborateur $collaborateur)
    {
        $q = request()->input('search');

        $partner = Collaborateur::where('name', 'like', "%$q%")
            ->orwhere('email', 'like', "%$q%")
            ->orwhere('telephone', 'like', "%$q%")
            ->orwhere('status', 'like', "%$q%")
            ->paginate(6);

        return view('partnersearch')->with('collaborateur_arr', $partner);
    }

    public function destroy(collaborateur $collaborateur, $id)
    {
        $row = collaborateur::destroy($id);
        return redirect('/dashboard');
    }
}
