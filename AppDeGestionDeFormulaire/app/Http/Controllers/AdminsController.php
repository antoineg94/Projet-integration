<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employe;
use App\Models\Employeform;
use App\Models\Formulaire;
use App\Models\Form1;
use App\Models\Form2;
use App\Models\Form3;
use App\Models\Form4;
use App\Models\Consulterprocedure;

use Session;
class AdminsController extends Controller
{
    public function listeFormulaire()
    {
        


        if(Session::get('trier') == 1)
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom')
            ->orderby('employeforms.date_formulaire', 'desc')
            ->get(); 
        }
        else if(Session::get('trier') == 2)
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom')

            ->orderby('employeforms.employe_id', 'asc')
            ->orderby('employeforms.date_formulaire', 'desc')
            ->get(); 
        }
        else if(Session::get('trier') == 3)
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom')

            ->orderby('employeforms.formulaire_id', 'desc')
            ->orderby('employeforms.date_formulaire', 'desc')
            ->get(); 
        }
        else if(Session::get('trier') == 4)
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom')


            ->get(); 
        }
        else
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom')

            ->orderby('employeforms.date_formulaire', 'desc')
            ->get(); 
        }

        

        
        return view('SA.listeTousFormulaires', compact('listes'));
    }


    public function trierFormulaire(Request $request)
    {
        try{
            Session::put('trier', $request->Trier);

            return redirect()->route('Admins.listeFormulaire'); 
        }
        catch(Exception $e){
            return redirect()->back();
        }
        
    }

    public function adminZoomFormulaire(EmployeForm $liste)
    {
        if($liste->formulaire_id == 1)
        {

            $zoomForm1s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->join('form1s', 'form1s.employeform_id', '=', 'employeforms.id')
            ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->select('form1s.*', 'employeforms.*', 'employes.*')
            ->where('employeforms.id', '=', $liste->id)
            ->get()->first();
    


            return view('SA.AdminZoomFormulaire1', compact('zoomForm1s'));

        }
        else if($liste->formulaire_id == 2)
        {
            

            $zoomForm2s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->join('form2s', 'form2s.employeform_id', '=', 'employeforms.id')
            ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->select('form2s.*', 'employeforms.*', 'employes.*')
            ->where('employeforms.id', '=', $liste->id)
            ->get()->first();
    



            return view('SA.AdminZoomFormulaire2', compact('zoomForm2s'));

        }
        else if($liste->formulaire_id == 3)
        {
            $zoomForm3s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->join('form3s', 'form3s.employeform_id', '=', 'employeforms.id')
            ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->select('form3s.*', 'employeforms.*', 'employes.*')
            ->where('employeforms.id', '=', $liste->id)
            ->get()->first();
    

            return view('SA.AdminZoomFormulaire3', compact('zoomForm3s'));

        }
        else if($liste->formulaire_id == 4)
        {
            $zoomForm4s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->join('form4s', 'form4s.employeform_id', '=', 'employeforms.id')
            ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->select('form4s.*', 'employeforms.*', 'employes.*')
            ->where('employeforms.id', '=', $liste->id)
            ->get()->first();

            
            return view('SA.AdminZoomFormulaire4', compact('zoomForm4s'));

        }
        else
        {
            return view('SA.listeTousFormulaires');
        }




    }

}
