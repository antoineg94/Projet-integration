@extends('layout/app')

@section('title', 'Login')

@section('middleContent')
<section>
<form method="POST" class="mb-4 col-11 mx-auto" action="{{ route('Usagers.login') }}">
    @CSRF
    <div class=" mb-3 pb-1" > 
        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Connexion:</h5>
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="matricule">Matricule</label>
        <input type="text" id="matricule" name="matricule" class="form-control form-control-lg  @error('matricule') is-invalid @enderror" />
        @error('matricule')
        <span class="text-danger">{{ $message }} </span>
        @enderror
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="password" >Mot de passe</label>
        <input type="password" id="password" name="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" />
        @error('password')
        <span class="text-danger">{{ $message }} </span>
        @enderror
    </div>

    <div class="col-11 mx-auto">
    <a class="btn d-grid text-white" style="background-color: #63BC55;" type="button" href="">Envoyer</a>
    </div>                
</form>

</section>
@endsection