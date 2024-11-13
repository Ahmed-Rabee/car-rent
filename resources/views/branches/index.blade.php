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
    </div>

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="fw-bold">اسم الفرع</th>
              <th class="fw-bold">عنوان الفرع</th>
              <th class="fw-bold">مواعيد العمل</th>
              <th class="fw-bold">ارقام التواصل</th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>فرع الواحه</td>
              <td>14 ش محمد احمد - من ش المنتصر بالله - مدينة نصر - القاهرة</td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></div>
              </td>
              <td>
                <div class="d-flex flex-column">
                  <div class="d-flex align-items-center justify-content-start gap-1"><span dir="ltr">+966 554433221</span></div>
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
              <td>فرع الواحه</td>
              <td>14 ش محمد احمد - من ش المنتصر بالله - مدينة نصر - القاهرة</td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></div>
              </td>
              <td>
                <div class="d-flex flex-column">
                  <div class="d-flex align-items-center justify-content-start gap-1"><span dir="ltr">+966 554433221</span></div>
                  <div class="d-flex align-items-center justify-content-start gap-1"><span dir="ltr">+966 554433221</span></div>
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
              <td>فرع الواحه</td>
              <td>14 ش محمد احمد - من ش المنتصر بالله - مدينة نصر - القاهرة</td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></div>
              </td>
              <td>
                <div class="d-flex flex-column">
                  <div class="d-flex align-items-center justify-content-start gap-1"><span dir="ltr">+966 554433221</span></div>
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
              <td>فرع الواحه</td>
              <td>14 ش محمد احمد - من ش المنتصر بالله - مدينة نصر - القاهرة</td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></div>
              </td>
              <td>
                <div class="d-flex flex-column">
                  <div class="d-flex align-items-center justify-content-start gap-1"><span dir="ltr">+966 554433221</span></div>
                  <div class="d-flex align-items-center justify-content-start gap-1"><span dir="ltr">+966 554433221</span></div>
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
              <td>فرع الواحه</td>
              <td>14 ش محمد احمد - من ش المنتصر بالله - مدينة نصر - القاهرة</td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></div>
              </td>
              <td>
                <div class="d-flex flex-column">
                  <div class="d-flex align-items-center justify-content-start gap-1"><span dir="ltr">+966 554433221</span></div>
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
    <div class="modal fade" id="branchDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="branchDeleteModalLabel1">حذف فرع : فرع الواحة</h5>
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف الفرع ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Branch Delete Modal -->

</div><!-- branches-index-page -->

@endsection

@push('scripts')
@endpush
