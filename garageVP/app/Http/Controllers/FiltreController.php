<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class FiltreController extends Controller
{
    public function filtrerAnnonces(Request $request)
    {
      $minKm = $request->query('min_km', null);
      $maxPrix = $request->query('max_prix', null);
      $annee = $request->query('annee', null);

      $annonces = Vehicule::query();

      // Filtrer par kilométrage
      if ($minKm) {
        $annonces->where('km', '>=', $minKm);
      }

      // Filtrer par prix
      if ($maxPrix) {
        $annonces->where('prix', '<=', $maxPrix);
      }

      // Filtrer par année
      if ($annee) {
        $annonces->where('annee', $annee);
      }

      $annonces = $annonces->get();

      // Renvoyer les annonces filtrées à la vue
      return view('.pages.annonceFiltree', compact('annonces'));
    }

}
