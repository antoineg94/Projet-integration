@extends('layout/app')

@section('title', 'Liste des formulaires')

@section('middleContent')
<section>
  <div class="my-xl-2 mb-4">
      <a href="{{ route('Menus.index') }}" class="text-white py-2 px-2 m-2" style="background-color: #63BC55; text-decoration: none; border-radius:5px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
          </svg>
          Retour
      </a>
  </div>
  <div class="d-grid gap-3 col-11 mx-auto p-2">
  <h5> Liste des formulaires remplis</h5>

  <fieldset class="border p-1 d-grid gap-3 p-2 col-xl-2 offset-xl-2 col-12">
    <legend>Légende: </legend>
    <p><span class="badge text-bg-success"> </span> Nouvelle(s) demande(s)</p>
    <p><span class="badge text-bg-dark"> </span> Demande(s) déjà consultée(s)</p>
  </fieldset>

    @if (count($listes))

    <form method="GET" class="row" action="{{ route('Menus.trierFormulaire') }}">
      @csrf
      <div class="input-group">
        <div class="col-xl-2 offset-xl-7 col-9 ">
          <select class="form-select" name="Trier" id="Trier">
            <option selected>Trier par</option>
            <option value="1">Date</option>
            <option value="2"> Employe</option>
            <option value="3">Formulaire</option>
          </select>
        </div>
        <button type="submit" style="background-color: #63BC55; color:white;" class="btn">Trier</button>
      </div>
    </form>
      
      @foreach($listes as $liste) 
        <div class="card mb-3 col-xl-7 offset-xl-2 px-0 @if($liste->consulte != 'Consulté') border border-success border-3 @endif" >
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