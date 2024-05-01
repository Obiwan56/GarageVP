@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group" enctype="multipart/form-data">

        @csrf

        <div class="container p-4">
            <h2 class="text-primary">Ajouter une annonce</h2>
            <div class="mb-3">
                <label for="marque" class="form-label">Marque</label>
                <input type="text" class="form-control" id="marque" name="marque" value="{{ old('marque') }}">
                @error('marque')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Série</label>
                <input type="text" class="form-control" id="model" name="model" value="{{ old('model') }}">
                @error('model')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror
            </div>

            <div class="mb-3">
                <label for="km" class="form-label">Kilometrage</label>
                <input type="text" class="form-control" id="km" name="km" value="{{ old('km') }}">
                @error('km')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror
            </div>

            <div class="mb-3">
                <label for="annee" class="form-label">Année</label>
                <input type="text" class="form-control" id="annee" name="annee" value="{{ old('annee') }}">
                @error('annee')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" class="form-control" name="description" value="{{ old('description') }}"></textarea>
                @error('description')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label for="energie" class="form-label">Carburant</label>
                <select id="energie" class="form-select" name="energie" value="{{ old('energie') }}">
                    <option selected disabled value="">Choisir</option>
                    <option value="diesel">Diesel</option>
                    <option value="essence">Essence</option>
                    <option value="hibrid">Hibrid</option>
                    <option value="electrique">Electrique</option>
                    <option value="hydrogene">hydrogene</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Image article</label>
                <input type="file" name="image" class="form-control">

                @error('image')
                <span class="text-danger"> {{ $message }}</span>

                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Ajouter l'annonce</button>
            <a href="/gestionAnnonce" class="btn btn-primary mt-4">Retour</a>

        </div>
        <br><br><br><br><br><br><br><br>
    </form>
@endsection


{{-- Continuer le formulaire mettre les autres fichiers photos --}}
