@extends('squelette')

<meta name="csrf-token" content="{{ csrf_token() }}">

@section('contenu')
    <div class="container-fluid mt-4">
        <div class="container p-4"><a href="/allAnnonce" class="btn btn-primary">Retour à toutes les annonces</a></div>
        <div id="annonces-container"
            class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">


            @foreach ($annonces as $annonce)
                <input type="text" name="id" style="display: none" value="{{ $annonce->id }}">

                <div class="col mb-4">
                    <div class="card">
                        <div id="carouselExampleInterval{{ $annonce->id }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="{{ asset('storage/' . $annonce->img1) }}" class="d-block w-100"
                                        alt="">
                                </div>
                                <div class="carousel-item" data-bs-interval="10000">
                                    <img src="{{ asset('storage/' . $annonce->img2) }}" class="d-block w-100"
                                        alt="">
                                </div>
                                <div class="carousel-item" data-bs-interval="10000">
                                    <img src="{{ asset('storage/' . $annonce->img3) }}" class="d-block w-100"
                                        alt="">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleInterval{{ $annonce->id }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleInterval{{ $annonce->id }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $annonce->marque }} {{ $annonce->model }}</h5>
                            <div>
                                <p>Année <span class="fw-bold">{{ $annonce->annee }}</span></p>
                                <p class="fw-bold">{{ $annonce->energie }}</p>
                                <p> <span class="fw-bold">{{ $annonce->km }}</span> km</p>
                                <p class="text-primary text-center fw-bold">{{ $annonce->prix }} €</p>
                            </div>
                            <a class="btn btn-primary d-grid gap-2 col-6 mx-auto"
                                href="/detailAnnonce/{{ $annonce->id }}">Voir détail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
