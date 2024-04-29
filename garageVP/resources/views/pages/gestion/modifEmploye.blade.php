@extends('squelette')

@section('contenu')
    <form id="modifEmploye">
        <div class="container p-4">
            <h2 class="text-primary">Modification d'un ou d'une employé(e)</h2>

            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">Format adresse email incorrecte</div>
            </div>

            <button id="modifEmployeBtn" type="submit" class="btn btn-primary">Modifier</button>

        </div>
    </form>
@endsection
