@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush

@section('content')

  <div id="cars-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">إدارة المركبات</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="{{ url('/cars/create') }}" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة مركبة جديدة</a>
      </div>
    </div>

    <div class="d-flex justify-content-end mb-4">
      <button class="btn btn-icon btn-secondary waves-effect waves-light" type="button" data-bs-toggle="collapse" data-bs-target="#cars-filter-collapse" aria-expanded="false" aria-controls="cars-filter-collapse"><span class="ti ti-filter"></span></button>
    </div><!-- d-flex -->

    <div class="collapse" id="cars-filter-collapse">
      <div class="card mb-4">
        <div class="card-body p-3">
          <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">رقم السياره</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" />
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">ماركة السيارة</label>
                <select id="car-brand" class="select2 form-select" data-allow-clear="true" data-placeholder="">
                  <option></option>
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">موديل السيارة</label>
                <select id="car-model" class="select2 form-select" data-allow-clear="true" data-placeholder="">
                  <option></option>
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">فئة السيارة</label>
                <select id="car-category" class="select2 form-select" data-allow-clear="true" data-placeholder="">
                  <option></option>
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">سنة الصنع</label>
                <input type="tel" pattern="[0-9]{9}" maxlength="4" class="form-control" id="exampleFormControlInput1" />
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">حالة السيارة</label>
                <select id="car-status" class="select2 form-select" data-allow-clear="true" data-placeholder="">
                  <option></option>
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
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
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="fw-bold">رقم السياره</th>
              <th class="fw-bold">الماركة</th>
              <th class="fw-bold">الموديل</th>
              <th class="fw-bold">الفئة</th>
              <th class="fw-bold">سنة الصنع</th>
              <th class="fw-bold">حالة السياره</th>
              <th class="fw-bold">لون السيارة</th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>9408 - TB</td>
              <td>كيا</td>
              <td>سبورتاج</td>
              <td>بي 1</td>
              <td>2010</td>
              <td>جديدة</td>
              <td>
                <div class="badge badge-center rounded-1 d-block border" style="background-color: blue;"></div>
              </td>
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
              <td>1 2 3 ف ق ص</td>
              <td>كيا</td>
              <td>سبورتاج</td>
              <td>بي 1</td>
              <td>2010</td>
              <td>مستعملة</td>
              <td>
                <div class="badge badge-center rounded-1 d-block border" style="background-color: white;"></div>
              </td>
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
              <td>1 2 3 ف ق ص</td>
              <td>كيا</td>
              <td>سبورتاج</td>
              <td>بي 1</td>
              <td>2010</td>
              <td>جديدة</td>
              <td>
                <div class="badge badge-center rounded-1 d-block border" style="background-color: black;"></div>
              </td>
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
              <td>1 2 3 ف ق ص</td>
              <td>كيا</td>
              <td>سبورتاج</td>
              <td>بي 1</td>
              <td>2010</td>
              <td>مستعملة</td>
              <td>
                <div class="badge badge-center rounded-1 d-block border" style="background-color: red;"></div>
              </td>
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
              <td>1 2 3 ف ق ص</td>
              <td>كيا</td>
              <td>سبورتاج</td>
              <td>بي 1</td>
              <td>2010</td>
              <td>جديدة</td>
              <td>
                <div class="badge badge-center rounded-1 d-block border" style="background-color: blue;"></div>
              </td>
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
              <td>1 2 3 ف ق ص</td>
              <td>كيا</td>
              <td>سبورتاج</td>
              <td>بي 1</td>
              <td>2010</td>
              <td>مستعملة</td>
              <td>
                <div class="badge badge-center rounded-1 d-block border" style="background-color: red;"></div>
              </td>
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
              <td>1 2 3 ف ق ص</td>
              <td>كيا</td>
              <td>سبورتاج</td>
              <td>بي 1</td>
              <td>2010</td>
              <td>جديدة</td>
              <td>
                <div class="badge badge-center rounded-1 d-block border" style="background-color: blue;"></div>
              </td>
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
              <td>1 2 3 ف ق ص</td>
              <td>كيا</td>
              <td>سبورتاج</td>
              <td>بي 1</td>
              <td>2010</td>
              <td>مستعملة</td>
              <td>
                <div class="badge badge-center rounded-1 d-block border" style="background-color: red;"></div>
              </td>
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
              <td>1 2 3 ف ق ص</td>
              <td>كيا</td>
              <td>سبورتاج</td>
              <td>بي 1</td>
              <td>2010</td>
              <td>جديدة</td>
              <td>
                <div class="badge badge-center rounded-1 d-block border" style="background-color: blue;"></div>
              </td>
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
              <td>1 2 3 ف ق ص</td>
              <td>كيا</td>
              <td>سبورتاج</td>
              <td>بي 1</td>
              <td>2010</td>
              <td>مستعملة</td>
              <td>
                <div class="badge badge-center rounded-1 d-block border" style="background-color: red;"></div>
              </td>
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
  <script type="module">
    $(".select2").select2();
  </script>
@endpush
