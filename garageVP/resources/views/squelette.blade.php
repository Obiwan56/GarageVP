<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GarageVP</title>
</head>

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="/">Garage V. Parrot</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown"><!--chemin vers la boite mail-->
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Gestion<span class="badge">3</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/gestionAnnonce">Gestion annonce</a></li>
                                <li><a class="dropdown-item" href="/gestionCommentaire">Gestion commentaire<span
                                            class="badge">3</span></a></li>
                                <li><a class="dropdown-item" href="#">Gestion message</a></li>
                                <li><a class="dropdown-item" href="/monCompte">Gestion mon compte</a></li>
                                <li data-voir="admin">
                                    <hr class="dropdown-divider">
                                </li>
                                <li data-voir="admin"><a class="dropdown-item" href="/gestionEmploye">Gestion
                                        employé</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/presentation">Présentation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/prestation">Prestations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/occasion">Occasions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>



                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="p-4">
        @yield('contenu')
    </div>

    <footer class="bg-dark text-white text-center footer">
        <div class="row">
            <div class="col-12 col-lg-4">
                <h3 class="text-primary">Nos horaires</h3>
                <div>
                    <p>Du lundi au vendredi 08h45-12h00 14h00-18h00</p>
                    <p>Le samedi 08h45-12h00</p>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <p>Garage V. Parrot <br />
                    8 rue du chemin <br />
                    88950 Toulouse <br />
                    88 01 01 01 01 <br />
                </p>
            </div>
            <div class="col-6 col-lg-4 ">
                <img src="/image_garage-vp/logoPV.png" alt="logoPV" class="logo img-fluid">
            </div>
        </div>
    </footer>

</body>

</html>
