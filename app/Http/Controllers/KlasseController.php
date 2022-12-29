<?php

namespace App\Http\Controllers;

use App\Models\Klasse;
use Illuminate\Http\Request;

class KlasseController extends Controller
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
            $klasse = Klasse::where('nom', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $klasse = Klasse::latest()->paginate($perPage);
        }
        return view('admin.klasse.index', compact('klasse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.klasse.create');
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

        Klasse::create($requestData);

        return redirect('admin/klasse')->with('message', 'Vous avez ajouté une Klasse!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Klasse  $klasse
     * @return \Illuminate\Http\Response
     */
    public function show(Klasse $id)
    {
        $klasse = Klasse::findOrFail($id);

        return view('admin.klasse.show', compact('klasse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klasse  $klasse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $klasse = Klasse::findOrFail($id);

        return view('admin.klasse.edit', compact('klasse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klasse  $klasse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'nom' => 'required',
			'description' => 'required'
		]);
        $requestData = $request->all();

        $klasse = Klasse::findOrFail($id);
        $klasse->update($requestData);

        return redirect('admin/klasse')->with('message', 'Vous avez modifié la classe avec success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klasse  $klasse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Klasse::destroy($id);
        //return redirect('admin/type-rapports')->with('flash_message', 'typeRapport deleted!');
        $message = 'Vous avez supprimé la klasse avec succès!';
        return response()->json($message);
    }
}
