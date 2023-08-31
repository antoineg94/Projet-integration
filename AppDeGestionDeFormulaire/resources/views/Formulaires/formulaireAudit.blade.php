<section>
<form method="POST" action="{{ route('formulaireAudits.enregistrer') }}">
    <h1>Grille audit SST - formulaire simplifié</h1>
    @CSRF
    <div class=" mb-3 pb-1" > 
      @if(Session::has('success'))
          <div class="alert alert-success">
              
          <strong>Génial!</strong> {{ Session::get('message') }}
          </div>
      @endif
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="">Nom du département</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="">Nom de l'employé</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="">Lieu(x) des travaux</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="">Date</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="">Heure</label>
        <input type="text" id="" name="" class="form-control form-control-lg  @error('') is-invalid @enderror" />
        @error('')
                <span class="text-danger">{{ $message }} </span>
                @enderror
    </div>
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Conforme</th>
      <th scope="col">Non conforme</th>
      <th scope="col">N/A</th>
    </tr>
  </thead>
  <tbody>
    @foreach
    <tr>
      <th scope="row">1</th>
      <td>{{'nomCategorie'}}</td>
      <td>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        </div>
      </td>
      <td>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
        </div>
      </td>
      <td>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
        </div>
      </td>
    </tr>
@endforeach

  </tbody>
</table>
</div>

    <div>
        <a href="#" class="btn w-100">Envoyer</a>
    </div>               
</form>

</section>