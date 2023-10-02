<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form2Request extends FormRequest
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
            'employeform_id' => 'required',
            'fonction_avant' => 'required',
            'secteur' => 'required',
            'date_observ' => 'required',
            'heure_observ' => 'required',
            'lieu' => 'required',
            'description' => 'required',
            'proposition' => 'required'
        ];
    }



    public function messages()
    {
        return [
            'employeform_id.required' => 'Veuillez entrer l\'employé',
            'fonction_avant.required' => 'Veuillez entrer la fonction avant l\'observation',
            'secteur.required' => 'Veuillez entrer le secteur',
            'date_observ.required' => 'Veuillez entrer la date de l\'observation',
            'date_observ.date' => 'Veuillez entrer une date valide',
            'heure_observ.required' => 'Veuillez entrer l\'heure de l\'observation',
            'heure_observ.date_format' => 'Veuillez entrer une heure valide',
            'lieu.required' => 'Veuillez entrer le lieu de l\'observation',
            'description.required' => 'Veuillez entrer la description de l\'observation',
            'proposition.required' => 'Veuillez entrer la proposition de l\'observation'
        ];
    }
}
