<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        error_log("controller");
        $incidents=Incident::all();
        return response()->json($incidents);
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
        $incidents=new Incident();
        $incidents->dateIncident=$request->input('dateIncident');
        $incidents->degats=$request->input('degats');
        $incidents->documents=$request->input('documents');
        $incidents->detailsIncident=$request->input('detailsIncident');
        $incidents->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $incidents=Incident::find($id);
        return response()->json($incidents);
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
        $incidents=Incident::find($id);
        $incidents->dateIncident=$request->input('dateIncident');
        $incidents->degats=$request->input('degats');
        $incidents->documents=$request->input('documents');
        $incidents->detailsIncident=$request->input('detailsIncident');
        $incidents->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $incidents=Incident::find($id);
        if($incidents){
            $incidents->delete();
            return response()->json(['message'=>'Incident supprimé avec succès']);
        }
        return response()->json(['message'=>'Impossible de trouver incident'],404);
    }
}
