@extends('layout/app')

@section('title', 'Informations sur le formulaire déclaration d\'accident de travail ')

@section('middleContent')

<section>
  <div class="d-grid gap-3 col-11 mx-auto p-2">
    @if(isset($zoomForm1s))
    <div class="card mb-3">
      <h5 class="card-header">
        Informations sur: formulaire déclaration d'accident de travail
      </h5>
      <div class="card-body">
        <table>
          <thead>
            <tr>
              <th>Nom de l'employé</th>
              <th>{{ $zoomForm1s->nom }}, {{ $zoomForm1s->prenom }}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Fonctions </td>
              <td>{{ $zoomForm1s->position }}</td>
            </tr>
            <tr>
              <td>Matricule</td>
              <td>{{ $zoomForm1s->matricule }}</td>
            </tr>
            <tr>
              <td>Date de l'accident</td>
              <td>{{ $zoomForm1s->date_incident }}</td>
            </tr>
            <tr>
              <td>Heure</td>
              <td>{{ $zoomForm1s->heure_incident }}</td>
            </tr>
            <tr>
              <td>Témoins 1</td>
            </tr>
            <tr>
              <td>Témoins 2</td>
            </tr>
            <tr>
              <td>Endroit</td>
              <td>{{ $zoomForm1s->lieu }}</td>
            </tr>
            <tr>
              <td>Secteur d'activité</td>
              <td>{{ $zoomForm1s->secteur }}</td>
            </tr>
            <tr>
              <td>Nature de la blessure</td>
              <td>{{ $zoomForm1s->nature_blessure }}</td>
            </tr>
            <tr>
              <td>Description de la blessure</td>
              <td>{{ $zoomForm1s->description_blessure }}</td>
            </tr>
            <tr>
              <td>Type de violence</td>
              <td>{{ $zoomForm1s->type_violence }}</td>
            </tr>
            <tr>
              <td>Description de l'évenement</td>
              <td>{{ $zoomForm1s->description_tache }}</td>
            </tr>
            <tr>
              <td>Premiers soins</td>
              <td>{{ $zoomForm1s->premiers_soins }}</td>
            </tr>
            <tr>
              <td>Nom du secouriste</td>
              <td>{{ $zoomForm1s->nom_secouriste }}</td>
            </tr>
            <tr>
              <td>Type d'abscence</td>
              <td>{{ $zoomForm1s-> type_absence}}</td>
            </tr>
            <tr>
              <td>Durée</td>
              <td>{{ $zoomForm1s-> duree_absence}}</td>
            </tr>
            <tr>
              <td>Status de la demande</td>
              <td>{{ $zoomForm1s->statut }}</td>
            </tr>
            <tr>
              <td>Nom du superviseur</td>
              <td>{{ $zoomForm1s->superviseur }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>   
     @endif
  </div>
</section>
@endsection