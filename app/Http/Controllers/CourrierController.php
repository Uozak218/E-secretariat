<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Courrier;
use Illuminate\Http\Request;
use App\Models\CourrierModel;
use App\Models\User;

class CourrierController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $contact = Contact::all();

        return view('new_courrier')->with('user_arr', User::all())->with('contact_arr', Contact::all())->with('model_arr', CourrierModel::all());
    }

    public function store(Request $request)
    {
        $courrier = new Courrier();
        $courrier->type = $request->input('type');
        $courrier->objet = $request->input('objet');
        $courrier->nbrpieces = $request->input('nbrpieces');
        $courrier->contact_id = $request->input('contact_id');
        $courrier->name = $request->input('name');
        $courrier->content = $request->input('content');
        $courrier->collaborateur_id = $request->input('collaborateur_id');
        $courrier->save();
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

    public function search(Courrier $courrier)
    {
        request()->validate([
            'search' => 'required|min:3'
        ]);
        
        $q = request()->input('search');

        $courrier = courrier::where('type', 'like', "%$q%")
            ->orwhere('objet', 'like', "%$q%")
            ->orwhere('contact', 'like', "%$q%")
            ->orwhere('nbrpieces', 'like', "%$q%")
            ->paginate(6);

        return view('courrier_search')->with('courrier_arr', $courrier);
    }

    /*public function destroy(collaborateur $collaborateur, $id)
    {
        $row = collaborateur::destroy($id);
        return redirect('/dashboard');
    }*/
}
