@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<div class="d-grid gap-2">
<a class="btn btn-primary" type="button" href="{{ route('formulairesTravails.index') }}">Formulaire déclaration d'accidents de travail</a>



</div>
    <div class="h-75"></div>
</section>
@endsection