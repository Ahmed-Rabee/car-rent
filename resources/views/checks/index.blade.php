@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endpush

@section('content')
  <div id="checks-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-3">
      <h4 class="m-0 flex-grow-1">إدارة الشيكات</h4>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <button type="button" data-bs-toggle="modal" data-bs-target="#checkCreateModal" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة شيك جديد</button>
      </div><!-- d-flex -->
    </div><!-- d-flex -->

    <div class="tabs-area d-flex align-items-center justify-content-start gap-3 flex-wrap mb-3">
      <div class="btn btn-primary waves-effect waves-light">إدارة الشيكات</div>
      <a href="{{ url('/checks/categories') }}" class="btn btn-label-dark waves-effect">الجهات</a>
    </div><!-- tabs-area -->

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th class="fw-bold">قيمة الشيك</th>
              <th class="fw-bold">الجهة المستحقة</th>
              <th class="fw-bold">تاريخ الإستحقاق</th>
              <th class="fw-bold">الحالة</th>
              <th width="5%"></th>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">
                  2334 <small>ريال</small>
                </div><!-- d-flex -->
              </td>
              <td>وكالة الامانة</td>
              <td>2024-10-13</td>
              <td><span class="badge bg-label-success">مدفوع</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#checkEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#checkDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">
                  2334 <small>ريال</small>
                </div><!-- d-flex -->
              </td>
              <td>وكالة الامانة</td>
              <td>2024-10-13</td>
              <td><span class="badge bg-label-warning">مديونية</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#checkEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#checkDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Check Create Modal -->
    <div class="modal fade" id="checkCreateModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="checkCreateModalLabel1">إضافة شيك جديدة</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label fw-medium" for="create-check-amount">قيمة الشيك</label>
              <div class="col-12 col-sm-8">
                <div class="input-group">
                  <input type="number" inputmode="numeric" class="form-control" id="create-check-amount">
                  <span class="input-group-text">ريال</span>
                </div><!-- input-group -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3" />
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label fw-medium" for="create-check-category">الجهة المستحقة</label>
              <div class="col-12 col-sm-8">
                <select id="create-check-category" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر" data-dropdown-parent="#checkCreateModal">
                  <option></option>
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3" />
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label fw-medium" for="create-check-date">تاريخ الإستحقاق</label>
              <div class="col-12 col-sm-8">
                <input type="text" class="form-control flatpickr-date" id="create-check-date" placeholder="YYYY-MM-DD" />
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3" />
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label fw-medium" for="create-check-status">الحالة</label>
              <div class="col-12 col-sm-8">
                <select id="create-check-status" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر" data-dropdown-parent="#checkCreateModal">
                  <option></option>
                  <option value="AK">مدفوع</option>
                  <option value="HI">مديونية</option>
                </select>
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
    <!-- Check Create Modal -->

    <!-- Check Edit Modal -->
    <div class="modal fade" id="checkEditModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="checkEditModalLabel1">تعديل شيك : 323 ريال</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label fw-medium" for="edit-check-amount">قيمة الشيك</label>
              <div class="col-12 col-sm-8">
                <div class="input-group">
                  <input type="number" inputmode="numeric" class="form-control" id="edit-check-amount">
                  <span class="input-group-text">ريال</span>
                </div><!-- input-group -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3" />
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label fw-medium" for="edit-check-category">الجهة المستحقة</label>
              <div class="col-12 col-sm-8">
                <select id="edit-check-category" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر" data-dropdown-parent="#checkEditModal">
                  <option></option>
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3" />
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label fw-medium" for="edit-check-date">تاريخ الإستحقاق</label>
              <div class="col-12 col-sm-8">
                <input type="text" class="form-control flatpickr-date" id="edit-check-date" placeholder="YYYY-MM-DD" />
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3" />
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label fw-medium" for="edit-check-status">الحالة</label>
              <div class="col-12 col-sm-8">
                <select id="edit-check-status" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر" data-dropdown-parent="#checkEditModal">
                  <option></option>
                  <option value="AK">مدفوع</option>
                  <option value="HI">مديونية</option>
                </select>
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
    <!-- Check Edit Modal -->

    <!-- Check Delete Modal -->
    <div class="modal fade" id="checkDeleteModal" tabindex="-1" aria-hidden="true">
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف الشيك ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Check Delete Modal -->

  </div><!-- check-index-page -->
@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script type="module">
    $(".select2").select2();

    $(document).ready(function() {
      $(".flatpickr-date").flatpickr({
        monthSelectorType: 'static'
      });
    });
  </script>
@endpush
