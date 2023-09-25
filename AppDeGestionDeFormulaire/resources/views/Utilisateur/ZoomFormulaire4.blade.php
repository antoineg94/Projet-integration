@extends('layout/app')

@section('title', 'Informations sur le formulaire d\'atelier mécanique')

@section('middleContent')
<section>
<div class="d-grid gap-3 col-11 mx-auto p-2">
@if (isset($zoomForm4s))

  <table class="table table-striped">
<thead>
  <tr>
    <th>Numéro(s) d'unité(s) impliqué(s)</th>
    <th>{{ $zoomForm4s->no_unite }}</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Département</td>
    <td>{{ $zoomForm4s->departement }}</td>
  </tr>
  <tr>
    <td>Nom de l'employé impliqué</td>
    <td>{{ $zoomForm4s->nom }}, {{ $zoomForm4s->prenom }}</td>
  </tr>
  <tr>
    <td>Nom du supérieur immédiat</td>
    <td>{{ $zoomForm4s->superviseur }}</td>
  </tr>
  <tr>
    <td>Permis de conduire de l'employé</td>
    <td>{{ $zoomForm4s->permis_conduire }}</td>
  </tr>
  <tr>
    <td>Autre véhicules impliqués? (citoyen)</td>
    <td>{{ $zoomForm4s->vehicule_citoyen }}</td>
  </tr>
</tbody>
</table>
@else
<p>Une erreur s'est produite, veuillez réessayer plus tard</p>
  @endif
  </div>
</section>
@endsection