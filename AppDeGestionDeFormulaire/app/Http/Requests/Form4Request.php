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
            'departement' => 'required|string|max:255',
            'vehicule_citoyen' => 'required|string|max:255',
        ];
    }

    public function message(){
        return [
            'no_unite.required' => 'Le numéro d\'unité est requis',
            'no_unite.numeric' => 'Le numéro d\'unité doit être un nombre',
            'departement.required' => 'Le département est requis',
            'departement.string' => 'Le département doit être une chaîne de caractères',
            'departement.max' => 'Le département ne doit pas dépasser 255 caractères',
            'vehicule_citoyen.required' => 'Le véhicule citoyen est requis',
            'vehicule_citoyen.string' => 'Le véhicule citoyen doit être une chaîne de caractères',
            'vehicule_citoyen.max' => 'Le véhicule citoyen ne doit pas dépasser 255 caractères',
        ];
    }
}
