@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')

  <div id="branches-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">تفاصيل فرع : فرع الواحة</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="/branches/edit.html" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#branchDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div>

    <div class="card overflow-hidden">
      <div class="card-body p-3">
        <div class="table-responsive text-nowrap">
          <table class="table table-striped table-bordered">
            <tbody class="table-border-bottom-0">
              <tr>
                <td width="5%" class="p-3">اسم الفرع</td>
                <td class="p-3">فرع الواحه</td>
              </tr>
              <tr>
                <td width="5%" class="p-3">عنوان الفرع</td>
                <td class="p-3">14 ش محمد احمد - من ش المنتصر بالله - مدينة نصر - القاهرة</td>
              </tr>
              <tr>
                <td width="5%" class="p-3">مواعيد العمل</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></div>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">ارقام التواصل</td>
                <td class="p-3">
                  <div class="d-flex flex-wrap gap-2 flex-wrap">
                    <span class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">
                      <span dir="ltr">+966 554433221</span>
                      <i class="tf-icons ti ti-phone ti-xs"></i>
                    </span>
                    <span class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">
                      <span dir="ltr">+966 554433221</span>
                      <i class="tf-icons ti ti-phone ti-xs"></i>
                    </span>
                  </div><!-- d-flex -->
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- table-responsive -->
      </div><!-- card-body -->
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

  </div><!-- branches-view-page -->

@endsection

@push('scripts')
@endpush
