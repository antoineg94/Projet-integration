@extends('layout/app')

@section('title', 'Formulaire Situation Dangereuse')

@section('middleContent')
<section>
<form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('formulaireSituationDangereuses.enregistrer') }}">
    <h1>Signalement d'une situation dangereuse, d'un acte de violence ou d'un «passé proche»</h1>
    @CSRF

    <h3>Identification</h3>
    

    <div class="form-outline mb-4">
    <label class="form-label fw-bold" for="fonction_avant">Fonction au moment de l'évènement</label>
        <input type="text" id="fonction_avant" name="fonction_avant" class="form-control form-control-lg  @error('fonction_avant') is-invalid @enderror" />
        @error('fonction_avant')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>


    <div class="form-outline mb-4">
    <label class="form-label fw-bold" for="secteur">Secteur d'activité</label>
        <input type="text" id="secteur" name="secteur" class="form-control form-control-lg  @error('secteur') is-invalid @enderror" />
        @error('secteur')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <br>
<hr  class="d-grid col-10 mx-auto">
<br>

    <h3>Description de la situation dangeureurse ou du "passé proche"</h3>
    <div class="form-outline mb-4">
    <label class="form-label fw-bold" for="date_observ">Date de l'incident</label>
        <input type="date" id="date_observ" name="date_observ" class="form-control form-control-lg  @error('date_observ') is-invalid @enderror" />
        @error('date_observ')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label fw-bold" for="heure_observ">Heure de l'incident</label>
        <input type="time" id="heure_observ" name="heure_observ" class="form-control form-control-lg  @error('heure_observ') is-invalid @enderror" />
        @error('heure_observ')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>
    <div class="form-outline mb-4">
    <label class="form-label fw-bold" for="lieu">Lieu</label>
        <input type="text" id="lieu" name="lieu" class="form-control form-control-lg  @error('lieu') is-invalid @enderror" />
        @error('lieu')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

  
    <div class="form-outline mb-4" >
        <label class="form-label fw-bold" for="temoin">Témoin(s) <small>(optionnel)</small></label>
        <input type="text" id="temoin" name="temoin" class="form-control form-control-lg  @error('temoin') is-invalid @enderror" value="{{ old('temoin') }}"/>
    </div>
 

    <div class="form-outline mb-4">
  <label for="description" class="form-label fw-bold">Décrivez la situation</label>
  <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3"></textarea>
  @error('description')
                <span class="text-danger">{{ $message }} </span>
                @enderror
</div>

<div class="form-outline mb-4">
  <label for="proposition" class="form-label fw-bold">Correction(s) ou amélioration(s) proposé(s):</label>
  <textarea class="form-control @error('proposition') is-invalid @enderror" id="proposition" name="proposition" rows="3"></textarea>
  @error('proposition')
                <span class="text-danger">{{ $message }} </span>
                @enderror
</div>

<div class="d-grid gap-3 col-11 mx-auto p-2">
    <button class="btn d-grid text-white" style="background-color: #63BC55;" type="submit" >Envoyer</button>
    </div>                   
</form>

</section>
@endsection