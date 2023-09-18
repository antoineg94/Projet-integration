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
    
      <div class="card-text">Date: <b>{{ $liste->date_formulaire }} </b></div>
      <div class="card-text">Statut: {{ $liste->statut }}</div>
      
    <div class=" d-flex justify-content-end">
    <a href="#" class="btn text-white w-50" style="background-color: #63BC55;" type="button">Consulter</a>
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