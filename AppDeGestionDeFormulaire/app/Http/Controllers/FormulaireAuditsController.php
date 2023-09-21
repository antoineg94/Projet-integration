<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class FormulaireAuditsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Formulaires.formulaireAudit');
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
