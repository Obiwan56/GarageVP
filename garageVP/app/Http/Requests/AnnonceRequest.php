<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnonceRequest extends FormRequest
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
            'marque' => 'required',
            'model' => 'required',
            'annee' => 'required',
            'km' => 'required',
            'description' => 'required',
            'energie' => 'required',
            'prix' => 'required',

            'img1' => 'file|max:2000',  //'nullable|file|max:2000|required|mimes:png,jpg,jpeg'
            'img2' => 'nullable|file|max:2000',  //'nullable|file|max:2000|required|mimes:png,jpg,jpeg'
            'img3' => 'nullable|file|max:2000',  //'nullable|file|max:2000|required|mimes:png,jpg,jpeg'
            'img4' => 'nullable|file|max:2000',  //'nullable|file|max:2000|required|mimes:png,jpg,jpeg'
            'img5' => 'nullable|file|max:2000',  //'nullable|file|max:2000|required|mimes:png,jpg,jpeg'
            'img6' => 'nullable|file|max:2000',  //'nullable|file|max:2000|required|mimes:png,jpg,jpeg'
            'img7' => 'nullable|file|max:2000',  //'nullable|file|max:2000|required|mimes:png,jpg,jpeg'
            'img8' => 'nullable|file|max:2000',  //'nullable|file|max:2000|required|mimes:png,jpg,jpeg'
            'img9' => 'nullable|file|max:2000',  //'nullable|file|max:2000|required|mimes:png,jpg,jpeg'
            'img10' => 'nullable|file|max:2000',  //'nullable|file|max:2000|required|mimes:png,jpg,jpeg'

        ];
    }

    public function messages()
    {
        return [
                    'marque.required' => 'La marque est requise',
                    'model.required' => 'Le model est requis',
                    'annee.required' => "L'année est requise",
                    'km.required' => 'Le kilometrage est requis',
                    'description.required' => 'La description est requise',
                    'energie.required' => "L'energie' est requise",
                    'prix.required' => 'Le prix est requis',
                    'img1.required' => 'Une image est requise',

                    'img1.max' => 'Le fichier est trop lourd, 2mo max',
                    'img2.max' => 'Le fichier est trop lourd, 2mo max',
                    'img3.max' => 'Le fichier est trop lourd, 2mo max',
                    'img4.max' => 'Le fichier est trop lourd, 2mo max',
                    'img5.max' => 'Le fichier est trop lourd, 2mo max',
                    'img6.max' => 'Le fichier est trop lourd, 2mo max',
                    'img7.max' => 'Le fichier est trop lourd, 2mo max',
                    'img8.max' => 'Le fichier est trop lourd, 2mo max',
                    'img9.max' => 'Le fichier est trop lourd, 2mo max',
                    'img10.max' => 'Le fichier est trop lourd, 2mo max',


        ];
    }
}
