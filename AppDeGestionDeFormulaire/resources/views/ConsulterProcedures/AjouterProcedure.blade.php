@extends('layout/app')

@section('title', 'Liste des formulaires')

@section('middleContent')
<section>
<form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('procedure.store') }}">
    <h1>Ajout d'une procédure a consulter</h1>
    @CSRF

    <div class="form-outline mb-4">
    <label class="form-label" for="titre">Titre</label>
        <input type="text" id="titre" name="titre" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="lien">Lien</label>
        <input type="text" id="lien" name="lien" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>
    
    <div class="form-outline mb-4">
    <label class="form-label" for="lien">Département</label>
    <br>
    <small>Il est possible de sélectionner plus d'un département</small>
    <select class="form-select" aria-label="multiple select example">
        @if(isset($departements))
        @foreach($departements as $departement)
        <option value="{{ $departement->nom }}">{{ $departement->nom }}</option>
        @endforeach
        @else
        <p>Aucun département</p>
        @endif
    </select>
    </div>
    


    <div class="col-11 mx-auto">
        <button class="btn d-grid text-white w-100" style="background-color: #63BC55;" type="submit">Ajouter</button>
    </div>                     
</form>

</section>
@endsection