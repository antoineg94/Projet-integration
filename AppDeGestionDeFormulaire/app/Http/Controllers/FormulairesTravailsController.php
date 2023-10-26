<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\Form1Request;
use App\Http\Requests\EmployeformRequest;
use App\Models\Employeform;
use App\Models\Employe;
use App\Models\Form1;
use App\Models\Temoin;
use Illuminate\Support\Facades\Log;
use App\Mail\contactMail;

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


    public function enregistrer(Form1Request $request)
    {

         try{
 
                $date = date('Y-m-d');
                $employe = Employe::where('id', '=', Session::get('employe_id'))
                ->get()->first();

                $employeform = new Employeform();
                $employeform->employe_id = Session::get('employe_id');
                $employeform->formulaire_id = Session::get('form_id');
                $employeform->date_formulaire = $date;
                $employeform->superieur_id = $employe->superieur_id;
                $employeform->save();
 
             
                

                $Form1 = new Form1();
                $Form1->employeform_id = $employeform->id;
                $Form1->fonction_avant = $request->fonction_avant;
                $Form1->date_incident = $request->date_incident;
                $Form1->heure_incident = $request->heure_incident;
                $Form1->lieu = $request->lieu;
                $Form1->secteur = $request->secteur;

                if ($request->premiers_soins == 1){
                $Form1->premiers_soins = "oui";
                $Form1->nom_secouriste = $request->nom_secouriste;
                }
                else
                {
                $Form1->premiers_soins = "non";
                }
                
                $Form1->nature_blessure = $request->nature_blessure;
                $Form1->description_blessure = $request->description_blessure;
                $Form1->description_tache = $request->description_tache;
                $Form1->type_violence = $request->type_violence;
                $Form1->type_absence = $request->type_absence;
                $Form1->temoin = $request->temoin;
                $Form1->save();

                
 
                 Session::forget('form_id');

                 //Mail::to('nathan.lafreniere.01@edu.cegeptr.qc.ca')->send(new contactMail());
                 return redirect()->route('Menus.index')->with('success', true)->with('message','Le formulaire a été enregistré avec succès');
             
         }
         catch(\Throwable $e)
         {
            //delete le formulaire enregistré dans la bd
            $employeform2 = Employeform::where('id', $employeform->id)->get()->first();
            $employeform2->delete();

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
