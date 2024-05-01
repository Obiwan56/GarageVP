<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnnonceRequest;
use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Str;  //pour le nom du fichier

class AnnonceController extends Controller
{
    public function listeAnnonce()
    {
        $annonces = Annonce::all();
        return view('pages.gestion.gestionAnnonce', compact('annonces'));
    }

    public function formCreerAnnonce()
    {
        return view('pages.gestion.ajoutAnnonce');
    }

    public function creerAnnonce(AnnonceRequest $request)
    {
        //renommer l'image
        $imageBaseLink = '/images/posts/';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            $newFileName = (string) Str::uuid() . '.' . $extension;

            //deplacer l'image dans le projet
            $file->storeAS('public/images/posts/', $newFileName);

            $annonce = new Annonce(); //nom de la table

            $annonce->marque = $request->marque;
            $annonce->model = $request->model;
            $annonce->annee = $request->annee;
            $annonce->km = $request->km;
            $annonce->description = $request->description;
            $annonce->energie = $request->energie;
            $annonce->prix = $request->prix;
            $annonce->img1 = $imageBaseLink . '' . $newFileName;
            $annonce->img2 = $imageBaseLink . '' . $newFileName;
            $annonce->img3 = $imageBaseLink . '' . $newFileName;
            $annonce->img4 = $imageBaseLink . '' . $newFileName;
            $annonce->img5 = $imageBaseLink . '' . $newFileName;
            $annonce->img6 = $imageBaseLink . '' . $newFileName;
            $annonce->img7 = $imageBaseLink . '' . $newFileName;
            $annonce->img8 = $imageBaseLink . '' . $newFileName;
            $annonce->img9 = $imageBaseLink . '' . $newFileName;
            $annonce->img10 = $imageBaseLink . '' . $newFileName;

            $annonce->save();

            return redirect('/gestionAnnonce')->with('success', 'Annonce enregistrée');
        }
    }
}
