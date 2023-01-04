<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Formation;
use App\Models\Klasse;
use App\Models\Tranche;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $etudiant = Etudiant::where('nom', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()->with('classe')->with('formation')->paginate($perPage);
        } else {
            $etudiant = Etudiant::latest()->with('classe')->with('formation')->paginate($perPage);
        }
        return view('admin.etudiant.index', compact('etudiant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classe = Klasse::all();
        $formation = Formation::all();
        return view('admin.etudiant.create', compact('classe', 'formation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'ville' => 'required',
            'telephone' => 'required',
            'photo' => 'required',
            'contact_parent' => 'required',
            'niveau' => 'required',
            'nom_parent' => 'required',
            'ville_provenance' => 'required',
            'niveau_etude' => 'required',
            'sexe' => 'required',
            'age' => 'required',
            'description' => 'required',
            'formation_professionnelle' => 'required',
            'formation_id' => 'required|exists:formations,id',
            'classe_id' => 'required|exists:klasses,id'
        ]);
        $requestData = $request->all();
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
                ->store('uploads', 'public');
        }

        Etudiant::create($requestData);

        return redirect('admin/etudiant')->with('message', 'Vous avez ajouté un nouvel étudiant!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $etudiant = Etudiant::findOrFail($id)->with('classe')->with('formation');

        // return view('admin.etudiant.show', compact('$etudiant','classe','formation'));
        $etudiant = Etudiant::findOrFail($id);
        $classe = Klasse::all();
        $formation = Formation::all();
        return view('admin.etudiant.show', compact('etudiant', 'classe', 'formation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $classe = Klasse::all();
        $formation = Formation::all();
        return view('admin.etudiant.edit', compact('etudiant', 'classe', 'formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'ville' => 'required',
            'telephone' => 'required',
            'photo' => 'required',
            'contact_parent' => 'required',
            'nom_parent' => 'required',
            'ville_provenance' => 'required',
            'niveau_etude' => 'required',
            'sexe' => 'required',
            'age' => 'required',
            'description' => 'required',
            'formation_professionnelle' => 'required',
            'formation_id' => 'required|exists:formations,id',
            'classe_id' => 'required|exists:klasses,id'
        ]);
        $requestData = $request->all();
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
                ->store('uploads', 'public');
        }
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->update($requestData);

        return redirect('admin/etudiant')->with('message', 'Vous avez modifié les information d\'un tudiant avec success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Etudiant::destroy($id);
        return redirect('admin/etudiant')->with('flash_message', 'Vous avez supprimé un etudiant avec success!');
    }
}
