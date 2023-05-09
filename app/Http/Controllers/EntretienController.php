<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entretien;

class EntretienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        error_log("controller");
        $entretiens=Entretien::all();
        return response()->json($entretiens);
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
        $entretiens=new Entretien();
        $entretiens->dateEntretien=$request->input('dateEntretien');
        $entretiens->typeEntretien=$request->input('typeEntretien');
        $entretiens->kilometrageEntretien=$request->input('kilometrageEntretien');
        $entretiens->kilometrageProchainEntretien=$request->input('kilometrageProchainEntretien');
        $entretiens->description=$request->input('description');
        $entretiens->piecesChangees=$request->input('piecesChangees');
        $entretiens->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $entretiens=Entretien::find($id);
        return response()->json($entretiens);
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
        $entretiens=Entretien::find($id);
        $entretiens->dateEntretien=$request->input('dateEntretien');
        $entretiens->typeEntretien=$request->input('typeEntretien');
        $entretiens->kilometrageEntretien=$request->input('kilometrageEntretien');
        $entretiens->kilometrageProchainEntretien=$request->input('kilometrageProchainEntretien');
        $entretiens->description=$request->input('description');
        $entretiens->piecesChangees=$request->input('piecesChangees');
        $entretiens->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entretiens=Entretien::find($id);
        if($entretiens){
            $entretiens->delete();
            return response()->json(['message'=>'Entretien supprimé avec succès']);
        }
        return response()->json(['message'=>'Impossible de trouver entretien'],404);
    }
}
