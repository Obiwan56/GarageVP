<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Sevice;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class SeviceController extends Controller
{
    public function listService()
    {
        $services = Sevice::all();
        return view('pages.gestion.gestionService', compact('services'));
    }

    public function prestationService()
    {
        $services = Sevice::all();
        return view('pages.prestation', compact('services'));
    }

    public function prestationHomeService()
    {
        $services = Sevice::all();
        return view('pages.home', compact('services'));
    }

    public function formCreerService()
    {
        return view('pages.gestion.ajoutService');
    }

    public function newService(ServiceRequest $request)
    {
        $imgChemin = '';
        if ($request->hasfile('image')) {
            $imgChemin = $request->file('image')->store('serviceImg', 'public');
        }

        $titre = $request->input('titre');
        $texte = $request->input('texte');

        Sevice::create([
            'titre' => $titre,
            'texte' => $texte,
            'image' => $imgChemin,
        ]);
        return redirect('/gestionService')->with('success', 'Service ajouté avec succès');
    }

    public function formModifService($id)
    {
        $services = Sevice::find($id);
        return view('pages.gestion.modifService', compact('services'));
    }

    public function modifService($id, ServiceRequest $request)
    {
        $service = Sevice::findOrFail($id);

        $service->titre = $request->input('titre');
        $service->texte = $request->input('texte');

        Storage::disk('public')->delete([$service->image]);

        if ($request->hasFile('image')) {
            $service->image = $request->file('image')->store('serviceImg', 'public');
        }

        $service->save();

        return redirect('/gestionService')->with('success', 'Service modifié avec succès');
    }

    public function deleteService($id)
    {
        $service = Sevice::find($id);

        $imgChemin = [
            public_path('storage/' . $service->image)
        ];

        foreach($imgChemin as $chemin){
            File::delete($chemin);
        }
        $service->delete();

        return redirect('/gestionService')->with('success', 'Service supprimé avec succès');
    }


}
