@extends('layout/app2')

@section('title', 'Informations sur le formulaire déclaration d\'accident de travail ')

@section('middleContent')

<section>
  <div class="my-xl-2 mb-4">
      <a href="{{ route('Menus.listeFormulaire') }}" class="text-white py-2 px-2 m-2" style="background-color: #63BC55; text-decoration: none; border-radius:5px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
          </svg>
          Retour
      </a>
  </div>
  <div class="d-grid gap-3 col-xl-8 col-11 mx-auto p-2">
    @if(isset($zoomForm1s))
    <div class="card mb-3">
      <h5 class="card-header">
        Informations sur: formulaire déclaration d'accident de travail
      </h5>
      <div class="card-body">
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
              <td>{{ $nomSuperieur->prenom }} {{ $nomSuperieur->nom }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>   

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