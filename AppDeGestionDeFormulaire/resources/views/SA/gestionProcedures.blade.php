@extends('layout/app2')

@section('title', 'Gestion des procédures')

@section('middleContent')
<section>
<h1>Gestion des procédures</h1>
<p>Cette page vous permets d'ajouter, de mofidier et de supprimer des procédure pour chacun des départments.</p>

<form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('consulterProcedures.store') }}">
    <h3>Ajout d'une procédure a consulter</h3>
    @CSRF

    <div class="form-outline mb-4">
    <label class="form-label" for="titre">Titre</label>
        <input type="text" id="titre" name="titre" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
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
    <select class="form-select">
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

<br>
<hr class="col-9 mx-auto p-2">
<br>

<h3>Liste des procédures actuelles:</h3>
<!-- Tri par départment -->
<form method="GET" class="row" action="/">
      @csrf
      <div class="input-group">
        <div class="col-9">
          <select class="form-select" name="Trier" id="Trier">
            <option selected>Trier par</option>
            <option value="1">Date</option>
            <option value="2"> Departement</option>
          </select>
        </div>
        <button type="submit" style="background-color: #63BC55; color:white;" class="btn">Trier</button>
      </div>
    </form>



<div class="row px-2 mx-auto">
    @if(count($procedures))
    @foreach($procedures as $procedure)
    <div class="col-sm-3 p-2">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Titre: {{$procedure->titre}}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Departement: {{$procedure->nom}}</li>
            <li class="list-group-item text-truncate">Lien {{$procedure->lien}}</li>
            <li class="list-group-item" >
              <div d-grid gap-2 d-md-block>
              <button class="btn text-white" style="background-color: #63BC55;" type="submit" >Modifier</button>
              <button class="btn text-white " style="background-color: #63BC55;" type="submit" >Supprimer</button>
              </div>
            </li>
        </ul>
    </div>
    </div>
    @endforeach
    @else
    <p>Aucune procédure disponible pour le moment..</p>
    @endif
</div>

</section>
@endsection