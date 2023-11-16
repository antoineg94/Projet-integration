@extends('layout/app2')

@section('title', 'Informations sur le formulaire d\'atelier mécanique')

@section('middleContent')
<section class="col-10">
<div class="d-grid gap-3 col-11 mx-auto p-2">
@if (isset($zoomForm4s))
<div class="container">
  <div class="mb-4 col-11 mx-auto">
    <h3 class=>
        Informations sur: formulaire d'atelier mécanique
    </h3>  
  </div>
</div>

  <table class="table table-striped table-hover">
  <tbody>
  <tr>
    <td>Numéro(s) d'unité(s) impliqué(s)</td>
    <td>{{ $zoomForm4s->no_unite }}</td>
  </tr>
  <tr>
    <td>Département</td>
    <td>{{ $zoomForm4s->departement }}</td>
  </tr>
  <tr>
    <td>Date</td>
    <td>{{ $zoomForm4s->date }}</td>
  </tr>
  <tr>
    <td>Heure</td>
    <td>{{ $zoomForm4s->heure }}</td>
  </tr>
  <tr>
    <td>Nom de l'employé impliqué</td>
    <td>{{ $zoomForm4s->prenom }} {{ $zoomForm4s->nom }}</td>
  </tr>
  @if (isset($superieur_nom))
  <tr>
    <td>Nom du supérieur immédiat</td>
    <td>{{ $superieur_nom->prenom }} {{ $superieur_nom->nom }}</td>
  </tr>
  @endif
  <tr>
    <td>Permis de conduire de l'employé</td>
    <td>{{ $zoomForm4s->permis_conduire }}</td>
  </tr>
  <tr>
    <td>Autre véhicules impliqués? (citoyen)</td>
    <td>{{ $zoomForm4s->vehicule_citoyen }}</td>
  </tr>
</tbody>
</table>


@if (Session::get('superviseur') == true && Session::get('employe_id') != $zoomForm4s->employe_id && $zoomForm4s->statut != 'Valide')
  <div class="container">
    <form method="POST" action="{{ route('Menus.validerFormulaire', [$zoomForm4s->employeform_id]) }}">
      <h3>Validation du formulaire:</h3>
        @CSRF
          <p>
          En tant que superviseur de {{ $zoomForm4s->prenom }} {{ $zoomForm4s->nom }}, 
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