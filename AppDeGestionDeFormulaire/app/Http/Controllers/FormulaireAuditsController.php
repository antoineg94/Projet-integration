<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Form3Request;
use App\Http\Requests\EmployeformRequest;
use App\Models\Form3;
use App\Models\Employeform;
use App\Models\Employe;
use Session;
use Illuminate\Support\Facades\Log;
use App\Mail\contactMail;


class FormulaireAuditsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('form_id', 3);
        return view('Formulaires.formulaireAudit');
    }


    public function enregistrer(Form3Request $request)
    {

        try{

            $date = date('Y-m-d');
            $employe = Employe::where('id', '=', Session::get('employe_id'))
            ->get()->first();

            $employeform = new Employeform();
            $employeform->employe_id = Session::get('employe_id');
            $employeform->formulaire_id = Session::get('form_id');
            $employeform->date_formulaire = $date;
            $employeform->superieur_id = $employe->superieur_id;
            $employeform->save();

            $Form3 = new Form3();
            $Form3->employeform_id = $employeform->id;
            $Form3->lieu = $request->lieu;
            $Form3->epi = $request->epi;
            $Form3->tenue = $request->tenue;
            $Form3->comportement = $request->comportement;
            $Form3->signalisation = $request->signalisation;
            $Form3->fiche_signal = $request->fiche_signal;
            $Form3->travaux = $request->travaux;
            $Form3->espace_clos = $request->espace_clos;
            $Form3->methode_travail = $request->methode_travail;
            $Form3->autre = $request->autre;
            $Form3->respect_distance = $request->respect_distance;
            $Form3->port_epi = $request->port_epi;
            $Form3->respect_proced = $request->respect_proced;
            $Form3->description = $request->description;

            $Form3->save();

            Session::forget('form_id');
            
            /*
            // envoi email
            $details = [
                'titre' => 'Vous avez reçu un nouveau formulaire d\'un audit de la SST d\'un employé',
                'body' => 'Connectez vous pour le consulter.'
            ];

            Session::forget('form_id');
            Mail::to('someone@hotmail.com')->send(new contactMail($details));
            */
            
            return redirect()->route('Menus.index')->with('message','Formulaire enregistré avec succès');

        }
        catch(Exception $e){
            $employeform2 = Employeform::where('id', $employeform->id)->get()->first();
            $employeform2->delete();
            return redirect()->back()->with('message','Une erreur est survenue lors de l\'enregistrement du formulaire');
        }
    }

}
