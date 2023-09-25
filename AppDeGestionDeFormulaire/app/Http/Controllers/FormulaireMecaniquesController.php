<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form4;
use App\Models\Employeform;
use Illuminate\Support\Facades\Log;
use Session;
class FormulaireMecaniquesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('form_id', 4);
        return view('Formulaires.formulaireMecanique');
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

            $Form4 = new Form4();
            $Form4->employeform_id = $employeform->id;
            $Form4->no_unite = $request->no_unite;
            $Form4->departement = $request->departement;
            $Form4->vehicule_citoyen = $request->vehicule_citoyen;
            $Form4->save();
            
            Session::forget('form_id');
            return redirect()->route('Menus.index')->with('success', true)->with('message','Le formulaire a été enregistré avec succès');
        
    }
    catch(\Throwable $e)
    {
        Log::debug($e);
        return redirect()->route('formulairesMechaniques.index')->withErrors(['Informations invalide']);
    }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function zoomForm4()
    {
        $zoomForm1s = Form4::join('employeforms', 'employeforms.id', '=', 'form4s.employeform_id')
        ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
        ->join('temoins', 'temoins.employeform_id', '=', 'employeforms.id')
        ->join('identifiants', 'identifiants.id', '=', 'employeforms.employe_id')
        ->select('employes.*', 'employeforms.*', 'form4s.*','temoins.*')
        ->where('employeforms.id', '=',  1)
        ->get()->first();

        Log::debug($zoomForm1s);
        return view('Utilisateur.ZoomFormulaire4', compact('zoomForm4s'));
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
