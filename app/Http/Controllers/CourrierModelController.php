<?php

namespace App\Http\Controllers;

use App\Models\CourrierModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CourrierModelController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('courrier_model')->with('model_arr', CourrierModel::all());
    }

    public function store(Request $request)
    {
        $model = new CourrierModel();
        $model->name = $request->input('name');
        $model->content = $request->input('content');
        $model->save();
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

    public function search(CourrierModel $courrierModel)
    {
        $q = request()->input('search');

        $model = Model::where('name', 'like', "%$q%")
            ->orwhere('content', 'like', "%$q%")
            ->paginate(6);

        return view('model_search')->with('model_arr', $model);
    }

    /*public function destroy(collaborateur $collaborateur, $id)
    {
        $row = collaborateur::destroy($id);
        return redirect('/dashboard');
    }*/
}
