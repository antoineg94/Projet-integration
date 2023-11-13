@extends('layout/app')

@section('title', 'Formulaire de déclaration d\'accident de travail')

@section('middleContent')
<section>
    <div class="my-xl-2 mb-4">
        <a href="{{ route('Menus.index') }}" class="text-white py-2 px-2 m-2" style="background-color: #63BC55; text-decoration: none; border-radius:5px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
            Retour
        </a>
    </div>
    <form method="POST" class="mb-4 col-xl-7 col-11 mx-auto" action="{{ route('formulairesTravails.enregistrer') }}">
        <h1>Formulaire Déclaration d'accident de travail</h1>
        @CSRF

        <h3>Identification</h3>

        <div class="row">
            <div class="form-outline mb-4 col-xl-6 col-12" id="divT1">
                <label class="form-label fw-bold" for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" class="form-control form-control-lg" value="{{ Session::get('prenom') }}" disabled/>
            </div>

            <div class="form-outline mb-4 col-xl-6 col-12">
                <label class="form-label fw-bold" for="nom">Nom</label>
                <input type="text" id="nom" name="nom" class="form-control form-control-lg" value="{{ Session::get('nom') }}" disabled/>
            </div>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label fw-bold" for="fonction_avant">Fonction au moment de l'évènement</label>
            <input type="text" id="fonction_avant" name="fonction_avant" class="form-control form-control-lg  @error('fonction_avant') is-invalid @enderror" value="{{ old('fonction_avant') }}"/>
            @error('fonction_avant')
                <span class="text-danger">{{ $message }} </span>
            @enderror
        </div>

        
        <h3>Description de l'évènement</h3>

        <div class="row">
            <div class="form-outline mb-4 col-xl-6 col-12">
                <label class="form-label fw-bold" for="date_incident">Date de l'accident</label>
                <input type="date" id="date_incident" name="date_incident" class="form-control form-control-lg  @error('date_incident') is-invalid @enderror"  value="{{ old('date_incident') }}"/>
                @error('date_incident')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>

            <div class="form-outline mb-4 col-xl-6 col-12">
                <label class="form-label fw-bold" for="heure_incident">Heure de l'accident</label>
                <input type="time" id="heure_incident" name="heure_incident" class="form-control form-control-lg  @error('heure_incident') is-invalid @enderror"  value="{{ old('heure_incident') }}"/>
                @error('heure_incident')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>
        </div>
            

        <div class="form-outline mb-4" >
            <label class="form-label fw-bold" for="temoin">Témoin(s) <small>(optionnel)</small></label>
            <input type="text" id="temoin" name="temoin" class="form-control form-control-lg  @error('temoin') is-invalid @enderror" value="{{ old('temoin') }}"/>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label fw-bold" for="lieu" >Lieu de l'incident</label>
            <input type="text" id="lieu" name="lieu" class="form-control form-control-lg  @error('lieu') is-invalid @enderror"  value="{{ old('lieu') }}"/>
            @error('lieu')
                <span class="text-danger">{{ $message }} </span>
            @enderror
        </div>

        <div class="form-outline mb-4">
            <label class="form-label fw-bold" for="secteur" >Secteur d'activité</label>
            <input type="text" id="secteur" name="secteur" class="form-control form-control-lg  @error('secteur') is-invalid @enderror"  value="{{ old('secteur') }}"/>
            @error('secteur')
                <span class="text-danger">{{ $message }} </span>
            @enderror
        </div>

        <u></u>


        <div class="row">
            <div class="form-outline mb-4 col-xl-6 col-12">
                <label class="form-label fw-bold">Nature de la blessure <small>(Cochez s'il y a lieu, <u>coté droit</u> ou <u>coté gauche</u>)</small></label> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Tête, visage, nez, yeux, oreille" name="nature_blessure1" id="nature_blessure1" >
                    <label class="form-check-label" for="nature_blessure1">Tête, visage, nez, yeux, oreille</label>
                    <div id="cote0" style="display: none;">
                        <div class="form-check form-check-inline" >
                            <input class="form-check-input" type="checkbox" name="gauche1" id="gauche1" value="option1" >
                            <label class="form-check-label" for="gauche1">Gauche</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="droite1" id="droite1" value="option2" >
                            <label class="form-check-label" for="droite1">Droite</label>
                        </div>
                    </div>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Torse" id="nature_blessure2" name="nature_blessure2" >
                    <label class="form-check-label" for="nature_blessure2">Torse</label>
                    <div id="cote1" style="display: none;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="gauche2" id="gauche2" value="option1" >
                            <label class="form-check-label" for="gauche2">Gauche</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="droite2" id="droite2" value="option2" >
                            <label class="form-check-label" for="droite2">Droite</label>
                        </div>
                    </div>

                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Poumons" id="nature_blessure3" name="nature_blessure3" >
                    <label class="form-check-label" for="nature_blessure3">Poumons</label>
                    <div id="cote2" style="display: none;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="gauche3" id="gauche3" value="option1" >
                            <label class="form-check-label" for="gauche3">Gauche</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="droite3" id="droite3" value="option2">
                            <label class="form-check-label" for="droite3">Droite</label>
                        </div>
                    </div>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Bras, épaule, coude" id="nature_blessure4" name="nature_blessure4">
                    <label class="form-check-label" for="nature_blessure4">Bras, épaule, coude</label>
                    <div id="cote3" style="display: none;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="gauche4" id="gauche4" value="option1">
                            <label class="form-check-label" for="gauche4">Gauche</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="droite4" id="droite4" value="option2">
                            <label class="form-check-label" for="droite4">Droite</label>
                        </div>
                    </div>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Poignet, main, doigt" id="nature_blessure5" name="nature_blessure5">
                    <label class="form-check-label" for="nature_blessure5">Poignet, main, doigt</label>
                    <div id="cote4" style="display: none;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="gauche5" id="gauche5" value="option1">
                            <label class="form-check-label" for="gauche5">Gauche</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="droite5" id="droite5" value="option2">
                            <label class="form-check-label" for="droite5">Droite</label>
                        </div>
                    </div>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Dos" id="nature_blessure6" name="nature_blessure6">
                    <label class="form-check-label" for="nature_blessure6">Dos</label>
                    <div id="cote5" style="display: none;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="gauche6" id="gauche6" value="option1">
                            <label class="form-check-label" for="gauche6">Haut</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="droite6" id="droite6" value="option2">
                            <label class="form-check-label" for="droite6">Bas</label>
                        </div>
                    </div>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Hanche" id="nature_blessure7" name="nature_blessure7">
                    <label class="form-check-label" for="nature_blessure7">Hanche</label>
                    <div id="cote6" style="display: none;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="gauche7" id="gauche7" value="option1">
                            <label class="form-check-label" for="gauche7">Gauche</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="droite7" id="droite7" value="option2">
                            <label class="form-check-label" for="droite7">Droite</label>
                        </div>
                    </div>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Jambe, genou" id="nature_blessure8" name="nature_blessure8">
                    <label class="form-check-label" for="nature_blessure8">Jambe, genou</label>
                    <div id="cote7" style="display: none;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="gauche8" id="gauche8" value="option1">
                            <label class="form-check-label" for="gauche8">Gauche</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="droite8" id="droite8" value="option2">
                            <label class="form-check-label" for="droite8">Droite</label>
                        </div>
                    </div>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Pied, orteil, cheville" id="nature_blessure9" name="nature_blessure9">
                    <label class="form-check-label" for="nature_blessure9">Pied, orteil, cheville</label>
                    <div id="cote8" style="display: none;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="gauche9" id="gauche9" value="option1">
                            <label class="form-check-label" for="gauche9">Gauche</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="droite9" id="droite9" value="option2">
                            <label class="form-check-label" for="droite9">Droite</label>
                        </div>
                    </div>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Autre" id="nature_blessure10" name="nature_blessure10"> 
                    <label class="form-check-label" for="nature_blessureA"  id="nature_blessureA" name="nature_blessureA">Autre</label>
                    <div id="cote9" style="display: none;">
                        <input type="text" class="form-control" name="autre1">
                    </div>
                </div>
                @error('nature_blessure')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>

            <div class="form-outline mb-4 col-xl-6 col-12">
                <label class="form-label fw-bold" for="description_blessure" >Description de la blessure </label> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Brûlure, engelure" name="description_blessure1" id="description_blessure1">
                    <label class="form-check-label" for="description_blessure1">Brûlure, engelure</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Commotion cérébrale" id="description_blessure2" name="description_blessure2">
                    <label class="form-check-label" for="description_blessure2">Commotion cérébrale</label>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Corps étranger" id="description_blessure3" name="description_blessure3">
                    <label class="form-check-label" for="description_blessure3">Corps étranger</label>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Coupure, lacération, déchirure" id="description_blessure4" name="description_blessure4">
                    <label class="form-check-label" for="description_blessure4">Coupure, lacération, déchirure</label>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Douleur au dos" id="description_blessure5" name="description_blessure5">
                    <label class="form-check-label" for="description_blessure5">Douleur au dos</label>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Égratignure, éraflure, piqûre, écharde" id="description_blessure6" name="description_blessure6">
                    <label class="form-check-label" for="description_blessure6">Égratignure, éraflure, piqûre, écharde</label>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Entorse, élongation, foulure, luxation, contusion" id="description_blessure7" name="description_blessure7">
                    <label class="form-check-label" for="description_blessure7">Entorse, élongation, foulure, luxation, contusion</label>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Fracture, amputation" id="description_blessure8" name="description_blessure8">
                    <label class="form-check-label" for="description_blessure8">Fracture, amputation</label>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Irritation, infection" id="description_blessure9" name="description_blessure9">
                    <label class="form-check-label" for="description_blessure9">Irritation, infection</label>
                </div>

                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Inhalation" id="description_blessure10" name="description_blessure10"> 
                    <label class="form-check-label" for="description_blessure10">Inhalation</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Autre" id="description_blessure11" name="description_blessure11"> 
                    <label class="form-check-label" for="description_blessure11">Autre</label>
                    <div id="autreD" style="display: none;">
                        <input type="text" class="form-control" name="autre2">
                    </div>
                </div>
                @error('description_blessure')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>
        </div>

        <div class="mb-4 col-xl-6 col-12">
            <label for="description_tache" class="form-label fw-bold">Décrivez la tâche effectuée et comment s'est produit l'incident</label>
            <textarea class="form-control @error('description_tache') is-invalid @enderror" id="description_tache" name="description_tache" rows="3" >{{ old('description_tache') }}</textarea>
            @error('description_tache')
                <span class="text-danger">{{ $message }} </span>
            @enderror
        </div>

        <div class="form-outline mb-4 col-xl-6 col-12">
            <label class="form-label fw-bold" for="premiers_soins">Secouriste <small>(s'il y a lieu)</small></label>
            <input type="text" class="form-control" id="nom_secouriste" name="nom_secouriste" value="{{ old('nom_secouriste') }}">
        </div>
        
        <div class="form-outline mb-4 col-xl-6 col-12">
            <label class="form-label fw-bold" for="type_violence" >Violence <small>(à cocher)</small></label> 
            <div class="form-check">
                <input class="form-check-input" type="radio" value="Physique" name="type_violence" id="vPhysique">
                <label class="form-check-label" for="flexCheckDefault">Physique</label>
            </div>

            
            <div class="form-check">
                <input class="form-check-input" type="radio" value="Verbale" id="vVerbale" name="type_violence">
                <label class="form-check-label" for="flexCheckDefault">Verbale</label>
            </div>
            @error('type_violence')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
        </div>
           
        
            

        <h3>Détails sur la durée de l'absence</h3>
        <div class="form-outline mb-4">
            <label class="form-label fw-bold" for="type_absence" >Durée de l'absence </label> 

            <div class="form-check">
                <input class="form-check-input" type="radio" value="aucune absence" name="type_absence" id="aucuneAbscence">
                <label class="form-check-label" for="type_absence">1- Accident ne nécessitant <b>aucune absence</b></label>
            </div>

            
            <div class="form-check">
                <input class="form-check-input" type="radio" value="consultation médicale" id="consultationMedicale" name="type_absence">
                <label class="form-check-label" for="type_absence">2- Accident nécéssitant une <b>consultation médicale</b></label>
            </div>
            @error('type_absence')
                <span class="text-danger">{{ $message }} </span>
            @enderror
        </div>

        <div class="d-grid gap-3 col-xl-3 offset-xl-9 col-12 p-2">
            <button class="btn d-grid text-white" style="background-color: #63BC55;" type="submit" >Envoyer</button>
        </div>  
                        
    </form>

</section>

@endsection