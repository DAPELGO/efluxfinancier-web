@extends('layouts.template')
@section('page_title', 'ECOM | All parametre')
@section('setting', 'active')
@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ route('app.home') }}">Page</a></li>
      <li class="breadcrumb-item active">Paramètres</li>
    </ol>
  </nav>
  <div id="categories" data-list='{"valueNames":["id","parametre_name","subparametre_count","product_count","last_active","slug"],"page":10,"pagination":true}'>
    <div class="row align-items-center justify-content-between g-3 mb-4">
      <div class="col col-auto">
        <div class="search-box">
          <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
            <input class="form-control search-input search" type="search" placeholder="Rechercher un paramètre" aria-label="Search" />
            <span class="fas fa-search search-box-icon"></span>

          </form>
        </div>
      </div>
      <div class="col-auto">
        <div class="d-flex align-items-center">
          <button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button>
          <a href="{{ route('parametres.create') }}" class="btn btn-outline-primary btn-sm"><span class="fas fa-plus me-2"></span>Ajouter un paramètre</a>
        </div>
      </div>
    </div>
    <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
      <div class="table-responsive scrollbar ms-n1 ps-1">
        <table class="table table-sm fs--1 mb-0">
          <thead>
            <tr>
              <th class="white-space-nowrap fs--1 align-middle ps-0">
                <div class="form-check mb-0 fs-0">
                  <input class="form-check-input" id="checkbox-bulk-categories-select" type="checkbox" data-bulk-select='{"body":"categories-table-body"}' />
                </div>
              </th>
              <th class="sort align-middle" scope="col" data-sort="id" style="min-width:10px;">ID</th>
              <th class="sort align-middle" scope="col" data-sort="parametre_name" style="min-width:200px;">PARAMÈTRE</th>
              <th class="sort align-middle" scope="col" data-sort="last_active" style="min-width:200px;">ACTIONS</th>
            </tr>
          </thead>
          <tbody class="list" id="categories-table-body">
            @foreach($parametres as $parametre)
            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
              <td class="fs--1 align-middle ps-0 py-3">
                <div class="form-check mb-0 fs-0">
                    <input class="form-check-input" type="checkbox" name="parametre[]" id="{{ $parametre->id }}" data-bulk-select-row='{}' />
                </div>
              </td>
              <td class="id align-middle white-space-nowrap">{{ $parametre->id }}</td>
              <td class="parametre_name align-middle white-space-nowrap align-center"><a class="fw-semi-bold" href="{{ route('parametres.edit', $parametre->id) }}">{{ $parametre->libelle }}</a></td>
              <td class="last_active align-middle white-space-nowrap text-700">
                <a href="{{ route('parametres.edit', $parametre->id) }}" class="btn btn-soft-primary btn-sm btn-actions"><span class="text-900 fs-3" data-feather="edit"></span></a>
                <a href="{{ route('parametres.show', $parametre->id) }}" class="btn btn-soft-danger btn-sm btn-actions"><span class="text-900 fs-3" data-feather="trash-2"></span></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
        <div class="col-auto d-flex">
          <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
        </div>
        <div class="col-auto d-flex">
          <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
          <ul class="mb-0 pagination"></ul>
          <button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
        </div>
      </div>
    </div>
  </div>
@endsection
