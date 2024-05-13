@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group" enctype="multipart/form-data">

        @csrf

        <input type="text" name="id" style="display: none" value="{{ $services->id }}">

        <div class="container p-4">
            <h2 class="text-primary">Modifier un service</h2>
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" value="{{ $services->titre }}">
                @error('titre')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="texte" class="form-label">Contenu</label>
                <textarea id="texte" class="form-control" name="texte">{{ $services->texte }}</textarea>
                @error('texte')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Photo ou image</label>
                <input type="file" name="image" id="image" class="form-control">
                <input type="hidden" name="imgage_old" value="{{ $services->image }}">
                @if ($services->image)
                    <img src="{{ asset('storage/' . $services->image) }}" alt="" style="max-width: 150px;">
                @endif
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Modifier le service</button>
            <a href="/gestionService" class="btn btn-primary mt-4">Retour</a>

        </div>

    </form>
@endsection
