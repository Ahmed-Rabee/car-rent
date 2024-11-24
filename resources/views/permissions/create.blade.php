@extends('layouts.app')

@push('styles')
@endpush

@section('content')

  <div id="permissions-create-page">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="m-0">إضافة دور جديد</h4>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body p-3">
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
      </div><!-- card-body -->
    </div><!-- card -->

    <div class="accordion d-flex flex-column gap-4 mb-4" id="accordionPermissions">

      <div class="card accordion-item m-0 active">
        <div class="accordion-header" id="heading-permissions-branches">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between p-3"
            data-bs-toggle="collapse"
            data-bs-target="#accordion-permissions-branches"
            aria-expanded="true"
            aria-controls="accordion-permissions-branches"
          >
            <h5 class="m-0">صلاحيات الفروع</h5>
          </button>
        </div><!-- accordion-header -->
        <div id="accordion-permissions-branches" class="accordion-collapse collapse show" data-bs-parent="#accordionPermissions">
          <div class="accordion-body p-3">
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
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <div class="card accordion-item m-0">
        <div class="accordion-header" id="heading-permissions-employees">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between p-3 collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordion-permissions-employees"
            aria-expanded="false"
            aria-controls="accordion-permissions-employees"
          >
            <h5 class="m-0">صلاحيات الموظفين</h5>
          </button>
        </div><!-- accordion-header -->
        <div id="accordion-permissions-employees" class="accordion-collapse collapse" aria-labelledby="heading-permissions-employees" data-bs-parent="#accordionPermissions">
          <div class="accordion-body p-3">
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
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <div class="card accordion-item m-0">
        <div class="accordion-header" id="heading-permissions-cars">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between p-3 collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordion-permissions-cars"
            aria-expanded="false"
            aria-controls="accordion-permissions-cars"
          >
            <h5 class="m-0">صلاحيات المركبات</h5>
          </button>
        </div><!-- accordion-header -->
        <div id="accordion-permissions-cars" class="accordion-collapse collapse" aria-labelledby="heading-permissions-cars" data-bs-parent="#accordionPermissions">
          <div class="accordion-body p-3">
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
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <div class="card accordion-item m-0">
        <div class="accordion-header" id="heading-permissions-technical">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between p-3 collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordion-permissions-technical"
            aria-expanded="false"
            aria-controls="accordion-permissions-technical"
          >
            <h5 class="m-0">صلاحيات الإدارة الفنية</h5>
          </button>
        </div><!-- accordion-header -->
        <div id="accordion-permissions-technical" class="accordion-collapse collapse" aria-labelledby="heading-permissions-technical" data-bs-parent="#accordionPermissions">
          <div class="accordion-body p-3">
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
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <div class="card accordion-item m-0">
        <div class="accordion-header" id="heading-permissions-reservations">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between p-3 collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordion-permissions-reservations"
            aria-expanded="false"
            aria-controls="accordion-permissions-reservations"
          >
            <h5 class="m-0">صلاحيات الحجوزات</h5>
          </button>
        </div><!-- accordion-header -->
        <div id="accordion-permissions-clients" class="accordion-collapse collapse" aria-labelledby="heading-permissions-clients" data-bs-parent="#accordionPermissions">
          <div class="accordion-body p-3">
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
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <div class="card accordion-item m-0">
        <div class="accordion-header" id="heading-permissions-clients">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between p-3 collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordion-permissions-clients"
            aria-expanded="false"
            aria-controls="accordion-permissions-clients"
          >
            <h5 class="m-0">صلاحيات العملاء</h5>
          </button>
        </div><!-- accordion-header -->
        <div id="accordion-permissions-clients" class="accordion-collapse collapse" aria-labelledby="heading-permissions-clients" data-bs-parent="#accordionPermissions">
          <div class="accordion-body p-3">
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
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <div class="card accordion-item m-0">
        <div class="accordion-header" id="heading-permissions-contracts">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between p-3 collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordion-permissions-contracts"
            aria-expanded="false"
            aria-controls="accordion-permissions-contracts"
          >
            <h5 class="m-0">صلاحيات العقود</h5>
          </button>
        </div><!-- accordion-header -->
        <div id="accordion-permissions-contracts" class="accordion-collapse collapse" aria-labelledby="heading-permissions-contracts" data-bs-parent="#accordionPermissions">
          <div class="accordion-body p-3">
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
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

    </div><!-- accordion -->

    <div class="button-area d-flex align-items-center justify-content-end">
      <button type="submit" class="btn btn-lg btn-primary px-5">حفظ</button>
    </div><!-- button-area -->

  </div><!-- permissions-create-page -->

@endsection

@push('scripts')
@endpush
