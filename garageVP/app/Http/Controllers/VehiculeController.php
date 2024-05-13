<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnnonceRequest;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactAnnonceMail;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class VehiculeController extends Controller
{
    public function listeAnnonce()
    {
        $annonces = Vehicule::all();
        return view('pages.gestion.gestionAnnonce', compact('annonces'));
    }

    public function allAnnonce()
    {
        $annonces = Vehicule::all();
        return view('pages.allAnnonce', compact('annonces'));
    }

    public function detail($id)
    {
        $vehicule = Vehicule::findOrFail($id);
        return view('pages.detailAnnonce', compact('vehicule'));
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

    public function formMofifAnnonce($id)
    {
        $annonces = Vehicule::find($id);

        return view('pages.gestion.modifAnnonce', compact('annonces'));
    }

    public function modifAnnonce($id, AnnonceRequest $request)
    {
        $annonce = Vehicule::findOrFail($id);

        $annonce->marque = $request->input('marque');
        $annonce->model = $request->input('model');
        $annonce->km = $request->input('km');
        $annonce->annee = $request->input('annee');
        $annonce->description = $request->input('description');
        $annonce->energie = $request->input('energie');
        $annonce->boite = $request->input('boite');
        $annonce->prix = $request->input('prix');

        Storage::disk('public')->delete([$annonce->img1, $annonce->img2, $annonce->img3, $annonce->img4, $annonce->img5, $annonce->img6, $annonce->img7, $annonce->img8, $annonce->img9, $annonce->img10]);


        if ($request->hasFile('img1')) {
            $annonce->img1 = $request->file('img1')->store('annonceImg', 'public');
        }
        if ($request->hasFile('img2')) {
            $annonce->img2 = $request->file('img2')->store('annonceImg', 'public');
        }
        if ($request->hasFile('img3')) {
            $annonce->img2 = $request->file('img2')->store('annonceImg', 'public');
        }
        if ($request->hasFile('img4')) {
            $annonce->img2 = $request->file('img2')->store('annonceImg', 'public');
        }
        if ($request->hasFile('img5')) {
            $annonce->img2 = $request->file('img2')->store('annonceImg', 'public');
        }
        if ($request->hasFile('img6')) {
            $annonce->img2 = $request->file('img2')->store('annonceImg', 'public');
        }
        if ($request->hasFile('img7')) {
            $annonce->img2 = $request->file('img2')->store('annonceImg', 'public');
        }
        if ($request->hasFile('img8')) {
            $annonce->img2 = $request->file('img2')->store('annonceImg', 'public');
        }
        if ($request->hasFile('img9')) {
            $annonce->img2 = $request->file('img2')->store('annonceImg', 'public');
        }
        if ($request->hasFile('img10')) {
            $annonce->img2 = $request->file('img2')->store('annonceImg', 'public');
        }

        $annonce->save();

        return redirect('/gestionAnnonce')->with('success', 'Annonce modifiée avec succès');
    }


    public function effacerVehicule($id)
    {
        $annonce = Vehicule::find($id);

        // Récupérer les chemins complets des images dans le dossier public
        $cheminImages = [
            public_path('storage/' . $annonce->img1),
            public_path('storage/' . $annonce->img2),
            public_path('storage/' . $annonce->img3),
            public_path('storage/' . $annonce->img4),
            public_path('storage/' . $annonce->img5),
            public_path('storage/' . $annonce->img6),
            public_path('storage/' . $annonce->img7),
            public_path('storage/' . $annonce->img8),
            public_path('storage/' . $annonce->img9),
            public_path('storage/' . $annonce->img10),

        ];

        // Supprimer les images du dossier public
        foreach ($cheminImages as $chemin) {
            File::delete($chemin);
        }

        $annonce->delete();

        return redirect('/gestionAnnonce')->with('success', 'Annonce supprimée avec succès');
    }


    public function filtre(Request $request)
    {
        // Récupérez les critères de filtrage depuis la requête HTTP
        $prixMin = $request->input('prixMin');
        $prixMax = $request->input('prixMax');
        $kmMin = $request->input('kmMin');
        $kmMax = $request->input('kmMax');
        $yearMin = $request->input('yearMin');
        $yearMax = $request->input('yearMax');
        $carbu = $request->input('carbu');
        $boite = $request->input('boite');

        // Filtrer les annonces en fonction des critères de filtrage
        $annonces = Vehicule::where('prix', '>=', $prixMin)
            ->where('prix', '<=', $prixMax)
            ->where('km', '>=', $kmMin)
            ->where('km', '<=', $kmMax)
            ->where('annee', '>=', $yearMin)
            ->where('annee', '<=', $yearMax)
            ->where('carburant', $carbu)
            ->where('boite', $boite)
            ->get();

        // Retournez les annonces filtrées sous forme de vue partielle
        return view('annonces_partiel', ['annonces' => $annonces]);
    }


}
