@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endpush

@section('content')

  <div id="rewards-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">المكافآت</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#rewardCreateModal" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة مكافآة جديد</a>
      </div>
    </div><!-- d-flex -->

    <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap mb-4">
      <div class="tabs-area d-flex align-items-center justify-content-start gap-3 flex-wrap">
        <a href="{{ url('/employees') }}" title="الموظفين" class="btn btn-label-dark waves-effect">الموظفين</a>
        <a href="{{ url('/employees/penalties') }}" title="الخصومات" class="btn btn-label-dark waves-effect">الخصومات</a>
        <a href="{{ url('/employees/advances') }}" title="السَّلَفُ" class="btn btn-label-dark waves-effect">السَّلَفُ</a>
        <a href="{{ url('/employees/rewards') }}" title="المكافآت" class="btn btn-primary waves-effect waves-light">المكافآت</a>
      </div><!-- tabs-area -->
      <div class="d-flex justify-content-end">
        <button class="btn btn-icon btn-secondary waves-effect waves-light" type="button" data-bs-toggle="collapse" data-bs-target="#rewards-filter-collapse" aria-expanded="false" aria-controls="rewards-filter-collapse"><span class="ti ti-filter"></span></button>
      </div><!-- d-flex -->
    </div><!-- d-flex -->

    <div class="collapse" id="rewards-filter-collapse">
      <div class="card mb-4">
        <div class="card-body p-3">
          <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
              <div class="form-group">
                <label class="form-label mb-2 fs-6" for="rewards-employee-name">اسم الموظف</label>
                <input type="text" class="form-control" id="employee-name" />
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label class="form-label mb-2 fs-6" for="rewards-date">التاريخ</label>
                <input type="date" class="form-control flatpickr-date" id="rewards-date" placeholder="YYYY-MM-DD" readonly="readonly" />
              </div><!-- form-group -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card-body -->
        <div class="card-footer d-flex justify-content-end gap-2 flex-wrap p-3 pt-0">
          <button type="submit" class="btn btn-label-primary waves-effect px-5">بحث</button>
          <button type="reset" class="btn btn-icon btn-label-secondary waves-effect"><span class="ti ti-refresh"></span></button>
        </div><!-- card-footer -->
      </div><!-- card -->
    </div><!-- rewards-filter-collapse -->

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th width="5%" class="fw-bold">الموظف</th>
              <th class="fw-bold">التفاصيل</th>
              <th width="5%" class="fw-bold">المبلغ</th>
              <th width="5%" class="fw-bold">التاريخ</th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <a href="{{ url('/employees/{id}/view') }}">احمد محمد محمود</a>
              </td>
              <td>التحدث مع العميل بشكل لائق</td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">
                  121 <small>ريال</small>
                </div><!-- d-flex -->
              </td>
              <td>
                2024-11-11
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#rewardEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#rewardDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/employees/{id}/view') }}">احمد محمد محمود</a>
              </td>
              <td>التحدث مع العميل بشكل لائق</td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">
                  121 <small>ريال</small>
                </div><!-- d-flex -->
              </td>
              <td>
                2024-11-11
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#rewardEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#rewardDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/employees/{id}/view') }}">احمد محمد محمود</a>
              </td>
              <td>التحدث مع العميل بشكل لائق</td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">
                  121 <small>ريال</small>
                </div><!-- d-flex -->
              </td>
              <td>
                2024-11-11
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#rewardEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#rewardDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/employees/{id}/view') }}">احمد محمد محمود</a>
              </td>
              <td>التحدث مع العميل بشكل لائق</td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">
                  121 <small>ريال</small>
                </div><!-- d-flex -->
              </td>
              <td>
                2024-11-11
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#rewardEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#rewardDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Reward Create Modal -->
    @include('employees.Modals.Rewards.create')
    <!-- Reward Create Modal -->

    <!-- Penalty Edit Modal -->
    @include('employees.Modals.Rewards.edit')
    <!-- Reward Edit Modal -->

    <!-- Reward Delete Modal -->
    @include('employees.Modals.Rewards.delete')
    <!-- Reward Delete Modal -->

  </div><!-- rewards-index-page -->

@endsection

@push('scripts')
<script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr-month/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr-month/month-select.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr-month/ar.js') }}"></script>
  <script type="module">
    // --------------------------------------------------------------------
    // Flat Picker
    // --------------------------------------------------------------------
    $(".flatpickr-date").flatpickr({
      monthSelectorType: 'static'
    });
    const currentDate = new Date();
    const options = { month: 'long', year: 'numeric' };
    const currentMonthName = currentDate.toLocaleDateString('ar', options); // Arabic formatting
    flatpickr(".employee-month-filter", {
      locale: "ar", // Set locale to Arabic
      defaultDate: currentDate, // Use the current date as the default
      plugins: [
        new monthSelectPlugin({
          shorthand: false, // Use full month names in Arabic
          dateFormat: "F - Y", // Backend format (e.g., "نوفمبر 2024")
          altFormat: "F - Y", // User-friendly format (e.g., "نوفمبر 2024")
        }),
      ],
    });

    // --------------------------------------------------------------------
    // Select2
    // --------------------------------------------------------------------
    $(".select2").select2();
  </script>
@endpush
