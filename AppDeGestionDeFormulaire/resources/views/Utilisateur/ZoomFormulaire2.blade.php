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
    <th>Nom de l'employé</th>
    <th></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Fonctions </td>
    <td></td>
  </tr>
  <tr>
    <td>Matricule</td>
    <td></td>
  </tr>
  <tr>
    <td>Date de l'accident</td>
    <td></td>
  </tr>
  <tr>
    <td>Heure</td>
    <td></td>
  </tr>
  <tr>
    <td>Témoins 1</td>
    <td></td>
  </tr>
  <tr>
    <td>Témoins 2</td>
    <td></td>
  </tr>
  <tr>
    <td>Endroit</td>
    <td></td>
  </tr>
  <tr>
    <td>Secteur d'activité</td>
    <td></td>
  </tr>
  <tr>
    <td>Nature de la blessure</td>
    <td></td>
  </tr>
  <tr>
    <td>Description de la blessure</td>
    <td></td>
  </tr>
  <tr>
    <td>Type de violence</td>
    <td></td>
  </tr>
  <tr>
    <td>Description de l'évenement</td>
    <td></td>
  </tr>
  <tr>
    <td>Premiers soins</td>
    <td></td>
  </tr>
  <tr>
    <td>Nom du secouriste</td>
    <td></td>
  </tr>
  <tr>
    <td>Type d'abscence</td>
    <td></td>
  </tr>
  <tr>
    <td>Durée</td>
    <td></td>
  </tr>
  <tr>
    <td>Status de la demande</td>
    <td></td>
  </tr>
  <tr>
    <td>Nom du superviseur</td>
    <td></td>
  </tr>
  <tr>
    <td>no de poste</td>
    <td></td>
  </tr>
</tbody>
</table>

</div>
</section>
@endsection