@extends('layout/app')

@section('title', 'Accueil')

@section('middleContent')


<section>
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
      <input type="text" id="lieu" name="lieu" class="form-control form-control-lg  @error('lieu') is-invalid @enderror" />
      @error('lieu')
        <small class="text-danger">{{ $message }} </small>
      @enderror
    </div>

    <div class="row">
      <div class="form-outline mb-4 col-xl-6 col-12 mx-auto" >
        <label class="form-label fw-bold" for="date_incident">Date</label>
          <input type="date" id="date_incident" name="date_incident" class="form-control form-control-lg  @error('date_incident') is-invalid @enderror" />
          @error('date_incident')
            <small class="text-danger">{{ $message }} </small>
          @enderror
      </div>

      <div class="form-outline mb-4 col-xl-6 col-12 mx-auto" >
        <label class="form-label fw-bold" for="heure_incident">Heure</label>
          <input type="time" id="heure_incident" name="heure_incident" class="form-control form-control-lg  @error('heure_incident') is-invalid @enderror" />
          @error('heure_incident')
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

    <div class="d-grid gap-3 col-xl-3 col-11 mx-auto p-2">
        <button class="btn d-grid text-white" style="background-color: #63BC55;" type="submit" >Envoyer</button>
    </div>            
  </form>
</section>



@endsection
