@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('formulaireMecaniques.enregistrer') }}">
    <h1>Atelier mécanique - Rapport d'accident (véhicule)</h1>
    @CSRF


    <div class="form-outline mb-4" id="divT1">
    <label class="form-label" for="no_unite">Numéro(s) d'unité(s) impliqué(s)</label>
        <input type="number" id="no_unite" name="no_unite" class="form-control form-control-lg  @error('no_unite') is-invalid @enderror" />
       
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="departement">Département</label>
        <input type="text" id="departement" name="departement" class="form-control form-control-lg  @error('departement') is-invalid @enderror" />
      
    </div>
    <div class="form-outline mb-4">
    <label class="form-label" for="">Prénom et nom de l'employé impliqué</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>
    <div class="form-outline mb-4">
    <label class="form-label" for="">Prénom et nom du supérieur immédiat</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>
    <div class="form-outline mb-4">
    <label class="form-label" for="">Numéro de permis de conduire de l'employé</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="vehicule_citoyen" >Autre véhicules impliqués(citoyen)</label>
    <select class="form-select  @error('vehicule_citoyen') is-invalid @enderror" aria-label="Default">
  <option value="1" selected>Non</option>
  <option value="2">Oui</option>
</select>
    </div>


    <div class="d-grid gap-3 col-11 mx-auto p-2">
    <button class="btn d-grid text-white" style="background-color: #63BC55;" type="submit" >Envoyer</button>
    </div>                     
</form>

</section>
@endsection