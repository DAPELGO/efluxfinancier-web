@extends('layouts.template')
@section('page_title', 'ECOM | Add Category')
@section('user', 'active')
@section('content')
<div class="mt-6 shadow-lg p-4">
    <h3 class="mt-4">Utilisateurs</h3>
    <p class="text-700">Création de nouveau utilisateur</p>
    <hr>
    <div class="row g-4">
        <div class="col-12 col-xl-8 order-1 order-xl-0">
        <div data-component-card="data-component-card">
            <div class="p-0">
                <form class="g-3 border p-4 rounded-2" action="{{ route('users.store') }}" method="POST" novalidate="">
                    @csrf
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label col-form-label-sm" for="id_typestructure">Type Structure</label>
                    <div class="col-sm-8">
                        <select class="form-select" id="id_typestructure" name="id_typestructure" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}' onchange="changeValue('id_typestructure', 'structure_id', 'structure');">
                            <option value="">Selectionner un type de structure ...</option>
                            @foreach($valeurs as $valeur)
                                <option value="{{ $valeur->id }}">{{ $valeur->libelle }}</option>
                            @endforeach
                        </select>
                    @error('id_typestructure')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label col-form-label-sm" for="structure_id">Structure</label>
                    <div class="col-sm-8">
                        <select class="form-select" id="structure_id" name="structure_id">
                            <option value="">Selectionner une structure ...</option>
                            </select>
                    @error('structure_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label col-form-label-sm" for="name">Nom & Prénom</label>
                    <div class="col-sm-8">
                    <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Nom du utilisateur" value="{{ old('name') }}" />
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label col-form-label-sm" for="email">Email</label>
                    <div class="col-sm-8">
                    <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="text" placeholder="email@user.com" value="{{ old('email') }}" />
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label col-form-label-sm" for="password">Mot de passe</label>
                    <div class="col-sm-8">
                    <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="*******" value="{{ old('password') }}" />
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label col-form-label-sm" for="password_confirmation">Confirmation</label>
                    <div class="col-sm-8">
                    <input class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" type="password" placeholder="******" value="{{ old('password_confirmation') }}" />
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="statut">Statut</label>
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" id="statut" name="statut" type="checkbox" value="1" />
                            <label class="form-check-label" for="statut">Actif ?</label>
                        </div>
                        @error('statut')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="nom_role">Rôle</label>
                    <div class="col-sm-8">
                        @foreach ($roles as $role )
                            <div class="form-check">
                                <input class="form-check-input" id="{{ $role->id }}" name="role[]" type="checkbox" value="{{ $role->id }}" />
                                <label class="form-check-label" for="{{ $role->id }}">{{ $role->nom_role }}</label>
                            </div>
                            @endforeach
                        @error('nom_role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <hr>
                <button class="btn btn-primary btn-sm" type="submit">Enregistrer</button>
                <a class="btn btn-outline-primary btn-sm" href="{{ route('users.index') }}">Fermer</a>
                </form>
            </div>
        </div>
        </div>

    </div>
    </div>
</div>
@endsection
