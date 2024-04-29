@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group">

        @csrf

        <input type="text" name="id" style="display: none" value="{{ $users->id }}">

        <div class="container p-4">
            <h2 class="text-primary">Modification de l'employé(e)</h2>

            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}">
            </div>
            @error('name')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $users->prenom }}">
            </div>
            @error('prenom')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror

            <div class="mb-3">
                <label for="email" class="form-label">Prénom</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}">
            </div>
            @error('email')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror

            <div class="mt-3">
                <label for="role" class="form-label">Choix des droits</label>
                <select id="role" class="form-select" aria-label="Default select example" name="role"
                    value="{{ $users->role }}">
                    <option value="employe">Employe</option>
                    <option value="admin">Admin</option>

                </select>
                @error('role')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Modifier</button>
            <a href="/gestionEmploye" class="btn btn-primary mt-4">Retour</a>


        </div>
    </form>
@endsection
