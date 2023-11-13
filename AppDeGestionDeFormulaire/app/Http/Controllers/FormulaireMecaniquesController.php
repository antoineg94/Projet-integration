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
use App\Mail\contactMail;
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
            $employeform->formulaire_id = 4;
            $employeform->date_formulaire = $date;
            $employeform->superieur_id = $employe->superieur_id;
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

            $Form4->save();
            
            Session::forget('form_id');
            
            // envoi email
            $details = [
                'titre' => 'Vous avez reçu un nouveau rapport d\'accident(véhicule) d\'un employé',
                'body' => 'Connectez vous pour le consulter.'
            ];

            Session::forget('form_id');
            Mail::to('someone@hotmail.com')->send(new contactMail($details));
            
            return redirect()->route('Menus.index')->with('success', true)->with('message','Le formulaire a été enregistré avec succès');
        
        }
        catch(\Throwable $e)
        {
                $employeform2 = Employeform::where('id', $employeform->id)->get()->first();
                $employeform2->delete();
                return redirect()->route('formulaireMecaniques.index')->withErrors(['Informations invalide']);
        }
    }


}
