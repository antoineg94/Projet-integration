@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('formulairesTravails.enregistrer') }}">
    <h1>Formulaire Déclaration d'accident de travail</h1>
    @CSRF

<h3>Identification</h3>

    <div class="form-outline mb-4">
    <label class="form-label" for="fonction_avant">Fonction au moment de l'évènement</label>
        <input type="text" id="fonction_avant" name="fonction_avant" class="form-control form-control-lg  @error('fonction_avant') is-invalid @enderror" />
        
    </div>

    
<h3>Description de l'évènement</h3>
    <div class="form-outline mb-4">
    <label class="form-label" for="date_incident">Date de l'accident</label>
        <input type="date" id="date_incident" name="date_incident" class="form-control form-control-lg  @error('date_incident') is-invalid @enderror" />
        
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="heure_incident">Heure de l'accident</label>
        <input type="time" id="heure_incident" name="heure_incident" class="form-control form-control-lg  @error('heure_incident') is-invalid @enderror" />
       
    </div>


<div class="form-outline mb-4" >
<label class="form-label" for="temoins">Témoins</label>
<select class="form-select" aria-label="Default select example" id="selectTemoins">
  <option value="0" selected >Non</option>
  <option value="1">Oui</option>
</select>
</div>

<div class="border rounded px-2">
    <div class="form-outline mb-4" id="divTemoins1" style="display: none;">
    <label class="form-label" for="nom_temoin1">Nom témoins</label>
        <input type="text" id="nom_temoin1" name="nom_temoin1" class="form-control form-control-lg  @error('') is-invalid @enderror" />
       
    </div>

    <div class="form-outline mb-4" id="divTemoins2"  style="display: none;">
    <label class="form-label" for="nom_temoin2">Nom témoins</label>
        <input type="text" id="nom_temoin2" name="nom_temoin2" class="form-control form-control-lg  @error('') is-invalid @enderror" />
    </div>
</div>

    <div class="form-outline mb-4">
        <label class="form-label" for="lieu" >Lieu de l'incident</label>
        <input type="text" id="lieu" name="lieu" class="form-control form-control-lg  @error('lieu') is-invalid @enderror" />
        
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="secteur" >Secteur d'activité</label>
        <input type="text" id="secteur" name="secteur" class="form-control form-control-lg  @error('secteur') is-invalid @enderror" />
        
    </div>
