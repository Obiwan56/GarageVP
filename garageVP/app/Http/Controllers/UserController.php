<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function creerEmploye(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect('/gestionEmploye')->with('status', 'Employé(e) ajouté avec succès');
    }

    public function listeEmploye()
    {
        $users = User::all();
        return view('pages.gestion.gestionEmploye', compact('users'));
    }

    public function formUser()
    {
        return view('pages.gestion.ajoutEmploye');
    }

    public function modifEmploye($id)
    {
        $users = User::find($id);

        return view('pages.gestion.modifEmploye', compact('users'));
    }

    public function modifUser(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->role = $request->role;
        $user->email = $request->email;

        $user->update();

        return redirect('/gestionEmploye')->with('status', 'Employé(e) modifié avec succès');
    }

    public function effacerEmploye($id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect('/gestionEmploye')->with('status', 'Employé(e) supprimé avec succès');
    }
}
