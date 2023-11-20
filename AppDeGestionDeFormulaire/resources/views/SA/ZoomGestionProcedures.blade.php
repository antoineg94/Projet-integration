@extends('layout/app2')

@section('title', 'Zoom procédures')

@section('middleContent')
<section>
<h1>Gestion des procédures</h1>

<div class="mb-4 col-11 mx-auto">
    @if(isset($procedure))

        <div class="container">
            <h1 >Supression d'une procédure de travail</h1>
            <div>
            <p>Vous êtes sur le point de supprimer une procédure de travail.</p>
            <ul>
                <li class="list-group-item text-truncate"> {{$procedure->titre}}</li>
                <li class="list-group-item text-truncate">Departement: {{$procedure->nom}}</li>
                <li class="list-group-item text-truncate">Lien <a href="{{$procedure->lien}}" style="text-decoration: none; color:black">{{$procedure->lien}}</a></li>   
            </ul>

             <p> Êtes vous sur de vouloir supprimer cette procédure? Cette action est irréversible. </p>
            </div>
           
            <div class="container">
                
                
                <form method="DELETE" action="{{ route('consulterProcedures.destroy', '[$procedure->id]') }}">
                @CSRF
                @method('DELETE')
                    <a role="button" class="btn btn-secondary" href="{{ route('consulterProcedures.index') }}">Non</a>
                    <button type="submit" class="btn btn-danger">Oui</button>
                </form>
                
            </div>
        </div>
    @else
    <p>Procédure non-disponible pour le moment..</p>
    @endif
</div>
</section>
@endsection