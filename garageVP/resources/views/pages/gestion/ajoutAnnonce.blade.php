@extends('squelette')

@section('contenu')
    <form action="{{ route('creerAnnonce') }}" method="post" class="form-group" enctype="multipart/form-data">

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
                <textarea id="description" class="form-control" name="description">{{ old('description') }}</textarea>
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
                @error('energie')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label for="boite" class="form-label">Boîte de vitesses</label>
                <select id="boite" class="form-select" name="boite" value="{{ old('boite') }}">
                    <option selected disabled value="">Choisir</option>
                    <option value="automatique">automatique</option>
                    <option value="manuelle">manuelle</option>
                </select>
                @error('boite')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="text" class="form-control" id="prix" name="prix" value="{{ old('prix') }}">
                @error('prix')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img1">Photo véhicule</label>
                <input type="file" name="img1" id="img1" class="form-control">

                @error('img1')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
                <br>
                <label for="img2">2e Photo véhicule</label>
                <input type="file" name="img2" id="img2" class="form-control">

                @error('img2')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

                <label for="img3">3e Photo véhicule</label>
                <input type="file" name="img3" id="img3" class="form-control">

                @error('img3')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

                <label for="img4">4e Photo véhicule</label>
                <input type="file" name="img4" id="img4" class="form-control">

                @error('img4')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

                <label for="img5">5e Photo véhicule</label>
                <input type="file" name="img5" id="img5" class="form-control">

                @error('img5')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

                <label for="img6">6e Photo véhicule</label>
                <input type="file" name="img6" id="img6" class="form-control">

                @error('img6')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

                <label for="img7">7e Photo véhicule</label>
                <input type="file" name="img7" id="img7" class="form-control">

                @error('img7')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

                <label for="img8">8e Photo véhicule</label>
                <input type="file" name="img8" id="img8" class="form-control">

                @error('img8')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

                <label for="img9">9e Photo véhicule</label>
                <input type="file" name="img9" id="img9" class="form-control">

                @error('img9')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

                <label for="img10">10e Photo véhicule</label>
                <input type="file" name="img10" id="img10" class="form-control">

                @error('img10')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Ajouter l'annonce</button>
            <a href="/gestionAnnonce" class="btn btn-primary mt-4">Retour</a>

        </div>
        <br><br><br><br><br><br><br><br>
    </form>
@endsection


{{-- refaire le formulaire avec un crud fonctionnel --}}
