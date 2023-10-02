<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\Form2Request;
use App\Http\Requests\EmployeformRequest;
use App\Models\Form2;
use App\Models\Employeform;
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
            return redirect()->route('Menus.index')->with('message','Formulaire enregistré');
        }
        catch(Exception $e){
            $employeform2 = Employeform::where('id', $employeform->id)->get()->first();
            $employeform2->delete();
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
        $zoomForm2s = Form2::join('employeforms', 'employeforms.id', '=', 'form2s.employeform_id')
        ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
        ->join('temoins', 'temoins.employeform_id', '=', 'employeforms.id')
        ->join('identifiants', 'identifiants.id', '=', 'employeforms.employe_id')
        ->select('employes.*', 'employeforms.*', 'form2s.*','temoins.*')
        ->where('employeforms.id', '=',  1)
        ->get()->first();

        Log::debug($zoomForm1s);
        return view('Utilisateur.ZoomFormulaire2', compact('zoomForm2s'));
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
