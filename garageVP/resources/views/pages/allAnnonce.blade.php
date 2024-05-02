@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1>Nos Occasions</h1>
        </div>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col-xl">
                <select id="prixMin" class="form-select" aria-label="Default select example">
                    <option selected>Prix min</option>
                    <option value="1">3000€</option>
                    <option value="2">4000€</option>
                    <option value="3">5000€</option>
                    <option value="4">6000€</option>
                    <option value="5">7000€</option>
                    <option value="6">8000€</option>
                    <option value="7">9000€</option>
                    <option value="8">10000€</option>
                </select>
            </div>
            <div class="col-xl">
                <select id="prixMax" class="form-select" aria-label="Default select example">
                    <option selected>Prix max</option>
                    <option value="1">10000€</option>
                    <option value="2">11000€</option>
                    <option value="3">12000€</option>
                    <option value="4">13000€</option>
                    <option value="5">15000€</option>
                    <option value="6">20000€</option>
                    <option value="7">25000€</option>
                    <option value="8">40000€</option>
                </select>
            </div>
            <div class="col-xl">
                <select id="kmMin" class="form-select" aria-label="Default select example">
                    <option selected>Km min</option>
                    <option value="1">50000</option>
                    <option value="2">100000</option>
                    <option value="3">150000</option>
                </select>
            </div>
            <div class="col-xl">
                <select id="kmMax" class="form-select" aria-label="Default select example">
                    <option selected>Km max</option>
                    <option value="1">100000</option>
                    <option value="2">200000</option>
                    <option value="3">300000</option>
                </select>
            </div>
            <div class="col-xl">
                <select id="yearMin" class="form-select" aria-label="Default select example">
                    <option selected>Année min</option>
                    <option value="1">2000</option>
                    <option value="2">2005</option>
                    <option value="3">2010</option>
                </select>
            </div>
            <div class="col-xl">
                <select id="yearMax" class="form-select" aria-label="Default select example">
                    <option selected>Année max</option>
                    <option value="1">2010</option>
                    <option value="2">2015</option>
                    <option value="3">2020</option>
                    <option value="4">2024</option>
                </select>
            </div>
            <div class="col-xl">
                <select id="carbu" class="form-select" aria-label="Default select example">
                    <option selected>Energie</option>
                    <option value="1">Diesel</option>
                    <option value="2">Essence</option>
                    <option value="3">Hybrid</option>
                    <option value="4">Electrique</option>
                    <option value="5">Hydrogène</option>
                </select>
            </div>
            <div class="col-xl">
                <select id="boite" class="form-select" aria-label="Default select example">
                    <option selected>Boite</option>
                    <option value="1">Auto</option>
                    <option value="2">Manuelle</option>
                </select>
            </div>
            <div class="col-xl">
                <button id="filtreBtn" type="button" class="btn btn-primary">Filtrer</button>

            </div>
        </div>
    </div>


    <div class="row d-flex justify-content-around  ">
        @foreach ($annonces as $annonce)
        <input type="text" name="id" style="display: none" value="{{ $annonce->id }}">
            <div class="card m-4">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('storage/' . $annonce->img1) }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('storage/' . $annonce->img2) }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('storage/' . $annonce->img3) }}" class="d-block w-100" alt="...">
                        </div>


                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Clio 5 hdi</h5>
                    <div class="">
                        <p>{{ $annonce->annee }}</p>
                        <p>{{ $annonce->energie }}</p>
                        <p>{{ $annonce->km }} km</p>
                        <p class="text-primary text-center">{{ $annonce->prix }} €</p>
                    </div>
                    <a class="btn btn-primary d-grid gap-2 col-6 mx-auto" href="/detailAnnonce/{{ $annonce->id }}">Voir détail</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
