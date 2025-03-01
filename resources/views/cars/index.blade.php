@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush

@section('content')

  <div id="cars-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">المركبات</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="{{ url('/cars/create') }}" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة مركبة جديدة</a>
      </div>
    </div><!-- d-flex -->

    <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap mb-4">
      <div class="tabs-area d-flex align-items-center justify-content-start gap-3 flex-wrap">
        <a href="{{ url('/cars') }}" title="المركبات" class="btn btn-primary waves-effect waves-light">المركبات</a>
        <a href="{{ url('/cars/brands') }}" title="الماركات" class="btn btn-label-dark waves-effect">الماركات</a>
        <a href="{{ url('/cars/models') }}" title="الموديلات" class="btn btn-label-dark waves-effect">الموديلات</a>
        <a href="{{ url('/cars/categories') }}" title="الفئات" class="btn btn-label-dark waves-effect">الفئات</a>
      </div><!-- tabs-area -->
      <div class="d-flex justify-content-end">
        <button class="btn btn-icon btn-secondary waves-effect waves-light" type="button" data-bs-toggle="collapse" data-bs-target="#cars-filter-collapse" aria-expanded="false" aria-controls="cars-filter-collapse"><span class="ti ti-filter"></span></button>
      </div><!-- d-flex -->
    </div><!-- d-flex -->

    <div class="collapse" id="cars-filter-collapse">
      <div class="card mb-4">
        <div class="card-body p-3">
          <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
              <div class="form-group">
                <label for="car-number" class="form-label fw-medium mb-2">رقم السياره</label>
                <input type="text" class="form-control" id="car-number" />
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label for="car-brand" class="form-label fw-medium mb-2">ماركة السيارة</label>
                <select id="car-brand" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                  <option></option>
                  <option value="AK">تويوتا</option>
                  <option value="HI">كيا</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label for="car-model" class="form-label fw-medium mb-2">موديل السيارة</label>
                <select id="car-model" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                  <option></option>
                  <option value="AK">موديل ١</option>
                  <option value="HI">موديل ٢</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label for="car-category" class="form-label fs-6 fw-medium mb-2">فئة السيارة</label>
                <select id="car-category" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                  <option></option>
                  <option value="AK">فئة ١</option>
                  <option value="HI">فئة ٢</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label for="car-date" class="form-label">سنة الصنع</label>
                <input type="number" inputmode="numeric" id="car-date" class="form-control" pattern="[0-9]{9}" />
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label for="car-status" class="form-label">حالة السيارة</label>
                <select id="car-status" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                  <option></option>
                  <option value="available">متاحة</option>
                  <option value="maintenance">في الصيانة</option>
                  <option value="canceled">ملغية</option>
                </select>
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
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th class="fw-bold">رقم المركبة</th>
              <th class="fw-bold">الماركة</th>
              <th class="fw-bold">الموديل</th>
              <th class="fw-bold">الفئة</th>
              <th class="fw-bold">سنة الصنع</th>
              <th class="fw-bold">الفرع</th>
              <th class="fw-bold">حالة المركبة</th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <a href="{{ url('/cars/{id}/view') }}">TB - 3456</a>
              </td>
              <td>كيا</td>
              <td>سبورتاج</td>
              <td>بي 1</td>
              <td>2010</td>
              <td>فرع الواحة</td>
              <td><span class="badge bg-label-success">متاحة</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/cars/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/cars/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#carDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/cars/{id}/view') }}">AR - 6389</a>
              </td>
              <td>كيا</td>
              <td>سبورتاج</td>
              <td>بي 1</td>
              <td>2010</td>
              <td>فرع الواحة</td>
              <td><span class="badge bg-label-warning">في الصيانة</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/cars/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/cars/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#carDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/cars/{id}/view') }}">YR - 1903</a>
              </td>
              <td>كيا</td>
              <td>سبورتاج</td>
              <td>بي 1</td>
              <td>2010</td>
              <td>فرع الواحة</td>
              <td><span class="badge bg-label-danger">ملغية</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/cars/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/cars/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#carDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Car Delete Modal -->
    <div class="modal fade" id="carDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="carDeleteModalLabel1">حذف مركبة : 1 2 3 ف ق ص</h5>
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف المركبة ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Car Delete Modal -->

  </div><!-- cars-index-page -->

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
