@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')
  <div id="vehicle-expenses-index-page">

    <h4 class=" mb-3">مصروفات المركبات</h4>

    <div class="tabs-area d-flex align-items-center justify-content-start gap-3 flex-wrap mb-3">
      <div class="btn btn-primary waves-effect waves-light">مصروفات المركبات</div>
      <a href="{{ url('/calculations/vehicle-expenses/categories') }}" class="btn btn-label-dark waves-effect">أقسام مصروفات المركبات</a>
    </div><!-- tabs-area -->

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-3">
      <a href="{{ url('/calculations') }}" class="btn btn-icon bg-white text-body waves-effect waves-light"><span class="ti ti-chevron-right"></span></a>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="{{ url('/calculations/vehicle-expenses/create') }}" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة مصروف مركبة جديد</a>
      </div><!-- d-flex -->
    </div><!-- d-flex -->

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th class="fw-bold">الوصف</th>
              <th class="fw-bold">المركبة</th>
              <th class="fw-bold">القسم</th>
              <th class="fw-bold">الفرع</th>
              <th class="fw-bold">المبلغ</th>
              <th class="fw-bold">مبلغ الضريبة</th>
              <th class="fw-bold">المبلغ شامل الضريبة</th>
              <th class="fw-bold">تاريخ الصرف</th>
              <th class="fw-bold">تاريخ الإضافة</th>
              <th width="5%"></th>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <a href="{{ url('/calculations/vehicle-expenses/{id}/view') }}">تغيير جنوط</a>
              </td>
              <td>TB - 3456</td>
              <td>بيع</td>
              <td>فرع الواحة</td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">
                  2334 <small>ريال</small>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">
                  2334 <small>ريال</small>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">
                  2334 <small>ريال</small>
                </div><!-- d-flex -->
              </td>
              <td>2024-10-13</td>
              <td>2024-10-13</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/calculations/vehicle-expenses/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/calculations/vehicle-expenses/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#vehicleExpensesDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Vehicle Expenses Delete Modal -->
    <div class="modal fade" id="vehicleExpensesDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="vehicleExpensesDeleteModalLabel1">حذف مصروف مركبة : تغيير جنوط</h5>
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف مصروف مركبة ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Vehicle Expenses Delete Modal -->

  </div><!-- vehicle-expenses-index-page -->
@endsection

@push('scripts')
@endpush
