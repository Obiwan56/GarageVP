@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1 class="titre">Bienvenue au Garage Vincent Parrot</h1>
        </div>
    </div>

    <div class="p-4">
        @if (session('message'))
            <div class="alert alert-danger m-4">
                {{ session('message') }}
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
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

            <div class="p-4">
                <table class="table table-striped" id="tablCom">
                    <caption class="caption">Les dix derniers commentaires</caption>
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Commentaire</th>
                            <th scope="col">note</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($coms) && count($coms) > 0)
                            @foreach ($coms as $com)
                                <tr>
                                    <td>{{ $com->name }}</td>
                                    <td>{{ $com->commentaire }}</td>
                                    <td>{{ $com->note }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">Aucun commentaire trouvé.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                </div">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <a href="/formCommentaire" class="btn btn-primary mb-3 btn-block">Laissez-nous votre témoignage,
                            impression ou commentaire</a>
                        <a href="/allCommentaires" class="btn btn-primary btn-block">Afficher tous les commentaires</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
