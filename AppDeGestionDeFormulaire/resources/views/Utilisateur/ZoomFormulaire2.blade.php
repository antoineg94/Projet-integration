@extends('layout/app')

@section('title', 'Informations sur le signalement d'une situation dangereuse, d'un acte de violence ou d'un «passé proche»')

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
    <th>Nom</th>
    <th>{{ $zoomForm2->nom }}, {{ $zoomForm2->prenom }}</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Matricule</td>
    <td>{{ $zoomForm2->matricule }}</td>
  </tr>
  <tr>
    <td>Fonctions</td>
    <td>{{ $zoomForm2->position }}</td>
  </tr>
  <tr>
    <td>Secteur d'activité</td>
    <td>{{ $zoomForm2-> }}</td>
  </tr>
  <tr>
    <td>Date de l'observation</td>
    <td>{{ $zoomForm2->date_observ }}</td>
  </tr>
  <tr>
    <td>Heure de l'observation</td>
    <td>{{ $zoomForm2->heure_observ }}</td>
  </tr>
  <tr>
    <td>Lieu</td>
    <td>{{ $zoomForm2->lieu }}</td>
  </tr>
  <tr>
    <td>Témoins 1</td>
    <td>{{ $zoomForm2->temoins1.nom }}</td>
  </tr>
  <tr>
    <td>Témoins 2</td>
    <td>{{ $zoomForm2->temoins2.nom }}</td>
  </tr>
  <tr>
    <td>Description de la situation</td>
    <td>{{ $zoomForm2-> }}</td>
  </tr>
  <tr>
    <td>Correction/améliorations</td>
    <td>{{ $zoomForm2-> }}</td>
  </tr>
  <tr>
    <td>nom superviseur</td>
    <td>{{ $zoomForm2->superviseur }}</td>
  </tr>
</tbody>
</table>

</div>
</section>
@endsection