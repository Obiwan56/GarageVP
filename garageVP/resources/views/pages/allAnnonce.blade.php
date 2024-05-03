@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1>Nos Occasions</h1>
        </div>
    </div>

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <label for="prixMin">Prix minimum</label>
                <select id="prixMin" class="form-select" aria-label="Default select example">
                    <option selected>Prix min</option>
                    <option value="1">3000</option>
                    <option value="2">4000</option>
                    <option value="3">5000</option>
                    <option value="4">6000</option>
                    <option value="5">7000</option>
                    <option value="6">8000</option>
                    <option value="7">9000</option>
                    <option value="8">10000€</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <label for="prixMax">Prix maximum</label>
                <select id="prixMax" class="form-select" aria-label="Default select example">
                    <option selected>Prix max</option>
                    <option value="1">10000</option>
                    <option value="2">11000</option>
                    <option value="3">12000</option>
                    <option value="4">13000</option>
                    <option value="5">15000</option>
                    <option value="6">20000</option>
                    <option value="7">25000</option>
                    <option value="8">40000</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <label for="kmMin">Km minimum</label>
                <select id="kmMin" class="form-select" aria-label="Default select example">
                    <option selected>Km min</option>
                    <option value="1">50000</option>
                    <option value="2">100000</option>
                    <option value="3">150000</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <label for="kmMax">Km maximum</label>
                <select id="kmMax" class="form-select" aria-label="Default select example">
                    <option selected>Km max</option>
                    <option value="1">100000</option>
                    <option value="2">200000</option>
                    <option value="3">300000</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <label for="yearMin">Année minimum</label>
                <select id="yearMin" class="form-select" aria-label="Default select example">
                    <option selected>Année min</option>
                    <option value="1">2000</option>
                    <option value="2">2005</option>
                    <option value="3">2010</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <label for="yearMax">Année maximum</label>
                <select id="yearMax" class="form-select" aria-label="Default select example">
                    <option selected>Année max</option>
                    <option value="1">2010</option>
                    <option value="2">2015</option>
                    <option value="3">2020</option>
                    <option value="4">2024</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <label for="carbu"> </label>

                <select id="carbu" class="form-select" aria-label="Default select example">
                    <option selected>Energie</option>
                    <option value="1">Diesel</option>
                    <option value="2">Essence</option>
                    <option value="3">Hybrid</option>
                    <option value="4">Electrique</option>
                    <option value="5">Hydrogène</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <label for="boite"> </label>

                <select id="boite" class="form-select" aria-label="Default select example">
                    <option selected>Boite</option>
                    <option value="1">Auto</option>
                    <option value="2">Manuelle</option>
                </select>
            </div>
            <div class="col m-4 ">
                <button id="filtreBtn" type="button" class="btn btn-primary ">Filtrer</button>

            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center">
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
                            <h5 class="card-title text-center">{{ $annonce->model }}</h5>
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



        </div>
    </div>

    <script>
        const annonces = php echo json_encode($annonces);
    </script>

    <script src="{{ asset('js/filtre.js') }}"></script>
@endsection
