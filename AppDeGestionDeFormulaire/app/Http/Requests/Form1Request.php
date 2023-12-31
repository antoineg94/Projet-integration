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
            'fonction_avant' => 'required',
            'date_incident' => 'required | before_or_equal:today',
            'heure_incident' => 'required',
            'lieu' => 'required',
            'secteur' => 'required',

            'description_tache' => 'required|max:255',
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
           
            'date_incident.required' => 'Veuillez entrer la date de l\'incident',
            'date_incident.before_or_equal' => 'La date de l\'incident ne peut pas être dans le futur',
            'heure_incident.required' => 'Veuillez entrer l\'heure de l\'incident',
            'lieu.required' => 'Veuillez entrer le lieu de l\'incident',
    
            'secteur.required' => 'Veuillez entrer le secteur de l\'incident',


            'description_tache.required' => 'Veuillez entrer la description de la tâche',
            'description_tache.max' => 'La description de la tâche ne doit pas dépasser 255 caractères',
          
            'type_violence.required' => 'Veuillez entrer le type de violence',
            'type_absence.required' => 'Veuillez entrer le type d\'absence'
        ];
    }
}
