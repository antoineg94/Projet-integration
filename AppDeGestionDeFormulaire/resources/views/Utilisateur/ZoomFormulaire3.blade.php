@extends('layout/app')

@section('title', 'Informations sur le formulaire d\'audit SST')

@section('middleContent')
<section>
<div class="d-grid gap-3 col-11 mx-auto p-2">
@if (isset($zoomForm3s))

  <table class="table table-striped">
    <thead>
        <tr>
            <th>Nom</th>
            <th>{{ $zoomForm3s->nom }}, {{ $zoomForm3s->prenom }}</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Lieux</td>
            <td>{{ $zoomForm3s->lieu }}</td>
        </tr>
        <tr>
            <td>Date</td>
            <td>{{ $zoomForm3s->date_formulaire }}</td>
        </tr>
        <tr>
            <td>Heure</td>
            <td>{{ $zoomForm3s->heure_formulaire }}</td>
        </tr>
        <tr>
            <td>EPI</td>
            <td>{{ $zoomForm3s->epi }}</td>
        </tr>
        <tr>
            <td>Tenue des lieux</td>
            <td>{{ $zoomForm3stenue }}</td>
        </tr>
        <tr>
            <td>Comportement sécuritaire</td>
            <td>{{ $zoomForm3s->comportement }}</td>
        </tr>
        <tr>
            <td>Signalisation</td>
            <td>{{ $zoomForm3s->signalisation }}</td>
        </tr>
        <tr>
            <td>Fiche signalétiques</td>
            <td>{{ $zoomForm3s->fiche_signal }}</td>
        </tr>
        <tr>
            <td>Travaux - Excavation</td>
            <td>{{ $zoomForm3s->travaux }}</td>
        </tr>
        <tr>
            <td>Espace clos</td>
            <td>{{ $zoomForm3s->espace_clos }}</td>
        </tr>
        <tr>
            <td>Méthode de travail</td>
            <td>{{ $zoomForm3s->methode_travail }}</td>
        </tr>
        <tr>
            <td>Autre</td>
            <td>{{ $zoomForm3s->autre }}</td>
        </tr>
        <tr>
            <td>COVID</td>

        </tr>
        <tr>
            <td>respect de la distanciation</td>
            <td>{{ $zoomForm3s->respect_distance }}</td>
        </tr>
        <tr>
            <td>port des EPI (masque/visière)</td>
            <td>{{ $zoomForm3s->port_epi }}</td>
        </tr>
        <tr>
            <td>Respect des procédures établies</td>
            <td>{{ $zoomForm3s->respect_proced }}</td>
        </tr>
        <tr>
            <td>Description</td>
            <td>{{ $zoomForm3s->description }}</td>
        </tr>
    </tbody>
  </table>
@else
<p>Une erreur s'est produite, veuillez réessayer plus tard</p>
@endif
  </div>
</section>
@endsection