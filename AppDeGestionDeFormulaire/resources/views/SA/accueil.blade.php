@extends('layout/app2')

@section('title', 'Login SA')

@section('middleContent')
<section>


  <div class="d-grid gap-3 col-11 mx-auto p-2">
    @if(Session::get('admin') == true || Session::get('superviseur') == true)
    <a class="btn text-white" type="button" style="background-color: #0076D5;" href="{{ route('Menus.listeFormulaire') }}">Liste des formulaires</a>
    @endif

    @if(Session::get('admin') == true)
    <a class="btn text-white" type="button" style="background-color: #ff0000;" href="{{ route('procedure.create') }}">Ajouter une procédure</a>
    @endif
  </div>

<br>
<hr  class="d-grid col-10 mx-auto">
<br>





</section>
@endsection