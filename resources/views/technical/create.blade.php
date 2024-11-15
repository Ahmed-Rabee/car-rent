@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />

@endpush

@section('content')

  <div id="technical-create-page">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="m-0">إضافة حالة فنية جديدة</h4>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="row row-cols-2 row-cols-md-2 g-3">
          <div class="col">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label fw-medium" for="car-number">رقم المركبة</label>
              <div class="col-12 col-sm-8">
                <select id="car-number" class="select2 form-select" data-placeholder="اختر مركبة" data-allow-clear="true">
                  <option></option>
                  <option value="1">8977 - TB</option>
                  <option value="2">7565 - T</option>
                  <option value="3">9856 - TH</option>
                  <option value="4">5709 - TB</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col -->
          <div class="col">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label fw-medium" for="car-number">مفتاح إحتياطي</label>
              <div class="col-12 col-sm-8">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <label class="switch switch-lg">
                      <input type="checkbox" class="switch-input" />
                      <span class="switch-toggle-slider">
                        <span class="switch-on">
                          <i class="ti ti-check"></i>
                        </span>
                        <span class="switch-off">
                          <i class="ti ti-x"></i>
                        </span>
                      </span>
                    </label>
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row row-cols-3 row-cols-md-3 g-3">
          <div class="col">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label fw-medium" for="car-brand">الماركة</label>
              <div class="col-12 col-sm-8">
                <p class="d-block m-0">AVEO</p>
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col -->
          <div class="col">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label fw-medium" for="car-model">الموديل</label>
              <div class="col-12 col-sm-8">
              <p class="d-block m-0">AVEO</p>
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col -->
          <div class="col">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label fw-medium" for="car-category">الفئة</label>
              <div class="col-12 col-sm-8">
                <p class="d-block m-0">AVEO</p>
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- card-body -->
    </div><!-- card -->

    <hr class="my-4">

    <div class="accordion mb-4" id="accordionTechnical">

      <div class="card border-0 shadow-none bg-transparent m-0 accordion-item">
        <h2 class="accordion-header" id="headingMechanical">
          <button
            type="button"
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize align-items-center shadow-none collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordionMechanical"
            aria-expanded="false"
            aria-controls="accordionMechanical"
          >
            Mechanical
          </button>
        </h2>
        <div
          id="accordionMechanical"
          class="accordion-collapse collapse"
          aria-labelledby="headingMechanical"
          data-bs-parent="#accordionTechnical"
        >
          <div class="accordion-body pt-4 px-0 pb-0">

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/x1RnbhSG/gear.png" alt="Status General Mechanical" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Status General Mechanical</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/9FDWKJZC/oil-img.png" alt="Oil Last check" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Oil Last check</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-4">

      <div class="card border-0 shadow-none bg-transparent m-0 accordion-item">
        <h2 class="accordion-header" id="headingCooling">
          <button
            type="button"
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize align-items-center shadow-none collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordionCooling"
            aria-expanded="false"
            aria-controls="accordionCooling"
          >
            Cooling and Water Cycle
          </button>
        </h2>
        <div
          id="accordionCooling"
          class="accordion-collapse collapse"
          aria-labelledby="headingCooling"
          data-bs-parent="#accordionTechnical"
        >
          <div class="accordion-body pt-4 px-0 pb-0">

            <div class="card form-repeater mb-4">
              <div class="card-body p-3">
                <div class="row g-3">
                  <div class="col-6">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Date Filling</label>
                      <div class="col-12 col-sm-8">
                        <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-6 -->
                  <div class="col-6">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Water Type</label>
                      <div class="col-12 col-sm-8">
                        <div id="color-picker-classic"></div>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-6 -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-end gap-3">
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater">
                  <div class="card-header p-3 d-flex align-items-center justify-content-end gap-3">
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-4">

      <div class="card border-0 shadow-none bg-transparent m-0 accordion-item">
        <h2 class="accordion-header" id="headingElectricity">
          <button
            type="button"
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize align-items-center shadow-none collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordionElectricity"
            aria-expanded="false"
            aria-controls="accordionElectricity"
          >
            Electricity
          </button>
        </h2>
        <div
          id="accordionElectricity"
          class="accordion-collapse collapse"
          aria-labelledby="headingElectricity"
          data-bs-parent="#accordionTechnical"
        >
          <div class="accordion-body pt-4 px-0 pb-0">

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Battery</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row row-cols-1 row-cols-md-2 g-3">
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Installation Date</label>
                      <div class="col-12 col-sm-8">
                        <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Battery Type</label>
                      <div class="col-12 col-sm-8">
                        <select id="Battery-Type" class="select2 form-select" data-placeholder="Choose" data-allow-clear="true">
                          <option></option>
                          <option value="1">8977 - TB</option>
                          <option value="2">7565 - T</option>
                          <option value="3">9856 - TH</option>
                          <option value="4">5709 - TB</option>
                        </select>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="card shadow-none bg-transparent border border-secondary form-repeater m-0">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Battery Test</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Spark Plug</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Spark Coils</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-4">

      <div class="card border-0 shadow-none bg-transparent m-0 accordion-item">
        <h2 class="accordion-header" id="headingTayrs">
          <button
            type="button"
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize align-items-center shadow-none collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordionTayrs"
            aria-expanded="false"
            aria-controls="accordionTayrs"
          >
            Tayrs Condition And Information
          </button>
        </h2>
        <div
          id="accordionTayrs"
          class="accordion-collapse collapse"
          aria-labelledby="headingTayrs"
          data-bs-parent="#accordionTechnical"
        >
          <div class="accordion-body pt-4 px-0 pb-0">

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Tire Rotation</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">الميزانية</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Spare</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Sensor</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="row row-cols-2">
                          <div class="col">
                                  <div class="form-check">
                                    <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio2" checked="">
                                    <label class="form-check-label" for="defaultRadio2">نعم</label>
                                  </div>
                          </div><!-- col -->
                          <div class="col">
                                  <div class="form-check">
                                    <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio3">
                                    <label class="form-check-label" for="defaultRadio2">لا</label>
                                  </div>
                          </div><!-- col -->
                        </div><!-- row -->
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Brand</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <select id="Battery-Type" class="select2 form-select" data-placeholder="Choose" data-allow-clear="true">
                          <option></option>
                          <option value="1">8977 - TB</option>
                          <option value="2">7565 - T</option>
                          <option value="3">9856 - TH</option>
                          <option value="4">5709 - TB</option>
                        </select>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Date</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">K.M</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="input-group">
                          <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                          <span class="input-group-text" id="basic-addon11">كم</span>
                        </div>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="card shadow-none bg-transparent border border-secondary form-repeater m-0">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Spare Test</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Front Right</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Sensor</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="row row-cols-2">
                          <div class="col">
                                  <div class="form-check">
                                    <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio2" checked="">
                                    <label class="form-check-label" for="defaultRadio2">نعم</label>
                                  </div>
                          </div><!-- col -->
                          <div class="col">
                                  <div class="form-check">
                                    <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio3">
                                    <label class="form-check-label" for="defaultRadio2">لا</label>
                                  </div>
                          </div><!-- col -->
                        </div><!-- row -->
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Brand</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <select id="Battery-Type" class="select2 form-select" data-placeholder="Choose" data-allow-clear="true">
                          <option></option>
                          <option value="1">8977 - TB</option>
                          <option value="2">7565 - T</option>
                          <option value="3">9856 - TH</option>
                          <option value="4">5709 - TB</option>
                        </select>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Date</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">K.M</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="input-group">
                          <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                          <span class="input-group-text" id="basic-addon11">كم</span>
                        </div>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="card shadow-none bg-transparent border border-secondary form-repeater m-0">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Front Right Test</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Front Left</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Sensor</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="row row-cols-2">
                          <div class="col">
                                  <div class="form-check">
                                    <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio2" checked="">
                                    <label class="form-check-label" for="defaultRadio2">نعم</label>
                                  </div>
                          </div><!-- col -->
                          <div class="col">
                                  <div class="form-check">
                                    <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio3">
                                    <label class="form-check-label" for="defaultRadio2">لا</label>
                                  </div>
                          </div><!-- col -->
                        </div><!-- row -->
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Brand</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <select id="Battery-Type" class="select2 form-select" data-placeholder="Choose" data-allow-clear="true">
                          <option></option>
                          <option value="1">8977 - TB</option>
                          <option value="2">7565 - T</option>
                          <option value="3">9856 - TH</option>
                          <option value="4">5709 - TB</option>
                        </select>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Date</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">K.M</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="input-group">
                          <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                          <span class="input-group-text" id="basic-addon11">كم</span>
                        </div>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="card shadow-none bg-transparent border border-secondary form-repeater m-0">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Front Left Test</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Back Right</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Sensor</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="row row-cols-2">
                          <div class="col">
                                  <div class="form-check">
                                    <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio2" checked="">
                                    <label class="form-check-label" for="defaultRadio2">نعم</label>
                                  </div>
                          </div><!-- col -->
                          <div class="col">
                                  <div class="form-check">
                                    <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio3">
                                    <label class="form-check-label" for="defaultRadio2">لا</label>
                                  </div>
                          </div><!-- col -->
                        </div><!-- row -->
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Brand</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <select id="Battery-Type" class="select2 form-select" data-placeholder="Choose" data-allow-clear="true">
                          <option></option>
                          <option value="1">8977 - TB</option>
                          <option value="2">7565 - T</option>
                          <option value="3">9856 - TH</option>
                          <option value="4">5709 - TB</option>
                        </select>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Date</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">K.M</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="input-group">
                          <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                          <span class="input-group-text" id="basic-addon11">كم</span>
                        </div>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="card shadow-none bg-transparent border border-secondary form-repeater m-0">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Back Right Test</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Back Left</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Sensor</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="row row-cols-2">
                          <div class="col">
                                  <div class="form-check">
                                    <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio2" checked="">
                                    <label class="form-check-label" for="defaultRadio2">نعم</label>
                                  </div>
                          </div><!-- col -->
                          <div class="col">
                                  <div class="form-check">
                                    <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio3">
                                    <label class="form-check-label" for="defaultRadio2">لا</label>
                                  </div>
                          </div><!-- col -->
                        </div><!-- row -->
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Brand</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <select id="Battery-Type" class="select2 form-select" data-placeholder="Choose" data-allow-clear="true">
                          <option></option>
                          <option value="1">8977 - TB</option>
                          <option value="2">7565 - T</option>
                          <option value="3">9856 - TH</option>
                          <option value="4">5709 - TB</option>
                        </select>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">Date</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row align-items-center">
                  <label class="col-sm-2 col-form-label fw-medium" for="car-number">K.M</label>
                  <div class="col-12 col-sm-10">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="input-group">
                          <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                          <span class="input-group-text" id="basic-addon11">كم</span>
                        </div>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col-12 -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="card shadow-none bg-transparent border border-secondary form-repeater m-0">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Back Left Test</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- card-body -->
            </div><!-- card -->

          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-4">

      <div class="card border-0 shadow-none bg-transparent m-0 accordion-item">
        <h2 class="accordion-header" id="headingSuspensions">
          <button
            type="button"
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize align-items-center shadow-none collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordionSuspensions"
            aria-expanded="false"
            aria-controls="accordionSuspensions"
          >
            Suspensions
          </button>
        </h2>
        <div
          id="accordionSuspensions"
          class="accordion-collapse collapse"
          aria-labelledby="headingSuspensions"
          data-bs-parent="#accordionTechnical"
        >
          <div class="accordion-body pt-4 px-0 pb-0">

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Transmission Mount</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Rod</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Bushing</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Shock</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Absorbers</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">AXLE</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">SEAL</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Lower Arm</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Bearing Front</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Bearing Back</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Drum  Lathe Front</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Drum  Lathe Back</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Bad Brakes Front</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Bad Brakes Back</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Brake OIL</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-4">

      <div class="card border-0 shadow-none bg-transparent m-0 accordion-item">
        <h2 class="accordion-header" id="headingAirCondition">
          <button
            type="button"
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize align-items-center shadow-none collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordionAirCondition"
            aria-expanded="false"
            aria-controls="accordionAirCondition"
          >
            Air & Condition
          </button>
        </h2>
        <div
          id="accordionAirCondition"
          class="accordion-collapse collapse"
          aria-labelledby="headingAirCondition"
          data-bs-parent="#accordionTechnical"
        >
          <div class="accordion-body pt-4 px-0 pb-0">

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Cooling Rate</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row row-cols-1 row-cols-md-2 g-3">
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Latest Maintenance</label>
                      <div class="col-12 col-sm-8">
                        <select id="Battery-Type" class="select2 form-select" data-placeholder="اختر" data-allow-clear="true">
                          <option></option>
                          <option value="1">وكالة</option>
                          <option value="2">تجاري</option>
                        </select>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="card shadow-none bg-transparent border border-secondary form-repeater m-0">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Cooling Rate Test</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-4 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-2 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">يمين</label>
                              <input type="text" class="form-control" id="insurance-company-from"  />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-2 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">يسار</label>
                              <input type="text" class="form-control" id="insurance-company-from"  />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="row">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card form-repeater mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">AC - Condition FILTER</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-4">

      <div class="card border-0 shadow-none bg-transparent m-0 accordion-item">
        <h2 class="accordion-header" id="headingVehicleLighting">
          <button
            type="button"
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize align-items-center shadow-none collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordionVehicleLighting"
            aria-expanded="false"
            aria-controls="accordionVehicleLighting"
          >
            Vehicle Lighting
          </button>
        </h2>
        <div
          id="accordionVehicleLighting"
          class="accordion-collapse collapse"
          aria-labelledby="headingVehicleLighting"
          data-bs-parent="#accordionTechnical"
        >
          <div class="accordion-body pt-4 px-0 pb-0">

            <div class="card">
              <div class="card-body">
                <div class="row row-cols-2 row-cols-md-2 g-3">
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Back Right - Basic</label>
                      <div class="col-12 col-sm-8">
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <label class="switch switch-lg">
                              <input type="checkbox" class="switch-input" />
                              <span class="switch-toggle-slider">
                                <span class="switch-on">
                                  <i class="ti ti-check"></i>
                                </span>
                                <span class="switch-off">
                                  <i class="ti ti-x"></i>
                                </span>
                              </span>
                            </label>
                          </div><!-- col-12 -->
                        </div><!-- row -->
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Back Right - Break</label>
                      <div class="col-12 col-sm-8">
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <label class="switch switch-lg">
                              <input type="checkbox" class="switch-input" />
                              <span class="switch-toggle-slider">
                                <span class="switch-on">
                                  <i class="ti ti-check"></i>
                                </span>
                                <span class="switch-off">
                                  <i class="ti ti-x"></i>
                                </span>
                              </span>
                            </label>
                          </div><!-- col-12 -->
                        </div><!-- row -->
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row row-cols-2 row-cols-md-2 g-3">
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Back Left - Basic</label>
                      <div class="col-12 col-sm-8">
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <label class="switch switch-lg">
                              <input type="checkbox" class="switch-input" />
                              <span class="switch-toggle-slider">
                                <span class="switch-on">
                                  <i class="ti ti-check"></i>
                                </span>
                                <span class="switch-off">
                                  <i class="ti ti-x"></i>
                                </span>
                              </span>
                            </label>
                          </div><!-- col-12 -->
                        </div><!-- row -->
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Back Left - Break</label>
                      <div class="col-12 col-sm-8">
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <label class="switch switch-lg">
                              <input type="checkbox" class="switch-input" />
                              <span class="switch-toggle-slider">
                                <span class="switch-on">
                                  <i class="ti ti-check"></i>
                                </span>
                                <span class="switch-off">
                                  <i class="ti ti-x"></i>
                                </span>
                              </span>
                            </label>
                          </div><!-- col-12 -->
                        </div><!-- row -->
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row row-cols-2 row-cols-md-2 g-3">
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Front Right - Basic</label>
                      <div class="col-12 col-sm-8">
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <label class="switch switch-lg">
                              <input type="checkbox" class="switch-input" />
                              <span class="switch-toggle-slider">
                                <span class="switch-on">
                                  <i class="ti ti-check"></i>
                                </span>
                                <span class="switch-off">
                                  <i class="ti ti-x"></i>
                                </span>
                              </span>
                            </label>
                          </div><!-- col-12 -->
                        </div><!-- row -->
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Front Right - L & H</label>
                      <div class="col-12 col-sm-8">
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <label class="switch switch-lg">
                              <input type="checkbox" class="switch-input" />
                              <span class="switch-toggle-slider">
                                <span class="switch-on">
                                  <i class="ti ti-check"></i>
                                </span>
                                <span class="switch-off">
                                  <i class="ti ti-x"></i>
                                </span>
                              </span>
                            </label>
                          </div><!-- col-12 -->
                        </div><!-- row -->
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="row row-cols-2 row-cols-md-2 g-3">
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Front Left - Basic</label>
                      <div class="col-12 col-sm-8">
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <label class="switch switch-lg">
                              <input type="checkbox" class="switch-input" />
                              <span class="switch-toggle-slider">
                                <span class="switch-on">
                                  <i class="ti ti-check"></i>
                                </span>
                                <span class="switch-off">
                                  <i class="ti ti-x"></i>
                                </span>
                              </span>
                            </label>
                          </div><!-- col-12 -->
                        </div><!-- row -->
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Front Left - L & H</label>
                      <div class="col-12 col-sm-8">
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <label class="switch switch-lg">
                              <input type="checkbox" class="switch-input" />
                              <span class="switch-toggle-slider">
                                <span class="switch-on">
                                  <i class="ti ti-check"></i>
                                </span>
                                <span class="switch-off">
                                  <i class="ti ti-x"></i>
                                </span>
                              </span>
                            </label>
                          </div><!-- col-12 -->
                        </div><!-- row -->
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                </div><!-- row -->
                <hr class="my-3">
                <div class="card shadow-none bg-transparent border border-secondary form-repeater m-0">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Lighting Details</h5>
                    <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                      <span class="ti ti-plus"></span>
                    </button>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div data-repeater-list="group-a">
                      <div data-repeater-item>
                        <div class="row align-items-end">
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                              <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                              <input type="text" class="form-control" id="defaultFormControlInput"/>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                            <div>
                              <label for="defaultFormControlInput" class="form-label">العداد</label>
                              <div class="input-group">
                                <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                                <span class="input-group-text" id="basic-addon11">كم</span>
                              </div>
                            </div>
                          </div>
                          <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                            <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                              <i class="ti ti-x ti-xs"></i>
                            </button>
                          </div>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- card-body -->
            </div><!-- card -->

          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-4">

      <div class="card border-0 shadow-none bg-transparent m-0 accordion-item">
        <h2 class="accordion-header" id="headingExternalNotes">
          <button
            type="button"
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize align-items-center shadow-none collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordionExternalNotes"
            aria-expanded="false"
            aria-controls="accordionExternalNotes"
          >
            الملاحظات
          </button>
        </h2>
        <div
          id="accordionExternalNotes"
          class="accordion-collapse collapse"
          aria-labelledby="headingExternalNotes"
          data-bs-parent="#accordionTechnical"
        >
          <div class="accordion-body pt-4 px-0 pb-0">

            <div class="card form-repeater mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">ملاحظات خارجية</h5>
                <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                  <span class="ti ti-plus"></span>
                </button>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div data-repeater-list="group-a">
                  <div data-repeater-item>
                    <div class="row align-items-end">
                      <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                        <div>
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div>
                      </div>
                      <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                        <div>
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div>
                      </div>
                      <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                        <div>
                          <label for="defaultFormControlInput" class="form-label">صورة</label>
                          <input class="form-control" type="file" id="formFile" />
                        </div>
                      </div>
                      <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                        <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                          <i class="ti ti-x ti-xs"></i>
                        </button>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card form-repeater mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">ملاحظات داخلية</h5>
                <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                  <span class="ti ti-plus"></span>
                </button>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div data-repeater-list="group-a">
                  <div data-repeater-item>
                    <div class="row align-items-end">
                      <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                        <div>
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div>
                      </div>
                      <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                        <div>
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div>
                      </div>
                      <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                        <div>
                          <label for="defaultFormControlInput" class="form-label">صورة</label>
                          <input class="form-control" type="file" id="formFile" />
                        </div>
                      </div>
                      <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                        <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                          <i class="ti ti-x ti-xs"></i>
                        </button>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card form-repeater mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">ملاحظات اسفل السياره</h5>
                <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                  <span class="ti ti-plus"></span>
                </button>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div data-repeater-list="group-a">
                  <div data-repeater-item>
                    <div class="row align-items-end">
                      <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                        <div>
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div>
                      </div>
                      <div class="mb-1 col-lg-6 col-xl-5 col-12 mb-0">
                        <div>
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div>
                      </div>
                      <div class="mb-1 col-lg-6 col-xl-3 col-12 mb-0">
                        <div>
                          <label for="defaultFormControlInput" class="form-label">صورة</label>
                          <input class="form-control" type="file" id="formFile" />
                        </div>
                      </div>
                      <div class="mb-1 col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
                        <button class="btn btn-icon btn-label-danger waves-effect" type="button" data-repeater-delete>
                          <i class="ti ti-x ti-xs"></i>
                        </button>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>
              </div><!-- card-body -->
            </div><!-- card -->

          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

    </div><!-- accordion -->

    <div class="button-area d-flex align-items-center justify-content-end">
      <button type="submit" class="btn btn-lg btn-primary px-5">حفظ</button>
    </div><!-- button-area -->

  </div><!-- technical-create-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>
  <script type="module">
    $(".select2").select2();

    $(".flatpickr-date").flatpickr({
      monthSelectorType: 'static',
      dateFormat: "d / m / Y",
    });

    $('.form-repeater').repeater({
      initEmpty: true,
      show: function () {
        $(this).slideDown();
        $(this).find(".flatpickr-date").flatpickr({
          monthSelectorType: 'static',
          dateFormat: "d / m / Y",
        });
      },
      hide: function (deleteElement) {
        if(confirm('Are you sure you want to delete this element?')) {
          $(this).slideUp(deleteElement);
        }
      },
      isFirstItemUndeletable: false
    });

    (function () {
      const classicPicker = document.querySelector('#color-picker-classic');
      if (classicPicker) {
        pickr.create({
          el: classicPicker,
          theme: 'classic',
          default: '#008000',
          swatches: [
            '#ffffff',
            '#FF0000',
            '#008000',
          ],
          components: {
            // Main components
            preview: false,
            opacity: false,
            hue: false,
            // Input / output Options
            interaction: {
              hex: false,
              rgba: false,
              hsla: false,
              hsva: false,
              cmyk: false,
              input: false,
              clear: false,
              save: true
            }
          }
        });
      }
    })();
  </script>
@endpush
