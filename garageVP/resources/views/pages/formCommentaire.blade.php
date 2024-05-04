@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1>Laissez-nous votre impression sur notre travail</h1>
        </div>
    </div>
    <form action="" method="post" class="form-group">

        @csrf

        <div class="container p-4">
            <h2 class="text-primary">Contactez-nous ou laissez-nous un commentaire</h2>

            <form action="/contact" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Votre prénom</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="commentaire" class="form-label">Votre commentaire</label>
                    <textarea id="commentaire" class="form-control" name="commentaire">{{ old('commentaire') }}</textarea>
                    @error('commentaire')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="note">Note sur 5</label>
                    <select class="form-select" id="note" name="note" aria-label="note">
                        <option value="" selected hidden>Choisissez une note sur 5</option>
                        <option value="1" {{ old('note') == '1' ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old('note') == '2' ? 'selected' : '' }}>2</option>
                        <option value="3" {{ old('note') == '3' ? 'selected' : '' }}>3</option>
                        <option value="4" {{ old('note') == '4' ? 'selected' : '' }}>4</option>
                        <option value="5" {{ old('note') == '5' ? 'selected' : '' }}>5</option>
                    </select>
                    @error('note')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-5">
                    <button type="submit" class= "btn btn-primary">Envoyer</button>
                    <a href="/" class="btn btn-primary">Retour</a>
                </div>

                <p>Tout contenu inapproprié ou offensant ne sera pas publié.</p>
            </form>
        </div>
    </form>
@endsection
