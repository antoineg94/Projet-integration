@extends('layout/app')

@section('title', 'Informations sur le formulaire d\'audit SST')

@section('middleContent')
<section>
    <div class="my-xl-2 mb-4">
        @if (Session::get('mesForm') == true)
        <a href="{{ route('Menus.ListeMesFormulaires') }}" class="text-white py-2 px-2 m-2" style="background-color: #63BC55; text-decoration: none; border-radius:5px;">
        @elseif (Session::get('EmpForm') == true)
        <a href="{{ route('Menus.listeFormulaire') }}" class="text-white py-2 px-2 m-2" style="background-color: #63BC55; text-decoration: none; border-radius:5px;">
        @endif
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
            Retour
        </a>
    </div>
    <div class="d-grid gap-3 col-xl-8 col-11 mx-auto p-2">
        @if (isset($zoomForm3s))
        <h5>
        Informations sur: formulaire d'audit SST
      </h5>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Nom</td>
                    <td>{{ $zoomForm3s->nom }}, {{ $zoomForm3s->prenom }}</td>
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
            <form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('Menus.validerFormulaire', [$zoomForm3s->employeform_id]) }}">
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