@extends('layouts.app')

@section('content')

  <div id="traffic-violations-index-page">

    <h4 class="mb-3">تقرير المخالفات المرورية</h4>

    <a href="{{ url('/reports') }}" class="btn btn-icon bg-white text-body waves-effect waves-light mb-3"><span class="ti ti-chevron-right"></span></a>

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
                <span dir="ltr">467258</span>
              </td>
              <td>
                <span dir="ltr">2024-11-08 12:00 PM</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

  </div><!-- traffic-violations-index-page -->

@endsection

@push('scripts')
@endpush
