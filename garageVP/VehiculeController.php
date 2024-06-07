<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnnonceRequest;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehiculeController extends Controller
{
    public function enregistrerAnnonce(AnnonceRequest $request)
    {
        $imgChemins = []; // Tableau pour stocker les chemins des images

        // Boucle pour parcourir les 10 champs d'image
        for ($i = 1; $i <= 10; $i++) {
            $imgField = "img$i"; // Générer dynamiquement le nom du champ d'image
            if ($request->hasFile($imgField)) {
                $imgChemins[$i - 1] = $request->file($imgField)->store('annonceImg', 'public');
            } else {
                $imgChemins[$i - 1] = ''; // Assigner une chaîne vide si aucune image n'est téléchargée
            }
        }

        $marque = $request->input('marque');
        $model = $request->input('model');
        $km = $request->input('km');
        $annee = $request->input('annee');
        $description = $request->input('description');
        $energie = $request->input('energie');
        $boite = $request->input('boite');
        $prix = $request->input('prix');

        // Création de l'annonce avec les chemins d'image dans un tableau
        Vehicule::create([
            'marque' => $marque,
            'km' => $km,
            'model' => $model,
            'annee' => $annee,
            'description' => $description,
            'energie' => $energie,
            'boite' => $boite,
            'prix' => $prix,
            'img1' => $imgChemins[0],
            'img2' => $imgChemins[1],
            'img3' => $imgChemins[2],
            'img4' => $imgChemins[3],
            'img5' => $imgChemins[4],
            'img6' => $imgChemins[5],
            'img7' => $imgChemins[6],
            'img8' => $imgChemins[7],
            'img9' => $imgChemins[8],
            'img10' => $imgChemins[9],
        ]);

        return redirect('/gestionAnnonce')->with('success', 'Annonce enregistrée avec succès');
    }


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

    public function formMofifAnnonce($id)
    {
        $annonces = Vehicule::find($id);

        return view('pages.gestion.modifAnnonce', compact('annonces'));
    }

    public function modifAnnonce($id, AnnonceRequest $request)
    {
        // Récupérer l'annonce à modifier
        $annonce = Vehicule::findOrFail($id);

        // Mettre à jour les champs d'information de l'annonce
        $annonce->marque = $request->input('marque');
        $annonce->model = $request->input('model');
        $annonce->km = $request->input('km');
        $annonce->annee = $request->input('annee');
        $annonce->description = $request->input('description');
        $annonce->energie = $request->input('energie');
        $annonce->boite = $request->input('boite');
        $annonce->prix = $request->input('prix');

        // Gérer les téléchargements et les mises à jour des images
        for ($i = 1; $i <= 10; $i++) {
            $imgField = "img$i"; // Générer dynamiquement le nom du champ d'image
            $oldImgPath = $annonce->$imgField; // Obtenir l'ancien chemin d'image

            if ($request->hasFile($imgField)) {
                // Téléchargement d'image présent
                if (!empty($oldImgPath) && Storage::disk('public')->exists($oldImgPath)) {
                    // L'ancienne image existe, supprimez-la
                    Storage::disk('public')->delete($oldImgPath);
                }

                $newImgPath = $request->file($imgField)->store('annonceImg', 'public');
                $annonce->$imgField = $newImgPath; // Mettre à jour le chemin d'image dans le modèle
            }
        }

        // Enregistrer les modifications dans la base de données
        $annonce->save();

        // Rediriger vers la page de gestion des annonces avec un message de succès
        return redirect('/gestionAnnonce')->with('success', 'Annonce modifiée avec succès');
    }

    public function effacerVehicule($id)
    {
        // Récupérer l'annonce à supprimer
        $annonce = Vehicule::find($id);

        // Extraire les chemins des images depuis l'objet annonce
        $imgPaths = [
            $annonce->img1,
            $annonce->img2,
            $annonce->img3,
            $annonce->img4,
            $annonce->img5,
            $annonce->img6,
            $annonce->img7,
            $annonce->img8,
            $annonce->img9,
            $annonce->img10,
        ];

        // Supprimer les images du disque public (si elles existent)
        foreach ($imgPaths as $imgPath) {
            if (!empty($imgPath) && Storage::disk('public')->exists($imgPath)) {
                Storage::disk('public')->delete($imgPath);
            }
        }

        // Supprimer l'enregistrement de l'annonce de la base de données
        $annonce->delete();

        // Rediriger vers la page de gestion des annonces avec un message de succès
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
