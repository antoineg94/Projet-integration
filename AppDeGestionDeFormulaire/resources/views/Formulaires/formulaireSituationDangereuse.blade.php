@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<form method="POST" action="{{ route('formulaireSituationDangereuses.enregistrer') }}">
    <h1>Signalement d'une situation dangereuse, d'un acte de violence ou d'un «passé proche»</h1>
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

    <div class="form-outline mb-4">
    <label class="form-label" for="">Secteur d'activité</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <h3>Description de la situation dangeureurse ou du "passé proche"</h3>
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
    <label class="form-label" for="">Lieu</label>
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
  <label for="exampleFormControlTextarea1" class="form-label">Décrivez la situation</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<div class="form-outline mb-4">
  <label for="exampleFormControlTextarea1" class="form-label">Correction(s) ou amélioration(s) proposé(s):</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<div>
    <a class="btn d-grid gap-2 text-white" style="background-color: #63BC55;" type="button" href="">Envoyer</a>
    </div>                  
</form>

</section>
@endsection