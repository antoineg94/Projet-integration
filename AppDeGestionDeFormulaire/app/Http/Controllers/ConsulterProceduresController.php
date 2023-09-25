<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsulterProceduresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

//fonction qui affiche les procédure a consulter en fonction de ses accès
    public function consulterProcedures()
    {
        $procedures = Procedure::all();
        return view('accueil', ['procedures' => $procedures]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ConsulterProcedures.AjouterProcedure');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
                $procedure = new ConsulterProcedures($request->all());
                $procedure->save();
            }
        
            catch (\Throwable $e) {
                //Gérer l'erreur
                Log::debug($e);
            }
            return redirect()->route('accueil');
            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
