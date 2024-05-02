@extends('squelette')

@section('contenu')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-center">{{ $annonce->marque }} {{ $annonce->model }}</h1>
                <img id="imagePrincipale" src="{{ asset('storage/' . $annonce->img1) }}" class="d-block w-100" alt="...">
                <!-- Galerie d'images -->
                <div class="row mt-3 galerie-images">
                    @for ($i = 1; $i <= 10; $i++)
                        @if (!empty($annonce["img$i"]))
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $annonce["img$i"]) }}" class="img-thumbnail miniature" alt="...">
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
            <div class="col-md-6">
                <h3>Description</h3>
                <p>{{ $annonce->marque }} {{ $annonce->model }} <br>
                    Année {{ $annonce->annee }} <br>
                    {{ $annonce->km }} km <br>
                    {{ $annonce->description }} <br>
                    {{ $annonce->energie }} <br>
                    Prix: {{ $annonce->prix }} € <br>
                </p>

                <h3>Disponible de suite</h3>
                <p>Le prix ne comprend pas les frais de la carte grise et de la mise en service</p>
            </div>
        </div>
    </div>

    <style>
        /* Style des miniatures */
        .miniature {
            width: 100%;
            height: auto;
            border: 2px solid #ddd;
            /* Bordure grise */
            border-radius: 5px;
            /* Coins arrondis */
            cursor: pointer;
            /* Curseur pointeur au survol */
        }

        /* Style pour centrer les images */
        .miniature img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

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
