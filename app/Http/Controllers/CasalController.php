<?php

namespace App\Http\Controllers;

use App\Models\Casal;
use App\Models\Ciutat;
use Illuminate\Http\Request;


class CasalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $casals = Casal::all();

        $title = 'Casals';

        return view('casals.index', compact('casals', 'title'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nom' => 'required|string|max:255',
            'data_inici' => 'required|date',
            'data_final' => 'required|date',
            'n_places' => 'required|integer',
            'ciutat_id' => 'required',
        ]);

        if ($request->data_inici > $request->data_final) {
            return redirect()->route('index');
        } else {
            Casal::create([
                'nom' => $request->nom,
                'data_inici' => $request->data_inici,
                'data_final' => $request->data_final,
                'n_places' => $request->n_places,
                'id_ciutat' => $request->ciutat_id,
            ]);
    
            return redirect()->route('index');
        }

    }

    public function afegir()
    {
        $title = 'Afegir Casal';

        $ciutat = Ciutat::all();

        return view('casals.afegir', compact('title', 'ciutat'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Casal  $casal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $casal = Casal::find($id);

        $title = 'Editar Casal';

        $ciutat = Ciutat::all();

        return view('casals.editar', compact('casal', 'title', 'ciutat'));

    }

    public function edited(Request $request) {

        $request->validate([
            'nom' => 'required|string|max:255',
            'data_inici' => 'required|date',
            'data_final' => 'required|date',
            'n_places' => 'required|integer',
            'ciutat_id' => 'required',
        ]);

        if ($request->data_inici > $request->data_final) {
            return redirect()->route('index');
        } else {

            Casal::findOrFail($request->id)->update([
                'nom' => $request->nom,
                'data_inici' => $request->data_inici,
                'data_final' => $request->data_final,
                'n_places' => $request->n_places,
                'id_ciutat' => $request->ciutat_id,
            ]);
    
            return redirect()->route('index');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Casal  $casal
     * @return \Illuminate\Http\Response
     */
    public function edit(Casal $casal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Casal  $casal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Casal $casal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Casal  $casal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Casal::findOrFail($id)->delete();

        return redirect()->route('index');


    }
}
