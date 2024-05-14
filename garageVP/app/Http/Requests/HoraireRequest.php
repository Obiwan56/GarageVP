<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HoraireRequest extends FormRequest
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
            'Hsemaine' => 'nullable|max:100',
            'Hsamedi' => 'nullable|max:100',
        ];
    }

    public function messages()
    {
        return [
            'Hsemaine.max' => 'Maximum 100 caractères',
            'Hsamedi.max' => 'Maximum 100 caractères',
        ];
    }
}
