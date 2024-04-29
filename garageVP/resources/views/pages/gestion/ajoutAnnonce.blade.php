@extends('squelette')

@section('contenu')
    <form id="ajoutAnnonce" enctype="multipart/form-data">
        <div class="container">
            <h2 class="text-primary">Ajouter une annonce</h2>
            <div class="mb-3">
                <label for="marque" class="form-label">Marque</label>
                <input type="text" class="form-control" id="marque" name="marque" required>
            </div>

            <div class="mb-3">
                <label for="serie" class="form-label">Série</label>
                <input type="text" class="form-control" id="serie" name="serie" required>
            </div>

            <div class="mb-3">
                <label for="km" class="form-label">Kilometrage</label>
                <input type="text" class="form-control" id="km" name="km" required>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Année</label>
                <input type="text" class="form-control" id="year" name="year" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" class="form-control" name="description" required></textarea>
            </div>

            <div class="col-md-4 mb-3">
                <label for="carburant" class="form-label">Carburant</label>
                <select id="carburant" class="form-select" name="carburant" required>
                    <option selected disabled value="">Choisir</option>
                    <option>Diesel</option>
                    <option>Essence</option>
                    <option>Hibrid</option>
                    <option>Electrique</option>
                </select>
            </div>

            <div class="mb-3 mt-4">
                <label for="formFileMultiple" class="form-label">Choisir une ou plusieurs images</label>
                <input class="form-control" type="file" id="formFileMultiple" name="images[]" multiple required>
            </div>

            <button id="ajoutAnnonceBtn" type="submit" class="btn btn-primary mt-4">Ajouter l'annonce</button>

        </div>
    </form>
@endsection
