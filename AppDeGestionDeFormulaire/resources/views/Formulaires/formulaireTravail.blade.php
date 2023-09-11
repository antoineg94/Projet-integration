@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('formulairesTravails.enregistrer') }}">
    <h1>Formulaire Déclaration d'accident de travail</h1>
    @CSRF

<h3>Identification</h3>
    <div class="form-outline mb-4">
    <label class="form-label" for="nomEmploye">Nom de l'employé</label>
        <input type="text" id="nomEmploye" name="nomEmploye" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="fonctionsEvenement">Fonction au moment de l'évènement</label>
        <input type="text" id="fonctionsEvenement" name="fonctionsEvenement" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="matricule">Matricule</label>
        <input type="text" id="matricule" name="matricule" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>
<h3>Description de l'évènement</h3>
    <div class="form-outline mb-4">
    <label class="form-label" for="dateAccident">Date de l'accident</label>
        <input type="text" id="dateAccident" name="dateAccident" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="heureAccident">Heure de l'accident</label>
        <input type="text" id="heureAccident" name="heureAccident" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>


<div class="form-outline mb-4">
<label class="form-label" for="">Témoins</label>
<select class="form-select" aria-label="Default select example" id="radioTemoins">
  <option value="0"selected>Non</option>
  <option value="1">Oui</option>
</select>
</div>
<p>
Si témoins  = OUI
AJOUTER FONCTION JS ICI
</p>




<div class="form-outline mb-4" id="divTemoins1">
    <label class="form-label" for="nomTemoins1">Nom témoins</label>
        <input type="text" id="nomTemoins1" name="nomTemoins1" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

<div class=" d-flex justify-content-end">
    <button id="btnTemoins" type="button">+</button>
    </div>

    <div class="form-outline mb-4" id="divTemoins2">
    <label class="form-label" for="nomTemoins2">Nom témoins</label>
        <input type="text" id="nomTemoins2" name="nomTemoins2" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>
    <p>
    ----------------
    </p>

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
    <div class="form-outline mb-4">
        <label class="form-label" for="natureBlessure" >Nature de la blessure <small>(Cochez s'il y a lieu, <u>coté droit</u> ou <u>coté gauche</u>)</small></label> 

        <div class="form-check">
        <input class="form-check-input" type="radio" value="Tête, visage, nez, yeux, oreille" name="typeNlessure" id="blessure0">
        <label class="form-check-label" for="natureBlessure">
        Tête, visage, nez, yeux, oreille
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Torse" id="blessure1" name="typeNlessure">
        <label class="form-check-label" for="natureBlessure">
        Torse
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Poumons" id="blessure2" name="typeNlessure">
        <label class="form-check-label" for="natureBlessure">
        Poumons
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Bras, épaule, coude" id="blessure3" name="typeNlessure">
        <label class="form-check-label" for="natureBlessure">
        Bras, épaule, coude
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Poignet, main, doigt" id="blessure4" name="typeNlessure">
        <label class="form-check-label" for="natureBlessure">
        Poignet, main, doigt
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Dos" id="blessure5" name="typeNlessure">
        <label class="form-check-label" for="natureBlessure">
        Dos
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Hanche" id="blessure6" name="typeNlessure">
        <label class="form-check-label" for="natureBlessure">
        Hanche
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Jambe, genou" id="blessure7" name="typeNlessure">
        <label class="form-check-label" for="natureBlessure">
        Jambe, genou
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Pied, orteil, cheville" id="blessure8" name="typeNlessure">
        <label class="form-check-label" for="natureBlessure">
        Pied, orteil, cheville
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Autre" id="blessure9" name="typeNlessure" style="-webkit-appearance: checkbox;"> 
        <label class="form-check-label" for="natureBlessure">
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
  <label for="exampleFormControlTextarea1" class="form-label">Décrivez la tâche effectuée et comment s'est produit la blessure</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
    <a class="btn d-grid text-white" style="background-color: #63BC55;" type="button" href="">Envoyer</a>
    </div>                    
</form>

</section>
@endsection