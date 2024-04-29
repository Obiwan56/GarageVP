@extends('squelette')

@section('contenu')
    <form id="modifAnnonce">
        <div class="container">
            <h2 class="text-primary">Modifier une annonce</h2>
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
                <label for="description" class="form-label">Description</label>
                <textarea id="description" class="form-control" name="description" required></textarea>
            </div>

            <div class="col-md-4">
                <label for="carburant" class="form-label">Carburant</label>
                <select id="carburant" class="form-select" required>
                    <option selected>choisir</option>
                    <option>Diesel</option>
                    <option>Essence</option>
                    <option>Hibrid</option>
                    <option>Electrique</option>
                </select>
            </div>

            <div class="mb-3 mt-4">
                <label for="formFileMultiple" class="form-label">Choisir une ou plusieurs images</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>

            <button id="modifAnnonceBtn" type="button" class="btn btn-primary mt-4">Modifier l'annonce</button>

        </div>
    </form>
@endsection
