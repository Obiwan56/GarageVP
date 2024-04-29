@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des voitures en ventes</h1>

    <div class="p-4">



        <div class="container p-4">

            <div>
                <a href="/ajoutAnnonce">Ajouter une annonce <i class="bi bi-plus-lg icon2 m-4"></i></a>
            </div>

            <table class="table table-striped" id="tablCom">
                <caption class="caption">Liste des annonces</caption>
                <tbody>
                    <tr>
                        <th scope="row">#1</th>
                        <td>Renault</td>
                        <td>Clio 5 hdi</td>
                        <td>2020</td>
                        <td>120000</td>
                        <td>17000</td>
                        <td><i data-bs-toggle="modal" data-bs-target="#deleteEmploye" class="bi bi-trash"></i>
                            <a href="/modifAnnonce"><i class="bi bi-pencil-square"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">#1</th>
                        <td>Renault</td>
                        <td>Clio 5 hdi</td>
                        <td>2020</td>
                        <td>120000</td>
                        <td>17000</td>
                        <td><i data-bs-toggle="modal" data-bs-target="#deleteEmploye" class="bi bi-trash"></i>
                            <a href="/modifAnnonce"><i class="bi bi-pencil-square"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="deleteEmploye" tabindex="-1" aria-labelledby="deleteEmployeLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteEmployeLabel">Supprimer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Etes vous sur de vouloir supprimer cette annonce ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
@endsection
