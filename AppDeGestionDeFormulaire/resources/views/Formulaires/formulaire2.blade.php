@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')
<section>
<form method="POST" action="{{ route('') }}">
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
        <a href="#" class="btn w-100">Envoyer</a>
    </div>               
</form>

</section>
@endsection