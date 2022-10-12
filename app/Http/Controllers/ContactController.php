<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('new_contact');
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->adress = $request->input('adress');
        $contact->save();
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

    public function search(Contact $contact)
    {
        $q = request()->input('search');

        $contact = contact::where('name', 'like', "%$q%")
            ->orwhere('email', 'like', "%$q%")
            ->orwhere('adress', 'like', "%$q%")
            ->paginate(6);

        return view('contact_search')->with('contact_arr', $contact);
    }

    /*public function destroy(collaborateur $collaborateur, $id)
    {
        $row = collaborateur::destroy($id);
        return redirect('/dashboard');
    }*/
}
