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

        <div class="card m-4">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="/image_garage-vp/clio 4/1682155522_dcdf518428b53b430140.jpg" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="/image_garage-vp/clio 4/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/image_garage-vp/clio 4/moteur-renault-clio-4.jpg" class="d-block w-100" alt="...">
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
                    <p>Année : 2020</p>
                    <p>Diesel</p>
                    <p>120000 km</p>
                    <p>17000 €</p>
                </div>
                <a href="/detailAnnonce1"><button type="button" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Voir
                        détail</button></a>
            </div>
        </div>

        <div class="card m-4">
            <img src="/image_garage-vp/5008/3_4_avant_gauche-1680779288.jpg" class="card-img-top p-2 rounded"
                alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Peugeot 5008 </h5>
                <p>Année : 2019</p>
                <p>Diesel</p>
                <p>66000 km</p>
                <p>20000 €</p>
                <a href="/detailAnnonce2" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Voir détail</a>
            </div>
        </div>

        <div class="card m-4">
            <img src="/image_garage-vp/Porsche Cayenne/296782_2017_Porsche_Cayenne22.jpg" class="card-img-top p-2 rounded"
                alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Porsche Cayenne Turbo</h5>
                <p>Année : 2022</p>
                <p>Diesel</p>
                <p>128000 km</p>
                <p>28000 €</p>
                <a href="/detailAnnonce3" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Voir détail</a>
            </div>
        </div>

        <div class="card m-4">
            <img src="/image_garage-vp/GLE/mercedes-gle-coupe-63s-amg-coupe-dct-7g-tronic-5-5l-v8-585ch-4matic-120356887.jpg"
                class="card-img-top p-2 rounded" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">GLE HDI</h5>
                <p>Année : 2021</p>
                <p>Diesel</p>
                <p>117000 km</p>
                <p>25000 €</p>
                <a href="/detailAnnonce4" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Voir détail</a>
            </div>
        </div>

        <div class="card m-4">
            <img src="/image_garage-vp/DS7/3_4_avant_droite-1653378629.jpg" class="card-img-top p-2 rounded"
                alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">DS7 Hybrid</h5>
                <p>Année : 2022</p>
                <p>Diesel</p>
                <p>102000 km</p>
                <p>28000 €</p>
                <a href="/detailAnnonce5" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Voir détail</a>
            </div>
        </div>

    </div>
@endsection
