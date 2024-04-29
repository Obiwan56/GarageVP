@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion du personnel</h1>

    <div class="container">
        <div class="col-xl">
            <div>
                <a href="/ajoutEmploye">Ajouter un ou une employé(e) <i class="bi bi-plus-lg icon2"></i></a>
            </div>

            <table class="table table-striped" id="tablCom">
                <caption class="caption">Liste des employé(e)s</caption>
                <thead>
                    <tr>
                        <th scope>Email</th>
                        <th scope>Nom</th>
                        <th scope>Prénom</th>
                        <th scope>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Les données des employés seront ajoutées ici par JavaScript -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal de suppression -->
    <div class="modal fade" id="deleteEmployeModal" tabindex="-1" aria-labelledby="deleteEmployeLabel" aria-hidden="true">
        <!-- Contenu de la modal de suppression -->
    </div>

    <!-- Modal de modification -->
    <div class="modal fade" id="modifyEmployeModal" tabindex="-1" aria-labelledby="modifyEmployeLabel" aria-hidden="true">
        <!-- Contenu de la modal de modification -->
    </div>
@endsection
