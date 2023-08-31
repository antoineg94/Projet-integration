@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<form >
    <h1>Formulaire Déclaration d'accident de travail</h1>
    @CSRF
    <div class=" mb-3 pb-1" > 
        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; float:right;">Connexion:</h5>
    </div>
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
Si témoins  = OUI
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
----------------

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
        <select class="form-select" multiple aria-label="multiple select example">
            <option value="0">Tête, visage, nez, yeux, oreille</option>
            <option value="1">Torse</option>
            <option value="2">Poumon</option>
            <option value="3">Bras, épaule, coude</option>
            <option value="3">Poignet, main, doigt</option>
            <option value="3">Dos</option>
            <option value="3">Hanche</option>
            <option value="3">Jambe, genou</option>
            <option value="3">Pied, orteil, cheville</option>
            <option value="3">Autre</option>
        </select>
    </div>

    <div>
        <a href="#" class="btn w-100">Envoyer</a>
    </div>               
</form>

</section>
@endsection