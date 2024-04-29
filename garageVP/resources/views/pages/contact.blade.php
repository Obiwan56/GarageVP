@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1>Formulaire de contact</h1>
        </div>
    </div>

    <div class="container p-4">
        <h2 class="text-primary">Contactez-nous</h2>

        <form action="/contact" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Votre nom</label>
                <input disabled type="text" class="form-control" id="nom" name="nom" placeholder="Martin"
                    required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Votre prénom</label>
                <input disabled type="text" class="form-control" id="prenom" name="prenom" placeholder="Jack"
                    required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Votre e-mail</label>
                <input disabled type="email" class="form-control" id="email" name="email"
                    placeholder="monadresse@mail.com" required>
                <div class="invalid-feedback">Format adresse email incorrecte</div>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Votre numéro de téléphone</label>
                <input disabled type="tel" class="form-control" id="phone" name="phone" placeholder="0123456789"
                    required>
                <div class="invalid-feedback">Format numéro de télephone incorrecte</div>

            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea disabled id="message" class="form-control" name="message" placeholder="Bonjour, je vous contacte car...."
                    required></textarea>
                <div class="invalid-feedback">Veuillez entrer votre message</div>

            </div>


            <button disabled type="submit" id="btnContact" class="btn btn-primary">Envoyer</button>

        </form>
    </div>
@endsection
