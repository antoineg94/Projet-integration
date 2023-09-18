@extends('layout/app')

@section('title', 'Informations sur le formulaire déclaration d'accident de travail ')

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
    <th>Nom de l'employé</th>
    <th>{{ $zoomForm1->nom }}, {{ $zoomForm1->prenom }}</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Fonctions </td>
    <td>{{ $zoomForm1->position }}</td>
  </tr>
  <tr>
    <td>Matricule</td>
    <td>{{ $zoomForm1->matricule }}</td>
  </tr>
  <tr>
    <td>Date de l'accident</td>
    <td>{{ $zoomForm1->date_incident }}</td>
  </tr>
  <tr>
    <td>Heure</td>
    <td>{{ $zoomForm1->heure_incident }}</td>
  </tr>
  <tr>
    <td>Témoins 1</td>
    <td>{{ $zoomForm1->temoins1.nom }}</td>
  </tr>
  <tr>
    <td>Témoins 2</td>
    <td>{{ $zoomForm1->temoins2.nom }}</td>
  </tr>
  <tr>
    <td>Endroit</td>
    <td>{{ $zoomForm1->lieu }}</td>
  </tr>
  <tr>
    <td>Secteur d'activité</td>
    <td>{{ $zoomForm1-> }}</td>
  </tr>
  <tr>
    <td>Nature de la blessure</td>
    <td>{{ $zoomForm1->nature_blessure }}</td>
  </tr>
  <tr>
    <td>Description de la blessure</td>
    <td>{{ $zoomForm1->description_blessure }}</td>
  </tr>
  <tr>
    <td>Type de violence</td>
    <td>{{ $zoomForm1->type_violence }}</td>
  </tr>
  <tr>
    <td>Description de l'évenement</td>
    <td>{{ $zoomForm1-> }}</td>
  </tr>
  <tr>
    <td>Premiers soins</td>
    <td>{{ $zoomForm1->premiers_soins }}</td>
  </tr>
  <tr>
    <td>Nom du secouriste</td>
    <td>{{ $zoomForm1->nom_secouriste }}</td>
  </tr>
  <tr>
    <td>Type d'abscence</td>
    <td>{{ $zoomForm1-> type_absence}}</td>
  </tr>
  <tr>
    <td>Durée</td>
    <td>{{ $zoomForm1-> duree_absence}}</td>
  </tr>
  <tr>
    <td>Status de la demande</td>
    <td>{{ $zoomForm1->statut }}</td>
  </tr>
  <tr>
    <td>Nom du superviseur</td>
    <td>{{ $zoomForm1->superviseur }}</td>
  </tr>
</tbody>
</table>
   
   </div>
@endsection
</div>
</section>
@endsection