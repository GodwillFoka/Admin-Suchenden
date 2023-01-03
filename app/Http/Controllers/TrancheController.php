<?php

namespace App\Http\Controllers;

use App\Models\Tranche;
use Illuminate\Http\Request;

class TrancheController extends Controller
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
            $tranche = Tranche::where('montant', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tranche = Tranche::latest()->paginate($perPage);
        }
        return view('admin.tranche.index', compact('tranche'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tranche.create');
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
			'montant' => 'required|min:1'
		]);
        $requestData = $request->all();
        Tranche::create($requestData);

        return redirect('admin/tranche')->with('message', 'Vous avez ajouté une tranche!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tranche  $tranche
     * @return \Illuminate\Http\Response
     */
    public function show(Tranche $id)
    {
        $tranche = Tranche::findOrFail($id);

        return view('admin.tranche.show', compact('$tranche'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tranche  $tranche
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tranche = Tranche::findOrFail($id);

        return view('admin.tranche.edit', compact('tranche'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tranche  $tranche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'nom' => 'required',
			'montant' => 'required|min:1'
		]);
        $requestData = $request->all();

        $tranche = Tranche::findOrFail($id);
        $tranche->update($requestData);

        return redirect('admin/tranche')->with('message', 'Vous avez modifié la tranche avec success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tranche  $tranche
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tranche::destroy($id);
        return redirect('admin/tranche')->with('flash_message', 'Vous avez supprimé la tranche avec success!');
    }
}
