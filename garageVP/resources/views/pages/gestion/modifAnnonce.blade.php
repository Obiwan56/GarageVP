@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group" enctype="multipart/form-data">

        @csrf

        <input type="text" name="id" style="display: none" value="{{ $annonces->id }}">

        <div class="container p-4">
            <h2 class="text-primary">Modifier une annonce</h2>
            <div class="mb-3">
                <label for="marque" class="form-label">Marque</label>
                <input type="text" class="form-control" id="marque" name="marque" value="{{ $annonces->marque }}">
                @error('marque')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Série</label>
                <input type="text" class="form-control" id="model" name="model" value="{{ $annonces->model }}">
                @error('model')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="km" class="form-label">Kilometrage</label>
                <input type="text" class="form-control" id="km" name="km" value="{{ $annonces->km }}">
                @error('km')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="annee" class="form-label">Année</label>
                <input type="text" class="form-control" id="annee" name="annee" value="{{ $annonces->annee }}">
                @error('annee')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" class="form-control" name="description">{{ $annonces->description }}</textarea>
                @error('description')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label for="energie" class="form-label">Carburant</label>
                <select id="energie" class="form-select" name="energie">
                    <option value="diesel" {{ $annonces->energie == 'diesel' ? 'selected' : '' }}>Diesel</option>
                    <option value="essence" {{ $annonces->energie == 'essence' ? 'selected' : '' }}>Essence</option>
                    <option value="hybride" {{ $annonces->energie == 'hybride' ? 'selected' : '' }}>Hybride</option>
                    <option value="electrique" {{ $annonces->energie == 'electrique' ? 'selected' : '' }}>Electrique
                    </option>
                    <option value="hydrogene" {{ $annonces->energie == 'hydrogene' ? 'selected' : '' }}>Hydrogene</option>
                </select>
                @error('energie')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label for="boite" class="form-label">Boîte de vitesses</label>
                <select id="boite" class="form-select" name="boite">
                    <option value="automatique" {{ $annonces->boite == 'automatique' ? 'selected' : '' }}>Automatique
                    </option>
                    <option value="manuelle" {{ $annonces->boite == 'manuelle' ? 'selected' : '' }}>Manuelle</option>
                </select>
                @error('boite')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="text" class="form-control" id="prix" name="prix" value="{{ $annonces->prix }}">
                @error('prix')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img1">Photo véhicule 1</label>
                <input type="file" name="img1" id="img1" class="form-control">
                <input type="hidden" name="img1_old" value="{{ $annonces->img1 }}">
                @if ($annonces->img1)
                    <img src="{{ asset('storage/' . $annonces->img1) }}" alt="Image 1" style="max-width: 150px;">
                @endif
                @error('img1')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img2">Photo véhicule 2</label>
                <input type="file" name="img2" id="img2" class="form-control">
                <input type="hidden" name="img1_old" value="{{ $annonces->img2 }}">
                @if ($annonces->img2)
                    <img src="{{ asset('storage/' . $annonces->img2) }}" alt="Image 2" style="max-width: 150px;">
                @endif
                @error('img2')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img3">Photo véhicule 3</label>
                <input type="file" name="img3" id="img3" class="form-control">
                <input type="hidden" name="img3_old" value="{{ $annonces->img3 }}">
                @if ($annonces->img3)
                    <img src="{{ asset('storage/' . $annonces->img3) }}" alt="Image 3" style="max-width: 150px;">
                @endif
                @error('img3')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img4">Photo véhicule 4</label>
                <input type="file" name="img4" id="img4" class="form-control">
                <input type="hidden" name="img4_old" value="{{ $annonces->img4 }}">
                @if ($annonces->img4)
                    <img src="{{ asset('storage/' . $annonces->img4) }}" alt="Image 4" style="max-width: 150px;">
                @endif
                @error('img4')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img5">Photo véhicule 5</label>
                <input type="file" name="img5" id="img5" class="form-control">
                <input type="hidden" name="img5_old" value="{{ $annonces->img5 }}">
                @if ($annonces->img5)
                    <img src="{{ asset('storage/' . $annonces->img5) }}" alt="Image 5" style="max-width: 150px;">
                @endif
                @error('img5')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img6">Photo véhicule 6</label>
                <input type="file" name="img6" id="img6" class="form-control">
                <input type="hidden" name="img6_old" value="{{ $annonces->img6 }}">
                @if ($annonces->img6)
                    <img src="{{ asset('storage/' . $annonces->img6) }}" alt="Image 6" style="max-width: 150px;">
                @endif
                @error('img6')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img7">Photo véhicule 7</label>
                <input type="file" name="img7" id="img7" class="form-control">
                <input type="hidden" name="img1_old" value="{{ $annonces->img7 }}">
                @if ($annonces->img7)
                    <img src="{{ asset('storage/' . $annonces->img7) }}" alt="Image 7" style="max-width: 150px;">
                @endif
                @error('img7')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img8">Photo véhicule 8</label>
                <input type="file" name="img8" id="img8" class="form-control">
                <input type="hidden" name="img8_old" value="{{ $annonces->img8 }}">
                @if ($annonces->img8)
                    <img src="{{ asset('storage/' . $annonces->img8) }}" alt="Image 8" style="max-width: 150px;">
                @endif
                @error('img8')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img9">Photo véhicule 9</label>
                <input type="file" name="img9" id="img9" class="form-control">
                <input type="hidden" name="img9_old" value="{{ $annonces->img9 }}">
                @if ($annonces->img9)
                    <img src="{{ asset('storage/' . $annonces->img9) }}" alt="Image 9" style="max-width: 150px;">
                @endif
                @error('img9')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="img10">Photo véhicule 10</label>
                <input type="file" name="img10" id="img10" class="form-control">
                <input type="hidden" name="img10_old" value="{{ $annonces->img10 }}">
                @if ($annonces->img10)
                    <img src="{{ asset('storage/' . $annonces->img10) }}" alt="Image 10" style="max-width: 150px;">
                @endif
                @error('img10')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>



            <button type="submit" class="btn btn-primary mt-4">Modifier l'annonce</button>
            <a href="/gestionAnnonce" class="btn btn-primary mt-4">Retour</a>

        </div>
        <br><br><br><br><br><br><br><br>
    </form>
@endsection
