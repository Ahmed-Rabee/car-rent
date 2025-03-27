@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endpush

@section('content')

  <div id="traffic-violations-index-page">

    <h4 class="mb-3">المخالفات المرورية</h4>

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th width="5%" class="fw-bold">رقم العقد</th>
              <th class="fw-bold">رقم المركبة</th>
              <th class="fw-bold">العميل</th>
              <th class="fw-bold">رقم المخالفة</th>
              <th class="fw-bold">تاريخ المخالفة</th>
              <th class="fw-bold">الحاله</th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <a href="{{ url('/contracts/{id}/view') }}" title="#">234</a>
              </td>
              <td>9408 - TB</td>
              <td>محمد احمد محمود</td>
              <td>
                <span dir="ltr">8519324404</span>
              </td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
              <td>
                <span class="badge bg-label-secondary">قيد المراجعه</span>
                <span class="badge bg-label-warning">تم التحويل</span>
                <span class="badge bg-label-danger">مرفوضه</span>
                <span class="badge bg-label-success">مقبوله</span>
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item waves-effect" href="{{ url('/traffic-violations/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                    <a class="dropdown-item waves-effect"  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#trafficViolationEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                  </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Traffic Violation Edit Modal -->
    @include('traffic-violations.Modals.edit')
    <!-- Traffic Violation Edit Modal -->

  </div><!-- traffic-violations-index-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script type="module">
    $(".select2").select2();

    $(document).ready(function() {
      const $flatpickrDateTime = $('#flatpickr-datetime');
      if ($flatpickrDateTime.length) {
        $flatpickrDateTime.flatpickr({
          enableTime: true,
          dateFormat: 'Y-m-d H:i'
        });
      }
    });
  </script>
@endpush
