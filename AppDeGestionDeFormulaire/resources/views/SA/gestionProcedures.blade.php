@extends('layout/app')

@section('title', 'Gestion des procédures')

@section('middleContent')
<section>
<h1>Gestion des procédures</h1>
<p>Cette page vous permets d'ajouter, de mofidier et de supprimer des procédure pour chacun des départments.</p>

<button>Ajouter</button>

Liste des procédures actuelles:

<!-- Tri par départment -->
<form method="GET" class="row" action="{{ route('Controllers.trierProcedure') }}">
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



<div class="row">
    @if(count($procedures))
    @foreach($procedures as $procedure)
    <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Titre: {{procedure->titre}}
            <div class=" d-flex justify-content-end">
                <a href="" class="btn" type="button">Supprimer</a>
            </div>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Date: {{procedure->date}}</li>
            <li class="list-group-item">Departement: {{procedure->departement}}</li>
            <li class="list-group-item">Texte: {{procedure->description}}</li>
            <li class="list-group-item">Lien {{procedure->lien}}</li>
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