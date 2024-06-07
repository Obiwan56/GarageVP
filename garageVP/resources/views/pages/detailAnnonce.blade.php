@extends('squelette')

@section('contenu')
    <div class="p-4">
        @if (session('message'))
            <div class="alert alert-danger m-4">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-center fw-bold">{{ $vehicule->marque }} {{ $vehicule->model }}</h1>
                <img id="imagePrincipale" src="{{ asset($vehicule->img1) }}" class="d-block w-100" alt="...">
                <!-- Galerie d'images -->
                <div class="row mt-3 galerie-images">
                    @for ($i = 1; $i <= 10; $i++)
                        @if (!empty($vehicule["img$i"]))
                            <div class="col-md-4">
                                <img src="{{ asset($vehicule["img$i"]) }}" class="img-thumbnail miniature"
                                    alt="...">
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
            <div class="col-md-6">
                <h3>Description</h3>
                <h2 class="fw-bold">{{ $vehicule->marque }} {{ $vehicule->model }} </h2><br>
                <div class="fw-bold"> Année {{ $vehicule->annee }} <br>
                    {{ $vehicule->km }} km <br>
                    {{ $vehicule->energie }} <br>
                </div>
                <div class="container pcarrosserie">{{ $vehicule->description }}</div>
                <br>

                Prix: <span class="text-primary fs-1 fw-bold">{{ $vehicule->prix }}</span> € <br>
                </p>

                <h3>Disponible de suite</h3>
                <p>Le prix ne comprend pas les frais de la carte grise et de la mise en service</p>
            </div>
        </div>
        <a href="{{ route('pages.contactAnnonceForm', ['id' => $vehicule->id]) }}" class="btn btn-primary">Contacter</a>
        <a href="/allAnnonce" class="btn btn-primary">Retour aux annonces</a>
    </div>



    <script>
        // Sélection des miniatures
        const miniatures = document.querySelectorAll('.miniature');

        // Ajout d'un écouteur d'événement pour chaque miniature
        miniatures.forEach(miniature => {
            miniature.addEventListener('click', () => {
                const imagePath = miniature.getAttribute('src');
                const imagePrincipale = document.getElementById('imagePrincipale');
                imagePrincipale.setAttribute('src', imagePath);
            });
        });
    </script>
@endsection
