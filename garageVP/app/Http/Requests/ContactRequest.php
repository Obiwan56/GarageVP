<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'email' => 'required|email',
            'phone' => 'required|string|min:10',
            'message' => 'required|string|min:4'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'le nom est requis',
            'name.string' => 'Veuillez entrer un nom valide',
            'name.min' => 'Au minimum 2 caractères',

            'prenom.required' => 'le prénom est requis',
            'prenom.string' => 'Veuillez entrer un prénom valide',
            'prenom.min' => 'Au minimum 2 caractères',

            'email.required' => "l'email est requis",
            'email.email' => 'Veuillez entrer un email valide',

            'phone.required' => 'le téléphone est requis',
            'phone.string' => 'Veuillez entrer un téléphone valide',
            'phone.min' => 'Au minimum 10 numéro',

            'message.required' => 'Un message est nécessaire',
            'message.string' => 'Veuillez entrer un message valide valide',
            'message.min' => 'Au minimum 4 caractères',


        ];
    }
}
