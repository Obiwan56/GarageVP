@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des services visible sur le site</h1>

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
                <a href="/ajoutService">Ajouter un service <i class="bi bi-plus-lg icon2 m-4"></i></a>
            </div>

            <table class="table table-striped" id="tablCom">
                <caption class="caption">Liste des service</caption>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->titre }}</td>
                            <td>{{ $service->texte }}</td>

                            <td>
                                <a href="/modifService/{{ $service->id }}" class="btn btn-primary">Modifier</a>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#idmodal_{{ $service->id }}">Supprimer</button>
                            </td>
                        </tr>

                        {{-- modal --}}
                        <div class="modal fade dark" id="idmodal_{{ $service->id }}"
                            aria-labelledby="modal_{{ $service->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Supprimer</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Etes vous sur de vouloir supprimer ce service?</p>
                                    </div>
                                    <div class="modal-footer m-4">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                                            aria-label="close">Fermer</button>
                                        <a href="/effacerService/{{ $service->id }}" class="btn btn-warning">Supprimer</a>
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



