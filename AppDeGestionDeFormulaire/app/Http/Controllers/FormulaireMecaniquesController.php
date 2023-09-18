<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class FormulaireMecaniquesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Formulaires.formulaireMecanique');
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

    public function zoomForm4()
    {
        $zoomForm1s = Form4::join('employeforms', 'employeforms.id', '=', 'form1s.employeform_id')
        ->join('Employe')
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
