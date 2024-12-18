@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')

  <div id="branches-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">الفروع</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="{{ url('/branches/create') }}" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة فرع جديد</a>
      </div>
    </div><!-- d-flex -->

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th class="fw-bold">اسم الفرع</th>
              <th class="fw-bold">ايام العطلات</th>
              <th class="fw-bold">مواعيد العمل</th>
              <th class="fw-bold">ارقام التواصل</th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <a href="{{ url('/branches/{id}/view') }}">فرع الواحه</a>
              </td>
              <td>
                <div class="d-flex justify-content-start flex-wrap gap-2">
                  <span class="badge bg-label-dark">الجمعة</span>
                  <span class="badge bg-label-dark">السبت</span>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="d-flex justify-content-start flex-wrap gap-2">
                  <span class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></span>
                  <span class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></span>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="d-flex justify-content-start flex-wrap gap-2">
                  <a href="tel:96892035086" dir="ltr" class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">+96892035086</a>
                  <a href="tel:96892035086" dir="ltr" class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">+96892035086</a>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/branches/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/branches/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#branchDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/branches/{id}/view') }}">فرع الواحه</a>
              </td>
              <td>
                <div class="d-flex justify-content-start flex-wrap gap-2">
                  <span class="badge bg-label-dark">الجمعة</span>
                  <span class="badge bg-label-dark">السبت</span>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="d-flex justify-content-start flex-wrap gap-2">
                  <span class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></span>
                  <span class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></span>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="d-flex justify-content-start flex-wrap gap-2">
                  <a href="tel:96892035086" dir="ltr" class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">+96892035086</a>
                  <a href="tel:96892035086" dir="ltr" class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">+96892035086</a>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/branches/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/branches/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#branchDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/branches/{id}/view') }}">فرع الواحه</a>
              </td>
              <td>
                <div class="d-flex justify-content-start flex-wrap gap-2">
                  <span class="badge bg-label-dark">الجمعة</span>
                  <span class="badge bg-label-dark">السبت</span>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="d-flex justify-content-start flex-wrap gap-2">
                  <span class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></span>
                  <span class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></span>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="d-flex justify-content-start flex-wrap gap-2">
                  <a href="tel:96892035086" dir="ltr" class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">+96892035086</a>
                  <a href="tel:96892035086" dir="ltr" class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">+96892035086</a>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/branches/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/branches/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#branchDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/branches/{id}/view') }}">فرع الواحه</a>
              </td>
              <td>
                <div class="d-flex justify-content-start flex-wrap gap-2">
                  <span class="badge bg-label-dark">الجمعة</span>
                  <span class="badge bg-label-dark">السبت</span>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="d-flex justify-content-start flex-wrap gap-2">
                  <span class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></span>
                  <span class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></span>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="d-flex justify-content-start flex-wrap gap-2">
                  <a href="tel:96892035086" dir="ltr" class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">+96892035086</a>
                  <a href="tel:96892035086" dir="ltr" class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">+96892035086</a>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/branches/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/branches/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#branchDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Branch Delete Modal -->
    @include('branches.Modals.delete')
    <!-- Branch Delete Modal -->

</div><!-- branches-index-page -->

@endsection

@push('scripts')
@endpush
