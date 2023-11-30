@extends('layout/app2')

@section('title', 'Liste de tous les formulaires')

@section('middleContent')
  <section class="col-10">
    <div class="mb-4 col-11">

      @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{ $error }}
        </div>
      @endforeach
 
      @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
          {{ Session::get('message') }}
        </div>
      @endif
      <div class="d-grid gap-3 col-12 p-2">
        <h3 class="offset-2"> Liste des formulaires remplis</h3>

        <fieldset class="border p-1 w-25 offset-2">
          <legend>Légende: </legend>
          <p><span class="badge text-bg-success"> </span> Nouvelle demande</p>
          <p><span class="badge text-bg-dark"> </span> Demande déja consulté</p>
        </fieldset>

        @if (count($listes))
          <form method="GET" class=" offset-10 " action="{{ route('Admins.trierFormulaire') }}">
            @CSRF
            <div class="input-group">
              <div>
                <select class="form-select" name="Trier" id="Trier">
                  <option selected>Trier par</option>
                  <option value="1">Date</option>
                  <option value="2">Employé</option>
                  <option value="3">Formulaire</option>
                  <option value="4">Superviseur</option>
                </select>
              </div>
              <button type="submit" style="background-color: #63BC55; color:white;" class="btn">Trier</button>
            </div>
          </form>

          @foreach($listes as $liste)
            <div class="card mb-3 col-10 offset-2 px-0 @if($liste->statut != 'Valide') border border-success border-3 @endif" >
              <div class="card-header">{{ $liste->nom_formulaire }}</div>
              <div class="card-body">
                <div class="row">
                  <div class="card-text col">Nom: <b>{{ $liste->prenom }} {{ $liste->nom }} </b></div>
                  <div class="card-text col">Date: <b>{{ $liste->date_formulaire }} </b></div>
                </div>
                <div class="row">
                  <div class="card-text col">Consulté: <b>{{ $liste->consulte }}</b></div>
                  <div class="card-text col">Statut: <b>{{ $liste->statut }}</b></div>
                </div>
                <div class="row">
                  <div class="card-text col">Supérieur: <b>{{ $liste->sup_prenom }} {{ $liste->sup_nom }}</b></div>
                </div>
                  <div class=" d-flex justify-content-end col">
                    @if (Session::get('admin') == true || Session::get('superviseur') == true)
                      <a href=" {{route('SA.adminZoomFormulaire', [ $liste ]) }}" class="btn text-white px-5" style="background-color: #63BC55;" >Consulter</a>
                    @endif
                  </div>
              </div>
            </div>
          @endforeach  
           
        @else
          <p>Vous n'avez aucun formulaire(s) jusqu'à présent.</p>
        @endif

      </div> 
</div>
  </section>
@endsection