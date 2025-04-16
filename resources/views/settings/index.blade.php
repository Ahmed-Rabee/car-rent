@extends('layouts.app')

@push('styles')
@endpush

@section('content')

  <div id="reservations-index-page">

    <h4 class="mb-4">الإعدادات</h4>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      <div class="col">
        <a href="{{ url('/settings/general-settings') }}" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-settings display-6"></i></h2>
            <h5 class="d-block m-0">الإعدادات العامة</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="{{ url('/settings/print-settings/') }}" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-printer display-6"></i></h2>
            <h5 class="d-block m-0">إعدادات الطباعة</h5>
          </div>
        </a>
      </div><!-- col -->
    </div><!-- row -->

  </div><!-- Reservations-index-page -->

@endsection

@push('scripts')
@endpush
