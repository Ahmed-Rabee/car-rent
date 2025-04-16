@extends('layouts.app')

@push('styles')
@endpush

@section('content')

  <div id="general-settings-page">

    <h4 class="mb-4">الإعدادات العامة</h4>

    <a href="{{ url('/settings') }}" class="btn btn-icon bg-white text-body waves-effect waves-light mb-4"><span class="ti ti-chevron-right"></span></a>

    <div class="card mb-4">
      <div class="card-body">
        <form>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe">
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- col -->
          </div><!-- form-group -->
          <hr class="my-3">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe">
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- col -->
          </div><!-- form-group -->
          <hr class="my-3">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe">
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- col -->
          </div><!-- form-group -->
          <hr class="my-3">
        </form>
      </div><!-- card-body -->
    </div><!-- card -->

  </div><!-- general-settings-page -->

@endsection

@push('scripts')
@endpush
