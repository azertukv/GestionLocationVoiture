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

        $clients=Client::all();
        // $clients = Client::with("reservations")->get();
        // return response()->json($clients);
        return view('client.index')->with('clients', $clients);
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
        view('client.ajout')->with('clients', $clients);
        $clients->nom=$request->input('nom');
        $clients->prenom=$request->input('prenom');
        $clients->dateNaissance=$request->input('dateNaissance');
        $clients->cin=$request->input('cin');
        $clients->telephone=$request->input('telephone');
        $clients->numPermis=$request->input('numPermis');
        $clients->dateEditionPermis=$request->input('dateEditionPermis');
        $clients->save();
        return redirect()->back()->with('success', 'Data added successfully');
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
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clients=Client::find($id);
        if($clients){
            $clients->delete();
            return redirect()->back()->with('success', 'Data deleted successfully');
        }
        return redirect()->back()->with('warning', 'Impossible de trouver le client');
    }
}
