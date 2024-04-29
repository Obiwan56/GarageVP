@extends('squelette')

@section('contenu')
    <form action="" method="post" class="form-group">

        @csrf

        <div class="container p-4">
            <h2 class="text-primary">Ajout d'un ou d'une employé(e)</h2>

            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            @error('name')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom') }}">
            </div>
            @error('prenom')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>
            @error('email')
                <span class="text-danger">
                    {{ $message }}</span>
            @enderror

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
                <button id="togglePassword" class="btn btn-outline" type="button">
                    <i class="bi bi-eye"></i>
                </button>
                @error('password')
                    <span class="text-danger">
                        {{ $message }}</span>
                @enderror


                <div class="mt-3">
                    <label for="role" class="form-label">Choix des droits</label>
                    <select id="role" class="form-select" aria-label="Default select example" name="role" value="{{ old('role') }}">
                        <option value="employe">Employe</option>
                        <option value="admin">Admin</option>

                    </select>
                    @error('role')
                        <span class="text-danger">
                            {{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-4">Ajouter</button>


            </div>
    </form>
@endsection
