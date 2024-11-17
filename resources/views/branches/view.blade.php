@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')

  <div id="branches-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">فرع الواحة</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="/branches/edit.html" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#branchDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div>

    <div class="tabs-area d-flex align-items-center justify-content-start gap-3 flex-wrap mb-4">
      <a href="{{ url('/branches/{id}/view') }}" title="تفاصيل الفرع" class="btn btn-primary waves-effect waves-light">تفاصيل الفرع</a>
      <a href="{{ url('/branches/{id}/statistics') }}" title="إحصائيات الفرع" class="btn">إحصائيات الفرع</a>
    </div><!-- tabs-area -->

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
    @include('branches.Modals.delete')
    <!-- Branch Delete Modal -->

  </div><!-- branches-view-page -->

@endsection

@push('scripts')
@endpush
