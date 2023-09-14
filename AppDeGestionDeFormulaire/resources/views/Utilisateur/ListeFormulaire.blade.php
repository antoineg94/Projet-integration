@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<h5> Liste des formulaires remplis</h5>
<div class="d-grid gap-3 col-11 mx-auto p-2">

@foreach($formulaires as $formulaire)
<div class="card mb-3">
  <h5 class="card-header">
    {{ $formulaire->nomFormulaire }}
  </h5>
  <div class="card-body">
    <p class="card-text">Date de création: {{ $formulaire->created_at }}</p>
    <div class=" d-flex justify-content-end">
    <a href="{{ route('formulairesTravails.show', $formulaire->id) }}" class="btn text-white w-50" style="background-color: #63BC55;" type="button">Consulter</a>
    </div>
   </div>
   
</div>
</section>
@endsection