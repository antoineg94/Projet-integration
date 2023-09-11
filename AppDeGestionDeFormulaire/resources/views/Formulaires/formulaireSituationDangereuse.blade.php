@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('formulaireSituationDangereuses.enregistrer') }}">
    <h1>Signalement d'une situation dangereuse, d'un acte de violence ou d'un «passé proche»</h1>
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

    <div class="form-outline mb-4">
    <label class="form-label" for="secteurActivite">Secteur d'activité</label>
        <input type="text" id="secteurActivite" name="secteurActivite" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <br>
<hr  class="d-grid col-10 mx-auto">
<br>

    <h3>Description de la situation dangeureurse ou du "passé proche"</h3>
    <div class="form-outline mb-4">
    <label class="form-label" for="dateIncident">Date de l'incident</label>
        <input type="text" id="dateIncident" name="dateIncident" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="heureIncident">Heure de l'incident</label>
        <input type="text" id="heureIncident" name="heureIncident" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>
    <div class="form-outline mb-4">
    <label class="form-label" for="lieuIncident">Lieu</label>
        <input type="text" id="lieuIncident" name="lieuIncident" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

  
<div class="form-outline mb-4">
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
  <label for="description" class="form-label">Décrivez la situation</label>
  <textarea class="form-control" id="description" name="description" rows="3"></textarea>
</div>

<div class="form-outline mb-4">
  <label for="corrections" class="form-label">Correction(s) ou amélioration(s) proposé(s):</label>
  <textarea class="form-control" id="corrections" name="corrections" rows="3"></textarea>
</div>

<div class="col-11 mx-auto">
    <a class="btn d-grid text-white" style="background-color: #63BC55;" type="button" href="">Envoyer</a>
    </div>                   
</form>

</section>
@endsection