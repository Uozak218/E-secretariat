<?php

namespace App\Http\Controllers;

use App\Models\courrier;
use Illuminate\Http\Request;

class CourrierController extends Controller
{
    public function index()
    {
        //
    }

    /*public function create()
    {
        $contact = contact::all();

        return view('newcourrier')->with('contact_arr', contact::all());;
    }*/

    public function store(Request $request)
    {
        $cour_rier = new courrier();
        $cour_rier->type = $request->input('type');
        $cour_rier->objet = $request->input('objet');
        $cour_rier->nbrpieces = $request->input('nbrpieces');
        $cour_rier->contact_id = $request->input('contact_id');
        $cour_rier->save();
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

    public function search(courrier $courrier)
    {
        request()->validate([
            'search' => 'required|min:3'
        ]);
        
        $q = request()->input('search');

        $cour_rier = courrier::where('type', 'like', "%$q%")
            ->orwhere('objet', 'like', "%$q%")
            ->orwhere('contact', 'like', "%$q%")
            ->orwhere('nbrpieces', 'like', "%$q%")
            ->paginate(6);

        return view('courriersearch')->with('courrier_arr', $cour_rier);
    }

    /*public function destroy(collaborateur $collaborateur, $id)
    {
        $row = collaborateur::destroy($id);
        return redirect('/dashboard');
    }*/
}
