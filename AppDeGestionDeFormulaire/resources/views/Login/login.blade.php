@extends('layout/app')

@section('title', 'Login')

@section('middleContent')
<section>
<form method="GET" class="mb-4 col-11 mx-auto" action="{{ route('Logins.login') }}">
    @CSRF
    <div class=" mb-3 pb-1" > 
        <h5 class="fw-normal" style="letter-spacing: 1px;">Connexion:</h5>
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="employe_id">Matricule</label>
        <input type="text" id="employe_id" name="employe_id" class="form-control form-control-lg  @error('employe_id') is-invalid @enderror" />
        @error('employe_id')
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
 <br>
    <div class=" mx-auto">
    <button class="btn d-grid text-white w-100" style="background-color: #63BC55;" type="submit">Connexion</button>
    </div>                
</form>

</section>
@endsection