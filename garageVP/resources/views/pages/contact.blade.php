@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1>Formulaire de contact</h1>
        </div>
    </div>

    <div class="container p-4">
        <h2 class="text-primary">Contactez-nous</h2>

        <form action="" method="post">

            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Votre nom</label>
                <input type="text" class="form-control" id="name" name="name" value="Carther">
                @error('name')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Votre prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="Sam">
                @error('prenom')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Votre e-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="sam@sg1.fr">
                @error('email')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Votre numéro de téléphone</label>
                <input type="tel" class="form-control" id="phone" name="phone" value="0123456789">
                @error('phone')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea id="message" class="form-control" name="message">ça c'est du message</textarea>
                @error('message')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror
            </div>


            <button type="submit" id="btnContact" class="btn btn-primary">Envoyer</button>

        </form>
    </div>
@endsection
