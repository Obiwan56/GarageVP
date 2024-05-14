<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class FiltreController extends Controller
{

    public function filtrer(Request $request)
    {
        // Récupérer les paramètres de filtrage depuis la requête
        $km = $request->input('km');
        $annee = $request->input('annee');
        $prix = $request->input('prix');

        // Filtrer les véhicules en fonction des paramètres
        $vehicules = Vehicule::query();

        if (!empty($km)) {
            $kmRange = explode('-', $km);
            $vehicules->whereBetween('km', [$kmRange[0], $kmRange[1]]);
        }

        if (!empty($annee)) {
            $anneeRange = explode('-', $annee);
            $vehicules->whereBetween('annee', [$anneeRange[0], $anneeRange[1]]);
        }

        if (!empty($prix)) {
            $prixRange = explode('-', $prix);
            $vehicules->whereBetween('prix', [$prixRange[0], $prixRange[1]]);
        }

        // Récupérer les véhicules filtrés
        $resultats = $vehicules->get();

        // Retourner les résultats
        return response()->json($resultats);
    }
}
