@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')


<section>
  <div class="my-xl-2 mb-4">
      <a href="{{ route('Menus.index') }}" class="text-white py-2 px-2 m-2" style="background-color: #63BC55; text-decoration: none; border-radius:5px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
          </svg>
          Retour
      </a>
  </div>
  <form method="POST" class="mb-4 col-xl-7 col-11 mx-auto" action="{{ route('formulaireAudits.enregistrer') }}">
    <h1>Grille audit SST - formulaire simplifié</h1>
    @CSRF

    <div class="row">
        <div class="form-outline mb-4 col-xl-6 col-12" id="divT1">
            <label class="form-label fw-bold" for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" class="form-control form-control-lg" value="{{ Session::get('prenom') }}" disabled/>
        </div>

        <div class="form-outline mb-4 col-xl-6 col-12">
            <label class="form-label fw-bold" for="nom">Nom</label>
            <input type="text" id="nom" name="nom" class="form-control form-control-lg" value="{{ Session::get('nom') }}" disabled/>
        </div>
    </div>
    
    <div class="form-outline mb-4 col-12 mx-auto">
      <label class="form-label fw-bold" for="lieu">Lieu(x) des travaux</label>
      <input type="text" id="lieu" name="lieu" class="form-control form-control-lg  @error('lieu') is-invalid @enderror" value="{{ old('lieu') }}"/>
      @error('lieu')
        <small class="text-danger">{{ $message }} </small>
      @enderror
    </div>

    <div class="row">
      <div class="form-outline mb-4 col-xl-6 col-12 mx-auto" >
        <label class="form-label fw-bold" for="date_form">Date</label>
          <input type="date" id="date_form" name="date_form" class="form-control form-control-lg  @error('date_form') is-invalid @enderror" value="{{ old('date_form') }}" />
          @error('date_form')
            <small class="text-danger">{{ $message }} </small>
          @enderror
      </div>

      <div class="form-outline mb-4 col-xl-6 col-12 mx-auto" >
        <label class="form-label fw-bold" for="heure_form">Heure</label>
          <input type="time" id="heure_form" name="heure_form" class="form-control form-control-lg  @error('heure_form') is-invalid @enderror" value="{{ old('heure_form') }}"/>
          @error('heure_form')
            <small class="text-danger">{{ $message }} </small>
          @enderror
      </div>
    </div>
      

    <br>
    <hr  class="d-grid col-10 mx-auto">
    <br>

    <div>
      <table class="table table-striped">
        <thead class="sticky-top">
          <tr style="background-color: #63BC55;" >
            <th ><br></th>
            <th style="writing-mode: vertical-rl; text-orientation: mixed;">Conforme</th>
            <th style="writing-mode: vertical-rl; text-orientation: mixed;">Non conforme</th>
            <th style="writing-mode: vertical-rl; text-orientation: mixed;">N/A</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td class="fw-bold">&nbsp;EPI     @error('epi')
                        <small class="text-danger">{{ $message }} </small>
                        @enderror</td>
            <td>
              <div class="form-check Audit" require>
                <input class="form-check-input" type="radio" name="epi" id="epi1" value="conforme">
                <label class="form-check-label " for="epi">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="epi" id="epi2" value="Non_conforme">
                <label class="form-check-label" for="epi">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="epi" id="epi3" value="N/A">
                <label class="form-check-label" for="epi">
                </label>
              </div>
            </td>

          </tr>
          <tr>
            <td class="fw-bold">&nbsp;Tenue des lieux   @error('tenue')
                        <small class="text-danger">{{ $message }} </small>
                        @enderror</td>
            <td>
            <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="tenue" id="tenue1" value="conforme">
                <label class="form-check-label" for="tenue">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="tenue" id="tenue2" value="Non_conforme">
                <label class="form-check-label" for="tenue">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="tenue" id="tenue3" value="N/A">
                <label class="form-check-label" for="tenue">
                </label>
              </div>
              </td>
            
          </tr>
          <tr>
            <td class="fw-bold">&nbsp;Comportement sécuritaire       @error('comportement')
                        <small class="text-danger">{{ $message }} </small>
                        @enderror</td>
            <td>
            <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="comportement" id="comportement1" value="conforme">
                <label class="form-check-label" for="comportement">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="comportement" id="comportement2" value="Non_conforme">
                <label class="form-check-label" for="comportement">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="comportement" id="comportement3" value="N/A">
                <label class="form-check-label" for="comportement">
                </label>

              </div>
              </td>

          </tr>
          <tr>
            <td class="fw-bold">&nbsp;Signalisation       
              @error('signalisation')
                <small class="text-danger">{{ $message }} </small>
              @enderror</td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="signalisation" id="Signalisation1" value="conforme">
                <label class="form-check-label" for="signalisation">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="signalisation" id="Signalisation2" value="Non_conforme">
                <label class="form-check-label" for="signalisation">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="signalisation" id="Signalisation3" value="N/A">
                <label class="form-check-label" for="signalisation">
                </label>
              </div>
            </td>

          </tr>
          <tr>
            <td class="fw-bold">&nbsp;Fiche signalétique       @error('fiche_signal')
                        <small class="text-danger">{{ $message }} </small>
                        @enderror</td>
            <td>
            <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="fiche_signal" id="FicheSignaletique1" value="conforme">
                <label class="form-check-label" for="fiche_signal">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="fiche_signal" id="FicheSignaletique2" value="Non_conforme">
                <label class="form-check-label" for="fiche_signal">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="fiche_signal" id="FicheSignaletique3" value="N/A">
                <label class="form-check-label" for="fiche_signal">
                </label>

              </div>
              </td>

          </tr>
          <tr>
            <td class="fw-bold">&nbsp;Travaux - Excavation       @error('travaux')
                        <small class="text-danger">{{ $message }} </small>
                        @enderror</td>
            <td>
            <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="travaux" id="TravauxExcavation1" value="conforme">
                <label class="form-check-label" for="travaux">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="travaux" id="TravauxExcavation2" value="Non_conforme">
                <label class="form-check-label" for="travaux">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="travaux" id="TravauxExcavation3" value="N/A">
                <label class="form-check-label" for="travaux">
                </label>
              </div>
              </td>

          </tr>
          <tr>
            <td class="fw-bold">&nbsp;Espace clos       @error('espace_clos')
                        <small class="text-danger">{{ $message }} </small>
                        @enderror</td>
            <td>
            <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="espace_clos" id="espace_clos1" value="conforme">
                <label class="form-check-label" for="espace_clos">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="espace_clos" id="espace_clos2" value="Non_conforme">
                <label class="form-check-label" for="espace_clos">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="espace_clos" id="espace_clos3" value="N/A">
                <label class="form-check-label" for="espace_clos">
                </label>
              </div>
              </td>
          </tr>
          <tr>
            <td class="fw-bold">&nbsp;Méthode de travail       @error('methode_travail')
                        <small class="text-danger">{{ $message }} </small>
                        @enderror</td>
            <td>
            <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="methode_travail" id="methode_travail1" value="conforme">
                <label class="form-check-label" for="methode_travail">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="methode_travail" id="methode_travail2" value="Non_conforme">
                <label class="form-check-label" for="methode_travail">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="methode_travail" id="methode_travail3" value="N/A">
                <label class="form-check-label" for="methode_travail">
                </label>

              </div>
              </td>
          </tr>
          <tr>
            <td class="fw-bold">&nbsp;Autre(s):&nbsp;       @error('autre')
                        <small class="text-danger">{{ $message }} </small>
                        @enderror</td>
            <td>
            <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="autre" id="AutreCategorie1" value="conforme">
                <label class="form-check-label" for="autre">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="autre" id="AutreCategorie2" value="Non_conforme">
                <label class="form-check-label" for="autre">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="autre" id="AutreCategorie3" value="N/A">
                <label class="form-check-label" for="autre">
                </label>
              </div>
              </td>
          </tr>
          <tr>
            <td colspan="4" style="text-align: center;">&nbsp;<b>COVID-19</b></td> 
          </tr>
          <tr>
            <td class="fw-bold">&nbsp;Respect de la distance  @error('respect_distance')
                        <small class="text-danger">{{ $message }} </small>
                        @enderror</td>
            <td>
            <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="respect_distance" id="respect_distance1" value="conforme">
                <label class="form-check-label" for="respect_distance">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="respect_distance" id="respect_distance2" value="Non_conforme">
                <label class="form-check-label" for="respect_distance">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="respect_distance" id="respect_distance3" value="N/A">
                <label class="form-check-label" for="respect_distance">
                </label>
              </div>
              </td>
          </tr>
          <tr>
            <td class="fw-bold">&nbsp;Port des EPI (masque/visière)  @error('port_epi')
                        <small class="text-danger">{{ $message }} </small>
                        @enderror</td>
            <td>
            <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="port_epi" id="port_epi1" value="conforme">
                <label class="form-check-label" for="port_epi">
                </label>
              
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="port_epi" id="port_epi2" value="Non_conforme">
                <label class="form-check-label" for="port_epi">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="port_epi" id="port_epi3" value="N/A">
                <label class="form-check-label" for="port_epi">
                </label>
              </div>
              </td>
          </tr>
          <tr>
            <td class="fw-bold">&nbsp;Respect des procédures établies  @error('respect_proced')
                        <small class="text-danger">{{ $message }} </small>
                        @enderror</td>
            <td>
            <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="respect_proced" id="respect_proced1" value="conforme">
                <label class="form-check-label" for="respect_proced">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="respect_proced" id="respect_proced2" value="Non_conforme">
                <label class="form-check-label" for="respect_proced">
                </label>
              </div>
            </td>
            <td>
              <div class="form-check Audit">
                <input class="form-check-input" type="radio" name="respect_proced" id="respect_proced3" value="Non_conforme">
                <label class="form-check-label" for="respect_proced">
                </label>
              </div>
              </td>
          </tr>
        <tbody>
      </table>
    </div>

    <div class="d-grid gap-3 col-xl-3 offset-xl-9 col-12 p-2">
        <button class="btn d-grid text-white" style="background-color: #63BC55;" type="submit" >Envoyer</button>
    </div>            
  </form>
</section>



@endsection
