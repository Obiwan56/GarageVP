@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des commentaires publiés</h1>

    <div class="p-4">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="p-4">
        @if (session('message'))
            <div class="alert alert-danger m-4">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="p-4">
        <div class="container p-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Commentaire</th>
                        <th scope="col">note</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($coms as $com)
                        <tr>
                            <td>{{ $com->name }}</td>
                            <td>{{ $com->commentaire }}</td>
                            <td>{{ $com->note }}</td>
                            <td>
                                <a href="/deleteCom2/{{ $com->id }}" class="btn btn-danger">Supprimer</a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
