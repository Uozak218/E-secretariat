<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('newcontact');
    }

    public function store(Request $request)
    {
        $con_tact = new contact();
        $con_tact->name = $request->input('name');
        $con_tact->email = $request->input('email');
        $con_tact->adresse = $request->input('adresse');
        $con_tact->save();
        return redirect('/dashboard');
    }

    /*public function edit(collaborateur $collaborateur, $id)
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
    }*/

    public function search(contact $contact)
    {
        $q = request()->input('search');

        $con_tact = contact::where('name', 'like', "%$q%")
            ->orwhere('email', 'like', "%$q%")
            ->orwhere('adresse', 'like', "%$q%")
            ->paginate(6);

        return view('contactsearch')->with('contact_arr', $con_tact);
    }

    /*public function destroy(collaborateur $collaborateur, $id)
    {
        $row = collaborateur::destroy($id);
        return redirect('/dashboard');
    }*/
}
