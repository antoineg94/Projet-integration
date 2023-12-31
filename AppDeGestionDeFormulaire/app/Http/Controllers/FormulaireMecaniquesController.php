<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Form4Request;
use App\Http\Requests\EmployeformRequest;
use App\Models\Form4;
use App\Models\Employeform;
use App\Models\Employe;
use App\Models\Departement;
use Illuminate\Support\Facades\Log;
use App\Mail\contactMail;
use Session;
use Illuminate\Support\Facades\Mail;

class FormulaireMecaniquesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $departements = Departement::orderby('nom', 'ASC')
        ->get();

        Session::put('form_id', 4);
        return view('Formulaires.formulaireMecanique', compact('departements'));
    }

    public function enregistrer(Form4Request $request)
    {
        try{
           

            $date = date('Y-m-d');
            $employe = Employe::where('id', '=', Session::get('employe_id'))
            ->get()->first();

            $superieur = Employe::where('id', '=', $employe->superieur_id)
            ->get()->first();

            $employeform = new Employeform();
            $employeform->employe_id = Session::get('employe_id');
            $employeform->formulaire_id = 4;
            $employeform->date_formulaire = $date;

            if($superieur->etat == 'actif')
            {
                $employeform->superieur_id = $employe->superieur_id;
            }
            else
            {
                $employeform->superieur_id = $superieur->superieur_id;
            }

            $employeform->save();

            $Form4 = new Form4();
            $Form4->employeform_id = $employeform->id;
            $Form4->date = $request->date;
            $Form4->heure = $request->heure;
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

            // on vérifie si un formulaire identique existe déjà
            $form = Form4::join('employeforms', 'employeform_id', '=', 'employeforms.id')
            ->where('date', '=', $Form4->date)
            ->where('heure', '=', $Form4->heure)
            ->where('no_unite', '=', $Form4->no_unite)
            ->where('departement', '=', $Form4->departement)
            ->where('permis_conduire', '=', $Form4->permis_conduire)
            ->where('vehicule_citoyen', '=', $Form4->vehicule_citoyen)
            ->where('employe_id', '=', Session::get('employe_id'))
            ->get()->first();

           
            if ($form != null)
            {
               //redirect sur la même page avec message d'erreur
                $employeform2 = Employeform::where('id', $employeform->id)->get()->first();
                $employeform2->delete();
                return redirect()->route('formulaireMecaniques.index')->with('message', true)->with('msg','Informations déjà enregistrées');
            }
            else
            {
                
                $Form4->save();
                
                Session::forget('form_id');
                /*
                    // envoi email
                    $details = [
                        'titre' => 'Vous avez reçu un nouveau rapport d\'accident(véhicule) d\'un employé',
                        'body' => 'Connectez vous pour le consulter.'
                    ];

             
                    Mail::to('someone@hotmail.com')->send(new contactMail($details));

                    # Courriel de l'admin
                    $admin = Employe::where('admin', 'oui')->get()->first();
                    $adminCourriel = $admin->courriel;

                    $details = [
                        'titre' => 'Vous avez reçu un nouveau rapport d\'accident(véhicule) d\'un employé',
                        'body' => 'Connectez vous pour le consulter.'
                    ];

              
                    Mail::to($adminCourriel)->send(new contactMail($details));
                */
                return redirect()->route('Menus.index')->with('success', true)->with('bon','Le formulaire a été enregistré avec succès');
            }
        
        }
        catch(\Throwable $e)
        {
            log::debug("Erreur formulaireMecaniquesController enregistrer : " . $e->getMessage());
                $employeform2 = Employeform::where('id', $employeform->id)->get()->first();
                $employeform2->delete();
                return redirect()->route('formulaireMecaniques.index')->withErrors(['Informations invalide']);
        }
    }


}
