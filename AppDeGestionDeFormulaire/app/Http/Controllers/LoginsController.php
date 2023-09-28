<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identifiant;
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
                

                Session::put('employe_id', $identifiant->employe_id);


       

                return redirect()->route('Menus.index')->with('success', true)->with('message','Vous êtes connecté');
            }
            else
            {
                return view('Login.login')->withErrors(['Informations invalide']);
            }

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
