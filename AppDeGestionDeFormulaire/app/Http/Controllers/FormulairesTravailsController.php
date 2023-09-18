<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

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

                $date = date('Y-m-d');

                $employeform = new Employeform();
                $employeform->employe_id = Session::get('employe_id');
                $employeform->form_id = Session::get('form_id');
                $employeform->date_formulaire = $date;
                $employeform->save();

                // date du jour
              

                $Form1 = new Form1();
                $Form1->employeform_id = $employeform->id;
                $Form1->date_incident = $request->date_incident;
                $Form1->heure_incident = $request->heure_incident;
                $Form1->blessure = $request->blessure;
                $Form1->type_violence = $request->type_violence;
                $Form1->type_absence = $request->type_absence;



                Session::forget('form_id');
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
