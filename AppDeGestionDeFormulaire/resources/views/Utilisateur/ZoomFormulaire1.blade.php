@extends('layout/app')

@section('title', 'Informations sur le formulaire déclaration d\'accident de travail ')

@section('middleContent')

<section>
  <div class="d-grid gap-3 col-11 mx-auto p-2">
    @if(isset($liste))
    <div class="card mb-3">
      <h5 class="card-header">
        Informations sur: formulaire déclaration d'accident de travail
      </h5>
      <div class="card-body">
        <table>
          <thead>
            <tr>
              <th>Nom de l'employé</th>
              <th>{{ $liste->nom }}, {{ $liste->prenom }}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Fonctions </td>
              <td>{{ $liste->position }}</td>
            </tr>
            <tr>
              <td>Matricule</td>
              <td>{{ $liste->matricule }}</td>
            </tr>
            <tr>
              <td>Date de l'accident</td>
              <td>{{ $liste->date_incident }}</td>
            </tr>
            <tr>
              <td>Heure</td>
              <td>{{ $liste->heure_incident }}</td>
            </tr>
            <tr>
              <td>Témoins 1</td>
            </tr>
            <tr>
              <td>Témoins 2</td>
            </tr>
            <tr>
              <td>Endroit</td>
              <td>{{ $liste->lieu }}</td>
            </tr>
            <tr>
              <td>Secteur d'activité</td>
              <td>{{ $liste->secteur }}</td>
            </tr>
            <tr>
              <td>Nature de la blessure</td>
              <td>{{ $liste->nature_blessure }}</td>
            </tr>
            <tr>
              <td>Description de la blessure</td>
              <td>{{ $liste->description_blessure }}</td>
            </tr>
            <tr>
              <td>Type de violence</td>
              <td>{{ $liste->type_violence }}</td>
            </tr>
            <tr>
              <td>Description de l'évenement</td>
              <td>{{ $liste->description_tache }}</td>
            </tr>
            <tr>
              <td>Premiers soins</td>
              <td>{{ $liste->premiers_soins }}</td>
            </tr>
            <tr>
              <td>Nom du secouriste</td>
              <td>{{ $liste->nom_secouriste }}</td>
            </tr>
            <tr>
              <td>Type d'abscence</td>
              <td>{{ $liste-> type_absence}}</td>
            </tr>
            <tr>
              <td>Durée</td>
              <td>{{ $liste-> duree_absence}}</td>
            </tr>
            <tr>
              <td>Status de la demande</td>
              <td>{{ $liste->statut }}</td>
            </tr>
            <tr>
              <td>Nom du superviseur</td>
              <td>{{ $liste->superviseur }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>   
     @endif
  </div>
</section>
@endsection