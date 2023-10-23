@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>


  <div class="d-grid gap-3 col-11 mx-auto p-2">

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
    <a class="btn text-white text-start py-3" type="button" style="background-color: #0076D5;" href="{{ route('Menus.listeFormulaire') }}">Liste de formulaires des employés</a>
    @endif

    @if(Session::get('admin') == true)
    <a class="btn text-white text-start py-3" type="button" style="background-color: #ff0000;" href="{{ route('procedure.create') }}">Ajouter une procédure</a>
    @endif
  </div>

<br>
<hr  class="d-grid col-10 mx-auto">
<br>

<h3 style="text-align: center;">Liens utiles: </h3>
<br>
<div class="px-1">
@if(count($procedures))
@foreach($procedures as $procedure)
  <div class="d-grid gap-3 col-11 mx-auto p-2">
    <a href="{{ $procedure->lien }}" class=""  type="button">{{$procedure->titre}}</a>
  </div>
@endforeach
@else
<p>Aucune procédure</p>
@endif

</div>

</section>
@endsection