@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<form method="POST" action="{{ route('formulaireSituationDangereuses.enregistrer') }}">
    <h1>Signalement d'une situation dangereuse, d'un acte de violence ou d'un «passé proche»</h1>
    @CSRF
    <div class=" mb-3 pb-1" > 
        
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="">Nom de l'employé</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>


    <div>
        <button class="button" type="submit" class="btn w-100">Envoyer</button>
    </div>               
</form>

</section>
@endsection