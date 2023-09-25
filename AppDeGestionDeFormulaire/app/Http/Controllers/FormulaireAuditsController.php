<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form3;
use App\Models\Employeform;
use Session;
use Illuminate\Support\Facades\Log;


class FormulaireAuditsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('form_id', 3);
        return view('Formulaires.formulaireAudit');
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

            $Form3 = new Form3();
            $Form3->employeform_id = $employeform->id;
            $Form3->lieu = $request->lieu;
            $Form3->epi = $request->epi;
            $Form3->tenue = $request->tenue;
            $Form3->comportement = $request->comportement;
            $Form3->signalisation = $request->signalisation;
            $Form3->fiche_signal = $request->fiche_signal;
            $Form3->travaux = $request->travaux;
            $Form3->espace_clos = $request->espace_clos;
            $Form3->methode_travail = $request->methode_travail;
            $Form3->autre = $request->autre;
            $Form3->respect_distance = $request->respect_distance;
            $Form3->port_epi = $request->port_epi;
            $Form3->respect_proced = $request->respect_proced;
            $Form3->description = $request->description;

            $Form3->save();


            return redirect()->route('Menus.index')->with('message','Formulaire enregistré avec succès');

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

    public function zoomForm3()
    {
        $zoomForm3s = Form3::join('employeforms', 'employeforms.id', '=', 'form3s.employeform_id')
        ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
        ->join('temoins', 'temoins.employeform_id', '=', 'employeforms.id')
        ->join('identifiants', 'identifiants.id', '=', 'employeforms.employe_id')
        ->select('employes.*', 'employeforms.*', 'form3s.*','temoins.*')
        ->where('employeforms.id', '=',  1)
        ->get()->first();

        Log::debug($zoomForm3s);
        return view('Utilisateur.ZoomFormulaire1', compact('zoomForm3s'));
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
