@extends('layout/app')

@section('title', 'Liste des formulaires')

@section('middleContent')
<section>
  <div class="d-grid gap-3 col-11 mx-auto p-2">
  <h5 class="col-xl-2 offset-xl-2 col-12"> Liste des formulaires remplis</h5>

  <fieldset class="border p-1 d-grid gap-3 p-2 col-xl-2 offset-xl-2 col-12">
    <legend>Légende: </legend>
    <p><span class="badge text-bg-success"> </span> Nouvelle(s) demande(s)</p>
    <p><span class="badge text-bg-dark"> </span> Demande(s) déjà consultée(s)</p>
  </fieldset>

    @if (count($listes))

    <form method="GET" class="row" action="{{ route('Menus.trierFormulaire') }}">
      @csrf
      <div class="input-group">
        <div class="col-xl-1 offset-xl-8 col-9 ">
          <select class="form-select" name="Trier" id="Trier">
            <option selected>Trier par</option>
            <option value="1">Date</option>
            <option value="2">Employé</option>
            <option value="3">Formulaire</option>
          </select>
        </div>
        <button type="submit" style="background-color: #63BC55; color:white;" class="btn">Trier</button>
      </div>
    </form>
      
      @foreach($listes as $liste) 
        <div class="card mb-3 col-xl-7 offset-xl-2 px-0 @if($liste->statut != 'Valide') border border-success border-3 @endif" >
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
              <div class=" d-flex justify-content-end col">
                @if (Session::get('admin') == true || Session::get('superviseur') == true && Session::get('employe_id') != $liste->employe_id)
                  <a href=" {{route('formulaires.zoomFormulaire', [ $liste ]) }}" class="btn text-white px-5" style="background-color: #63BC55;" >Consulter</a>
                @endif
              </div>
          </div>
        </div>
      @endforeach 
    @else
      <p>Aucun formulaire n'a été rempli.</p>
    @endif

  </div>
</section>
@endsection