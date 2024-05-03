@extends('squelette')

@section('contenu')

@foreach ($annonces as $annonce)
    <input type="text" name="id" style="display: none" value="{{ $annonce->id }}">

    <div class="col mb-4">
        <div class="card">
            <div id="carouselExampleInterval{{ $annonce->id }}" class="carousel slide" data-bs-ride="carousel">
                <!-- Insérer le reste du code du carrousel ici -->
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">{{ $annonce->marque}}  {{ $annonce->model }}</h5>
                <div>
                    <p>{{ $annonce->annee }}</p>
                    <p>{{ $annonce->energie }}</p>
                    <p>{{ $annonce->km }} km</p>
                    <p class="text-primary text-center">{{ $annonce->prix }} €</p>
                </div>
                <a class="btn btn-primary d-grid gap-2 col-6 mx-auto"
                    href="/detailAnnonce/{{ $annonce->id }}">Voir détail</a>
            </div>
        </div>
    </div>
@endforeach


@endsection
