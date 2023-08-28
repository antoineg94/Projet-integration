<section>
<form method="POST" action="{{ route('Usagers.login') }}">
    @CSRF
    <div class=" mb-3 pb-1" > 
        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; float:right;">Connexion:</h5>
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="email">Adresse courriel</label>
        <input type="email" id="email" name="email" class="form-control form-control-lg  @error('email') is-invalid @enderror" />
        @error('email')
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

    <div>
        <a href="#" class="btn w-100">Envoyer</a>
    </div>               
</form>

</section>