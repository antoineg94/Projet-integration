@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('formulairesTravails.enregistrer') }}">
    <h1>Formulaire Déclaration d'accident de travail</h1>
    @CSRF

<h3>Identification</h3>

    <div class="form-outline mb-4">
    <label class="form-label" for="fonctionsEvenement">Fonction au moment de l'évènement</label>
        <input type="text" id="fonctionsEvenement" name="fonctionsEvenement" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    
<h3>Description de l'évènement</h3>
    <div class="form-outline mb-4">
    <label class="form-label" for="date_incident">Date de l'accident</label>
        <input type="text" id="date_incident" name="date_incident" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="heure_incident">Heure de l'accident</label>
        <input type="text" id="heure_incident" name="heure_incident" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>


<div class="form-outline mb-4" >
<label class="form-label" for="temoins">Témoins</label>
<select class="form-select" aria-label="Default select example" id="selectTemoins">
  <option value="0" selected >Non</option>
  <option value="1">Oui</option>
</select>
</div>

<div class="form-outline mb-4" id="divTemoins1" style="display: none;">
    <label class="form-label" for="nomTemoins1">Nom témoins</label>
        <input type="text" id="nomTemoins1" name="nomTemoins1" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4" id="divTemoins2"  style="display: none;">
    <label class="form-label" for="nomTemoins2">Nom témoins</label>
        <input type="text" id="nomTemoins2" name="nomTemoins2" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="endroitAccident">Endroit de l'accident</label>
        <input type="text" id="endroitAccident" name="endroitAccident" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>


    <div class="form-outline mb-4">
        <label class="form-label" for="secteurActivite" >Secteur d'activité</label>
        <input type="text" id="secteurActivite" name="secteurActivite" class="form-control form-control-lg  @error('password') is-invalid @enderror" />
        @error('password')
            <span class="text-danger">{{ $message }} </span>
        @enderror
    </div>
<u></u>
    <div id="" class="form-outline mb-4">
        <label class="form-label" for="nature_blessure" >Nature de la blessure <small>(Cochez s'il y a lieu, <u>coté droit</u> ou <u>coté gauche</u>)</small></label> 

        <div class="form-check">
        <input class="form-check-input" type="radio" value="Tête, visage, nez, yeux, oreille" name="nature_blessure" id="blessure0">
        <label class="form-check-label" for="nature_blessure">
        Tête, visage, nez, yeux, oreille
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Torse" id="blessure1" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Torse
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Poumons" id="blessure2" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Poumons
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Bras, épaule, coude" id="blessure3" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Bras, épaule, coude
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Poignet, main, doigt" id="blessure4" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Poignet, main, doigt
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Dos" id="blessure5" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Dos
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Hanche" id="blessure6" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Hanche
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Jambe, genou" id="blessure7" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Jambe, genou
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Pied, orteil, cheville" id="blessure8" name="nature_blessure">
        <label class="form-check-label" for="nature_blessure">
        Pied, orteil, cheville
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Autre" id="blessure9" name="typeNlessure" style="-webkit-appearance: checkbox;"> 
        <label class="form-check-label" for="nature_blessure">
        Autre
        </label>
        </div>
            
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="typeViolence" >Violence <small>(à cocher)</small></label> 

        <div class="form-check">
        <input class="form-check-input" type="radio" value="Physique" name="typeViolence" id="vPhysique">
        <label class="form-check-label" for="flexCheckDefault">
        Physique
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Verbale" id="vVerbale" name="typeViolence">
        <label class="form-check-label" for="flexCheckDefault">
        Verbale
        </label>
        </div>
    </div>
    <div class="mb-3">
  <label for="description" class="form-label">Décrivez la tâche effectuée et comment s'est produit la blessure</label>
  <textarea class="form-control" id="description" name="description" rows="3"></textarea>
</div>

premiers soins (oui/non)

nom du secouriste

<h3>Détails sur la durée de l'absence</h3>
<div class="form-outline mb-4">
        <label class="form-label" for="dureeAbscence" >Durée de l'abscence </label> 

        <div class="form-check">
        <input class="form-check-input" type="radio" value="aucune abscence" name="typeAbscence" id="aucuneAbscence">
        <label class="form-check-label" for="typeAbscence">
        1- Accident ne nécessitant <b>aucune abscence</b>
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="consultation médicale" id="consultationMedicale" name="typeAbscence">
        <label class="form-check-label" for="typeAbscence">
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