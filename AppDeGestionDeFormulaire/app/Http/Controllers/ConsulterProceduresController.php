<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsulterProcedure;
use App\Models\Departement;
use App\Http\Requests\ConsulterProceduresRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


class ConsulterProceduresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $procedures = ConsulterProcedure::join('departements', 'consulterprocedures.departement_id', '=', 'departements.id')
            ->select('consulterprocedures.*', 'departements.nom')
            ->get();

        $departements = Departement::all();
        return view('SA.gestionProcedures', compact('procedures', 'departements'));
    }

//fonction qui affiche les procédure a consulter en fonction de ses accès
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departements = Departement::all();
        return view('consulterProcedures.AjouterProcedure', compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConsulterProceduresRequest $request)
    {
        log::debug($request);

        $departement_id = Departement::where('nom', $request->departement)->first()->id;

        $ajoutProcedure = new ConsulterProcedure();
        $ajoutProcedure->titre = $request->titre;
        $ajoutProcedure->lien = $request->lien;
        $ajoutProcedure->departement_id = $departement_id;

        $ajoutProcedure->save();
               
            return redirect()->route('consulterProcedures.index');
    }

    public function destroy(string $id)
    {
        try{
            $procedure = ConsulterProcedure::findOrFail($id);                 
                
            $procedure->delete();
            return redirect()->route('consulterProcedures.index')->with('message', "Suppression de " . $procedure->titre . " réussi!");
        }
        catch(\Throwable $e){
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('consulterProcedures.index')->withErrors(['la suppression n\'a pas fonctionné']); 
        }
        return redirect()->route('consulterProcedures.index');
            
    }

    public function listeProcedure()
    {
        if(Session::get('trierP') == 1)
        {
            $procedures = ConsulterProcedure::join('departements', 'consulterprocedures.departement_id', '=', 'departements.id')
            ->select('consulterprocedures.*', 'departements.nom')
            ->orderby('created_at', 'desc')
            ->get();
        }
        else if(Session::get('trierP') == 2)
        {
            $procedures = ConsulterProcedure::join('departements', 'consulterprocedures.departement_id', '=', 'departements.id')
            ->select('consulterprocedures.*', 'departements.nom')
            ->orderby('nom', 'asc')
            ->get();
        }
        else
        {
            $procedures = ConsulterProcedure::join('departements', 'consulterprocedures.departement_id', '=', 'departements.id')
            ->select('consulterprocedures.*', 'departements.nom')
            ->get(); 
        }

        return view('SA.gestionProcedures', compact('procedures'));
    }


    public function trierProcedure(Request $request)
    {
        try{
            Session::put('trierP', $request->Trier);

            return redirect()->route('consulterProcedures.listeProcedure'); 
        }
        catch(Exception $e){
            return redirect()->back();
        }
        
    }
}
