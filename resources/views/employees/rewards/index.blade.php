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
    </div>

    <div class="d-flex justify-content-end mb-4">
      <button class="btn btn-icon btn-secondary waves-effect waves-light" type="button" data-bs-toggle="collapse" data-bs-target="#rewards-filter-collapse" aria-expanded="false" aria-controls="rewards-filter-collapse"><span class="ti ti-filter"></span></button>
    </div><!-- d-flex -->

    <div class="collapse" id="rewards-filter-collapse">
      <div class="card mb-4">
        <div class="card-body p-3">
          <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
              <div class="form-group">
                <label class="form-label mb-2 fs-6" for="rewards-branch">الفرع</label>
                <select id="rewards-branch" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                  <option></option>
                  <option value="AK">فرع الواحة</option>
                  <option value="HI">فرع السليمانية</option>
                  <option value="HI3">فرع الرياض</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label class="form-label mb-2 fs-6" for="rewards-employee">الموظف</label>
                <select id="employee-name" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                  <option></option>
                  <option value="AK">#1123 | 343434 | محمد احمد</option>
                  <option value="HI">#5790 | 365970 | مصطفي محفوظ</option>
                  <option value="HI1">#2376 | 206872 | زين عبدالله</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label class="form-label mb-2 fs-6" for="rewards-date">التاريخ</label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="ti ti-calendar-month"></i></span>
                  <input type="text" class="form-control employee-month-filter" id="rewards-date" placeholder="YYYY-MM" readonly="readonly" />
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
    </div><!-- cars-filter-collapse -->

    <div class="card">
        <div class="table-responsive text-nowrap">
          <table class="table table-striped table-bordered">
            <thead class="table-light">
              <tr>
                <th width="5%" class="fw-bold p-3">الموظف</th>
                <th class="fw-bold p-3">التفاصيل</th>
                <th width="5%" class="fw-bold p-3">المبلغ</th>
                <th width="5%" class="fw-bold p-3">التاريخ</th>
                <th width="5%" class="p-3"></th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td class="p-3">
                  <a href="{{ url('/employees/{id}/view') }}">احمد محمد محمود</a>
                </td>
                <td class="p-3">إيجاد حلول لمشاكل العملاء وتحسين خدمات العملاء</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    121 <small>ريال</small>
                  </div><!-- d-flex -->
                </td>
                <td class="p-3">2024-11-11</td>
                <td class="p-3">
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
                <td class="p-3">
                  <a href="{{ url('/employees/{id}/view') }}">احمد محمد محمود</a>
                </td>
                <td class="p-3">إيجاد حلول لمشاكل العملاء وتحسين خدمات العملاء</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    121 <small>ريال</small>
                  </div><!-- d-flex -->
                </td>
                <td class="p-3">2024-11-11</td>
                <td class="p-3">
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
                <td class="p-3">
                  <a href="{{ url('/employees/{id}/view') }}">احمد محمد محمود</a>
                </td>
                <td class="p-3">إيجاد حلول لمشاكل العملاء وتحسين خدمات العملاء</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    121 <small>ريال</small>
                  </div><!-- d-flex -->
                </td>
                <td class="p-3">2024-11-11</td>
                <td class="p-3">
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
                <td class="p-3">
                  <a href="{{ url('/employees/{id}/view') }}">احمد محمد محمود</a>
                </td>
                <td class="p-3">إيجاد حلول لمشاكل العملاء وتحسين خدمات العملاء</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    121 <small>ريال</small>
                  </div><!-- d-flex -->
                </td>
                <td class="p-3">2024-11-11</td>
                <td class="p-3">
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
                <td class="p-3">
                  <a href="{{ url('/employees/{id}/view') }}">احمد محمد محمود</a>
                </td>
                <td class="p-3">إيجاد حلول لمشاكل العملاء وتحسين خدمات العملاء</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    121 <small>ريال</small>
                  </div><!-- d-flex -->
                </td>
                <td class="p-3">2024-11-11</td>
                <td class="p-3">
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
                <td class="p-3">
                  <a href="{{ url('/employees/{id}/view') }}">احمد محمد محمود</a>
                </td>
                <td class="p-3">إيجاد حلول لمشاكل العملاء وتحسين خدمات العملاء</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    121 <small>ريال</small>
                  </div><!-- d-flex -->
                </td>
                <td class="p-3">2024-11-11</td>
                <td class="p-3">
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
