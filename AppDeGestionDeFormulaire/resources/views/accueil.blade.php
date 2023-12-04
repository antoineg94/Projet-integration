@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>

  <div class="container mt-xl-5 mt-0">
    <div class="row">
      <div class="d-grid gap-3 p-2 col-xl-4 offset-xl-1 col-12">
        @if(Session::get('admin') == false)
          <a class="btn text-white text-start py-3"  style="background-color: #63BC55; height:100px;" type="button" href="{{ route('formulairesTravails.index') }}">Formulaire de déclaration d'accidents de travail</a>
          <a class="btn text-white text-start py-3" style="background-color: #63BC55; height:100px;" type="button" href="{{ route('formulaireSituationDangereuses.index') }}">Formulaire de signalement d'une situation dangereuse, d'un acte de violence ou d'un «passé proche»</a>
        @endif

        @if(Session::get('admin') == false && Session::get('superviseur') == true)
          <a class="btn text-white text-start py-3" type="button" style="background-color: #63BC55; height:100px;" href="{{ route('formulaireAudits.index') }}">Audit SST - formulaire simplifié</a>
          <a class="btn text-white text-start py-3" type="button" style="background-color: #63BC55; height:100px;" href="{{ route('formulaireMecaniques.index') }}">Formulaire Atelier mécanique - Rapport d'accident (véhicule)</a>
        @endif

          <a class="btn text-white text-start py-3" type="button" style="background-color: #0076D5; height:100px;" href="{{ route('Menus.ListeMesFormulaires') }}">Liste de mes formulaires</a>

        @if(Session::get('admin') == true || Session::get('superviseur') == true)
        
          <a class="btn text-white position-relative" type="button" style="background-color: #0076D5; height:100px;" href="{{ route('Menus.listeFormulaire') }}">
            <div class="row">
              <div class="text-start pt-2 col-10">
                <p>Liste de formulaires des employés</p>
              </div>
              <div class="col-2">
                <span class="position-absolute top-0 start-90 badge rounded-pill bg-danger" style="background-color: #63BC55;">
                  {{ session::get('notification' )}}
                </span>
              </div>
            </div>
          </a>
            
        @endif

        @if(Session::get('admin') == true)
          <a class="btn text-white text-start py-3" type="button" style="background-color: #ff0000;" href="{{ route('procedure.create') }}">Ajouter une procédure</a>
        @endif
      </div>

      <div class="px-1 col-xl-5 offset-xl-2 col-12">
        <br>
        <h3 style="text-align: left;">Procédures de travail: </h3>
        <br>
        <div class="d-grid gap-3 p-2 col-7 offset-xl-0 offset-2">
          <div class="card">
            <ul class="list-group list-group-flush">
              @if(count($procedures))
                @foreach($procedures as $procedure)
                  <li class="list-group-item">
                    <a href="{{ $procedure->lien }}" target="_blank" type="button">{{$procedure->titre}}</a>
                  </li>
                @endforeach
              @else
                <p>Aucune procédure</p>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
    
  </div>

</section>
@endsection