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
            'fonction_avant' => 'required',
            'secteur' => 'required',
            'date_observ' => 'required | before_or_equal:today',
            'heure_observ' => 'required',
            'lieu' => 'required',
            'description' => 'required|max:255',
            'proposition' => 'required|max:255'
        ];
    }



    public function messages()
    {
        return [
            'fonction_avant.required' => 'Veuillez entrer la fonction',
            'secteur.required' => 'Veuillez entrer le secteur',
            'date_observ.required' => 'Veuillez entrer la date de l\'observation',
            'date_observ.before_or_equal' => 'La date de l\'observation ne peut pas être dans le futur',
            'date_observ.date' => 'Veuillez entrer une date valide',
            'heure_observ.required' => 'Veuillez entrer l\'heure de l\'observation',
            'lieu.required' => 'Veuillez entrer le lieu de l\'observation',
            'description.required' => 'Veuillez entrer la description de l\'observation',
            'description.max' => 'La description de l\'observation ne doit pas dépasser 255 caractères',
            'proposition.required' => 'Veuillez entrer la proposition de l\'observation',
            'proposition.max' => 'La proposition de l\'observation ne doit pas dépasser 255 caractères'
        ];
    }
}
