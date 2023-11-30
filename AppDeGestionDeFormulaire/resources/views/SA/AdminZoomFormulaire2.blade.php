@extends('layout/app2')

@section('title', 'Informations sur le signalement d\'une situation dangereuse, d\'un acte de violence ou d\'un «passé proche»')

@section('middleContent')
<section class="col-10">
<div class="d-grid gap-3 col-11 mx-auto p-2">
@if (isset($zoomForm2s))
      <h3>
        Informations sur: signalement d'une situation dangereuse, d'un acte de violence ou d'un «passé proche»
      </h3>     
  <table class="table table-striped table-hover">
  <tbody>
  <tr>
    <td class="w-25">Nom</td>
    <td>{{ $zoomForm2s->nom }}, {{ $zoomForm2s->prenom }}</td>
  </tr>
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
  @if(isset($zoomForm1s->temoin))
            <tr>
              <td>Témoin(s)</td>
              <td>{{ $zoomForm1s->temoin }}</td>
            </tr>
            @else
            <tr>
              <td>Témoin(s)</td>
              <td>Aucun témoins</td>
            </tr>
            @endif
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
    <td>{{ $zoomForm2s->sup_prenom }} {{ $zoomForm2s->sup_nom }}</td>
  </tr>
</tbody>
</table>

@if($zoomForm2s->supId ==  1 && $zoomForm2s->statut == "En attente")
    <div class="container">
      <form method="POST" action="{{ route('Menus.validerFormulaire', [$zoomForm2s->employeform_id]) }}">
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