<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Employeform;
use App\Models\Formulaire;
use App\Models\Form1;
use App\Models\Form2;
use App\Models\Form3;
use App\Models\Form4;
use App\Models\Consulterprocedure;

use App\Models\Temoin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $procedures = Consulterprocedure::all();

        return view('accueil', compact('procedures'));
    }

    

    //Afficher les information d'un des formulaire accident de travail
    public function listeFormulaire()
    {

        $formulaires = Formulaire::all();

        $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
        ->select('employeforms.*', 'formulaires.nom as nom_formulaire')
        ->orderby('employeforms.date_formulaire', 'desc')
        ->get();

        return view('Utilisateur.ListeFormulaire', compact('listes', 'formulaires'));
        }

        public function zoomFormulaire(EmployeForm $liste)
        {
            
            if($liste->formulaire_id == 1)
            {


                $zoomForm1s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                ->join('form1s', 'form1s.employeform_id', '=', 'employeforms.id')
                ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                ->select('form1s.*', 'form1s.id as form1s_id', 'employeforms.*', 'employes.*', 'formulaires.nom as nom_formulaire')
                ->where('employeforms.id', '=', $liste->id)
                ->get()->first();
        
                Log::debug($zoomForm1s);
                return view('Utilisateur.ZoomFormulaire1', compact('zoomForm1s'));

            }
            else if($liste->formulaire_id == 2)
            {
             


                $zoomForm2s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                ->join('form2s', 'form2s.employeform_id', '=', 'employeforms.id')
                ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                ->select('form2s.*', 'form2s.id as form2s_id', 'employeforms.*', 'employes.*', 'formulaires.*')
                ->where('employeforms.id', '=', $liste->id)
                ->get()->first();
        
                Log::debug($zoomForm2s);
                return view('Utilisateur.ZoomFormulaire2', compact('zoomForm2s'));

            }
            else if($liste->formulaire_id == 3)
            {

                $zoomForm3s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                ->join('form3s', 'form3s.employeform_id', '=', 'employeforms.id')
                ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                ->select('form3s.*', 'form3s.id as form3s_id', 'employeforms.*', 'employes.*', 'formulaires.*')
                ->where('employeforms.id', '=', $liste->id)
                ->get()->first();
        
                Log::debug($zoomForm3s);
                return view('Utilisateur.ZoomFormulaire3', compact('zoomForm3s'));

            }
            else if($liste->formulaire_id == 4)
            {

                $zoomForm4s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                ->join('form4s', 'form4s.employeform_id', '=', 'employeforms.id')
                ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                ->select('form4s.*', 'form4s.id as form4s_id', 'employeforms.*', 'employes.*', 'formulaires.*')
                ->where('employeforms.id', '=', $liste->id)
                ->get()->first();
        
                Log::debug($zoomForm4s);
                return view('Utilisateur.ZoomFormulaire4', compact('zoomForm4s'));

            }
            else
            {
                return view('Utilisateur.ListeFormulaire');
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
