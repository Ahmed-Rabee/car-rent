@extends('layouts.app')

@push('styles')
@endpush

@section('content')

  <div id="reports-index-page">

    <h4 class="mb-4">إدارة التقارير</h4>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      <div class="col">
        <a href="#" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-building display-6"></i></h2>
            <h5 class="d-block m-0">تقرير الفروع</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-users display-6"></i></h2>
            <h5 class="d-block m-0">تقرير الموظفين</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-car display-6"></i></h2>
            <h5 class="d-block m-0">تقرير المركبات</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-calendar-month display-6"></i></h2>
            <h5 class="d-block m-0">تقرير الحجوزات</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-friends display-6"></i></h2>
            <h5 class="d-block m-0">تقرير العملاء</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-contract display-6"></i></h2>
            <h5 class="d-block m-0">تقرير العقود</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="{{ url('/reports/traffic-violations') }}" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-traffic-lights display-6"></i></h2>
            <h5 class="d-block m-0">تقرير المخالفات المرورية</h5>
          </div>
        </a>
      </div><!-- col -->
    </div><!-- row -->

  </div><!-- reports-index-page -->

@endsection

@push('scripts')
@endpush
