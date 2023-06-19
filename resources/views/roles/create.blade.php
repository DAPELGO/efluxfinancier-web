@extends('layouts.template')
@section('page_title', 'ECOM | Add Category')
@section('category', 'active')
@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="#!">Pages</a></li>
      <li class="breadcrumb-item active">roles</li>
    </ol>
</nav>
<h2 class="mb-2 lh-sm">role</h2>
    <p class="text-700 lead mb-2">Création de nouvelle role de paramètre</p>
    <div class="mt-4">
    <div class="row g-4">
        <div class="col-12 col-xl-10 order-1 order-xl-0">

        <div class="card shadow-none border border-300" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom border-300 bg-soft">
            <div class="row g-3 justify-content-between align-items-center">
                <div class="col-12 col-md">
                <h4 class="text-900 mb-0">Ajouter une nouvelle role</h4>
                </div>
            </div>
            </div>
            <div class="card-body p-0">

            <div class="p-4 code-to-copy">
                <form class="g-3" action="{{ route('roles.store') }}" method="POST" novalidate="">
                    @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="nom_role">Libellé</label>
                    <div class="col-sm-10">
                    <input class="form-control @error('nom_role') is-invalid @enderror" id="nom_role" name="nom_role" type="text" placeholder="Nom du role" value="{{ old('nom_role') }}" />
                    @error('nom_role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="nom_role">Permission</label>
                    <div class="col-sm-10">
                        <div class="row">
                            @foreach ($permissions as $permission )
                            <div class="col-lg-6">
                                <div class="form-check">
                                    <input class="form-check-input" id="{{ $permission->id }}" name="permission[]" type="checkbox" value="{{ $permission->id }}" />
                                    <label class="form-check-label" for="{{ $permission->id }}">{{ $permission->nom_permission }}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        @error('nom_role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                <button class="btn btn-primary" type="submit">Enregistrer</button>
                </form>
            </div>
            </div>
        </div>
        </div>

    </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
    <div class="toast align-items-center text-white bg-dark border-0 light" id="icon-copied-toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
        <div class="toast-body p-3"></div>
        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    </div>
@endsection
