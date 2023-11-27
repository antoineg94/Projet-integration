@extends('layout/app2')

@section('title', 'Zoom procédures')

@section('middleContent')
<section class="col-10">
<h1>Gestion des procédures</h1>
<div class="h-25"></div>
<div class="mb-4 col-11">
    @if(isset($procedure))

        <div class="card offset-1">
        <div class="card-header">
            <h3 class="card-title">Supression d'une procédure de travail</h3>
            <h5 class="card-subtitle mb-2 text-muted">Vous êtes sur le point de supprimer une procédure de travail.</h5>
            </div>
            <div class="card-body">
            <ul>
                <li class="list-group-item text-truncate card-text"> {{$procedure->titre}}</li>
                <li class="list-group-item text-truncate card-text">Departement: {{$procedure->nom}}</li>
                <li class="list-group-item text-truncate card-text">Lien <a href="{{$procedure->lien}}" style="text-decoration: none; color:black">{{$procedure->lien}}</a></li>   
            </ul>

             <p>Êtes vous sur de vouloir supprimer cette procédure? <b>Cette action est irréversible.</b> </p>
            </div>
           
            <div class="card-footer">
                
                
                <form method="POST" class="d-flex flex-row-reverse" action="{{ route('consulterProcedures.destroy', [$procedure->id]) }}">
                @CSRF
                @method('DELETE')
                    <button type="submit" class="btn btn-primary mx-2">Oui</button>
                    <a role="button" class="btn btn-secondary mx-2" href="{{ route('consulterProcedures.index') }}">Non</a>
                </form>
                
            </div>
            </div>
        </div>
    @else
    <p>Procédure non-disponible pour le moment..</p>
    @endif
</div>
</section>
@endsection