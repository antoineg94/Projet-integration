@extends('layout/app2')

@section('title', 'Informations sur le formulaire déclaration d\'accident de travail ')

@section('middleContent')

<section>
  <div class="d-grid gap-3 col-xl-8 col-11 mx-auto p-2">
    @if(isset($zoomForm1s))
      <h5>
        Informations sur: formulaire déclaration d'accident de travail
      </h5>      
        <table class="table table-striped">
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
              <td>Date/Heure de l'accident</td>
              <td>{{ $zoomForm1s->date_incident }} {{ $zoomForm1s->heure_incident }}</td>
            </tr>
            <tr>
              <td>Témoin(s)</td>
              <td>{{ $zoomForm1s->temoin }}</td>
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
              <td class="overflow-auto">{{ $zoomForm1s->nature_blessure }}</td>
            </tr>
            <tr>
              <td>Description de la blessure</td>
              <td class="overflow-auto">{{ $zoomForm1s->description_blessure }}</td>
            </tr>
            <tr>
              <td>Type de violence</td>
              <td>{{ $zoomForm1s->type_violence }}</td>
            </tr>
            <tr>
              <td>Description de l'évènement</td>
              <td class="overflow-auto">{{ $zoomForm1s->description_tache }}</td>
            </tr>
            <tr>
              <td>Nom secouriste</td>
              <td>{{ $zoomForm1s->nom_secouriste }}</td>
            </tr>
        
            <tr>
              <td>Type d'absence</td>
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

    @if (Session::get('superviseur') == true && Session::get('employe_id') != $zoomForm1s->employe_id && $zoomForm1s->statut != 'Valide')
    <div class="container">
    @if (Session::get('admin') == true)
      <form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('Menus.validerFormulaire', [$zoomForm1s->employeform_id]) }}">
    @else
      <form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('Menus.validerFormulaire', [$zoomForm1s->employeform_id]) }}">
    @endif
        <h3>Validation du formulaire:</h3>
          @CSRF
            <p>
              En tant que superviseur de {{ $zoomForm1s->prenom }} {{ $zoomForm1s->nom }}, 
              je confirme que cette demande est valide.
            </p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="statut" id="statut" value="Valide">
              <label class="form-check-label" for="statut">Oui</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="statut" id="statut" value="Invalide">
              <label class="form-check-label" for="statut">Non</label>
            </div>


            <div class="d-grid gap-3 col-11 mx-auto p-2">
              <button class="btn d-grid text-white" style="background-color: #63BC55;" type="submit" >Envoyer</button>
            </div>            
        </form>
      </div>
    @endif
    @else
    <p>Une erreur s'est produite, veuillez réessayer plus tard</p>
    @endif
  </div>
</section>
@endsection