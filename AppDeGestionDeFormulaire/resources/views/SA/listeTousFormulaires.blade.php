@extends('layout/app2')

@section('title', 'Liste de tous les formulaires')

@section('middleContent')
<section class="col-10">
  
  <div class="d-grid gap-3 col-11 mx-auto p-2">
  <h5> Liste des formulaires remplis</h5>
    @if (count($listes))

    <form method="GET" class="row" action="{{ route('Menus.trierFormulaire') }}">
      @csrf
      <div class="input-group col-4 offset-5">
        <div class="">
          <select class="form-select" name="Trier" id="Trier">
            <option selected>Trier par</option>
            <option value="1">Date</option>
            <option value="2"> Employe</option>
            <option value="3">Formulaire</option>
          </select>
        </div>
        <button type="submit" style="background-color: #63BC55; color:white;" class="btn">Trier</button>
      </div>
    </form>

    @foreach($listes as $liste) 
      <div class="card mb-3 col-7 offset-2 px-0" >
        <div class="card-header">{{ $liste->nom_formulaire }}</div>
        <div class="card-body">
          <div class="row">
            <div class="card-text col">Nom: <b>{{ $liste->prenom }} {{ $liste->nom }} </b></div>
            <div class="card-text col">Date: <b>{{ $liste->date_formulaire }} </b></div>
          </div>
          <div class="row">
            <div class="card-text col">Consulté: <b>{{ $liste->consulte }}</b></div>
            <div class="card-text col">Statut: <b>{{ $liste->statut }}</b></div>
          </div>
            <div class=" d-flex justify-content-end col">
              @if (Session::get('admin') == true || Session::get('superviseur') == true)
                <a href=" {{route('formulaires.zoomFormulaire', [ $liste ]) }}" class="btn text-white px-5" style="background-color: #63BC55;" >Consulter</a>
              @endif
            </div>
        </div>
      </div>
    @endforeach 

      
    @else
      <p>Vous n'avez aucun formulaire(s) jusqu'à présent.</p>
    @endif

  </div>
</section>
@endsection