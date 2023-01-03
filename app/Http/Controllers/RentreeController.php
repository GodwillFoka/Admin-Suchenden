<?php

namespace App\Http\Controllers;

use App\Models\Rentree;
use Illuminate\Http\Request;

class RentreeController extends Controller
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
            $rentree = Rentree::where('nom', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('date_debut', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $rentree = Rentree::latest()->paginate($perPage);
        }
        return view('admin.rentree.index', compact('rentree'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rentree.create');
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
            'date_debut' => 'required'
		]);
        $requestData = $request->all();

        Rentree::create($requestData);

        return redirect('admin/rentree')->with('message', 'Vous avez ajouté une rentrée!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rentree  $rentree
     * @return \Illuminate\Http\Response
     */
    public function show(Rentree $id)
    {
        $rentree = Rentree::findOrFail($id);

        return view('admin.rentree.show', compact('rent$rentree'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rentree  $rentree
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rentree = Rentree::findOrFail($id);

        return view('admin.rentree.edit', compact('rentree'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rentree  $rentree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'nom' => 'required',
			'description' => 'required'
		]);
        $requestData = $request->all();

        $rentree = Rentree::findOrFail($id);
        $rentree->update($requestData);

        return redirect('admin/rentree')->with('message', 'Vous avez modifié la rentrée avec success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rentree  $rentree
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rentree::destroy($id);
        return redirect('admin/rentree')->with('flash_message', 'Vous avez supprimé la rentree avec success!');

    }
}
