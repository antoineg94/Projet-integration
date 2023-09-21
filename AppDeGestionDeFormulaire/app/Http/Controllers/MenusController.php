<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Employeform;
use App\Models\Formulaire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('accueil');
    }

    

    //Afficher les information d'un des formulaire accident de travail
    public function listeFormulaire()
    {

        $formulaires = Formulaire::all();

        $listes = Employeform::all();

        return view('Utilisateur.ListeFormulaire', compact('listes', 'formulaires'));
        }

    public function zoomFormulaire()
    {
        
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
        //
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
