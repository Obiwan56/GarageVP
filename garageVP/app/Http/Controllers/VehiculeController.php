<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnnonceRequest;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function listeAnnonce()
    {
        $annonces = Vehicule::all();
        return view('pages.gestion.gestionAnnonce', compact('annonces'));
    }

    public function formCreerAnnonce()
    {
        return view('pages.gestion.ajoutAnnonce');
    }


    public function enregistrerAnnonce(AnnonceRequest $request)
    {
        $imgChemin = '';

        if ($request->hasFile('img1')) {
            $imgChemin = $request->file('img1')->store('annonceImg', 'public');
        }

        $imgChemin2 = '';
        if ($request->hasFile('img2')) {
            $imgChemin2 = $request->file('img2')->store('annonceImg', 'public');
        }

        $imgChemin3 = '';
        if ($request->hasFile('img3')) {
            $imgChemin3 = $request->file('img3')->store('annonceImg', 'public');
        }

        $imgChemin4 = '';
        if ($request->hasFile('img4')) {
            $imgChemin4 = $request->file('img4')->store('annonceImg', 'public');
        }

        $imgChemin5 = '';
        if ($request->hasFile('img5')) {
            $imgChemin5 = $request->file('img5')->store('annonceImg', 'public');
        }

        $imgChemin6 = '';
        if ($request->hasFile('img6')) {
            $imgChemin6 = $request->file('img6')->store('annonceImg', 'public');
        }

        $imgChemin7 = '';
        if ($request->hasFile('img7')) {
            $imgChemin7 = $request->file('img7')->store('annonceImg', 'public');
        }

        $imgChemin8 = '';
        if ($request->hasFile('img8')) {
            $imgChemin8 = $request->file('img8')->store('annonceImg', 'public');
        }

        $imgChemin9 = '';
        if ($request->hasFile('img9')) {
            $imgChemin9 = $request->file('img9')->store('annonceImg', 'public');
        }

        $imgChemin10 = '';
        if ($request->hasFile('img10')) {
            $imgChemin10 = $request->file('img10')->store('annonceImg', 'public');
        }

        $marque = $request->input('marque');
        $model = $request->input('model');
        $km = $request->input('km');
        $annee = $request->input('annee');
        $description = $request->input('description');
        $energie = $request->input('energie');
        $boite = $request->input('boite');
        $prix = $request->input('prix');

        Vehicule::create([
            'marque' => $marque,
            'km' => $km,
            'model' => $model,
            'annee' => $annee,
            'description' => $description,
            'energie' => $energie,
            'boite' => $boite,
            'prix' => $prix,
            'img1' => $imgChemin,
            'img2' => $imgChemin2,
            'img3' => $imgChemin3,
            'img4' => $imgChemin4,
            'img5' => $imgChemin5,
            'img6' => $imgChemin6,
            'img7' => $imgChemin7,
            'img8' => $imgChemin8,
            'img9' => $imgChemin9,
            'img10' => $imgChemin10,
        ]);
        return redirect('/gestionAnnonce')->with('success', 'Annonce enregistrée avec succès');
    }
}
