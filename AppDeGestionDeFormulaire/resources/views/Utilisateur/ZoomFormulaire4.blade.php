@extends('layout/app')

@section('title', 'Informations sur le formulaire d\'atelier mécanique')

@section('middleContent')
<section>
<div class="d-grid gap-3 col-11 mx-auto p-2">
@if (count($zoomForm1))
<div class="card mb-3">
  <h5 class="card-header">
    Informations sur: {{ $formulaire->nomFormulaire }}
  </h5>
  <div class="card-body">

  <table>
<thead>
  <tr>
    <th>Numéro(s) d'unité(s) impliqué(s)</th>
    <th>{{ $zoomForm4->no_unite }}</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Département</td>
    <td>{{ $zoomForm4->departement }}</td>
  </tr>
  <tr>
    <td>Nom de l'employé impliqué</td>
    <td>{{ $zoomForm4->nom }}, {{ $zoomForm4->prenom }}</td>
  </tr>
  <tr>
    <td>Nom du supérieur immédiat</td>
    <td>{{ $zoomForm4->superviseur }}</td>
  </tr>
  <tr>
    <td>Permis de conduire de l'employé</td>
    <td>{{ $zoomForm4->permis_conduire }}</td>
  </tr>
  <tr>
    <td>Autre véhicules impliqués? (citoyen)</td>
    <td>{{ $zoomForm4->vehicule_citoyen }}</td>
  </tr>
</tbody>
</table>
@else
<p>Une erreur s'est produite, veuillez réessayer plus tard</p>
  @endif
  </div>
</section>
@endsection