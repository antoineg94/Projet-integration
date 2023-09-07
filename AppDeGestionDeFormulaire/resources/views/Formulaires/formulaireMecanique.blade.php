@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<form method="POST" action="{{ route('formulaireMecaniques.enregistrer') }}">
    <h1>Atelier mécanique - Rapport d'accident (véhicule)</h1>
    @CSRF
    <div class=" mb-3 pb-1" > 
        @if(Session::has('success'))
            <div class="alert alert-success">
                
            <strong>Génial!</strong> {{ Session::get('message') }}
            </div>
        @endif
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="">Nom de l'employé</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="">Numéro(s) d'unité(s) impliqué(s)</label>
        <input type="number" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="">Département</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
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
    <label class="form-label" for="">Autre véhicules impliqués(vitoyen)</label>
    <select class="form-select" aria-label="Default">
  <option value="1" selected>Non</option>
  <option value="2">Oui</option>
</select>
    </div>


    <div class="col-11 mx-auto">
    <a class="btn d-grid text-white" style="background-color: #63BC55;" type="button" href="">Envoyer</a>
    </div>                     
</form>

</section>
@endsection