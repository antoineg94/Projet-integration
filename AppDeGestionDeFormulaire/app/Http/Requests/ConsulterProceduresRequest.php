<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsulterProceduresRequest extends FormRequest
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
            'titre' => 'required',
            'lien' => 'required'

        ];
            
    }

    public function messages()
    {
        return [
            'titre.required' => 'Veuillez entrer le titre de la procédure',
            'lien.required' => 'Veuillez entrer le lien de la procédure'
        ];
    }
}
