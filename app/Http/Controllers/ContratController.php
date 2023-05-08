<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        error_log("controller");
        $contrats=Contrat::all();
        return response()->json($contrats);
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
        $contrats=new Contrat();
        $contrats->prixTotal=$request->input('prixTotal');
        $contrats->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contrats=Contrat::find($id);
        return response()->json($contrats);
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
        $contrats=Contrat::find($id);
        $contrats->prixTotal=$request->input('prixTotal');
        $contrats->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contrats=Contrat::find($id);
        if($contrats){
            $contrats->delete();
            return response()->json(['message'=>'Contrat supprimé avec succès']);
        }
        return response()->json(['message'=>'Impossible de trouver contrat'],404);
    }
}
