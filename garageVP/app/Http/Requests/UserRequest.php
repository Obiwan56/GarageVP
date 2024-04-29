<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'prenom' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ];
    }

    public function messages(){
        return[
            'name.required' => 'Veuillez entrer un nom',

            'prenom.required' => 'Veuillez entrer un prénom',

            'email.required' => 'Veuillez entrer une adresse email',
            'email.unique' => 'Cette adresse email est déjà utilisée',

            'password.required' => 'Le mot de passe est obligatoire',
        ];
    }
}
