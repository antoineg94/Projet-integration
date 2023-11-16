<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\Form2Request;
use App\Http\Requests\EmployeformRequest;
use App\Models\Form2;
use App\Models\Employeform;
use App\Models\Employe;
use App\Models\Temoin;
use Illuminate\Support\Facades\Log;
use App\Mail\contactMail;
use Illuminate\Support\Facades\Mail;


class FormulaireSituationDangereusesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('form_id', 2);
        return view('Formulaires.formulaireSituationDangereuse');
    }

    public function enregistrer(Form2Request $request)
    {

        try{
            $date = date('Y-m-d');
            $employe = Employe::where('id', '=', Session::get('employe_id'))
            ->get()->first();

            $employeform = new Employeform();
            $employeform->employe_id = Session::get('employe_id');
            $employeform->formulaire_id = 2;
            $employeform->date_formulaire = $date;
            $employeform->superieur_id = $employe->superieur_id;
            $employeform->save();

            $Form2 = new Form2();
            $Form2->employeform_id = $employeform->id;
            $Form2->fonction_avant = $request->fonction_avant;
            $Form2->secteur = $request->secteur;
            $Form2->date_observ = $request->date_observ;
            $Form2->heure_observ = $request->heure_observ;
            $Form2->lieu = $request->lieu;
            $Form2->description = $request->description;
            $Form2->proposition = $request->proposition;
            $Form2->temoin = $request->temoin;

            // on verifie si un formulaire identique existe déjà
            $form = Form2::join('employeforms', 'employeform_id', '=', 'employeforms.id')
            ->where('fonction_avant', '=', $Form2->fonction_avant)
            ->where('secteur', '=', $Form2->secteur)
            ->where('date_observ', '=', $Form2->date_observ)
            ->where('heure_observ', '=', $Form2->heure_observ)
            ->where('lieu', '=', $Form2->lieu)
            ->where('description', '=', $Form2->description)
            ->where('proposition', '=', $Form2->proposition)
            ->where('temoin', '=', $Form2->temoin)
            ->where('employe_id', '=', Session::get('employe_id'))
            ->get()->first();

            // envoi email
            /*
            $details = [
                'titre' => 'Vous avez reçu un nouveau formulaire de signalement d'une situation dangereuse d\'un employé',
                'body' => 'Connectez vous pour le consulter.'
            ];

            Session::forget('form_id');
            Mail::to('someone@hotmail.com')->send(new contactMail($details));
            */

            if($form != null){
                $employeform2 = Employeform::where('id', $employeform->id)->get()->first();
                $employeform2->delete();
                return redirect()->back()->with('message', true)->with('msg','Informations déjà enregistrées');
            }
            else{
                $Form2->save();
                return redirect()->route('Menus.index')->with('success', true)->with('bon','Le formulaire a été enregistré avec succès');
            }
         
        }
        catch(Exception $e){
            $employeform2 = Employeform::where('id', $employeform->id)->get()->first();
            $employeform2->delete();
            return redirect()->back()->withErrors(['Informations invalide']);
        }
    }

}
