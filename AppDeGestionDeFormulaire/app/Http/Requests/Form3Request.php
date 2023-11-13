<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form3Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'lieu' => 'required',
            'date_incident' => 'required| before_or_equal:today',
            'heure_incident' => 'required',
            'epi' => 'required',
            'tenue' => 'required',
            'comportement' => 'required',
            'signalisation' => 'required',
            'fiche_signal' => 'required',
            'travaux' => 'required',
            'espace_clos' => 'required',
            'methode_travail' => 'required',
            'autre' => 'required',
            'respect_distance' => 'required',
            'port_epi' => 'required',
            'respect_proced' => 'required',

        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */

    public function messages(){
        return [
            'lieu.required' => 'Le champ lieu est obligatoire',
            'date_incident.required' => 'Le champ date incident est obligatoire',
            'date_incident.date' => 'Le champ date incident doit être une date',
            'date_incident.before_or_equal' => 'La date de l\'incident ne peut pas être dans le futur',
            'heure_incident.required' => 'Le champ heure incident est obligatoire',
            'epi.required' => 'Le champ epi est obligatoire',
            'tenue.required' => 'Le champ tenue est obligatoire',
            'comportement.required' => 'Le champ comportement est obligatoire',
            'signalisation.required' => 'Le champ signalisation est obligatoire',
            'fiche_signal.required' => 'Le champ fiche signal est obligatoire',
            'travaux.required' => 'Le champ travaux est obligatoire',
            'espace_clos.required' => 'Le champ espace clos est obligatoire',
            'methode_travail.required' => 'Le champ methode travail est obligatoire',
            'autre.required' => 'Le champ autre est obligatoire',
            'respect_distance.required' => 'Le champ respect distance est obligatoire',
            'port_epi.required' => 'Le champ port epi est obligatoire',
            'respect_proced.required' => 'Le champ respect proced est obligatoire',

        ];
    }
}
