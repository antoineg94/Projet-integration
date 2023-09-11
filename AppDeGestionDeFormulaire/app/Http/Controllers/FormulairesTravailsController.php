<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FormulairesTravailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Formulaires.formulaireTravail');
    }


    public function enregistrer(Request $request)
    {
        return redirect()->back()->with('success', true)->with('message','Le formulaire a été enregistré avec succès');
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
        // Session::put('campagneNom', $nomCampagne->nomCampagne);


        try{
            // $link = new Employeform($request->all());
            // $link->panier_id = $paniers->id;
            // $link->article_id = $request->article_id;
            // $link->save();


            return redirect()->back()->with('success', true)->with('message','Le formulaire a été enregistré avec succès');
            
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
            return redirect()->route('')->withErrors(['Informations invalide']);
        }
        

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
