@extends('layouts.template')
@section('page_title', 'ECOM | Add Category')
@section('structure', 'active')
@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="#!">Pages</a></li>
      <li class="breadcrumb-item active">Structures</li>
    </ol>
</nav>
<h2 class="mb-2 lh-sm">Structure</h2>
          <p class="text-700 lead mb-2">Création de nouvelle structure.</p>
          <div class="mt-4">
            <div class="row g-4">
              <div class="col-12 col-xl-10 order-1 order-xl-0">

                <div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="text-900 mb-0">Ajouter une nouvelle structure</h4>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">

                    <div class="p-4 code-to-copy">
                      <form class="g-3" action="{{ route('structures.store') }}" method="POST" novalidate="">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label" for="parent_id">Type Structure</label>
                            <div class="col-sm-8">
                                <select class="form-select" id="parent_id" name="parent_id" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}'>
                                    <option value="">Selectionner une structure ...</option>
                                    @foreach($structures as $structure)
                                        <option value="{{ $structure->id }}">{{ $structure->nom_structure }}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="parent_id">Structure Parente</label>
                          <div class="col-sm-8">
                            <select class="form-select" id="parent_id" name="parent_id" data-choices="data-choices" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Selectionner une structure ...</option>
                                @foreach($structures as $structure)
                                    <option value="{{ $structure->id }}">{{ $structure->nom_structure }}</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-4 col-form-label" for="nom_structure">Libellé</label>
                          <div class="col-sm-8">
                            <input class="form-control @error('nom_structure') is-invalid @enderror" id="nom_structure" name="nom_structure" type="text" placeholder="Nom de structure" value="{{ old('nom_structure') }}" />
                            @error('nom_structure')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label" for="description_structure">Description</label>
                            <div class="col-sm-8">
                            <textarea class="form-control  @error('description_structure') is-invalid @enderror" id="description_structure" name="description_structure" rows="3" placeholder="Description de structure">{{ old('description_structure') }}</textarea>
                            @error('description_structure')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>
                          </div>
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                        <a href="{{ route('structures.index') }}" class="btn btn-outline-primary" type="submit">Annuler</a>
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
