@extends('squelette')

<meta name="csrf-token" content="{{ csrf_token() }}">

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1 class="titre">Nos Occasions</h1>
        </div>
    </div>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div id="filtre-vehicules" data-url="{{ route('filtrer.vehicules') }}"></div>

    <div class="container-fluid mt-4">
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="km" class="form-label">Filtrer par kilométrage :</label>
                <select class="form-select" id="km" name="km">
                    <option value="">Tous les kilométrages</option>
                    <option value="0-10000">Moins de 10 000 km</option>
                    <option value="10000-30000">10 000 - 30 000 km</option>
                    <option value="30000-50000">30 000 - 50 000 km</option>
                    <option value="50000-100000">50 000 - 100 000 km</option>
                    <option value="100000-200000">100 000 - 200 000 km</option>
                    <option value="200000-500000">200 000 - 500 000 km</option>
                    <option value="500000-1000000">500 000 - 1 000 000 km</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="annee" class="form-label">Filtrer par année :</label>
                <select class="form-select" id="annee" name="annee">
                    <option value="">Toutes les années</option>
                    <option value="2020-2025">de 2020 à 2025</option>
                    <option value="2015-2020">de 2015 à 2020</option>
                    <option value="2010-2015">de 2010 à 2015</option>
                    <option value="2005-2010">de 2005 à 2010</option>
                    <option value="2000-2005">de 2000 à 2005</option>
                    <option value="1960-2000">de 1960 à 2000</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="prix" class="form-label">Filtrer par prix :</label>
                <select class="form-select" id="prix" name="prix">
                    <option value="">Tous les prix</option>
                    <option value="0-10000">Moins de 10 000 €</option>
                    <option value="10000-20000">10 000 - 20 000 €</option>
                    <option value="20000-30000">20 000 - 30 000 €</option>
                    <option value="30000-40000">30 000 - 40 000 €</option>
                    <option value="40000-50000">40 000 - 50 000 €</option>
                </select>
            </div>
        </div>



        <div class="container-fluid mt-4">
            <div id="annonces-container"
                class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
                @foreach ($annonces as $annonce)
                    <input type="text" name="id" style="display: none" value="{{ $annonce->id }}">

                    <div class="col mb-4">
                        <div class="card">
                            <div id="carouselExampleInterval{{ $annonce->id }}" class="carousel slide"
                                data-bs-ride="carousel">
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="{{ asset('js/filtre.js') }}"></script>
    @endsection
