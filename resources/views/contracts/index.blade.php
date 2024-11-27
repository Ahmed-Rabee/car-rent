@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')

  <div id="reservations-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">إدارة العقود</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="{{ url('/contracts/create') }}" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة عقد جديد</a>
      </div>
    </div>

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th width="5%" class="fw-bold">رقم العقد</th>
              <th width="5%" class="fw-bold">رقم الحجز</th>
              <th class="fw-bold">رقم المركبة</th>
              <th class="fw-bold">العميل</th>
              <th class="fw-bold">مكان الاستلام</th>
              <th class="fw-bold">تاريخ الاستلام</th>
              <th class="fw-bold">مكان العودة</th>
              <th class="fw-bold">تاريخ العودة</th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <a href="{{ url('/contracts/{id}/view') }}" title="#">234</a>
              </td>
              <td>343433</td>
              <td>9408 - TB</td>
              <td>محمد احمد محمود</td>
              <td>المطار</td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
              <td>الفندق</td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/contracts/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/contracts/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contractDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/contracts/{id}/view') }}" title="#">234</a>
              </td>
              <td>343433</td>
              <td>9408 - TB</td>
              <td>محمد احمد محمود</td>
              <td>المطار</td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
              <td>الفندق</td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/contracts/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/contracts/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contractDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/contracts/{id}/view') }}" title="#">234</a>
              </td>
              <td>343433</td>
              <td>9408 - TB</td>
              <td>محمد احمد محمود</td>
              <td>المطار</td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
              <td>الفندق</td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/contracts/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/contracts/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contractDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/contracts/{id}/view') }}" title="#">234</a>
              </td>
              <td>343433</td>
              <td>9408 - TB</td>
              <td>محمد احمد محمود</td>
              <td>المطار</td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
              <td>الفندق</td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/contracts/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/contracts/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contractDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/contracts/{id}/view') }}" title="#">234</a>
              </td>
              <td>343433</td>
              <td>9408 - TB</td>
              <td>محمد احمد محمود</td>
              <td>المطار</td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
              <td>الفندق</td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/contracts/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/contracts/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contractDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/contracts/{id}/view') }}" title="#">234</a>
              </td>
              <td>343433</td>
              <td>9408 - TB</td>
              <td>محمد احمد محمود</td>
              <td>المطار</td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
              <td>الفندق</td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/contracts/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/contracts/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contractDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- contracts Delete Modal -->
    @include('contracts.Modals.delete')
    <!-- contracts Delete Modal -->

  </div><!-- contracts-index-page -->

@endsection

@push('scripts')
@endpush