<u></u>
    <div class="form-outline mb-4">
        <label class="form-label "  >Nature de la blessure <small>(Cochez s'il y a lieu, <u>coté droit</u> ou <u>coté gauche</u>)</small></label> 

        <div class="form-check">
        <input class="form-check-input" type="radio" value="Tête, visage, nez, yeux, oreille" name="nature_blessure" id="blessure0">
        <label class="form-check-label" for="nature_blessure">
        Tête, visage, nez, yeux, oreille
        </label>

        <div id="cote0" style="display: none;">
            <div class="form-check form-check-inline" >
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Gauche</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Droite</label>
            </div>
        </div>

        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Torse" id="blessure1" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Torse
        </label>

        <div id="cote1" style="display: none;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Gauche</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Droite</label>
            </div>
        </div>

        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Poumons" id="blessure2" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Poumons
        </label>

        <div id="cote2" style="display: none;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Gauche</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Droite</label>
            </div>
        </div>

        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Bras, épaule, coude" id="blessure3" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Bras, épaule, coude
        </label>

        <div id="cote3" style="display: none;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Gauche</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Droite</label>
            </div>
        </div>

        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Poignet, main, doigt" id="blessure4" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Poignet, main, doigt
        </label>

        <div id="cote4" style="display: none;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Gauche</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Droite</label>
            </div>
        </div>

        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Dos" id="blessure5" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Dos
        </label>

        <div id="cote5" style="display: none;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Haut</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Bas</label>
            </div>
        </div>

        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Hanche" id="blessure6" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Hanche
        </label>

        <div id="cote6" style="display: none;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Gauche</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Droite</label>
            </div>
        </div>

        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Jambe, genou" id="blessure7" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Jambe, genou
        </label>

        <div id="cote7" style="display: none;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Gauche</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Droite</label>
            </div>
        </div>

        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Pied, orteil, cheville" id="blessure8" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Pied, orteil, cheville
        </label>

        <div id="cote8" style="display: none;">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Gauche</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Droite</label>
            </div>
        </div>

        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Autre" id="blessure9" name="nature_blessure" style="-webkit-appearance: checkbox;"> 
        <label class="form-check-label" for="nature_blessure">
        Autre
        </label>
        
        <div id="cote9" style="display: none;">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

    </div>
            
    </div>

    <div id="" class="form-outline mb-4">
        <label class="form-label" for="description_blessure" >Description de la blessure </label> 

        <div class="form-check">
        <input class="form-check-input" type="radio" value="Brûlure, engelure" name="description_blessure" id="1">
        <label class="form-check-label" for="description_blessure">
        Brûlure, engelure
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Commotion cérébrale" id="2" name="description_blessure">
        <label class="form-check-label" for="description_blessure">
        Commotion cérébrale
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Corps étranger" id="3" name="description_blessure">
        <label class="form-check-label" for="description_blessure">
        Corps étranger
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Coupure, lacération, déchirure" id="3" name="description_blessure">
        <label class="form-check-label" for="description_blessure">
        Coupure, lacération, déchirure
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Douleur au dos" id="4" name="description_blessure">
        <label class="form-check-label" for="description_blessure">
        Douleur au dos
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Égratignure, éraflure, piqûre, écharde" id="5" name="description_blessure">
        <label class="form-check-label" for="description_blessure">
        Égratignure, éraflure, piqûre, écharde
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Entorse, élongation, foulure, luxation, contusion" id="6" name="description_blessure">
        <label class="form-check-label" for="description_blessure">
        Entorse, élongation, foulure, luxation, contusion
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Fracture, amputation" id="7" name="description_blessure">
        <label class="form-check-label" for="description_blessure">
        Fracture, amputation
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Irritation, infection" id="8" name="description_blessure">
        <label class="form-check-label" for="description_blessure">
        Irritation, infection
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Inhalation" id="9" name="description_blessure" style="-webkit-appearance: checkbox;"> 
        <label class="form-check-label" for="description_blessure">
        Inhalation
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="radio" value="Autre" id="10" name="description_blessure" style="-webkit-appearance: checkbox;"> 
        <label class="form-check-label" for="description_blessure">
        Autre
        </label>
        </div>
            
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="type_violence" >Violence <small>(à cocher)</small></label> 

        <div class="form-check">
        <input class="form-check-input" type="radio" value="Physique" name="type_violence" id="vPhysique">
        <label class="form-check-label" for="flexCheckDefault">
        Physique
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Verbale" id="vVerbale" name="type_violence">
        <label class="form-check-label" for="flexCheckDefault">
        Verbale
        </label>
        </div>
    </div>
    <div class="mb-3">
        <label for="description_tache" class="form-label ">Décrivez la tâche effectuée et comment s'est produit la blessure</label>
        <textarea class="form-control @error('description_tache') is-invalid @enderror" id="description_tache" name="description_tache" rows="3"></textarea>
    </div>

premiers soins (oui/non)

nom du secouriste

<h3>Détails sur la durée de l'absence</h3>
<div class="form-outline mb-4">
        <label class="form-label" for="type_absence" >Durée de l'abscence </label> 

        <div class="form-check">
        <input class="form-check-input" type="radio" value="aucune abscence" name="type_absence" id="aucuneAbscence">
        <label class="form-check-label" for="type_absence">
        1- Accident ne nécessitant <b>aucune abscence</b>
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="consultation médicale" id="consultationMedicale" name="type_absence">
        <label class="form-check-label" for="type_absence">
        2- Accident nécéssitant une <b>consultation médicale</b>
        </label>
        </div>
    </div>


<div class="col-11 mx-auto">
    <button class="btn d-grid text-white" style="background-color: #63BC55;" type="submit" >Envoyer</button>
    </div>                    
</form>

</section>

@endsection