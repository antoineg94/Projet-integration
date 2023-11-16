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
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;

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

            $nombre = DB::table('employeforms')
            ->where('consulte', 'Non-consulté')
            ->where('superieur_id', '=', Session::get('employe_id'))
            ->count();

            $notification += $nombre;
            

            Session::put('notification', $notification);
        }
        else
        {
            Session::put('notification', 0);
        }

        $employe = Employe::where('id', '=', Session::get('employe_id'))->get()->first();

        $procedures = ConsulterProcedure::join('departements', 'consulterprocedures.departement_id', '=', 'departements.id')
            ->select('consulterprocedures.*', 'departements.nom')
            ->where('departement_id', '=', $employe->departement_id)
            ->get();

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
        
        

        return redirect()->route('Admins.listeFormulaire');
    }   


    //Afficher les information d'un des formulaire accident de travail
    public function listeFormulaire()
    {    
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
                ->select('form1s.*', 'employeforms.*', 'employeforms.superieur_id as supId' , 'employes.*')
                ->where('employeforms.id', '=', $liste->id)
                ->get()->first();
                
                $nomSuperieur = Employe::where('id', '=', $zoomForm1s->supId)
                ->get()->first();
          
             // update the employefrom table
                if($zoomForm1s->consulte != "Consulté" && $zoomForm1s->superieur_id == Session::get('employe_id'))
                {
                    $employeform = Employeform::find($liste->id);
                    $employeform->update([
                    'consulte' => "Consulté",
                    'consultant' => "$nomSuperieur->prenom $nomSuperieur->nom",
                    'date_consulte' => date('Y-m-d')
                    ]);
                }
                
                return view('Utilisateur.ZoomFormulaire1', compact('zoomForm1s', 'nomSuperieur'));

            }
            else if($liste->formulaire_id == 2)
            {
             

                $zoomForm2s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                ->join('form2s', 'form2s.employeform_id', '=', 'employeforms.id')
                ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                ->select('form2s.*', 'employeforms.*', 'employeforms.superieur_id as supId' , 'employes.*')
                ->where('employeforms.id', '=', $liste->id)
                ->get()->first();
        
                $nomSuperieur = Employe::where('id', '=', $zoomForm2s->supId)
                ->get()->first();

                // update the employefrom table
                if($zoomForm2s->consulte != "Consulté" && $zoomForm2s->superieur_id == Session::get('employe_id'))
                {
                    $employeform = Employeform::find($liste->id);
                    $employeform->update([
                    'consulte' => "Consulté",
                    'consultant' => "$nomSuperieur->prenom $nomSuperieur->nom",
                    'date_consulte' => date('Y-m-d')
                    ]);
                }

                return view('Utilisateur.ZoomFormulaire2', compact('zoomForm2s', 'nomSuperieur'));

            }
            else if($liste->formulaire_id == 3)
            {
                $zoomForm3s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                ->join('form3s', 'form3s.employeform_id', '=', 'employeforms.id')
                ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                ->select('form3s.*', 'employeforms.*', 'employeforms.superieur_id as supId' , 'employes.*')
                ->where('employeforms.id', '=', $liste->id)
                ->get()->first();
        
                $nomSuperieur = Employe::where('id', '=', $zoomForm3s->supId)
                ->get()->first();

                // update the employefrom table
                if($zoomForm3s->consulte != "Consulté" && $zoomForm3s->superieur_id == Session::get('employe_id'))
                {
                    $employeform = Employeform::find($liste->id);
                    $employeform->update([
                    'consulte' => "Consulté",
                    'consultant' => "$nomSuperieur->prenom $nomSuperieur->nom",
                    'date_consulte' => date('Y-m-d')
                    ]);
                }

                return view('Utilisateur.ZoomFormulaire3', compact('zoomForm3s', 'nomSuperieur'));

            }
            else if($liste->formulaire_id == 4)
            {
                $zoomForm4s = EmployeForm::join('employes', 'employes.id', '=', 'employeforms.employe_id')
                ->join('form4s', 'form4s.employeform_id', '=', 'employeforms.id')
                ->join('formulaires', 'formulaires.id', '=', 'employeforms.formulaire_id')
                ->select('form4s.*', 'employeforms.*', 'employeforms.superieur_id as supId' , 'employes.*')
                ->where('employeforms.id', '=', $liste->id)
                ->get()->first();
        
                $nomSuperieur = Employe::where('id', '=', $zoomForm4s->supId)
                ->get()->first();

                // update the employefrom table
                if($zoomForm4s->consulte != "Consulté" && $zoomForm4s->superieur_id == Session::get('employe_id'))
                {
                    $employeform = Employeform::find($liste->id);
                    $employeform->update([
                    'consulte' => "Consulté",
                    'consultant' => "$nomSuperieur->prenom $nomSuperieur->nom",
                    'date_consulte' => date('Y-m-d')
                    ]);
                }
                

                $superieur_nom = Employe::where('id', '=', $zoomForm4s->supId)->get()->first();


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
            
          if(Session::get('admin') == true){
            return redirect()->route('Admins.listeFormulaire')->with('success', true)->with('message', 'Le formulaire a bien été indiqué comme valide');
          }
          else{
            
                /*
                # Courriel de l'admin
                $admin = Employe::where('admin', 'oui')->get()->first();
                $adminCourriel = $admin->courriel;
    
                $details = [
                    'titre' => 'Un superviseur a confirmé avoir pris connaissance d\'un formulaire',
                    'body' => 'Connectez vous pour le consulter.'
                ];
    
                Session::forget('form_id');
                Mail::to($adminCourriel)->send(new contactMail($details));
               */
                return redirect()->route('Menus.listeFormulaire')->with('success', true)->with('message', 'Le formulaire a bien été indiqué comme valide');   
          }
            
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
            ->orderby('nom_formulaire', 'asc')
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
