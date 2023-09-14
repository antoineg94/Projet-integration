@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<div class="d-grid gap-3 col-11 mx-auto p-2">

<div class="card mb-3">
  <h5 class="card-header">
    Informations sur: {{ $formulaire->nomFormulaire }}
  </h5>
  <div class="card-body">

  <table>
<thead>
  <tr>
    <th>Numéro(s) d'unité(s) impliqué(s)</th>
    <th></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Département</td>
    <td></td>
  </tr>
  <tr>
    <td>Nom de l'employé impliqué</td>
    <td></td>
  </tr>
  <tr>
    <td>Nom du supérieur immédiat</td>
    <td></td>
  </tr>
  <tr>
    <td>Permis de conduire de l'employé</td>
    <td></td>
  </tr>
  <tr>
    <td>Autre véhicules impliqués? (citoyen)</td>
    <td></td>
  </tr>
</tbody>
</table>
  
  </div>
</section>
@endsection