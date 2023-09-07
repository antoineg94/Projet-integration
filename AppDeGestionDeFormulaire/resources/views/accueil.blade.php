@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<div class="d-grid gap-3 col-10 mx-auto p-2">
<a class="btn text-white" style="background-color: #63BC55;" type="button" href="{{ route('formulairesTravails.index') }}">Formulaire déclaration d'accidents de travail</a>
<a class="btn text-white" style="background-color: #63BC55;"type="button" href="{{ route('formulaireSituationDangereuses.index') }}">Formulaire situation dangereuse</a>
<a class="btn text-white" type="button" style="background-color: #63BC55;" href="{{ route('formulaireAudits.index') }}">Formulaire d'audit</a>
<a class="btn text-white" type="button" style="background-color: #63BC55;" href="{{ route('formulaireMecaniques.index') }}">Formulaire d'analyse mécanique</a>




</div>
</section>
@endsection