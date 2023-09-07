@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<form method="POST" action="{{ route('formulairesTravails.enregistrer') }}">
    <h1>Formulaire Déclaration d'accident de travail</h1>
    @CSRF

<h3>Identification</h3>
    <div class="form-outline mb-4">
    <label class="form-label" for="">Nom de l'employé</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="">Fonction au moment de l'évènement</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="">Matricule</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>
<h3>Description de l'évènement</h3>
    <div class="form-outline mb-4">
    <label class="form-label" for="">Date de l'accident</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="">Heure de l'accident</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>


<div class="form-outline mb-4">
<label class="form-label" for="">Témoins</label>
<select class="form-select" aria-label="Default select example">
  <option value="0"selected>Non</option>
  <option value="1">Oui</option>
</select>
</div>
<p>
Si témoins  = OUI
</p>
<div class="form-outline mb-4">
    <label class="form-label" for="">Nom témoins 1</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>
    <div class="form-outline mb-4">
    <label class="form-label" for="">Nom témoins 2</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>
    <p>
    ----------------
    </p>

    <div class="form-outline mb-4">
    <label class="form-label" for="">Endroit de l'accident</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>


    <div class="form-outline mb-4">
        <label class="form-label" for="password" >Secteur d'activité</label>
        <input type="password" id="password" name="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" />
        @error('password')
            <span class="text-danger">{{ $message }} </span>
        @enderror
    </div>
<u></u>
    <div class="form-outline mb-4">
        <label class="form-label" for="password" >Nature de la blessure <small>(Cochez s'il y a lieu, <u>coté droit</u> ou <u>coté gauche</u>)</small></label> 

        <div class="form-check">
        <input class="form-check-input" type="radio" value="Tête, visage, nez, yeux, oreille" name="typeNlessure" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        Tête, visage, nez, yeux, oreille
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Torse" id="flexCheckDefault" name="typeNlessure">
        <label class="form-check-label" for="flexCheckDefault">
        Torse
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Poumons" id="flexCheckDefault" name="typeNlessure">
        <label class="form-check-label" for="flexCheckDefault">
        Poumons
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Bras, épaule, coude" id="flexCheckDefault" name="typeNlessure">
        <label class="form-check-label" for="flexCheckDefault">
        Bras, épaule, coude
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Poignet, main, doigt" id="flexCheckDefault" name="typeNlessure">
        <label class="form-check-label" for="flexCheckDefault">
        Poignet, main, doigt
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Dos" id="flexCheckDefault" name="typeNlessure">
        <label class="form-check-label" for="flexCheckDefault">
        Dos
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Hanche" id="flexCheckDefault" name="typeNlessure">
        <label class="form-check-label" for="flexCheckDefault">
        Hanche
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Jambe, genou" id="flexCheckDefault" name="typeNlessure">
        <label class="form-check-label" for="flexCheckDefault">
        Jambe, genou
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Pied, orteil, cheville" id="flexCheckDefault" name="typeNlessure">
        <label class="form-check-label" for="flexCheckDefault">
        Pied, orteil, cheville
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Autre" id="flexCheckDefault" name="typeNlessure" style="-webkit-appearance: checkbox;"> 
        <label class="form-check-label" for="flexCheckDefault">
        Autre
        </label>
        </div>
            
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="password" >Violence <small>(à cocher)</small></label> 

        <div class="form-check">
        <input class="form-check-input" type="radio" value="Physique" name="typeViolence" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        Physique
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="Verbale" id="flexCheckDefault" name="typeViolence">
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
        <label class="form-label" for="password" >Durée de l'abscence </label> 

        <div class="form-check">
        <input class="form-check-input" type="radio" value="aucune abscence" name="typeAbscence" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        1- Accident ne nécessitant <b>aucune abscence</b>
        </label>
        </div>

        
        <div class="form-check">
        <input class="form-check-input" type="radio" value="consultation médicale" id="flexCheckDefault" name="typeAbscence">
        <label class="form-check-label" for="flexCheckDefault">
        2- Accident nécéssitant une <b>consultation médicale</b>
        </label>
        </div>
    </div>

    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    J'ai avisé mon supérieur immédiat
  </label>
</div>
<p>si OUI:</p>
<div class="form-check">
<label for="dateAvisSuperviseur">Date:</label>
<input type="date" id="dateAvisSuperviseur" name="dateAvisSuperviseur">
</div>
<div class="form-check">
<label for="nomSuperieur">Nom du supérieur:</label>
<input type="text" id="nomSuperieur" name="nomSuperieur">
</div>
<p>--------------</p>

signature superviseur / signature du travailleur/travailleuse
(no de poste + date)
<div>
    <a class="btn d-grid gap-2 text-white" style="background-color: #63BC55;" type="button" href="">Envoyer</a>
    </div>                   
</form>

</section>
@endsection