@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('formulaireMecaniques.enregistrer') }}">
    <h1>Atelier mécanique - Rapport d'accident (véhicule)</h1>
    @CSRF
    <div class=" mb-3 pb-1" > 
        @if(Session::has('success'))
            <div class="alert alert-success">
                
            <strong>Génial!</strong> {{ Session::get('message') }}
            </div>
        @endif
    </div>


    <div class="form-outline mb-4" id="divT1">
    <label class="form-label" for="no_unite">Numéro(s) d'unité(s) impliqué(s)</label>
        <input type="number" id="no_unite" name="no_unite" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="departement">Département</label>
        <input type="text" id="departement" name="departement" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
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
    <label class="form-label" for="">Numéro de permis de conduire de l'employe</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="vehicule_citoyen" >Autre véhicules impliqués(vitoyen)</label>
    <select class="form-select" aria-label="Default">
  <option value="1" selected>Non</option>
  <option value="2">Oui</option>
</select>
    </div>


    <div class="col-11 mx-auto">
    <button class="btn d-grid text-white" style="background-color: #63BC55;" type="submit" >Envoyer</button>
    </div>                     
</form>

</section>
@endsection