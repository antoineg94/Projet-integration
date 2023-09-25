@extends('layout/app')

@section('title', 'Informations sur le signalement d\'une situation dangereuse, d\'un acte de violence ou d\'un «passé proche»')

@section('middleContent')
<section>
<div class="d-grid gap-3 col-11 mx-auto p-2">
@if (isset($zoomForm2s))
    
  <table class="table table-striped">
<thead>
  <tr>
    <th>Nom</th>
    <th>{{ $zoomForm2s->nom }}, {{ $zoomForm2s->prenom }}</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Matricule</td>
    <td>{{ $zoomForm2s->matricule }}</td>
  </tr>
  <tr>
    <td>Fonctions</td>
    <td>{{ $zoomForm2s->position }}</td>
  </tr>
  <tr>
    <td>Secteur d'activité</td>
    <td>{{ $zoomForm2s->secteur }}</td>
  </tr>
  <tr>
    <td>Date de l'observation</td>
    <td>{{ $zoomForm2s->date_observ }}</td>
  </tr>
  <tr>
    <td>Heure de l'observation</td>
    <td>{{ $zoomForm2s->heure_observ }}</td>
  </tr>
  <tr>
    <td>Lieu</td>
    <td>{{ $zoomForm2s->lieu }}</td>
  </tr>
  <tr>
    <td>Témoins 1</td>
  </tr>
  <tr>
    <td>Témoins 2</td>
  </tr>
  <tr>
    <td>Description de la situation</td>
    <td>{{ $zoomForm2s->description }}</td>
  </tr>
  <tr>
    <td>Correction/améliorations</td>
    <td>{{ $zoomForm2s->proposition }}</td>
  </tr>
  <tr>
    <td>nom superviseur</td>
    <td>{{ $zoomForm2s->superviseur }}</td>
  </tr>
</tbody>
</table>
@else
<p>Une erreur s'est produite, veuillez réessayer plus tard</p>
@endif
</div>
</section>
@endsection