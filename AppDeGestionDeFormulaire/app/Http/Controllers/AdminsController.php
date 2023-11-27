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
            ->join('employes as sup', 'sup.id', '=', 'employes.superieur_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom', 'sup.prenom as sup_prenom', 'sup.nom as sup_nom')
            ->orderby('employeforms.date_formulaire', 'desc')
            ->get(); 
        }
        else if(Session::get('trier') == 2)
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->join('employes as sup', 'sup.id', '=', 'employes.superieur_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom', 'sup.prenom as sup_prenom', 'sup.nom as sup_nom')
            ->orderby('employes.prenom', 'asc')
            ->orderby('employes.nom', 'asc')
            ->get(); 
        }
        else if(Session::get('trier') == 3)
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->join('employes as sup', 'sup.id', '=', 'employes.superieur_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom', 'sup.prenom as sup_prenom', 'sup.nom as sup_nom')
            ->orderby('employeforms.nom_formulaire', 'desc')
            ->get(); 
        }
        else if(Session::get('trier') == 4)
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->join('employes as sup', 'sup.id', '=', 'employes.superieur_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom', 'sup.prenom as sup_prenom', 'sup.nom as sup_nom')
            ->orderby('sup_prenom', 'asc')
            ->orderby('sup_nom', 'asc')
            ->get(); 
        }
        else
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->join('employes as sup', 'sup.id', '=', 'employes.superieur_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom', 'sup.prenom as sup_prenom', 'sup.nom as sup_nom')
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

    public function zoom(Request $request)
    {
        try{
            $procedure = Consulterprocedure::findOrFail($request->id);
            return view('SA.ZoomgestionProcedures', compact('procedure'));
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
            ->select('form1s.*', 'employeforms.*', 'employes.*', 'employeforms.superieur_id as supId')
            ->where('employeforms.id', '=', $liste->id)
            ->get()->first();

            $nomSuperieur = Employe::where('id', '=', $zoomForm1s->supId)
                ->get()->first();
    
            if($zoomForm1s->consulte != "Consulté" && $zoomForm1s->superieur_id == Session::get('employe_id'))
                {
                    $employeform = Employeform::find($liste->id);
                    $employeform->update([
                    'consulte' => "Consulté",
                    'consultant' => "$nomSuperieur->prenom $nomSuperieur->nom",
                    'date_consulte' => date('Y-m-d')
                    ]);
                }

            return view('SA.AdminZoomFormulaire1', compact('zoomForm1s'));

        }
        else if($liste->formulaire_id == 2)
        {
            

            $zoomForm2s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->join('form2s', 'form2s.employeform_id', '=', 'employeforms.id')
            ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->select('form2s.*', 'employeforms.*', 'employes.*','employeforms.superieur_id as supId')
            ->where('employeforms.id', '=', $liste->id)
            ->get()->first();
    

            $nomSuperieur = Employe::where('id', '=', $zoomForm2s->supId)
                ->get()->first();

            if($zoomForm2s->consulte != "Consulté" && $zoomForm2s->superieur_id == Session::get('employe_id'))
                {
                    $employeform = Employeform::find($liste->id);
                    $employeform->update([
                    'consulte' => "Consulté",
                    'consultant' => "$nomSuperieur->prenom $nomSuperieur->nom",
                    'date_consulte' => date('Y-m-d')
                    ]);
                }

            return view('SA.AdminZoomFormulaire2', compact('zoomForm2s'));

        }
        else if($liste->formulaire_id == 3)
        {
            $zoomForm3s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->join('form3s', 'form3s.employeform_id', '=', 'employeforms.id')
            ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->select('form3s.*', 'employeforms.*', 'employes.*','employeforms.superieur_id as supId')
            ->where('employeforms.id', '=', $liste->id)
            ->get()->first();

            $nomSuperieur = Employe::where('id', '=', $zoomForm3s->supId)
                ->get()->first();
    
            if($zoomForm3s->consulte != "Consulté" && $zoomForm3s->superieur_id == Session::get('employe_id'))
                {
                    $employeform = Employeform::find($liste->id);
                    $employeform->update([
                    'consulte' => "Consulté",
                    'consultant' => "$nomSuperieur->prenom $nomSuperieur->nom",
                    'date_consulte' => date('Y-m-d')
                    ]);
                }

            return view('SA.AdminZoomFormulaire3', compact('zoomForm3s'));

        }
        else if($liste->formulaire_id == 4)
        {
            $zoomForm4s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->join('form4s', 'form4s.employeform_id', '=', 'employeforms.id')
            ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->select('form4s.*', 'employeforms.*', 'employes.*','employeforms.superieur_id as supId')
            ->where('employeforms.id', '=', $liste->id)
            ->get()->first();

            $nomSuperieur = Employe::where('id', '=', $zoomForm4s->supId)
                ->get()->first();

            if($zoomForm4s->consulte != "Consulté" && $zoomForm4s->superieur_id == Session::get('employe_id'))
                {
                    $employeform = Employeform::find($liste->id);
                    $employeform->update([
                    'consulte' => "Consulté",
                    'consultant' => "$nomSuperieur->prenom $nomSuperieur->nom",
                    'date_consulte' => date('Y-m-d')
                    ]);
                }

            return view('SA.AdminZoomFormulaire4', compact('zoomForm4s'));

        }
        else
        {
            return view('SA.listeTousFormulaires');
        }




    }

}
