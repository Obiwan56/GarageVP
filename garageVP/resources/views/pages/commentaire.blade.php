@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1>Laissez-nous votre impression sur notre travail</h1>
        </div>
    </div>
    <form aria-disabled="true">
        <div class="container p-4">
            <h2 class="text-primary">Contactez-nous ou laissez-nous un commentaire</h2>

            <form action="/contact" method="post">
                <div class="mb-3">
                    <label for="prenom" class="form-label">Votre prénom</label>
                    <input disabled type="text" class="form-control" id="prenom" name="prenom" placeholder="Martin"
                        required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Votre commentaire</label>
                    <textarea disabled id="message" class="form-control" name="message" placeholder="...." required></textarea>
                </div>

                <div class="rating mb-3" required>
                    <a href="#1" title="Donner 1 étoile">☆</a>
                    <a href="#2" title="Donner 2 étoiles">☆</a>
                    <a href="#3" title="Donner 3 étoiles">☆</a>
                    <a href="#4" title="Donner 4 étoiles">☆</a>
                    <a href="#5" title="Donner 5 étoiles">☆</a>
                </div>

                <div class="mb-3">
                    <button disabled id="btnComm" type="button" class="btn btn-primary">Envoyer</button>
                </div>
                <p>Tout contenu inapproprié ou offensant ne sera pas publié.</p>
            </form>
        </div>
    </form>
@endsection
