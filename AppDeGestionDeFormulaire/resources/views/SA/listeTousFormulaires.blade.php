@extends('layout/app2')

@section('title', 'Liste de tous les formulaires')

@section('middleContent')
<section class="col-10">
  
  <div class="d-grid gap-3 col-11 mx-auto p-2">
  <h5> Liste des formulaires remplis</h5>

  <fieldset class="border p-1 w-25 offset-2">
    <legend>Légende: </legend>
    <p><span class="badge text-bg-success"> </span> Nouvelle demande</p>
    <p><span class="badge text-bg-dark"> </span> Demande déja consulté</p>
  </fieldset>

    @if (count($listes))
    <form method="GET" class="row" action="{{ route('Admins.trierFormulaire') }}">
      @csrf
      <div class="input-group col-4 offset-7">
        <div class="">
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
      <div class="card mb-3 col-7 offset-2 px-0 @if($liste->consulte != 'Consulté') border border-success border-3 @endif" >
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
              @if (Session::get('admin') == true || Session::get('superviseur') == true)
                <a href=" {{route('SA.adminZoomFormulaire', [ $liste ]) }}" class="btn text-white px-5" style="background-color: #63BC55;" >Consulter</a>
              @endif
            </div>
        </div>
      </div>
    @endforeach 

    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-end">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
      
    @else
      <p>Vous n'avez aucun formulaire(s) jusqu'à présent.</p>
    @endif

  </div>
</section>
@endsection