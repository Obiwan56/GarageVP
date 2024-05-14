<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\HoraireRequest;
use App\Models\Horaire;
use Illuminate\Http\Request;

class HoraireController extends Controller
{

    public function listeHoraire()
    {
        $horaires = Horaire::all();
        return view('pages.gestion.gestionHoraire', compact('horaires'));
    }

    public function formModifHoraire($id)
    {
        $horaire = Horaire::findOrFail($id);

        return view('pages.gestion.formModifHoraire', compact('horaire'));
    }

    public function modifHoraire($id, HoraireRequest $request)
    {
        $horaire = Horaire::findorFail($id);

        $horaire->Hsemaine = $request->input('Hsemaine');
        $horaire->Hsamedi = $request->input('Hsamedi');

        $horaire->save();

        return redirect('/gestionHoraire')->with('success', 'Horaire modifée');
    }
}
