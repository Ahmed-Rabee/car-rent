@extends('layouts.app')

@push('styles')
@endpush

@section('content')

  <div id="permissions-edit-page">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="m-0">تعديل دور : المدير العام</h4>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body">
        <form>
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-number">اسم الدور</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" class="form-control" id="car-number" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label fw-medium" for="car-number">صلاحيات الدور</label>
            <div class="col-12 col-sm-10">
              <div class="row row-cols-2 row-cols-xl-4 g-4">
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                    <label class="form-check-label" for="defaultCheck1">
                      Unchecked
                    </label>
                  </div><!-- form-check -->
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
        </form>
      </div>
    </div><!-- card -->

    <div class="button-area d-flex align-items-center justify-content-end">
      <button type="submit" class="btn btn-lg btn-primary px-5">حفظ</button>
    </div><!-- button-area -->

  </div><!-- permissions-edit-page -->

@endsection

@push('scripts')
@endpush
