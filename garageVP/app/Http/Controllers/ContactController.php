<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactAnnonceMail;
use App\Mail\ContactMail;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function formContact()
    {
        return view('pages.contact');
    }

    public function contact(ContactRequest $request)
    {   //envoie de l'email
        Mail::send(new ContactMail($request->validated()));
        return redirect('/')->with('success', 'Votre message a bien été envoyé');
    }

    public function formContactAnnonce($id)
    {
        // Récupérer le véhicule en utilisant l'identifiant
        $annonce = Vehicule::findOrFail($id);

        // Retourner la vue avec le formulaire de contact pour cette annonce spécifique
        return view('pages.contactAnnonce', ['vehicule' => $annonce]);
    }
    public function contactAnnonce($id, ContactRequest $request)
    {
        // Récupérer le véhicule en utilisant l'identifiant
        $vehicule = Vehicule::findOrFail($id);

        // Valider les données de la demande de contact
        $validatedData = $request->validated();

        // Envoyer l'e-mail de contact
        Mail::send(new ContactAnnonceMail($vehicule, $validatedData));

        // Rediriger avec un message de succès
        return redirect('/')
            ->with('success', 'Votre message a bien été envoyé');
    }

}
