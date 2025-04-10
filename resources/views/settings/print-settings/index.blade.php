@extends('layouts.app')

@push('styles')
@endpush

@section('content')

  <div id="print-settings-index-page">

    <h4 class="mb-4">إعدادات الطباعة</h4>

    <a href="{{ url('/settings') }}" class="btn btn-icon bg-white text-body waves-effect waves-light mb-4"><span class="ti ti-chevron-right"></span></a>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      <div class="col">
        <a href="#" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-contract display-6"></i></h2>
            <h5 class="d-block m-0">العقود</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="{{ url('/settings/print-settings/traffic-violations-print') }}" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-traffic-lights display-6"></i></h2>
            <h5 class="d-block m-0">المخالفات المرورية</h5>
          </div>
        </a>
      </div><!-- col -->
    </div><!-- row -->

  </div><!-- print-settings-index-page -->

@endsection

@push('scripts')
@endpush
