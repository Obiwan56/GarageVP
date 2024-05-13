<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'titre' => 'required|min:2|max:50',
            'texte' => 'required|min:2|max:5000',

            'image' => 'required|file|max:2000',  //'nullable|file|max:2000|required|mimes:png,jpg,jpeg'

        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Le titre est requise',
            'titre.min' => 'Minimum 2 caractères',
            'titre.max' => 'Maximum 50 caractères',
            'texte.required' => 'Le contenu est requis',
            'texte.min' => 'Minimum 2 caractères',
            'texte.max' => 'Maximum 5000 caractères',

            'image.required' => 'Une image ou photo est obligatoire',
            'image.file' => "veuillez choisir un format d'image ou de photo",
            'image.max' => 'Maximum 2 mo'

        ];
    }

}
