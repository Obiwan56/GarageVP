<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function formContact(){
        return view ('pages.contact');
    }

    public function contact(ContactRequest $request)
    {   //envoie de l'email
        Mail::send(new ContactMail($request->validated()));
        return redirect('/')->with('success', 'Votre message a bien été envoyé');
    }

}
