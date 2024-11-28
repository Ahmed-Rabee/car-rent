@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
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
    </div><!-- d-flex -->

    <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap mb-4">
      <div class="tabs-area d-flex align-items-center justify-content-start gap-3 flex-wrap">
        <a href="{{ url('/employees') }}" title="الموظفين" class="btn btn-primary waves-effect waves-light">الموظفين</a>
        <a href="{{ url('/employees/penalties') }}" title="الخصومات" class="btn btn-label-dark waves-effect">الخصومات</a>
        <a href="{{ url('/employees/advances') }}" title="السَّلَفُ" class="btn btn-label-dark waves-effect">السَّلَفُ</a>
        <a href="{{ url('/employees/rewards') }}" title="المكافآت" class="btn btn-label-dark waves-effect">المكافآت</a>
      </div><!-- tabs-area -->
      <div class="d-flex justify-content-end">
        <button class="btn btn-icon btn-secondary waves-effect waves-light" type="button" data-bs-toggle="collapse" data-bs-target="#employees-filter-collapse" aria-expanded="false" aria-controls="employees-filter-collapse"><span class="ti ti-filter"></span></button>
      </div><!-- d-flex -->
    </div><!-- d-flex -->

    <div class="collapse" id="employees-filter-collapse">
      <div class="card mb-4">
        <div class="card-body p-3">
          <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
              <div class="form-group">
                <label class="form-label mb-2 fs-6" for="employee-branch">الفرع</label>
                <select id="employee-branch" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                  <option></option>
                  <option value="ae">فرع الواحة</option>
                  <option value="df">فرع جدة</option>
                  <option value="cv">فرع الرياض</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label class="form-label mb-2 fs-6" for="employee-name">الاسم</label>
                <input type="text" class="form-control" id="employee-name" />
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label class="form-label mb-2 fs-6" for="employee-mobile">رقم الهاتف</label>
                <div class="input-group">
                  <input type="tel" inputmode="numeric" id="employee-mobile" dir="ltr" class="form-control" />
                  <span class="input-group-text" dir="ltr">+966</span>
                </div><!-- input-group -->
              </div><!-- form-group -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card-body -->
        <div class="card-footer d-flex justify-content-end gap-2 flex-wrap p-3 pt-0">
          <button type="submit" class="btn btn-label-primary waves-effect px-5">بحث</button>
          <button type="reset" class="btn btn-icon btn-label-secondary waves-effect"><span class="ti ti-refresh"></span></button>
        </div><!-- card-footer -->
      </div><!-- card -->
    </div><!-- employees-filter-collapse -->

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
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
                <a href="{{ url('/employees/{id}/view') }}">محمد احمد محمود</a>
              </td>
              <td>فرع الواحة</td>
              <td>
                <div class="d-flex align-items-center justify-content-start">
                  <a href="tel:96892035086" dir="ltr">+96892035086</a>
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
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script type="text/javascript">
    // --------------------------------------------------------------------
    // Select2
    // --------------------------------------------------------------------
    $(document).ready(function() {
      $('.select2').select2();
    });
  </script>
@endpush
