@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endpush

@section('content')

  <div id="penalties-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">الجزاءات</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#penaltyCreateModal" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة جزاء جديد</a>
      </div>
    </div>

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
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
              <td>
                التحدث مع العميل بشكل غير لائق
              </td>
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
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#penaltyEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#penaltyDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/employees/{id}/view') }}">احمد محمد محمود</a>
              </td>
              <td>
                التحدث مع العميل بشكل غير لائق
              </td>
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
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#penaltyEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#penaltyDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/employees/{id}/view') }}">احمد محمد محمود</a>
              </td>
              <td>
                التحدث مع العميل بشكل غير لائق
              </td>
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
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#penaltyEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#penaltyDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/employees/{id}/view') }}">احمد محمد محمود</a>
              </td>
              <td>
                التحدث مع العميل بشكل غير لائق
              </td>
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
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#penaltyEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#penaltyDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Penalty Create Modal -->
    <div class="modal fade" id="penaltyCreateModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="penaltyCreateModalLabel1">إضافة جزاء جديد</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="employee-name-1">الموظف</label>
              <div class="col-12 col-sm-9">
                <select id="employee-name-1" class="select2 form-select" data-allow-clear="false" data-placeholder="" data-dropdown-parent="#penaltyCreateModal">
                  <option></option>
                  <option value="AK">احمد محمود</option>
                  <option value="HI">مصطفي محمد</option>
                  <option value="ew">عبدالرحمن عمر</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-start">
              <label class="col-sm-3 col-form-label fw-medium" for="employee-penalty-details">التفاصيل</label>
              <div class="col-12 col-sm-9">
                <textarea class="form-control p-2" id="employee-penalty-details" rows="3"></textarea>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="employee-penalty-amount">المبلغ</label>
              <div class="col-12 col-sm-9">
                <div class="input-group">
                  <input type="number" inputmode="numeric" class="form-control" id="employee-penalty-amount" />
                  <span class="input-group-text">ريال</span>
                </div><!-- input-group -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="employee-penalty-date">التاريخ</label>
              <div class="col-12 col-sm-9">
                <input type="date" class="form-control flatpickr-date" id="employee-penalty-date" placeholder="YYYY-MM-DD" readonly="readonly" />
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-primary px-5 m-0">حفظ</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Penalty Create Modal -->

    <!-- Penalty Edit Modal -->
    <div class="modal fade" id="penaltyEditModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="penaltyEditModalLabel1">تعديل جزاء : احمد محمد محمود</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="employee-name-2">الموظف</label>
              <div class="col-12 col-sm-9">
                <select id="employee-name-2" class="select2 form-select" data-allow-clear="false" data-placeholder="" data-dropdown-parent="#penaltyEditModal">
                  <option></option>
                  <option value="AK">احمد محمود</option>
                  <option value="HI">مصطفي محمد</option>
                  <option value="ew">عبدالرحمن عمر</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-start">
              <label class="col-sm-3 col-form-label fw-medium" for="employee-penalty-details">التفاصيل</label>
              <div class="col-12 col-sm-9">
                <textarea class="form-control p-2" id="employee-penalty-details" rows="3"></textarea>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="employee-penalty-amount">المبلغ</label>
              <div class="col-12 col-sm-9">
                <div class="input-group">
                  <input type="number" inputmode="numeric" class="form-control" id="employee-penalty-amount" />
                  <span class="input-group-text">ريال</span>
                </div><!-- input-group -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="employee-penalty-date">التاريخ</label>
              <div class="col-12 col-sm-9">
                <input type="date" class="form-control flatpickr-date" id="employee-penalty-date" placeholder="YYYY-MM-DD" readonly="readonly" />
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-primary px-5 m-0">حفظ</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Penalty Edit Modal -->

    <!-- Penalty Delete Modal -->
    <div class="modal fade" id="penaltyDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="penaltyDeleteModalLabel1">حذف جزاء : احمد محمد محمود</h5>
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف الجزاء ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Penalty Delete Modal -->

  </div><!-- brands-index-page -->

@endsection

@push('scripts')
<script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script type="module">
    // --------------------------------------------------------------------
    // Flat Picker
    // --------------------------------------------------------------------
    $(".flatpickr-date").flatpickr({
      monthSelectorType: 'static'
    });

    // --------------------------------------------------------------------
    // Select2
    // --------------------------------------------------------------------
    $(".select2").select2();
  </script>
@endpush
