@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>

  <div class="row container mt-xl-5 mt-0">
    <div class="d-grid gap-3 mx-auto p-2 col-xl-4 col-12">
      @if(Session::get('admin') == false)
        <a class="btn text-white text-start py-3"  style="background-color: #63BC55;" type="button" href="{{ route('formulairesTravails.index') }}">Formulaire de déclaration d'accidents de travail</a>
        <a class="btn text-white text-start py-3" style="background-color: #63BC55;"type="button" href="{{ route('formulaireSituationDangereuses.index') }}">Formulaire de signalement d'une situation dangereuse, d'un acte de violence ou d'un «passé proche»</a>
      @endif

      @if(Session::get('admin') == false && Session::get('superviseur') == true)
        <a class="btn text-white text-start py-3" type="button" style="background-color: #63BC55;" href="{{ route('formulaireAudits.index') }}">Audit SST - formulaire simplifié</a>
        <a class="btn text-white text-start py-3" type="button" style="background-color: #63BC55;" href="{{ route('formulaireMecaniques.index') }}">Formulaire Atelier mécanique - Rapport d'accident (véhicule)</a>
      @endif

        <a class="btn text-white text-start py-3" type="button" style="background-color: #0076D5;" href="{{ route('Menus.ListeMesFormulaires') }}">Liste de mes formulaires</a>

      @if(Session::get('admin') == true || Session::get('superviseur') == true)
      
        <a class="btn text-white text-start py-3 position-relative" type="button" style="background-color: #0076D5;" href="{{ route('Menus.listeFormulaire') }}">Liste de formulaires des employés  <span class="position-absolute top-0 start-100 badge rounded-pill bg-danger" style="background-color: #63BC55;">
            {{ session::get('notification' )}}
            </span></a>
           
      @endif

      @if(Session::get('admin') == true)
        <a class="btn text-white text-start py-3" type="button" style="background-color: #ff0000;" href="{{ route('procedure.create') }}">Ajouter une procédure</a>
      @endif
    </div>

  



    <div class="px-1 col-xl-2 col-12">
    <br>
    <h3 style="text-align: left;">Procédures de travail: </h3>
    <br>
<div class="d-grid gap-3 mx-auto p-2 col-xl-11 col-11">
    <div class="card">
  <ul class="list-group list-group-flush">
 
      @if(count($procedures))
        @foreach($procedures as $procedure)
        <li class="list-group-item">
          <a href="{{ $procedure->lien }}" style="text-decoration: none; color: black;"  type="button">{{$procedure->titre}}</a>
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

</section>
@endsection