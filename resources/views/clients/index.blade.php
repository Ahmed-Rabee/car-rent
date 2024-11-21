@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/fancybox/fancybox.css') }}" />
@endpush

@section('content')

  <div id="clients-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">العملاء</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <a href="{{ url('/clients/create') }}" class="btn btn-primary waves-effect waves-light"><span class="ti-xs ti ti-plus me-2"></span> إضافة عميل جديد</a>
      </div>
    </div><!-- d-flex -->

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th width="5%" class="fw-bold">#</th>
              <th class="fw-bold">الاسم</th>
              <th class="fw-bold">التصنيف</th>
              <th class="fw-bold">الجنسية</th>
              <th class="fw-bold">دولة الإقامة</th>
              <th class="fw-bold">رقم الجوال</th>
              <th class="fw-bold">رقم الواتس اب</th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <a href="{{ url('/clients/{id}/view') }}" title="#">137</a>
              </td>
              <td>محمد احمد محمود</td>
              <td>محلي</td>
              <td>قطري</td>
              <td>عمان</td>
              <td>
                <div class="d-flex align-items-center justify-content-start">
                  <a href="tel:96892035086" target="_blank" class="d-flex align-items-center justify-content-center gap-1" dir="ltr">
                    <span class="ti-xs ti ti-phone"></span> +96892035086
                  </a>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="d-flex align-items-center justify-content-start">
                  <a href="https://wa.me/96892035086" target="_blank" class="d-flex align-items-center justify-content-center gap-1" dir="ltr">
                    <span class="ti-xs ti ti-brand-whatsapp"></span> +96892035086
                  </a>
                </div><!-- d-flex -->
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/clients/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect" href="{{ url('/clients/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                    <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#clientDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Client Delete Modal -->
    @include('clients.Modals.delete')
    <!-- Client Delete Modal -->

  </div><!-- clients-index-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/fancybox/fancybox.umd.js') }}"></script>
  <script>
    Fancybox.bind("[data-fancybox]");
  </script>
@endpush
