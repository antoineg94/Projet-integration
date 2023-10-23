<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Employe;
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

        if(Session::get('superviseur') == true)
        {   
            $notification = 0;
            
            $employes = DB::table('employes')
            ->where('employes.superieur_id', '=', Session::get('employe_id'))
            ->get();


            foreach($employes as $employe)
            {
                $nombre = DB::table('employeforms')
                ->where('consulte', 'Non-consulté')
                ->where('employe_id', '=', $employe->id)
                ->count();

                $notification += $nombre;
            }

            Session::put('notification', $notification);
        }
        else
        {
            Session::put('notification', 0);
        }

        $procedures = Consulterprocedure::all();

        return view('accueil', compact('procedures'));
    }

    // page admin
    public function pageAdmin()
    {
       
            $notification = 0;
            
            $employes = DB::table('employes')
            ->get();


            foreach($employes as $employe)
            {
                $nombre = DB::table('employeforms')
                ->where('employe_id', '=', $employe->id)
                ->count();

                $notification += $nombre;
            }

            Session::put('notification', $notification);

            // notif form valider
            $notificationValider = 0;
            
            $employes = DB::table('employes')
            ->get();


            foreach($employes as $employe)
            {
                $nombre = DB::table('employeforms')
                ->where('statut', '=', 'Valide', 'OR', 'statut', '=', 'Invalide')
                ->where('employe_id', '=', $employe->id)
                ->count();

                $notificationValider += $nombre;
            }

            Session::put('notificationValider', $notificationValider);
        
        

        return view('SA.accueil');
    }   

    public function notif()
    {
        Session::put('trier', 4);
        return redirect()->route('Menus.listeFormulaire');
    }

    

    //Afficher les information d'un des formulaire accident de travail
    public function listeFormulaire()
    {
     
        Session::put('notification', 0);

        if(Session::get('trier') == 1)
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.prenom', 'employes.nom')
            ->where('employeforms.superieur_id', '=', Session::get('employe_id'))
            ->orderby('employeforms.date_formulaire', 'desc')
            ->get(); 
        }
        else if(Session::get('trier') == 2)
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.prenom', 'employes.nom')
            ->where('employeforms.superieur_id', '=', Session::get('employe_id'))
            ->orderby('employeforms.employe_id', 'asc')
            ->orderby('employeforms.date_formulaire', 'desc')
            ->get(); 
        }
        else if(Session::get('trier') == 3)
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.prenom', 'employes.nom')
            ->where('employeforms.superieur_id', '=', Session::get('employe_id'))
            ->orderby('employeforms.formulaire_id', 'desc')
            ->orderby('employeforms.date_formulaire', 'desc')
            ->get(); 
        }
        else if(Session::get('trier') == 4)
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.prenom', 'employes.nom')
            ->where('employeforms.superieur_id', '=', Session::get('employe_id'))
            ->where('consulte', '=', 'Non-consulté')
            ->get(); 
        }
        else
        {
            $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
            ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
            ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.prenom', 'employes.nom')
            ->where('employeforms.superieur_id', '=', Session::get('employe_id'))
            ->orderby('employeforms.date_formulaire', 'desc')
            ->get(); 
        }

        

        
        return view('Utilisateur.ListeFormulaire', compact('listes'));
    }

    

        public function zoomFormulaire(EmployeForm $liste)
        {
            if($liste->formulaire_id == 1)
            {

                $zoomForm1s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                ->join('form1s', 'form1s.employeform_id', '=', 'employeforms.id')
                ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                ->select('form1s.*', 'employeforms.*', 'employes.*')
                ->where('employeforms.id', '=', $liste->id)
                ->get()->first();
        
          
             // update the employefrom table
                $employeform = Employeform::find($liste->id);
                $employeform->update([
                    'consulte' => "Consulté"
                ]);

                return view('Utilisateur.ZoomFormulaire1', compact('zoomForm1s'));

            }
            else if($liste->formulaire_id == 2)
            {
             

                $zoomForm2s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                ->join('form2s', 'form2s.employeform_id', '=', 'employeforms.id')
                ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                ->select('form2s.*', 'employeforms.*', 'employes.*')
                ->where('employeforms.id', '=', $liste->id)
                ->get()->first();
        

                // update the employefrom table
                $employeform = Employeform::find($liste->id);
                $employeform->update([
                    'consulte' => "Consulté"
                ]);

                return view('Utilisateur.ZoomFormulaire2', compact('zoomForm2s'));

            }
            else if($liste->formulaire_id == 3)
            {
                $zoomForm3s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                ->join('form3s', 'form3s.employeform_id', '=', 'employeforms.id')
                ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                ->select('form3s.*', 'employeforms.*', 'employes.*')
                ->where('employeforms.id', '=', $liste->id)
                ->get()->first();
        

                // update the employefrom table
                $employeform = Employeform::find($liste->id);
                $employeform->update([
                    'consulte' => "Consulté"
                ]);

                return view('Utilisateur.ZoomFormulaire3', compact('zoomForm3s'));

            }
            else if($liste->formulaire_id == 4)
            {
                $zoomForm4s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                ->join('form4s', 'form4s.employeform_id', '=', 'employeforms.id')
                ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                ->select('form4s.*', 'employeforms.*', 'employes.*')
                ->where('employeforms.id', '=', $liste->id)
                ->get()->first();
        
                // update the employefrom table
                $employeform = Employeform::find($liste->id);
                $employeform->update([
                    'consulte' => "Consulté"
                ]);
                

                $superieur_nom = Employe::where('id', '=', $zoomForm4s->superieur_id)->get()->first();


                return view('Utilisateur.ZoomFormulaire4', compact('zoomForm4s', 'superieur_nom'));

            }
            else
            {
                return view('Utilisateur.ListeFormulaire');
            }
    



        }
    

    public function trierFormulaire(Request $request)
    {
        try{
            Session::put('trier', $request->Trier);

            return redirect()->route('Menus.listeFormulaire'); 
        }
        catch(Exception $e){
            return view('Utilisateur.ListeFormulaire');
        }
        
    }



    public function validerFormulaire(Request $request, float $idEmpForm)
    {        
        $employeform = Employeform::find($idEmpForm);
        
        if($request->statut == "Invalide")
        {
            $employeform->update([
            'statut' => "En attente"
            ]);
            return redirect()->route('Menus.listeFormulaire')->with('success', true)->with('message', 'Le formulaire a bien été indiqué comme étant en attente');   
        }
        else
        {
            $employeform->update([
            'statut' => "Valide"
            ]);
            return redirect()->route('Menus.listeFormulaire')->with('success', true)->with('message', 'Le formulaire a bien été indiqué comme valide');   
        }
        
        
    }


            // fonction pour afficher les formulaires de l'employé connecté
            public function ListeMesFormulaires()
            {
             
            
        
                if(Session::get('trier') == 1)
                {
                    $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                    ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
                    ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom')
                    ->where('employes.id', '=', Session::get('employe_id'))
                    ->orderby('employeforms.date_formulaire', 'desc')
                    ->get(); 
                }
                else if(Session::get('trier') == 2)
                {
                    $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                    ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
                    ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom')
                    ->where('employes.id', '=', Session::get('employe_id'))
                    ->orderby('employeforms.employe_id', 'asc')
                    ->orderby('employeforms.date_formulaire', 'desc')
                    ->get(); 
                }
                else if(Session::get('trier') == 3)
                {
                    $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                    ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
                    ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom')
                    ->where('employes.id', '=', Session::get('employe_id'))
                    ->orderby('employeforms.formulaire_id', 'desc')
                    ->orderby('employeforms.date_formulaire', 'desc')
                    ->get(); 
                }
                else if(Session::get('trier') == 4)
                {
                    $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                    ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
                    ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom')
                    ->where('employes.id', '=', Session::get('employe_id'))
                    ->get(); 
                }
                else
                {
                    $listes = Employeform::join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                    ->join('employes', 'employes.id', '=', 'employeforms.employe_id')
                    ->select('employeforms.*', 'formulaires.nom as nom_formulaire', 'employes.id as employe_id', 'employes.superieur_id', 'employes.prenom', 'employes.nom')
                    ->where('employes.id', '=', Session::get('employe_id'))
                    ->orderby('employeforms.date_formulaire', 'desc')
                    ->get(); 
                }
        
                
        
                
                return view('Utilisateur.MesFormulaires', compact('listes'));
            }
        
            public function trierMesFormulaire(Request $request)
            {
                try{
                    Session::put('trier', $request->Trier);
        
                    return redirect()->route('Menus.ListeMesFormulaires'); 
                }
                catch(Exception $e){
                    return view('Utilisateur.MesFormulaires');
                }
                
            }
    
            public function zoomMesFormulaire(EmployeForm $liste)
            {
                if($liste->formulaire_id == 1)
                {
    
                    $zoomForm1s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                    ->join('form1s', 'form1s.employeform_id', '=', 'employeforms.id')
                    ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                    ->select('form1s.*', 'employeforms.*', 'employes.*')
                    ->where('employeforms.id', '=', $liste->id)
                    ->get()->first();
            
    
    
                    return view('Utilisateur.ZoomFormulaire1', compact('zoomForm1s'));
    
                }
                else if($liste->formulaire_id == 2)
                {
                 
    
                    $zoomForm2s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                    ->join('form2s', 'form2s.employeform_id', '=', 'employeforms.id')
                    ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                    ->select('form2s.*', 'employeforms.*', 'employes.*')
                    ->where('employeforms.id', '=', $liste->id)
                    ->get()->first();
            
    
    
    
                    return view('Utilisateur.ZoomFormulaire2', compact('zoomForm2s'));
    
                }
                else if($liste->formulaire_id == 3)
                {
                    $zoomForm3s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                    ->join('form3s', 'form3s.employeform_id', '=', 'employeforms.id')
                    ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                    ->select('form3s.*', 'employeforms.*', 'employes.*')
                    ->where('employeforms.id', '=', $liste->id)
                    ->get()->first();
            
    
                    return view('Utilisateur.ZoomFormulaire3', compact('zoomForm3s'));
    
                }
                else if($liste->formulaire_id == 4)
                {
                    $zoomForm4s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                    ->join('form4s', 'form4s.employeform_id', '=', 'employeforms.id')
                    ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                    ->select('form4s.*', 'employeforms.*', 'employes.*')
                    ->where('employeforms.id', '=', $liste->id)
                    ->get()->first();
    
                    
                    return view('Utilisateur.ZoomFormulaire4', compact('zoomForm4s'));
    
                }
                else
                {
                    return view('Utilisateur.ListeFormulaire');
                }
        
    
    
    
            }

}
