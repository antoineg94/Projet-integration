@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>


  <div class="d-grid gap-3 col-11 mx-auto p-2">
    <a class="btn text-white" style="background-color: #63BC55;" type="button" href="{{ route('formulairesTravails.index') }}">Déclaration d'accidents de travail</a>
    <a class="btn text-white" style="background-color: #63BC55;"type="button" href="{{ route('formulaireSituationDangereuses.index') }}">Formulaire situation dangereuse</a>
    <a class="btn text-white" type="button" style="background-color: #63BC55;" href="{{ route('formulaireAudits.index') }}">Formulaire d'audit SST</a>
    <a class="btn text-white" type="button" style="background-color: #63BC55;" href="{{ route('formulaireMecaniques.index') }}">Formulaire d'analyse mécanique</a>
    <a class="btn text-white" type="button" style="background-color: #0076D5;" href="{{ route('Menus.listeFormulaire') }}">Liste des formulaires</a>
    <a class="btn text-white" type="button" style="background-color: #ff0000;" href="{{ route('procedure.create') }}">Ajouter une procédure</a>
  </div>

<br>
<hr  class="d-grid col-10 mx-auto">
<br>

<h3 style="text-align: center;">Liens utiles: </h3>
<br>
<div class="px-1">
@if(count($procedures))
@foreach($procedures as $procedure)
<div class="card mb-3">
  <h5 class="card-header">{{$procedure->titre}}</h5>
  <div class="card-body">
    <p class="card-text">{{$procedure->description}}</p>
    <div class=" d-flex justify-content-end">
    <a href="{{ $procedure->lien }}" class="btn text-white w-50" style="background-color: #63BC55;" type="button">Consulter</a>
    </div>
   </div>
</div>
@endforeach
@else
<p>Aucune procédure</p>
@endif

</div>

</section>
@endsection