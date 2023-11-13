<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form4Request extends FormRequest
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
            'no_unite' => 'required|numeric',
            'date=>' => 'required | before_or_equal:today',
            'departement' => 'required|string|max:255',
            'permis_conduire' => 'required|max:255', 
            'vehicule_citoyen' => 'string|max:255',
        ];
    }

    public function messages(){
        return [
            'no_unite.required' => 'Le numéro d\'unité est requis',
            'no_unite.numeric' => 'Le numéro d\'unité doit être un nombre',
            'date.required' => 'La date est requise',
            'date.before_or_equal' => 'La date ne peut pas être dans le futur',
            'departement.required' => 'Le département est requis',
            'departement.string' => 'Le département doit être une chaîne de caractères',
            'departement.max' => 'Le département ne doit pas dépasser 255 caractères',
            'permis_conduire.required' => 'Le numéro de permis de conduire est requis',
            'permis_conduire.max' => 'Le numéro de permis de conduire ne doit pas dépasser 12 caractères',
            'permis_conduire.max' => 'Le permis de conduire ne doit être composé que d\'une lettre suivie de chiffres',
            'vehicule_citoyen.string' => 'Le véhicule citoyen doit être une chaîne de caractères',
            'vehicule_citoyen.max' => 'Le véhicule citoyen ne doit pas dépasser 255 caractères',
        ];
    }
}
