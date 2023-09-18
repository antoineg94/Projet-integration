@extends('layout/app')

@section('title', 'Informations sur le formulaire d\'audit SST')

@section('middleContent')
<section>
<div class="d-grid gap-3 col-11 mx-auto p-2">

<div class="card mb-3">
  <h5 class="card-header">
    Informations sur: {{ $formulaire->nomFormulaire }}
  </h5>
  <div class="card-body">

  <table class="table table-striped">
	<thead>
	<tr>
		<th><br></th>
		<th style="writing-mode: vertical-rl; text-orientation: mixed;">Conforme</th>
		<th style="writing-mode: vertical-rl; text-orientation: mixed;">Non conforme</th>
		<th style="writing-mode: vertical-rl; text-orientation: mixed;">N/A</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>&nbsp;EPI</td>
		<td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="EPI" id="EPI1">
        <label class="form-check-label" for="EPI">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="EPI" id="EPI2">
        <label class="form-check-label" for="EPI">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="EPI" id="EPI3">
        <label class="form-check-label" for="EPI">
        </label>
      </div>
    </td>
	</tr>
	<tr>
		<td>&nbsp;Tenue des lieux</td>
    <td>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="TenueLieux" id="TenueLieux1">
        <label class="form-check-label" for="TenueLieux">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="TenueLieux" id="TenueLieux2">
        <label class="form-check-label" for="TenueLieux">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="TenueLieux" id="TenueLieux3">
        <label class="form-check-label" for="TenueLieux">
        </label>
      </div>
      </td>
	</tr>
	<tr>
		<td>&nbsp;Comportement sécuritaire</td>
    <td>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="ComportementSecuritaire" id="ComportementSecuritaire1">
        <label class="form-check-label" for="ComportementSecuritaire">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="ComportementSecuritaire" id="ComportementSecuritaire2">
        <label class="form-check-label" for="ComportementSecuritaire">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="ComportementSecuritaire" id="ComportementSecuritaire3">
        <label class="form-check-label" for="ComportementSecuritaire">
        </label>
      </div>
      </td>
	</tr>
	<tr>
		<td>&nbsp;Signalisation</td>
    <td>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="Signalisation" id="Signalisation1">
        <label class="form-check-label" for="Signalisation">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="Signalisation" id="Signalisation2">
        <label class="form-check-label" for="Signalisation">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="Signalisation" id="Signalisation3">
        <label class="form-check-label" for="Signalisation">
        </label>
      </div>
      </td>
	</tr>
	<tr>
		<td>&nbsp;Fiche signalétique</td>
		<td>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="FicheSignaletique" id="FicheSignaletique1">
        <label class="form-check-label" for="FicheSignaletique">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="FicheSignaletique" id="FicheSignaletique2">
        <label class="form-check-label" for="FicheSignaletique">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="FicheSignaletique" id="FicheSignaletique3">
        <label class="form-check-label" for="FicheSignaletique">
        </label>
      </div>
      </td>
	</tr>
	<tr>
		<td>&nbsp;Travaux - Excavation</td>
    <td>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="TravauxExcavation" id="TravauxExcavation1">
        <label class="form-check-label" for="TravauxExcavation">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="TravauxExcavation" id="TravauxExcavation2">
        <label class="form-check-label" for="TravauxExcavation">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="TravauxExcavation" id="TravauxExcavation3">
        <label class="form-check-label" for="TravauxExcavation">
        </label>
      </div>
      </td>
	</tr>
	<tr>
		<td>&nbsp;Espace clos</td>
    <td>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="EspaceClos" id="EspaceClos1">
        <label class="form-check-label" for="EspaceClos">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="EspaceClos" id="EspaceClos2">
        <label class="form-check-label" for="EspaceClos">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="EspaceClos" id="EspaceClos3">
        <label class="form-check-label" for="EspaceClos">
        </label>
      </div>
      </td>
	</tr>
	<tr>
		<td>&nbsp;Méthode de travail</td>
    <td>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="MethodeTravail" id="MethodeTravail1">
        <label class="form-check-label" for="MethodeTravail">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="MethodeTravail" id="MethodeTravail2">
        <label class="form-check-label" for="MethodeTravail">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="MethodeTravail" id="MethodeTravail3">
        <label class="form-check-label" for="MethodeTravail">
        </label>
      </div>
      </td>
	</tr>
	<tr>
		<td>&nbsp;Autre(s):&nbsp;</td>
    <td>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="AutreCategorie" id="AutreCategorie1">
        <label class="form-check-label" for="AutreCategorie">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="AutreCategorie" id="AutreCategorie2">
        <label class="form-check-label" for="AutreCategorie">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="AutreCategorie" id="AutreCategorie3">
        <label class="form-check-label" for="AutreCategorie">
        </label>
      </div>
      </td>
	</tr>
	<tr>
		<td colspan="4" style="text-align: center;">&nbsp;<b>COVID-19</b></td> 
	</tr>
	<tr>
		<td>&nbsp;Respect de la distance</td>
    <td>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="RespectDistance" id="RespectDistance1">
        <label class="form-check-label" for="RespectDistance">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="RespectDistance" id="RespectDistance2">
        <label class="form-check-label" for="RespectDistance">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="RespectDistance" id="RespectDistance3">
        <label class="form-check-label" for="RespectDistance">
        </label>
      </div>
      </td>
	</tr>
	<tr>
		<td>&nbsp;Port des EPI (masque/visière)</td>
    <td>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="MasqueVisiere" id="MasqueVisiere1">
        <label class="form-check-label" for="MasqueVisiere">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="MasqueVisiere" id="MasqueVisiere2">
        <label class="form-check-label" for="MasqueVisiere">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="MasqueVisiere" id="MasqueVisiere3">
        <label class="form-check-label" for="MasqueVisiere">
        </label>
      </div>
      </td>
	</tr>
	<tr>
		<td>&nbsp;Respect des procédures établies</td>
    <td>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="ProceduresEtablies" id="ProceduresEtablies1">
        <label class="form-check-label" for="ProceduresEtablies">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="ProceduresEtablies" id="ProceduresEtablies2">
        <label class="form-check-label" for="ProceduresEtablies">
        </label>
      </div>
    </td>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="ProceduresEtablies" id="ProceduresEtablies3">
        <label class="form-check-label" for="ProceduresEtablies">
        </label>
      </div>
      </td>
	</tr>
	<tbody>
</table>

  </div>
</section>
@endsection