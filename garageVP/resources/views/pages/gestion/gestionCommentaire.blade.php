@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des commentaires</h1>

    <div class="p-4">
        <div>
            <div class="container p-4">
                <table class="table table-striped" id="tablCom">
                    <caption class="caption">Tous les commentaires</caption>
                    <tbody>
                        <tr>
                            <th scope="row">Jack</th>
                            <td>super garage avec une bonne équipe très agréable</td>
                            <td>5 etoiles</td>
                            <td>20/01/2021</td>
                            <td><i data-bs-toggle="modal" data-bs-target="#deleteCommentaire" class="bi bi-trash"></i>
                                <i data-bs-toggle="modal" data-bs-target="#publiCommentaire" class="bi bi-send"></i>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">John</th>
                            <td>super garage avec une bonne équipe très agréable</td>
                            <td>5 etoiles</td>
                            <td>20/01/2021</td>
                            <td><i data-bs-toggle="modal" data-bs-target="#deleteCommentaire" class="bi bi-trash"></i>
                                <i data-bs-toggle="modal" data-bs-target="#publiCommentaire" class="bi bi-send"></i>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="modal fade" id="publiCommentaire" tabindex="-1" aria-labelledby="publiCommentaireLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="publiCommentaireLabel">Publier</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Etes vous sur de vouloir publier ce commentaire ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Publier</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteCommentaire" tabindex="-1" aria-labelledby="deleteCommentaireLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteCommentaireLabel">Supprimer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Etes vous sur de vouloir supprimer ce commentaire
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-primary">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
