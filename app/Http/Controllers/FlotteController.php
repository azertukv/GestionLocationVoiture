<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flotte;

class FlotteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        error_log("controller");
        $flottes=Flotte::all();
        return response()->json($flottes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flottes=new Flotte();
        $flottes->immatriculation=$request->input('immatriculation');
        $flottes->marque=$request->input('marque');
        $flottes->type=$request->input('type');
        $flottes->modele=$request->input('modele');
        $flottes->kilometrage=$request->input('kilometrage');
        $flottes->nbrPorte=$request->input('nbrPorte');
        $flottes->couleur=$request->input('couleur');
        $flottes->dispnibilite=$request->input('dispnibilite');
        $flottes->expeditionCarteGrise=$request->input('expeditionCarteGrise');
        $flottes->dateFinAssurance=$request->input('dateFinAssurance');
        $flottes->prixLocation=$request->input('prixLocation');
        $flottes->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $flottes=Flotte::find($id);
        return response()->json($flottes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $flottes=Flotte::find($id);
        $flottes->immatriculation=$request->input('immatriculation');
        $flottes->marque=$request->input('marque');
        $flottes->type=$request->input('type');
        $flottes->modele=$request->input('modele');
        $flottes->kilometrage=$request->input('kilometrage');
        $flottes->nbrPorte=$request->input('nbrPorte');
        $flottes->couleur=$request->input('couleur');
        $flottes->dispnibilite=$request->input('dispnibilite');
        $flottes->expeditionCarteGrise=$request->input('expeditionCarteGrise');
        $flottes->dateFinAssurance=$request->input('dateFinAssurance');
        $flottes->prixLocation=$request->input('prixLocation');
        $flottes->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flottes=Flotte::find($id);
        if($flottes){
            $flottes->delete();
            return response()->json(['message'=>'Flotte supprimée avec succès']);
        }
        return response()->json(['message'=>'Impossible de trouver flotte'],404);
    }
}
