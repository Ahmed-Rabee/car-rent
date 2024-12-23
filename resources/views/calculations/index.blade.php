@extends('layouts.app')

@push('styles')
@endpush

@section('content')

  <div id="calculations-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">الحسابات</h4>
      </div><!-- d-flex -->
    </div><!-- d-flex -->

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      <div class="col">
        <a href="{{ url('/calculations/incomes') }}" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-chevrons-left display-6"></i></h2>
            <h5 class="d-block m-0">الإيرادات</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="{{ url('/calculations/general-expenses') }}" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-chevrons-right display-6"></i></h2>
            <h5 class="d-block m-0">المصروفات العامة</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="{{ url('/calculations/vehicle-expenses') }}" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-car display-6"></i></h2>
            <h5 class="d-block m-0">مصروفات المركبات</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="{{ url('/calculations/assets') }}" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-building display-6"></i></h2>
            <h5 class="d-block m-0">الأصول</h5>
          </div>
        </a>
      </div><!-- col -->
    </div><!-- row -->

  </div><!-- calculations-index-page -->

@endsection

@push('scripts')
@endpush
