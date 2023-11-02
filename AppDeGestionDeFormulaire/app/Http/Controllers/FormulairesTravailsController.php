<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\Form1Request;
use App\Http\Requests\EmployeformRequest;
use App\Models\Employeform;
use App\Models\Employe;
use App\Models\Form1;
use App\Models\Temoin;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class FormulairesTravailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('form_id', 1);
        return view('Formulaires.formulaireTravail');
    }


    public function enregistrer(Form1Request $request)
    {
        log::debug($request);
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

            
            

            $Form1 = new Form1();
            $Form1->employeform_id = $employeform->id;
            $Form1->fonction_avant = $request->fonction_avant;
            $Form1->date_incident = $request->date_incident;
            $Form1->heure_incident = $request->heure_incident;
            $Form1->lieu = $request->lieu;
            $Form1->secteur = $request->secteur;

            $nature_blessureList = "";
            if($request->nature_blessure1  != null)
            {
                if( $request->gauche1 != null && $request->droite1 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" .$request->nature_blessure1 ." à gauche et à droite]" ;
                }
                else if($request->gauche1 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure1 . " à gauche]";
                }
                else
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure1 . " à droite]";
                }
            }
            if($request->nature_blessure2  != null)
            {
                if( $request->gauche2 != null && $request->droite2 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure2 ." à gauche et à droite]" ;
                }
                else if($request->gauche2 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure2 . " à gauche]";
                }
                else
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure2 . " à droite]";
                }
            }
            if($request->nature_blessure3  != null)
            {
                if( $request->gauche3 != null && $request->droite3 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure3 ." à gauche et à droite]" ;
                }
                else if($request->gauche3 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure3 . " à gauche]";
                }
                else
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure3 . " à droite]";
                }
            }
            if($request->nature_blessure4  != null)
            {
                if( $request->gauche4 != null && $request->droite4 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure4 ." à gauche et à droite]" ;
                }
                else if($request->gauche4 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure4 . " à gauche]";
                }
                else
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure4 . " à droite]";
                }
            }
            if($request->nature_blessure5  != null)
            {
                if( $request->gauche5 != null && $request->droite5 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure5 ." à gauche et à droite]" ;
                }
                else if($request->gauche5 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure5 . " à gauche]";
                }
                else
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure5 . " à droite]";
                }
            }
            if($request->nature_blessure6  != null)
            {
                if( $request->gauche6 != null && $request->droite6 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure6 ." à gauche et à droite]" ;
                }
                else if($request->gauche6 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure6 . " à gauche]";
                }
                else
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure6 . " à droite]";
                }
            }
            if($request->nature_blessure7  != null)
            {
                if( $request->gauche7 != null && $request->droite7 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure7 ." à gauche et à droite]" ;
                }
                else if($request->gauche7 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure7 . " à gauche]";
                }
                else
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure7 . " à droite]";
                }
            }
            if($request->nature_blessure8  != null)
            {
                if( $request->gauche8 != null && $request->droite8 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure8 ." à gauche et à droite]" ;
                }
                else if($request->gauche8 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure8 . " à gauche]";
                }
                else
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure8 . " à droite]";
                }
            }
            if($request->nature_blessure9  != null)
            {
                if( $request->gauche9 != null && $request->droite9 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure9 ." à gauche et à droite]" ;
                }
                else if($request->gauche9 != null)
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure9 . " à gauche]";
                }
                else
                {
                    $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure9 . " à droite]";
                }
            }
            if($request->nature_blessure10  != null)
            {
                $nature_blessureList = $nature_blessureList . "[" . $request->nature_blessure10 . "]";
            }

            
            
            $Form1->nature_blessure = $nature_blessureList;
            

            $description_blessureList = "";
            if($request->description_blessure1 != null)
            {
                $description_blessureList = $description_blessureList . "[" . $request->description_blessure1 . "]";
            }
            if($request->description_blessure2  != null)
            {
                $description_blessureList = $description_blessureList . "[" . $request->description_blessure2 . "]";
            }
            if($request->description_blessure3 != null)
            {
                $description_blessureList = $description_blessureList . "[" . $request->description_blessure3 . "]";
            }
            if($request->description_blessure4 != null)
            {
                $description_blessureList = $description_blessureList . "[" . $request->description_blessure4 . "]";
            }
            if($request->description_blessure5 != null)
            {
                $description_blessureList = $description_blessureList . "[" . $request->description_blessure5 . "]";
            }
            if($request->description_blessure6 != null)
            {
                $description_blessureList = $description_blessureList . "[" . $request->description_blessure6 . "]";
            }
            if($request->description_blessure7 != null)
            {
                $description_blessureList = $description_blessureList . "[" . $request->description_blessure7 . "]";
            }
            if($request->description_blessure8 != null)
            {
                $description_blessureList = $description_blessureList . "[" . $request->description_blessure8 . "]";
            }
            if($request->description_blessure9  != null)
            {
                $description_blessureList = $description_blessureList . "[" . $request->description_blessure9 . "]";
            }
            if($request->description_blessure10  != null)
            {
                $description_blessureList = $description_blessureList . "[" . $request->description_blessure10 . "]";
            }
            if($request->description_blessure11  != null)
            {
                $description_blessureList = $description_blessureList . "[" . $request->description_blessure11 . "]";
            }
            $Form1->description_blessure = $description_blessureList;


            
            $Form1->description_tache = $request->description_tache;
            $Form1->type_violence = $request->type_violence;
            $Form1->type_absence = $request->type_absence;
            $Form1->temoin = $request->temoin;
            $Form1->nom_secouriste = $request->nom_secouriste;
            $Form1->save();

            

            Session::forget('form_id');


            return redirect()->route('Menus.index')->with('success', true)->with('message','Le formulaire a été enregistré avec succès');
        }
        catch(\Throwable $e)
        {
            log::debug($e);
            //delete le formulaire enregistré dans la bd
            $employeform2 = Employeform::where('id', $employeform->id)->get()->first();
            $employeform2->delete();

            return redirect()->route('formulairesTravails.index')->withErrors(['Informations invalide']);
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
