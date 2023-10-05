<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form1Request extends FormRequest
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
            'fonction_avant' => 'required|regex:/^[a-zA-Z]+$/u',
            'date_incident' => 'required',
            'heure_incident' => 'required',
            'lieu' => 'required|regex:/^[a-zA-Z]+$/u',
            'secteur' => 'required|regex:/^[a-zA-Z]+$/u',
            'nature_blessure' => 'required',
            'description_blessure' => 'required',
            'description_tache' => 'required|regex:/^[a-zA-Z]+$/u',
            'type_violence' => 'required',
            'type_absence' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */

    public function messages()
    {
        return [
            'fonction_avant.required' => 'Veuillez entrer la fonction avant l\'incident',
            'fonction_avant.regex' => 'Veuillez entrer des caractères valides',
            'date_incident.required' => 'Veuillez entrer la date de l\'incident',
            'heure_incident.required' => 'Veuillez entrer l\'heure de l\'incident',
            'lieu.required' => 'Veuillez entrer le lieu de l\'incident',
            'lieu.regex' => 'Veuillez entrer des caractères valides',
            'secteur.required' => 'Veuillez entrer le secteur de l\'incident',
            'secteur.regex' => 'Veuillez entrer des caractères valides',
            'nature_blessure.required' => 'Veuillez entrer la nature de la blessure',
            'description_blessure.required' => 'Veuillez entrer la description de la blessure',
            'description_tache.required' => 'Veuillez entrer la description de la tâche',
            'description_tache.regex' => 'Veuillez entrer des caractères valides',
            'type_violence.required' => 'Veuillez entrer le type de violence',
            'type_absence.required' => 'Veuillez entrer le type d\'absence'
        ];
    }
}
