@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush

@section('content')

  <div id="categories-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">الفئات</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#categoryCreateModal" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة فئة جديدة</a>
      </div>
    </div><!-- d-flex -->

    <div class="tabs-area d-flex align-items-center justify-content-start gap-3 flex-wrap mb-4">
      <a href="{{ url('/cars') }}" title="المركبات" class="btn btn-label-dark waves-effect">المركبات</a>
      <a href="{{ url('/cars/brands') }}" title="الماركات" class="btn btn-label-dark waves-effect">الماركات</a>
      <a href="{{ url('/cars/models') }}" title="الموديلات" class="btn btn-label-dark waves-effect">الموديلات</a>
      <a href="{{ url('/cars/categories') }}" title="الفئات" class="btn btn-primary waves-effect waves-light">الفئات</a>
    </div><!-- tabs-area -->

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="fw-bold">الفئة</th>
              <th class="fw-bold">الموديل</th>
              <th class="fw-bold">الماركة</th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>كمفورت</td>
              <td>اكسنت</td>
              <td>هيونداي</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#categoryEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#categoryDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Category Create Modal -->
    <div class="modal fade" id="categoryCreateModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="POST" action="#" class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="categoryCreateModalLabel1">إضافة فئة جديدة</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="select-car-model">الموديل</label>
              <div class="col-12 col-sm-9">
                <select id="select-car-model" class="select2 form-select" data-allow-clear="true" data-placeholder="" data-dropdown-parent="#categoryCreateModal">
                  <option></option>
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="car-number">اسم الفئة</label>
              <div class="col-12 col-sm-9">
                <input type="text" class="form-control" id="car-number" />
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-primary px-5 m-0">حفظ</button>
          </div><!-- modal-footer -->
        </form>
      </div>
    </div>
    <!-- Category Create Modal -->

    <!-- Category Edit Modal -->
    <div class="modal fade" id="categoryEditModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form method="POST" action="#" class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="categoryEditModalLabel1">تعديل فئة : اكسنت</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="select-car-model">الموديل</label>
              <div class="col-12 col-sm-9">
                <select id="edit-car-model" class="select2 form-select" data-allow-clear="true" data-placeholder="" data-dropdown-parent="#categoryEditModal">
                  <option></option>
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="car-number">اسم الفئة</label>
              <div class="col-12 col-sm-9">
                <input type="text" class="form-control" id="car-number" />
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-primary px-5 m-0">حفظ</button>
          </div><!-- modal-footer -->
        </form>
      </div>
    </div>
    <!-- Category Edit Modal -->

    <!-- Category Delete Modal -->
    <div class="modal fade" id="categoryDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="modelDeleteModalLabel1">حذف الفئة : تويوتا</h5>
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف الفئة ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Category Delete Modal -->

  </div><!-- categories-index-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script type="module">
    $(".select2").select2();
  </script>
@endpush
