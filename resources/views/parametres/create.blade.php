@extends('layouts.template')
@section('page_title', 'ECOM | Add Category')
@section('category', 'active')
@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="#!">Pages</a></li>
      <li class="breadcrumb-item active">Paramètres</li>
    </ol>
</nav>
<h2 class="mb-2 lh-sm">Paramètre</h2>
          <p class="text-700 lead mb-2">Création de nouveau paramètre.</p>
          <div class="mt-4">
            <div class="row g-4">
              <div class="col-12 col-xl-10 order-1 order-xl-0">

                <div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-900 mb-0">Ajouter un nouveau paramètre</h4>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">

                    <div class="p-4 code-to-copy">
                        <form class="g-3" action="{{ route('parametres.store') }}" method="POST" novalidate="">
                            @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="parent_id">Parent</label>
                          <div class="col-sm-10">
                            <select class="form-select" id="parent_id" name="parent_id" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Selectionner un paramètre ...</option>
                                @foreach($parametres as $parametre)
                                    <option value="{{ $parametre->id }}">{{ $parametre->libelle }}</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="nom_parametre">Libellé</label>
                          <div class="col-sm-10">
                            <input class="form-control @error('nom_parametre') is-invalid @enderror" id="nom_parametre" name="nom_parametre" type="text" placeholder="Nom du paramètre" value="{{ old('nom_parametre') }}" />
                            @error('nom_parametre')
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
