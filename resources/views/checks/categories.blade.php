@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')

  <div id="checks-categories-page">

  <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-3">
      <h4 class="m-0 flex-grow-1">الجهات</h4>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <button type="button" data-bs-toggle="modal" data-bs-target="#partiesCreateModal" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة جهة جديدة</button>
      </div><!-- d-flex -->
    </div><!-- d-flex -->

    <div class="tabs-area d-flex align-items-center justify-content-start gap-3 flex-wrap mb-3">
      <a href="{{ url('/checks') }}" class="btn btn-label-dark waves-effect">إدارة الشيكات</a>
      <div class="btn btn-primary waves-effect waves-light">الجهات</div>
    </div><!-- tabs-area -->

    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">وكالة الامانة</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#partiesEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#partiesDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">معرض الإخلاص</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#partiesEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#partiesDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
    </div><!-- row -->

    <!-- Parties Create Modal -->
    <div class="modal fade" id="partiesCreateModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="partiesCreateModalLabel1">إضافة جهة جديدة</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="department-name">اسم الجهة</label>
              <div class="col-12 col-sm-9">
                <input type="text" class="form-control" id="department-name" />
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-primary px-5 m-0">حفظ</button>
          </div><!-- modal-footer -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <!-- Parties Create Modal -->

    <!-- Parties Edit Modal -->
    <div class="modal fade" id="partiesEditModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="partiesEditModalLabel1">تعديل جهة : وكالة الامانة</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="department-name">اسم الجهة</label>
              <div class="col-12 col-sm-9">
                <input type="text" class="form-control" id="department-name" value="وكالة الامانة" />
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-primary px-5 m-0">حفظ</button>
          </div><!-- modal-footer -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <!-- Parties Edit Modal -->

    <!-- Parties Delete Modal -->
    <div class="modal fade" id="partiesDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body">
            <div class="top-area d-flex align-items-center justify-content-center gap-3 flex-column">
              <div class="swal2-icon swal2-error swal2-icon-show d-flex m-0">
                <span class="swal2-x-mark">
                  <span class="swal2-x-mark-line-left"></span>
                  <span class="swal2-x-mark-line-right"></span>
                </span>
              </div><!-- swal2-icon -->
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف الجهة ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <!-- Parties Delete Modal -->

  </div><!-- contracts-index-page -->

@endsection

@push('scripts')
@endpush
