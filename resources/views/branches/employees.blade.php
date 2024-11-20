@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')

  <div id="branches-statistics-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">فرع الواحة</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="{{ url('/branches/{id}/edit') }}" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#branchDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div>

    <div class="tabs-area d-flex align-items-center justify-content-start gap-3 flex-wrap mb-4">
      <a href="{{ url('/branches/{id}/view') }}" title="تفاصيل الفرع" class="btn">تفاصيل الفرع</a>
      <a href="{{ url('/branches/{id}/statistics') }}" title="إحصائيات الفرع" class="btn">إحصائيات الفرع</a>
      <a href="{{ url('/branches/{id}/employees') }}" title="موظفي الفرع" class="btn btn-primary waves-effect waves-light">موظفي الفرع</a>
    </div><!-- tabs-area -->

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th width="5%" class="fw-bold">#</th>
              <th class="fw-bold">اسم الموظف</th>
              <th class="fw-bold">رقم الهاتف</th>
              <th class="fw-bold">تاريخ التعيين</th>
              <th class="fw-bold">المسمي الوظيفي</th>
              <th class="fw-bold">الراتب</th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <a href="{{ url('/employees/{id}/view') }}">423</a>
              </td>
              <td>محمد احمد محمود</td>
              <td>
                <div class="d-flex align-items-center justify-content-start">
                  <a href="tel:96892035086" class="d-flex align-items-center justify-content-center gap-1" dir="ltr">
                    <span class="ti-xs ti ti-phone"></span> +96892035086
                  </a>
                </div><!-- d-flex -->
              </td>
              <td>2024-10-13</td>
              <td>موظف استقبال</td>
              <td>
                <span class="d-flex align-items-center justify-content-start gap-1">1421 <small>ريال</small></span>
              </td>
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

    <!-- Branch Delete Modal -->
    @include('branches.Modals.delete')
    <!-- Branch Delete Modal -->

     <!-- Employee Delete Modal -->
    @include('employees.Modals.delete')
    <!-- Employee Delete Modal -->

  </div><!-- branches-statistics-page -->

@endsection

@push('scripts')
@endpush
