<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\Employeform;
use App\Models\Form1;
use App\Models\Temoin;
use App\Models\Temoinform;
use Illuminate\Support\Facades\Log;

class FormulairesTravailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('form_id', 1);
        return view('Formulaires.formulaireTravail');
    }


    public function enregistrer(Request $request)
    {

         Log::Debug($request);

         try{
 
                 $date = date('Y-m-d');
 
                 $employeform = new Employeform();
                 $employeform->employe_id = Session::get('employe_id');
                 $employeform->formulaire_id = Session::get('form_id');
                 $employeform->date_formulaire = $date;
                 $employeform->save();
 
                 // date du jour
               
 
                 $Form1 = new Form1();
                 $Form1->employeform_id = $employeform->id;
                 $Form1->date_incident = $request->date_incident;
                 $Form1->heure_incident = $request->heure_incident;
                 $Form1->lieu = $request->lieu;
                 $Form1->secteur = $request->secteur;
                 $Form1->nature_blessure = $request->nature_blessure;
                 $Form1->description_blessure = $request->description_blessure;
                 $Form1->description_tache = $request->description_tache;
                 $Form1->type_violence = $request->type_violence;
                 $Form1->type_absence = $request->type_absence;
          
                 $Form1->save();
 
                 $temoin = new Temoin();
                 $temoin->nom = $request->nom_temoin;
                    $temoin->save();
 
                 Session::forget('form_id');
                 return redirect()->back()->with('success', true)->with('message','Le formulaire a été enregistré avec succès');
             
         }
         catch(\Throwable $e)
         {
             Log::debug($e);
             return redirect()->route('formulairesTravails.index')->withErrors(['Informations invalide']);
         }
         
 
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function zoomForm1()
    {
        //Afficher tout les informations du formulaire 1
        $zoomForm1s = Form1::join('employeforms', 'employeforms.id', '=', 'form1s.employeform_id')
        ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
        ->join('temoins', 'temoins.employeform_id', '=', 'employeforms.id')
        ->join('identifiants', 'identifiants.id', '=', 'employeforms.employe_id')
        ->select('employes.*', 'employeforms.*', 'form1s.*','temoins.*')
        ->where('employeforms.id', '=',  1)
        ->get()->first();

        Log::debug($zoomForm1s);
        return view('Utilisateur.ZoomFormulaire1', compact('zoomForm1s'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
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
