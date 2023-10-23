<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\Form2Request;
use App\Http\Requests\EmployeformRequest;
use App\Models\Form2;
use App\Models\Employeform;
use App\Models\Employe;
use App\Models\Temoin;
use Illuminate\Support\Facades\Log;


class FormulaireSituationDangereusesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('form_id', 2);
        return view('Formulaires.formulaireSituationDangereuse');
    }

    public function enregistrer(Form2Request $request)
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

            $Form2 = new Form2();
            $Form2->employeform_id = $employeform->id;
            $Form2->fonction_avant = $request->fonction_avant;
            $Form2->secteur = $request->secteur;
            $Form2->date_observ = $request->date_observ;
            $Form2->heure_observ = $request->heure_observ;
            $Form2->lieu = $request->lieu;
            $Form2->description = $request->description;
            $Form2->proposition = $request->proposition;
            $Form2->save();

            if($request->nom_temoin1 != null){
                $temoin1 = new Temoin();
                $temoin1->nom = $request->nom_temoin1;
                $temoin1->employeform_id = $employeform->id;
                $temoin1->save();
            }
            if($request->nom_temoin2 != null){
                $temoin2 = new Temoin();
                $temoin2->nom = $request->nom_temoin2;
                $temoin2->employeform_id = $employeform->id;
                $temoin2->save();
            }
            Session::forget('form_id');
            return redirect()->route('Menus.index')->with('success', true)->with('message','Le formulaire a été enregistré avec succès');
        }
        catch(Exception $e){
            $employeform2 = Employeform::where('id', $employeform->id)->get()->first();
            $employeform2->delete();
            return redirect()->back()->withErrors(['Informations invalide']);
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
