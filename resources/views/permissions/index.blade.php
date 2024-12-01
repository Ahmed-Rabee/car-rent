@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')

  <div id="permissions-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">إدارة الصلاحيات</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="{{ url('/permissions/create') }}" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة دور جديد</a>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">المدير العام</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#permissionDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div>
            </div>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">المدير العام</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#permissionDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div>
            </div>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">المدير العام</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#permissionDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div>
            </div>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">المدير العام</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#permissionDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div>
            </div>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">المدير العام</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#permissionDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div>
            </div>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">المدير العام</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#permissionDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div>
            </div>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">المدير العام</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#permissionDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div>
            </div>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">المدير العام</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                <a class="dropdown-item waves-effect" href="{{ url('/permissions/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#permissionDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div>
            </div>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
    </div><!-- row -->

    <!-- Permission Delete Modal -->
    <div class="modal fade" id="permissionDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="epermissionDeleteModalLabel1">حذف دور : المدير العام</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="top-area d-flex align-items-center justify-content-center gap-4 flex-column">
              <div class="swal2-icon swal2-error swal2-icon-show d-flex m-0">
                <span class="swal2-x-mark">
                  <span class="swal2-x-mark-line-left"></span>
                  <span class="swal2-x-mark-line-right"></span>
                </span>
              </div><!-- swal2-icon -->
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف الدور ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Permission Delete Modal -->

  </div><!-- permissions-index-page -->

@endsection

@push('scripts')
@endpush
