<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdentifiantRequest extends FormRequest
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
            'employe_id' => 'required',
            'password' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */

    public function messages()
    {
        return [
            'employe_id.required' => 'Veuillez entrer votre identifiant',
            'password.required' => 'Veuillez entrer votre mot de passe'
        ];
    }
}
