@extends('squelette')

@section('contenu')
    <h1 class="text-primary text-center">Gestion des Horaires visible sur le site</h1>

    <div class="p-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="p-4">



        <div class="container p-4">

            <table class="table table-striped" id="tablCom">
                <caption class="caption">Horaires affichées</caption>
                <thead>
                    <tr>
                        <th>Semaine</th>
                        <th>Samedi</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horaires as $horaire)
                        <tr>
                            <td>{{ $horaire->Hsemaine }}</td>
                            <td>{{ $horaire->Hsamedi }}</td>


                            <td>
                                <a href="/formModifHoraire/{{ $horaire->id }}" class="btn btn-primary">Modifier</a>

                            </td>
                        </tr>


                    @endforeach



                </tbody>
            </table>
        </div>
    </div>


@endsection



