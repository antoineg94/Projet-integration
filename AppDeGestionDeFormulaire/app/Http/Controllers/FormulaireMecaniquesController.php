<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Form4Request;
use App\Http\Requests\EmployeformRequest;
use App\Models\Form4;
use App\Models\Employeform;
use App\Models\Employe;
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

    public function enregistrer(Form4Request $request)
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

            $Form4 = new Form4();
            $Form4->employeform_id = $employeform->id;
            $Form4->no_unite = $request->no_unite;
            $Form4->departement = $request->departement;
            $Form4->permis_conduire = $request->permis_conduire;
            
            if ($request->vehicule_citoyen == 1){
                $Form4->vehicule_citoyen = "Oui";
            }
            else
            {
                $Form4->vehicule_citoyen = "Non";
            }

            $Form4->save();
            
            Session::forget('form_id');
            return redirect()->route('Menus.index')->with('success', true)->with('message','Le formulaire a été enregistré avec succès');
        
    }
    catch(\Throwable $e)
    {
        $employeform2 = Employeform::where('id', $employeform->id)->get()->first();
        $employeform2->delete();
        return redirect()->route('formulaireMecaniques.index')->withErrors(['Informations invalide']);
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
