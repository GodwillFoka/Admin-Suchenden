<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
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
                ->latest()->paginate($perPage);
        } else {
            $etudiant = Etudiant::latest()->paginate($perPage);
        }
        return view('admin.etudiant.show', compact('etudiant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.etudiant.create');
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
			'nom' => 'required'
		]);
        $requestData = $request->all();

        Etudiant::create($requestData);

        return redirect('admin/etudiant')->with('message', 'Vous avez ajouté un nouvel étudiant!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $id)
    {
        $etudiant = Etudiant::findOrFail($id);

        return view('admin.etudiant.show', compact('$etudiant'));
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

        return view('admin.etudiant.edit', compact('etudiant'));
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
			'description' => 'required'
		]);
        $requestData = $request->all();

        $etudiant = Etudiant::findOrFail($id);
        $etudiant->update($requestData);

        return redirect('admin/formation')->with('message', 'Vous avez modifié les information d\'un tudiant avec success!');
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
