<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsulterProcedure;
use App\Models\Departement;
use Illuminate\Support\Facades\Log;


class ConsulterProceduresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $procedures = ConsulterProcedure::all();
        log::debug($procedures);
        return view('SA.gestionProcedures', compact('procedures'));
    }

//fonction qui affiche les procédure a consulter en fonction de ses accès
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departements = Departement::all();
        return view('ConsulterProcedures.AjouterProcedure', compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            
                $procedure = new ConsulterProcedures($request->all());
            // $titre
               // $lien
               // $description
               // $departement
                $procedure->save();
            }
        
            catch (\Throwable $e) {
                //Gérer l'erreur
                Log::debug($e);
            }
            return view('accueil');
            
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
