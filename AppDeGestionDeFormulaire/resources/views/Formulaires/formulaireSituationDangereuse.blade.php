@extends('layout/app')

@section('title', 'Formulaire Situation Dangereuse')

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
    <form method="POST" class="mb-4 col-xl-7 col-11 mx-auto" action="{{ route('formulaireSituationDangereuses.enregistrer') }}">
        <h1 class="text-xl-center text-left mb-5">Signalement d'une situation dangereuse, d'un acte de violence ou d'un «passé proche»</h1>
        @CSRF

        <h3>Identification</h3>

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
                <label class="form-label fw-bold" for="fonction_avant">Fonctions au moment de l'évènement</label>
                <input type="text" id="fonction_avant" name="fonction_avant" class="form-control form-control-lg  @error('fonction_avant') is-invalid @enderror" />
                @error('fonction_avant')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>


            <div class="form-outline mb-4 col-xl-6 col-12">
                <label class="form-label fw-bold" for="secteur">Secteur d'activité</label>
                <input type="text" id="secteur" name="secteur" class="form-control form-control-lg  @error('secteur') is-invalid @enderror" />
                @error('secteur')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>
        </div>

        <br>

        <h3>Description de la situation dangereuse ou du "passé proche"</h3>

        <div class="row">
            <div class="form-outline mb-4 col-xl-6 col-12">
                <label class="form-label fw-bold" for="date_observ">Date de l'incident</label>
                <input type="date" id="date_observ" name="date_observ" class="form-control form-control-lg  @error('date_observ') is-invalid @enderror" />
                @error('date_observ')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>

            <div class="form-outline mb-4 col-xl-6 col-12">
                <label class="form-label fw-bold" for="heure_observ">Heure de l'incident</label>
                <input type="time" id="heure_observ" name="heure_observ" class="form-control form-control-lg  @error('heure_observ') is-invalid @enderror" />
                @error('heure_observ')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-outline mb-4 col-xl-6 col-12">
                <label class="form-label fw-bold" for="lieu">Lieu</label>
                <input type="text" id="lieu" name="lieu" class="form-control form-control-lg  @error('lieu') is-invalid @enderror" />
                @error('lieu')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>

            <div class="form-outline mb-4 col-xl-6 col-12">
                <label class="form-label fw-bold" for="temoin">Témoin(s) <small>(optionnel)</small></label>
                <input type="text" id="temoin" name="temoin" class="form-control form-control-lg  @error('temoin') is-invalid @enderror" value="{{ old('temoin') }}"/>
            </div>
        </div>

        
    
        <div class="row">
            <div class="form-outline mb-4 col-xl-6 col-12">
                <label for="description" class="form-label fw-bold">Décrivez la situation</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3"></textarea>
                @error('description')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>

            <div class="form-outline mb-4 col-xl-6 col-12">
                <label for="proposition" class="form-label fw-bold">Correction(s) ou amélioration(s) proposé(s):</label>
                <textarea class="form-control @error('proposition') is-invalid @enderror" id="proposition" name="proposition" rows="3"></textarea>
                @error('proposition')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>

            <div class="d-grid gap-3 col-xl-3 offset-xl-9 col-12 p-2">
                <button class="btn d-grid text-white" style="background-color: #63BC55;" type="submit" >Envoyer</button>
            </div>  
        </div>
                         
    </form>

</section>
@endsection