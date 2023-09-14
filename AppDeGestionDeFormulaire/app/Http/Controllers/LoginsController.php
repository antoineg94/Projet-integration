<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\Log;

class LoginsController extends Controller
{
    
    public function index()
    {
        return view ('Login.login');
    }

    public function login(Request $request)
    {
        try{
            $reussi = Auth::attempt(['employe_id' => $request->employe_id, 'password' => $request->password]);
        
            if($reussi)
            {
                $identifiant= Identifiant::where('employe_id', $request->employe_id)->get()->first();
                

                $nom = $identifiant->employe->nom;
                $prenom = $identifiant->employe->prenom;

                Session::set('nom', $nom);
                Session::set('prenom', $prenom);

                return view('accueil')->with('success', true)->with('message','Vous êtes connecté');
            }
            return view('accueil')->with('success', true)->with('message','Vous êtes connecté');
        }
        catch(\Throwable $e)
        {
            log::debug($e);
            return view('Login.login')->withErrors(['Informations invalide']);
        }
    }



    public function logout()
    {

                // Mettre à null toutes les variables de sessions
                Session::put('nom', null);
                Session::put('prenom', null);

                // delete les variables de sessions
                Session::forget('nom');
                Session::forget('prenom');
                // déconnecter l'utilisateur

        
        
        Auth::logout();

        return view('Login.Login');
    }


}
