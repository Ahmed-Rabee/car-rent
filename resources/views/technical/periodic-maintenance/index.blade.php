@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')

  <div id="periodic-maintenance-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">الصيانة الدورية</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="{{ url('/technical/periodic-maintenance/create') }}" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة صيانة دورية جديدة</a>
      </div>
    </div><!-- d-flex -->

    <div class="tabs-area d-flex align-items-center justify-content-start gap-3 flex-wrap mb-4">
      <a href="{{ url('/technical') }}" title="الحالات الفنية" class="btn btn-label-dark waves-effect">الحالات الفنية</a>
      <a href="{{ url('/technical/periodic-maintenance') }}" title="الصيانة الدورية" class="btn btn-primary waves-effect waves-light">الصيانة الدورية</a>
    </div><!-- tabs-area -->

    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card">
          <div class="card-body text-center fw-medium fs-6">
            TB - 3456
          </div><!-- card-body -->
          <div class="card-footer">

          </div><!-- card-footer -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">EF - 4482</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">TB - 3456</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">WA - 6385</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">VD - 7586</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">TB - 3456</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">BV - 7586</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">كيا</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#brandDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
    </div><!-- row -->

  </div><!-- periodic-maintenance-index-page -->

@endsection

@push('scripts')
@endpush
