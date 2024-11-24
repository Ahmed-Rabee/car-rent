@extends('layouts.app')

@push('styles')
@endpush

@section('content')

  <div id="permissions-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">تفاصيل دور : المشرف العام</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="{{ url('/permissions/{id}/edit') }}" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#permissionDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body p-3">
        <div class="row align-items-center">
          <label class="col-sm-2 col-form-label fw-medium" for="car-number">اسم الدور</label>
          <div class="col-12 col-sm-10">
            <span>المشرف العام</span>
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
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
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
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
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
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
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
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
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
        <div id="accordion-permissions-reservations" class="accordion-collapse collapse" aria-labelledby="heading-permissions-reservations" data-bs-parent="#accordionPermissions">
          <div class="accordion-body p-3">
            <div class="row row-cols-2 row-cols-xl-4 g-4">
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
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
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
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
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1">
                  <i class="ti ti-circle-dashed-x flex-shrink-0 text-danger"></i>
                  <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                </div><!-- d-flex -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

    </div><!-- accordion -->

    <!-- Permission Delete Modal -->
    <div class="modal fade" id="permissionDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="epermissionDeleteModalLabel1">حذف دور : المدير العام</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="top-area d-flex align-items-center justify-content-center gap-4 flex-column">
              <div class="swal2-icon swal2-error swal2-icon-show d-flex m-0">
                <span class="swal2-x-mark">
                  <span class="swal2-x-mark-line-left"></span>
                  <span class="swal2-x-mark-line-right"></span>
                </span>
              </div><!-- swal2-icon -->
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف الدور ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Permission Delete Modal -->

  </div><!-- permissions-view-page -->

@endsection

@push('scripts')
@endpush
