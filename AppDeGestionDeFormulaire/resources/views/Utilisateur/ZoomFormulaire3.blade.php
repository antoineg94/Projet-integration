@extends('layout/app')

@section('title', 'Informations sur le formulaire d\'audit SST')

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
    <th>{{ $zoomForm3->nom }}, {{ $zoomForm3->prenom }}</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Lieux</td>
    <td>{{ $zoomForm3->lieu }}</td>
  </tr>
  <tr>
    <td>Date</td>
    <td>{{ $zoomForm3->date_formulaire }}</td>
  </tr>
  <tr>
    <td>Heure</td>
    <td>{{ $zoomForm3-> }}</td>
  </tr>
  <tr>
    <td>EPI</td>
    <td>{{ $zoomForm3->epi }}</td>
  </tr>
  <tr>
    <td>Tenue des lieux</td>
    <td>{{ $zoomForm3tenue }}</td>
  </tr>
  <tr>
    <td>Comportement sécuritaire</td>
    <td>{{ $zoomForm3->comportement }}</td>
  </tr>
  <tr>
    <td>Signalisation</td>
    <td>{{ $zoomForm3->signalisation }}</td>
  </tr>
  <tr>
    <td>Fiche signalétiques</td>
    <td>{{ $zoomForm3->fiche_signal }}</td>
  </tr>
  <tr>
    <td>Travaux - Excavation</td>
    <td>{{ $zoomForm3->travaux }}</td>
  </tr>
  <tr>
    <td>Espace clos</td>
    <td>{{ $zoomForm3->espace_clos }}</td>
  </tr>
  <tr>
    <td>Méthode de travail</td>
    <td>{{ $zoomForm3->methode_travail }}</td>
  </tr>
  <tr>
    <td>Autre</td>
    <td>{{ $zoomForm3->autre }}</td>
  </tr>
  <tr>
    <td>COVID</td>

  </tr>
  <tr>
    <td>respect de la distanciation</td>
    <td>{{ $zoomForm3->respect_distance }}</td>
  </tr>
  <tr>
    <td>port des EPI (masque/visière)</td>
    <td>{{ $zoomForm3->port_epi }}</td>
  </tr>
  <tr>
    <td>Respect des procédures établies</td>
    <td>{{ $zoomForm3->respect_proced }}</td>
  </tr>
  <tr>
    <td>Description</td>
    <td>{{ $zoomForm3->description }}</td>
  </tr>
</tbody>
</table>

  </div>
</section>
@endsection