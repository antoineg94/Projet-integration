<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Models\Form2;
use App\Models\Employeform;
use App\Models\Temoins;
use Illuminate\Support\Facades\Log;

class FormulaireSituationDangereusesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Formulaires.formulaireSituationDangereuse');
    }

    public function enregistrer(Request $request)
    {
        Log::debug($request);   

        try{
            $date = date('Y-m-d');
 
            $employeform = new Employeform();
            $employeform->employe_id = Session::get('employe_id');
            $employeform->formulaire_id = Session::get('form_id');
            $employeform->date_formulaire = $date;
            $employeform->save();

            $Form2 = new Form2();
            $Form2->employeform_id = $employeform->id;
            $Form2->secteur = $request->secteur;
            $Form2->date_observ = $request->date_observ;
            $Form2->heure_observ = $request->heure_observ;
            $Form2->lieu = $request->lieu;
            $Form2->description = $request->description;
            $Form2->proposition = $request->proposition;
            $Form2->save();

            if($request->nom_temoin1 != null){
                $temoin = new Temoins();
                $temoin->nom = $request->nom_temoin1;
                $temoin->save();
            }
            if($request->nom_temoin2 != null){
                $temoin = new Temoins();
                $temoin->nom = $request->nom_temoin2;
                $temoin->save();
            }

            return view('Accueil')->with('message','Formulaire enregistré');
        }
        catch(Exception $e){
            return redirect()->back()->with('message','Une erreur est survenue lors de l\'enregistrement du formulaire');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function zoomForm2()
    {
        $zoomForm1s = Form2::join('employeforms', 'employeforms.id', '=', 'form1s.employeform_id')
        ->join('Employe')
        ->join('TemoinsForm')
        ->join('Temoins')
        ->join('Identifiant')
        ->select('')
        ->where('employeform_id', '=',  1)
        ->get();
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
