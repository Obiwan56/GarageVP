@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group" enctype="multipart/form-data">

        @csrf

        <div class="container p-4">
            <h2 class="text-primary">Ajouter un service</h2>
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre') }}">
                @error('titre')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="texte" class="form-label">Contenu</label>
                <textarea id="texte" class="form-control" name="texte">{{ old('texte') }}</textarea>
                @error('texte')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image ou photo</label>
                <input type="file" name="image" id="image" class="form-control">

                @error('image')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

            </div>

            <button type="submit" class="btn btn-primary mt-4">Ajouter le service</button>
            <a href="/gestionService" class="btn btn-primary mt-4">Retour</a>

        </div>

    </form>
@endsection
