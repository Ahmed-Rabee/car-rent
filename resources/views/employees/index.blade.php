@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')

  <div id="employees-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">الموظفين</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="{{ url('/employees/create') }}" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة موظف جديد</a>
      </div>
    </div>

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th width="5%" class="fw-bold">#</th>
              <th class="fw-bold">الاسم</th>
              <th class="fw-bold">الفرع</th>
              <th class="fw-bold">رقم الهاتف</th>
              <th class="fw-bold">تاريخ التعيين</th>
              <th class="fw-bold">المسمي الوظيفي</th>
              <th class="fw-bold">الصلاحيات</th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <a href="{{ url('/employees/{id}/view') }}">423</a>
              </td>
              <td>محمد احمد محمود</td>
              <td>فرع الواحة</td>
              <td>
                <div class="d-flex align-items-center justify-content-start">
                  <a href="tel:96892035086" class="d-flex align-items-center justify-content-center gap-1" dir="ltr">
                    <span class="ti-xs ti ti-phone"></span> +96892035086
                  </a>
                </div><!-- d-flex -->
              </td>
              <td>2024-10-13</td>
              <td>موظف استقبال</td>
              <td>موظف</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/employees/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/employees/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#employeeDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Employee Delete Modal -->
    @include('employees.Modals.delete')
    <!-- Employee Delete Modal -->

  </div><!-- employees-index-page -->

@endsection

@push('scripts')
@endpush
