<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        error_log("controller");
        $clients=Client::all();
        return response()->json($clients);
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
        $clients=new Client();
        $clients->nom=$request->input('nom');
        $clients->prenom=$request->input('prenom');
        $clients->dateNaissance=$request->input('dateNaissance');
        $clients->cin=$request->input('cin');
        $clients->telephone=$request->input('telephone');
        $clients->numPermis=$request->input('numPermis');
        $clients->dateEditionPermis=$request->input('dateEditionPermis');
        $clients->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $clients=Client::find($id);
        return response()->json($clients);
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
        $clients=Client::find($id);
        $clients->nom=$request->input('nom');
        $clients->prenom=$request->input('prenom');
        $clients->dateNaissance=$request->input('dateNaissance');
        $clients->cin=$request->input('cin');
        $clients->telephone=$request->input('telephone');
        $clients->numPermis=$request->input('numPermis');
        $clients->dateEditionPermis=$request->input('dateEditionPermis');
        $clients->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clients=Client::find($id);
        if($clients){
            $clients->delete();
            return response()->json(['message'=>'Client supprimé avec succès']);
        }
        return response()->json(['message'=>'Impossible de trouver client'],404);
    }
}
