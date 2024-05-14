@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group">
        @csrf

        @foreach ($horaires as $horaire)
            <input type="hidden" name="id" style="display: none" value="{{ $horaire->id }}">

            <div class="container p-4">
                <h2 class="text-primary">Modifier les horaires d'ouverture</h2>

                <div class="mb-3">
                    <label for="Hsemaine" class="form-label">Horaires de semaine</label>
                    <input type="text" class="form-control" id="Hsemaine" name="Hsemaine" value="{{ $horaire->Hsemaine }}">
                    @error('Hsemaine')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Hsamedi" class="form-label">Horaire du samedi</label>
                    <input type="text" class="form-control" id="Hsamedi" name="Hsamedi" value="{{ $horaire->Hsamedi }}">
                    @error('Hsamedi')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-4">Modifier les horaires</button>
                <a href="/gestionService" class="btn btn-primary mt-4">Retour</a>
            </div>
        @endforeach
    </form>
@endsection
