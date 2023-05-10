<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        error_log("controller");
        $users=User::all();
        return response()->json($users);
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
        $users=new User();
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->email_verified_at=$request->input('email_verified_at');
        $users->password=$request->input('password');
        $users->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users=User::find($id);
        return response()->json($users);
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
        $users=User::find($id);
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->email_verified_at=$request->input('email_verified_at');
        $users->password=$request->input('password');
        $users->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users=User::find($id);
        if($users){
            $contrats->delete();
            return response()->json(['message'=>'User supprimé avec succès']);
        }
        return response()->json(['message'=>'Impossible de trouver user'],404);
    }
}
