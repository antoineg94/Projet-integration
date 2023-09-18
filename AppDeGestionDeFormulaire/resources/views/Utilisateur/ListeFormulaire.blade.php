@extends('layout/app')

@section('title', 'Liste des formulaires')

@section('middleContent')
<section>
<h5> Liste des formulaires remplis</h5>
<div class="d-grid gap-3 col-11 mx-auto p-2">
@if (count($listes))
@foreach($listes as $liste) 
  <div class="card mb-3">
  <h5 class="card-header">
    {{ $liste->nom }}
  </h5>
    <div class="card-body">
      <div class="d-flex w-50">
      <span class="card-text">Date de création: {{ $liste->date_formulaire }}</span>
      <span class="card-text">Statut: {{ $liste->statut }}</span>
      </div>
    <div class=" d-flex justify-content-end">
    <a href="#" class="btn text-white w-25" style="background-color: #63BC55;" type="button">Consulter</a>
    </div>
   </div>
   </div>
   @endforeach 
   @else
   <p>Aucun formulaires</p>
   @endif

</div>
</section>
@endsection