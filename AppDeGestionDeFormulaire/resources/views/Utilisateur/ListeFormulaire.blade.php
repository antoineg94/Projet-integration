@extends('layout/app')

@section('title', 'Liste des formulaires')

@section('middleContent')
<section>
  <h5> Liste des formulaires remplis</h5>
  <div class="d-grid gap-3 col-11 mx-auto p-2">
    @if (count($listes))

    <form method="GET" class="row" action="{{ route('Menus.trierFormulaire') }}">
      @csrf
      <div class="col-6 offset-1">
        <select class="form-select" name="Trier" id="Trier">
          <option value="1" selected="selected">Date</option>
          <option value="2">Employé</option>
          <option value="3">Formulaire</option>
        </select>
      </div>
      <div class="col-1 offset-1">
        <button type="submit" class="btn btn-secondary">Trier</button>
      </div>
      
    </form>
      
      @foreach($listes as $liste) 
        <div class="card mb-3" >
          <div class="card-header">{{ $liste->nom_formulaire }}</div>
          <div class="card-body">
            <div class="card-text">Nom: <b>{{ $liste->prenom }} {{ $liste->nom }} </b></div>
            <div class="card-text">Date: <b>{{ $liste->date_formulaire }} </b></div>
            <div class="card-text">Consulté: <b>{{ $liste->consulte }}</b></div>
            <div class="card-text">Statut: <b>{{ $liste->statut }}</b></div>

          <div class=" d-flex justify-content-end">
          <a href=" {{route('formulaires.zoomFormulaire', [ $liste ]) }}" class="btn text-white w-50" style="background-color: #63BC55;" >Consulter</a>
          </div>
        </div>
      </div>
    @endforeach 
    @else
      <p>Vous n'avez rempli aucun formulaire(s) jusqu'à présent.</p>
    @endif

  </div>
</section>
@endsection