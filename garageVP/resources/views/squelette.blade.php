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

                    <ul class="navbar-nav">
                        @auth
                            <li class="nav-item">
                                <span class="nav-link dropdown-toggle text-success" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->prenom }}</span>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/deconnexion">Déconnexion</a></li>
                                    {{-- <li><a class="dropdown-item" href="{{ route('reset-password') }}">Modification mdp</a>
                                    </li> --}}
                                </ul>
                            </li>

                        @endauth
                    </ul>



                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                        @auth
                            <li class="nav-item dropdown"><!--chemin vers la boite mail-->
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Gestion
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/gestionAnnonce">Gestion annonce</a></li>
                                    <li><a class="dropdown-item" href="/gestionCommentaire">Gestion commentaire</a></li>
                                    <li><a class="dropdown-item" href="#">Gestion message</a></li>

                                    @auth
                                        @if (auth()->user()->role === 'admin')
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="/gestionEmploye">Gestion employé</a></li>
                                        @endif
                                    @endauth


                                </ul>
                            </li>
                        @endauth


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
                            <a class="nav-link" href="/allAnnonce">Occasions</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>



                        <li class="nav-item">
                            <!-- Afficher le bouton de connexion uniquement si l'utilisateur n'est pas connecté -->
                            @guest
                                <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                            @endguest
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="main">
        @yield('contenu')
    </div>

    <footer class="bg-dark text-white text-center footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
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
        </div>
    </footer>

</body>

</html>
