@extends('layout/app2')

@section('title', 'Informations sur le formulaire d\'audit SST')

@section('middleContent')
<section class="col-10">
<div class="d-grid gap-3 col-11 mx-auto p-2">
@if (isset($zoomForm3s))
    <h3>
        Informations sur: formulaire d'audit SST
    </h3>     
  <table class="table table-striped table-hover">
  <tbody>
        <tr>
            <td>Nom</td>
            <td>{{ $zoomForm3s->nom }}, {{ $zoomForm3s->prenom }}</td>
        </tr>
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
            <td>{{ $zoomForm3s->tenue }}</td>
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

  @if (Session::get('superviseur') == true && Session::get('employe_id') != $zoomForm3s->employe_id && $zoomForm3s->statut != 'Valide')  
    <div class="container">
      <form method="POST" action="{{ route('Menus.validerFormulaire', [$zoomForm3s->employeform_id]) }}">
        <h3>Validation du formulaire:</h3>
          @CSRF
            <p>
            En tant que superviseur de {{ $zoomForm3s->prenom }} {{ $zoomForm3s->nom }}, 
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