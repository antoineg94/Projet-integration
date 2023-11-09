<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identifiant;
use App\Models\Employe;
use Session;
use App\http\Requests\IdentifiantRequest;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LoginsController extends Controller
{
    
    public function index()
    {
        return view ('Login.login');
    }

    public function login(IdentifiantRequest $request)
    {
        


        try{
            
            $reussi = Auth::attempt(['employe_id' => $request->employe_id, 'password' => $request->password]);

            if($reussi)
            {
                $identifiant= Identifiant::where('employe_id', $request->employe_id)->get()->first();

                $employe = Employe::where('id', $identifiant->employe_id)->get()->first();

                Session::put('nom', $employe->nom);
                Session::put('prenom', $employe->prenom);
                
                if($employe->superviseur == "oui" && $employe->admin == "oui")
                {
                    Session::put('admin', true);
                    Session::put('superviseur', true);
                }
                else if($employe->superviseur == "oui")
                {
                    Session::put('superviseur', true);
                    Session::put('admin', false);
                }
                else if($employe->superviseur == "non")
                {
                    Session::put('superviseur', false);
                    Session::put('admin', false);
                }

                Session::put('employe_id', $identifiant->employe_id);
                

       


                if (Session::get('admin') == true)
                {
                    return redirect()->route('Menus.pageAdmin');
                }
                else
                {
                    return redirect()->route('Menus.index');
                }
                
            }
            else
            {
                return redirect()->route('Logins.index')->withErrors(['Informations invalides']);
            }

        }
        catch(\Throwable $e)
        {
     

            log::debug($e);
            return redirect()->route('Logins.index')->withErrors(['Informations invalides']);
        }
    }



    public function logout()
    {

        // Mettre à null toutes les variables de sessions
        
        Session::put('nom', null);
        Session::put('prenom', null);
        Session::put('employe_id', null);
        Session::put('trier', null);
        Session::put('trierP', null);
        Session::put('superviseur', null);
        Session::put('admin', null);
        
        // delete les variables de sessions
        
        Session::forget('nom');
        Session::forget('prenom');
        Session::forget('employe_id');
        Session::forget('trier');
        Session::forget('trierP');
        Session::forget('superviseur');
        Session::forget('admin');


        // déconnecter l'utilisateur
        
        Auth::logout();

        return view('Login.Login');
    }


}
