@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1 class="titre">Nos Prestations</h1>
        </div>
    </div>

    <section>
        @foreach ($services as $key => $service)
            <article class="service-article {{ $key % 2 != 0 ? 'fond-noir' : '' }}">
                <div class="container p-4">
                    <h2 class="text-center text-primary">{{ $service->titre }}</h2>
                    <div class="row row-cols-2 align-items-center">
                        <div class="col">
                            <p class="pcarrosserie">{{ $service->texte }}</p>
                            <div class="bouton p-4">
                                <a href="/contact" class="btn btn-primary">Contactez-nous</a>
                            </div>
                        </div>
                        <div class="col">
                            <img class="w-100 rounded" src="{{ asset('storage/' . $service->image) }}" alt="">
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </section>

    <style>
        .fond-noir {
            color: grey;
            background-color: #262526;
        }

        /* Inverser l'ordre des colonnes sur les écrans de taille moyenne (md) et plus grands */
        @media (min-width: 768px) {
            .service-article:nth-child(even) .row-cols-2 .col:first-child {
                order: 2;
            }

            .service-article:nth-child(even) .row-cols-2 .col:last-child {
                order: 1;
            }
        }
    </style>
@endsection
