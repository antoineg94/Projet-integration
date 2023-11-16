@extends('layout/app')

@section('title', 'Informations sur le signalement d\'une situation dangereuse, d\'un acte de violence ou d\'un «passé proche»')

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
  <div class="d-grid gap-3 col-11 mx-auto p-2">
    @if (isset($zoomForm2s))
    <h5>
        Informations sur: signalement d'une situation dangereuse, d'un acte de violence ou d'un «passé proche»
      </h5>
      <table class="table table-striped">
        <thead>
          <tr>
            <td>Nom</td>
            <td>{{ $zoomForm2s->nom }}, {{ $zoomForm2s->prenom }}</td>
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
            <td>Témoins</td>
            <td>{{ $zoomForm2s->temoins }}</td>
          </tr>
          <tr>
            <td>Description de la situation</td>
            <td class="overflow-auto">{{ $zoomForm2s->description }}</td>
          </tr>
          <tr>
            <td>Correction/améliorations</td>
            <td class="overflow-auto">{{ $zoomForm2s->proposition }}</td>
          </tr>
          <tr>
            <td>nom superviseur</td>
            <td>{{ $zoomForm2s->superviseur }}</td>
          </tr>
        </tbody>
      </table>

      @if (Session::get('superviseur') == true && Session::get('employe_id') != $zoomForm2s->employe_id && $zoomForm2s->statut != 'Valide')
        <div class="container">
          <form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('Menus.validerFormulaire', [$zoomForm2s->employeform_id]) }}">
            <h3>Validation du formulaire:</h3>
              @CSRF
                <p>
                En tant que superviseur de {{ $zoomForm2s->prenom }} {{ $zoomForm2s->nom }}, 
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