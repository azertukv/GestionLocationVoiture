<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // error_log("controller");
        $reservations=Reservation::all();
        // return response()->json($reservations);
        return view('reservation.index')->with('reservations', $reservations);
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
        $reservations=new Reservation();
        $reservations->dateDebutReservation=$request->input('dateDebutReservation');
        $reservations->dateFinReservation=$request->input('dateFinReservation');
        $reservations->nombreJours=$request->input('nombreJours');
        $reservations->save();
        return redirect()->back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reservations=Reservation::find($id);
        return response()->json($reservations);
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
        $reservations=Reservation::find($id);
        $reservations->dateDebutReservation=$request->input('dateDebutReservation');
        $reservations->dateFinReservation=$request->input('dateFinReservation');
        $reservations->nombreJours=$request->input('nombreJours');
        $reservations->save();
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservations=Reservation::find($id);
        if($reservations){
            $reservations->delete();
            return redirect()->back()->with('success', 'Data deleted successfully');
        }
        return redirect()->back()->with('warning', 'Impossible de trouver le client');
    }
}
