@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endpush

@section('content')

  <div id="reservations-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">إدارة الحجوزات</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="{{ url('/reservations/create') }}" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة حجز جديد</a>
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
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="رقم الحجز" />
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <select id="car-brand" class="select2 form-select" data-allow-clear="true" data-placeholder="رقم المركبة">
                  <option></option>
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <select id="car-model" class="select2 form-select" data-allow-clear="true" data-placeholder="العميل">
                  <option></option>
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <input type="text" class="form-control flatpickr-date" placeholder="تاريخ الاستلام" id="insurance-company-from" readonly="readonly" />
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <input type="text" class="form-control flatpickr-date" placeholder="تاريخ العودة" id="insurance-company-to" readonly="readonly" />
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <select id="car-status" class="select2 form-select" data-allow-clear="true" data-placeholder="حالة الحجز">
                  <option></option>
                  <option value="payment">مؤكد</option>
                  <option value="free">غير مؤكد</option>
                  <option value="free">ملغي</option>
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
              <th width="5%" class="fw-bold">#</th>
              <th class="fw-bold">رقم المركبة</th>
              <th class="fw-bold">العميل</th>
              <th class="fw-bold">تاريخ الاستلام</th>
              <th class="fw-bold">مكان الاستلام</th>
              <th class="fw-bold">تاريخ العودة</th>
              <th class="fw-bold">مكان العودة</th>
              <th class="fw-bold">حالة الحجز</th>
              <th class="fw-bold">الكاتب</th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <a href="{{ url('/reservations/{id}/view') }}" title="#">234</a>
              </td>
              <td>9408 - TB</td>
              <td>
                <a href="#" title="#">محمد احمد محمود</a>
              </td>
              <td>18 / 11 / 2024</td>
              <td>المطار</td>
              <td>18 / 11 / 2024</td>
              <td>الفندق</td>
              <td>مؤكد</td>
              <td>محمد مصطفي</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#reservationDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/reservations/{id}/view') }}" title="#">234</a>
              </td>
              <td>9408 - TB</td>
              <td>
                <a href="#" title="#">محمد احمد محمود</a>
              </td>
              <td>18 / 11 / 2024</td>
              <td>المطار</td>
              <td>18 / 11 / 2024</td>
              <td>الفندق</td>
              <td>مؤكد</td>
              <td>محمد مصطفي</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#reservationDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/reservations/{id}/view') }}" title="#">234</a>
              </td>
              <td>9408 - TB</td>
              <td>
                <a href="#" title="#">محمد احمد محمود</a>
              </td>
              <td>18 / 11 / 2024</td>
              <td>المطار</td>
              <td>18 / 11 / 2024</td>
              <td>الفندق</td>
              <td>مؤكد</td>
              <td>محمد مصطفي</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#reservationDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/reservations/{id}/view') }}" title="#">234</a>
              </td>
              <td>9408 - TB</td>
              <td>
                <a href="#" title="#">محمد احمد محمود</a>
              </td>
              <td>18 / 11 / 2024</td>
              <td>المطار</td>
              <td>18 / 11 / 2024</td>
              <td>الفندق</td>
              <td>مؤكد</td>
              <td>محمد مصطفي</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#reservationDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/reservations/{id}/view') }}" title="#">234</a>
              </td>
              <td>9408 - TB</td>
              <td>
                <a href="#" title="#">محمد احمد محمود</a>
              </td>
              <td>18 / 11 / 2024</td>
              <td>المطار</td>
              <td>18 / 11 / 2024</td>
              <td>الفندق</td>
              <td>مؤكد</td>
              <td>محمد مصطفي</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#reservationDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Reservation Delete Modal -->
    @include('reservations.Modals.delete')
    <!-- Reservation Delete Modal -->

  </div><!-- Reservations-index-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script type="module">
    $(".select2").select2();

    (function () {
      const flatpickrDate = $('.flatpickr-date');
      if (flatpickrDate) {
        flatpickrDate.flatpickr({
          monthSelectorType: 'static'
        });
      }
    })();
  </script>
@endpush
