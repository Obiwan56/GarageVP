@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1 class="titre">Bienvenue au Garage Vincent Parrot</h1>
        </div>
    </div>

    <div class="col p-3 container text-center ">
        <h2 class="text-primary text-center">Nos Prestations</h2>
        <div class="position-relative p-6 col">
            <div>
                <a href="/prestation"><i class="bi bi-car-front icon"></i></a>
                <h3>Réparation de la carrosserie</h3>
            </div>
            <div>
                <a href="/prestation"><i class="bi bi-wrench-adjustable icon"></i></a>
                <h3>Entretien et mécanique multimarque</h3>
            </div>
            <div>
                <a href="/occasion"><i class="bi bi-currency-dollar icon"></i></a>
                <h3>Vente de voiture d'occasion</h3>
            </div>

            <div>
                <table class="table table-striped" id="tablCom">
                    <caption class="caption">Les dix derniers commentaires</caption>
                    <tbody>
                        <tr>
                            <th scope="row">Jack</th>
                            <td>super garage avec une bonne équipe très agréable</td>
                            <td>5 etoiles</td>
                            <td>20/01/2021</td>
                        </tr>
                        <tr>
                            <th scope="row">John</th>
                            <td>merci pour votre accueil</td>
                            <td>5 etoiles</td>
                            <td>02/01/2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="/commentaire">Laissez-nous votre témoignage, impression ou commentaire</a> <br><br>
            <a href="/allCommentaires">Afficher tous les commentaires</a>

        </div>

    </div>
@endsection
