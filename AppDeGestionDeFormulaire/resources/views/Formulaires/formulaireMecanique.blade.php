@extends('layout/app')

@section('title', 'form4')

@section('middleContent')
<section>
    <div class="my-xl-2 mb-4">
        <a href="{{ route('Menus.index') }}" class="text-white py-2 px-2 m-2" style="background-color: #63BC55; text-decoration: none; border-radius:5px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
            Retour
        </a>
    </div>
<form method="POST" class="mb-4 col-xl-7 col-11 mx-auto" action="{{ route('formulaireMecaniques.enregistrer') }}">
    <h1 class="text-xl-center text-left mb-5">Atelier mécanique <br> Rapport d'accident (véhicule)</h1>
    @CSRF

    <div class="row">
        <div class="form-outline mb-4 col-xl-6 col-12" id="divT1">
            <label class="form-label fw-bold" for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" class="form-control form-control-lg" value="{{ Session::get('prenom') }}" disabled/>
        </div>

        <div class="form-outline mb-4 col-xl-6 col-12">
            <label class="form-label fw-bold" for="nom">Nom</label>
            <input type="text" id="nom" name="nom" class="form-control form-control-lg" value="{{ Session::get('nom') }}" disabled/>
        </div>
    </div>

    <div class="row">
        <div class="form-outline mb-4 col-xl-6 col-12">
            <label class="form-label fw-bold" for="date">Date</label>
            <input type="date" id="date" name="date" class="form-control form-control-lg @error('date') is-invalid @enderror" value="{{ old('date') }}"/>
            @error('date')
                <span class="text-danger">{{ $message }} </span>
            @enderror
        </div>

        <div class="form-outline mb-4 col-xl-6 col-12">
            <label class="form-label fw-bold" for="heure">Heure</label>
            <input type="time" id="heure" name="heure" class="form-control form-control-lg @error('heure') is-invalid @enderror" value="{{ old('heure') }}"/>
            @error('heure')
                <span class="text-danger">{{ $message }} </span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="form-outline mb-4 col-xl-6 col-12">
            <label class="form-label fw-bold" for="no_unite">Numéro d'unité impliquée</label>
            <input type="text" id="no_unite" name="no_unite" class="form-control form-control-lg  @error('no_unite') is-invalid @enderror" value="{{ old('no_unite') }}"/>
            @error('no_unite')
                <span class="text-danger">{{ $message }} </span>
            @enderror
        </div>

        <div class="form-outline mb-4 col-xl-6 col-12 ">
            <label class="form-label fw-bold" for="permis_conduire">Numéro de permis de conduire de l'employé</label>
            <input type="text" id="permis_conduire" name="permis_conduire" class="form-control form-control-lg  @error('permis_conduire') is-invalid @enderror" value="{{ old('permis_conduire') }}"/>
            @error('permis_conduire')
                <span class="text-danger">{{ $message }} </span>
            @enderror
        </div>
        
    </div>

    <div class="row">
        

        <div class="form-outline mb-4 col-xl-6 col-12">
            <label class="form-label fw-bold" for="departement">Département</label>
            @if (count($departements))
                <select class="form-select @error('departement') is-invalid @enderror" size="8" multiple aria-label="Multiple select example" id="departement" name="departement" value="{{ old('departement') }}">
                    @foreach($departements as $departement)
                        <option value="{{$departement->nom}}" class="text-wrap">{{$departement->nom}}</option>
                        <hr class="p-0 m-3">
                    @endforeach
                </select>

                @error('departement')
                <span class="text-danger">{{ $message }} </span>
                @enderror
            @endif
        </div>

        <div class="form-outline mb-4 col-xl-6 col-12 ">
            <label class="form-label fw-bold" for="vehicule_citoyen" >Autre(s) véhicule(s) impliqué(s) (citoyen)</label>
            <select class="form-select  @error('vehicule_citoyen') is-invalid @enderror" id="vehicule_citoyen" name="vehicule_citoyen" aria-label="Default">
                <option selected></option>
                <option value="0">Non</option>
                <option value="1">Oui</option>
            </select>
        </div>
    </div>

    <div class="d-grid gap-3 col-xl-3 offset-xl-9 col-12 p-2">
        <button class="btn d-grid text-white" style="background-color: #63BC55;" type="submit" >Envoyer</button>
    </div>                     
</form>

</section>
@endsection