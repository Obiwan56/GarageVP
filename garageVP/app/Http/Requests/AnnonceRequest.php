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
            'annee' => 'required|numeric|digits:4',
            'km' => 'required|numeric',
            'description' => 'required',
            'energie' => 'required',
            'prix' => 'required|between:1,7',
            'boite' => 'required',

            'img1' => 'required|image|max:2000',  //'nullable|file|max:2000|required|mimes:png,jpg,jpeg'
            'img2' => 'required|image|max:2000',
            'img3' => 'required|image|max:2000',
            'img4' => 'nullable|image|max:2000',
            'img5' => 'nullable|image|max:2000',
            'img6' => 'nullable|image|max:2000',
            'img7' => 'nullable|image|max:2000',
            'img8' => 'nullable|image|max:2000',
            'img9' => 'nullable|image|max:2000',
            'img10' => 'nullable|image|max:2000',
        ];
    }

    public function messages()
    {
        return [
            'marque.required' => 'La marque est requise',
            'model.required' => 'Le model est requis',
            'annee.required' => "L'année est requise",
            'annee.numeric' => "entrer une année valide",
            'annee.digits' => "Une année à 4 chiffres svp",

            'km.required' => 'Le kilometrage est requis',
            'km.between' => 'Erreur de kilometre',
            'km.numeric' => 'Entrer un kilometrage valide',

            'boite.required' => 'Le type de boîte de vitesse est requise',

            'description.required' => 'La description est requise',

            'energie.required' => "Veuyez choisir un carburant",

            'prix.required' => 'Le prix est requis',
            'prix.between' => "Ce n'est pas un avion...",

            'img1.required' => 'Une image est requise',
            'img2.required' => 'Une image est requise',
            'img3.required' => 'Une image est requise',
            'img1.image' => 'Seul les images sont acceptés',
            'img1.max' => 'Le fichier est trop lourd, 2mo max',
            'img2.max' => 'Le fichier est trop lourd, 2mo max',
            'img2.image' => 'Seul les images sont acceptés',
            'img3.max' => 'Le fichier est trop lourd, 2mo max',
            'img3.image' => 'Seul les images sont acceptés',
            'img4.max' => 'Le fichier est trop lourd, 2mo max',
            'img4.image' => 'Seul les images sont acceptés',
            'img5.max' => 'Le fichier est trop lourd, 2mo max',
            'img5.image' => 'Seul les images sont acceptés',
            'img6.max' => 'Le fichier est trop lourd, 2mo max',
            'img6.image' => 'Seul les images sont acceptés',
            'img7.max' => 'Le fichier est trop lourd, 2mo max',
            'img7.image' => 'Seul les images sont acceptés',
            'img8.max' => 'Le fichier est trop lourd, 2mo max',
            'img8.image' => 'Seul les images sont acceptés',
            'img9.max' => 'Le fichier est trop lourd, 2mo max',
            'img9.image' => 'Seul les images sont acceptés',
            'img10.max' => 'Le fichier est trop lourd, 2mo max',
            'img10.image' => 'Seul les images sont acceptés',

        ];
    }
}


// verifier pb km
