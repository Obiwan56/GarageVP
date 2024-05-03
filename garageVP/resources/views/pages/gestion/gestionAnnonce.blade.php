@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des voitures en ventes</h1>

    <div class="p-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="p-4">



        <div class="container p-4">

            <div>
                <a href="/ajoutAnnonce">Ajouter une annonce <i class="bi bi-plus-lg icon2 m-4"></i></a>
            </div>

            <table class="table table-striped" id="tablCom">
                <caption class="caption">Liste des annonces</caption>
                <tbody>
                    @foreach ($annonces as $annonce)
                        <tr>
                            <td>{{ $annonce->marque }}</td>
                            <td>{{ $annonce->model }}</td>
                            <td>{{ $annonce->annee }}</td>
                            <td>{{ $annonce->km }}</td>
                            <td>{{ $annonce->description }}</td>
                            <td>{{ $annonce->energie }}</td>
                            <td>{{ $annonce->boite }}</td>
                            <td>{{ $annonce->prix }}</td>

                            <td>
                                <a href="/modifAnnonce/{{ $annonce->id }}" class="btn btn-primary">Modifier</a>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#idmodal_{{ $annonce->id }}">Supprimer</button>
                            </td>
                        </tr>

                        {{-- modal --}}
                        <div class="modal fade dark" id="idmodal_{{ $annonce->id }}"
                            aria-labelledby="modal_{{ $annonce->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Supprimer</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Etes vous sur de vouloir supprimer cette annonce?</p>
                                    </div>
                                    <div class="modal-footer m-4">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                                            aria-label="close">Fermer</button>
                                        <a href="/effacerAnnonce/{{ $annonce->id }}" class="btn btn-warning">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection



