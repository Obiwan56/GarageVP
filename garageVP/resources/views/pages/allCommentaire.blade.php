@extends('squelette')

@section('contenu')
    <div class="titre2 text-center text-primary">
        <div class="titre2-contenu">
            <h1>Tous les commentaires</h1>
        </div>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Trier par</option>
                    <option value="1">Prénom de A à Z</option>
                    <option value="2">Prénom de Z à A</option>
                    <option value="3">Dernier commentaires</option>
                    <option value="3">Premier commentaires</option>
                </select>
            </div>
            <div class="col">
                <button type="button" class="btn btn-primary">Filtrer</button>
            </div>
        </div>
    </div>

    <div class="container p-4">
        <table class="table table-striped" id="tablCom">
            <caption class="caption">Tous les commentaires</caption>
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


    <!--
    <div class="container p-4">
        <table class="table table-striped" id="tablCom">
            <caption class="caption">Tous les commentaires</caption>
            <thead>
                <tr>
                    <th scope="col">Prénom</th>
                    <th scope="col">Commentaire</th>
                    <th scope="col">Note</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commentaires as $commentaire)
    <tr>
                    <td>{{ $commentaire->prenom }}</td>
                    <td>{{ $commentaire->commentaire }}</td>
                    <td>{{ $commentaire->note }} étoiles</td>
                    <td>{{ $commentaire->date }}</td>
                </tr>
    @endforeach
            </tbody>
        </table>
    </div>
    -->
@endsection
