@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')
  <div id="vehicle-expenses-category-page">

    <h4 class="mb-3">أقسام مصروفات المركبات</h4>

    <div class="tabs-area d-flex align-items-center justify-content-start gap-3 flex-wrap mb-3">
      <a href="{{ url('/calculations/vehicle-expenses') }}" class="btn btn-label-dark waves-effect">مصروفات المركبات</a>
      <div class="btn btn-primary waves-effect waves-light">أقسام مصروفات المركبات</div>
    </div><!-- tabs-area -->

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-3">
      <a href="{{ url('/calculations') }}" class="btn btn-icon bg-white text-body waves-effect waves-light"><span class="ti ti-chevron-right"></span></a>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#vehicleExpensesCategoryCreateModal" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة قسم مصروفات مركبات جديد</a>
      </div><!-- d-flex -->
    </div><!-- d-flex -->

    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">مصروفات مرور</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#vehicleExpensesCategoryEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#vehicleExpensesCategoryDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3 d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <span class="d-block flex-grow-1 fs-6 fw-medium">مصروفات صيانة</span>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#vehicleExpensesCategoryEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#vehicleExpensesCategoryDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
    </div><!-- row -->

    <!-- vehicle Expenses Category Create Modal -->
    <div class="modal fade" id="vehicleExpensesCategoryCreateModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="vehicleExpensesCategoryCreateModalLabel1">إضافة قسم مصروفات مركبة جديد</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="department-name">اسم القسم</label>
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
    <!-- vehicle Expenses Category Create Modal -->

    <!-- vehicle Expenses Category Edit Modal -->
    <div class="modal fade" id="vehicleExpensesCategoryEditModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="vehicleExpensesCategoryEditModalLabel1">تعديل قسم : مصروفات مرور</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="department-name">اسم القسم</label>
              <div class="col-12 col-sm-9">
                <input type="text" class="form-control" id="department-name" value="مصروفات مرور" />
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
    <!-- vehicle Expenses Category Edit Modal -->

    <!-- vehicle Expenses Category Delete Modal -->
    <div class="modal fade" id="vehicleExpensesCategoryDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="vehicleExpensesCategoryDeleteModalLabel1">حذف قسم : مصروفات مرور</h5>
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف القسم ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <!-- vehicle Expenses Category Delete Modal -->

  </div><!-- vehicle-expenses-Category-page -->

@endsection

@push('scripts')
@endpush
