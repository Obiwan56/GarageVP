@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1 class="titre">Bienvenue au Garage Vincent Parrot</h1>
        </div>
    </div>
    <div class="p-4">
        @if (session('message'))
            <div class="alert alert-danger m-4">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div>
        <p class="presentation fs-4 p-4">
            Bonjour, <br><br>
            Je me présente, Vincent, propriétaire du garage V. Parrot. <br><br>
            Dans le métier depuis maintenant 15 ans, j’ai enfin décidé de poursuivre mon aventure de mes propres ailes dans
            notre belle ville de Toulouse depuis 2021. <br><br>
            Mon équipe et moi-même mettons tout en œuvre pour que cet établissement soit un véritable lieu de confiance pour
            vous et vous offrir un service de qualité. <br><br>
            Nous sommes à votre entière disposition pour tous vos véhicules automobiles.
        </p>
    </div>
@endsection
