@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endpush

@section('content')

  <div id="technical-create-page">

    <h4 class="m-0 mb-3">إضافة حالة فنية جديدة</h4>

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
            <p class="d-flex align-items-center justify-content-start gap-1 fw-medium m-0">الماركة : <b>AVEO</b></p>
          </div><!-- col -->
          <div class="col">
            <p class="d-flex align-items-center justify-content-start gap-1 fw-medium m-0">الموديل : <b>AVEO</b></p>
          </div><!-- col -->
          <div class="col">
            <p class="d-flex align-items-center justify-content-start gap-1 fw-medium m-0">الفئة : <b>AVEO</b></p>
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- card-body -->
    </div><!-- card -->

    <hr class="my-3">

    <div class="accordion mb-3" id="accordionTechnical">

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
          <div class="accordion-body pt-3 px-0 pb-0">
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-1.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Status General Mechanical</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-2.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Oil Last check</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-3">

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
          <div class="accordion-body pt-3 px-0 pb-0">
            <div class="card mb-3">
              <div class="card-body p-3">
                <div class="row row-cols-1 row-cols-md-3 g-3">
                  <div class="col">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">Date Filling</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">Water Color</label>
                      <select id="car-color" class="select2-color-car form-select" data-allow-clear="false" data-placeholder="اختر" data-minimum-results-for-search="Infinity">
                        <option></option>
                        <option value="red" data-class="car-red">احمر</option>
                        <option value="white" data-class="car-white">ابيض</option>
                        <option value="blue" data-class="car-blue">ازرق</option>
                        <option value="gray" data-class="car-gray">رمادي</option>
                        <option value="maroon" data-class="car-maroon">عنابي</option>
                        <option value="yellow" data-class="car-yellow">اصفر</option>
                        <option value="black" data-class="car-black">اسود</option>
                      </select>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">Water Type</label>
                      <select id="car-water-type" class="select2 form-select" data-placeholder="اختر" data-allow-clear="false" data-minimum-results-for-search="Infinity">
                        <option></option>
                        <option value="1">مياة وكالة</option>
                        <option value="2">مياة تجاري</option>
                        <option value="3">مياة عادية</option>
                      </select>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-3.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Coolant Overflow Tank</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-4.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">radiator</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-3">

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
          <div class="accordion-body pt-3 px-0 pb-0">
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-5.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Battery</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">نوع البطارية</label>
                      <select id="battary-type" class="select2 form-select" data-placeholder="اختر" data-allow-clear="flase" data-minimum-results-for-search="Infinity">
                        <option></option>
                        <option value="1">وكالة</option>
                        <option value="2">تجاري</option>
                      </select>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">تاريخ التركيب</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-8.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Battery Test</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-6.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Spark Plug</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-7.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Coils</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-3">

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
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-9.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Tire Rotation</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-10.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">ميزانية الترصيص</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-11.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Spare</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row row-cols-1 row-cols-md-4 g-3">
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">Sensor</label>
                      <select id="spare-sensor" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                        <option></option>
                        <option value="1">نعم</option>
                        <option value="2">لا</option>
                      </select>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">Brand</label>
                      <select id="spare-brand" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                        <option></option>
                        <option value="1">8977 - TB</option>
                        <option value="2">7565 - T</option>
                        <option value="3">9856 - TH</option>
                        <option value="4">5709 - TB</option>
                      </select>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">تاريخ الإنتاج</label>
                      <input type="number" inputmode="numeric" class="form-control" />
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">K.M</label>
                      <div class="input-group">
                        <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                </div><!-- row -->
                <hr class="my-3">
                <h5 class="card-title">Spare Test</h5>
                <div class="row g-3">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Front Right</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row row-cols-1 row-cols-md-4 g-3">
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="front-right-sensor">Sensor</label>
                      <select id="front-right-sensor" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                        <option></option>
                        <option value="1">نعم</option>
                        <option value="2">لا</option>
                      </select>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">Brand</label>
                      <select id="front-right-brand" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                        <option></option>
                        <option value="1">8977 - TB</option>
                        <option value="2">7565 - T</option>
                        <option value="3">9856 - TH</option>
                        <option value="4">5709 - TB</option>
                      </select>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">تاريخ الإنتاج</label>
                      <input type="number" inputmode="numeric" class="form-control" />
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">K.M</label>
                      <div class="input-group">
                        <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                </div><!-- row -->
                <hr class="my-3">
                <h5 class="card-title">Front Right Test</h5>
                <div class="row g-3">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Front Left</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row row-cols-1 row-cols-md-4 g-3">
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="front-left-sensor">Sensor</label>
                      <select id="front-left-sensor" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                        <option></option>
                        <option value="1">نعم</option>
                        <option value="2">لا</option>
                      </select>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">Brand</label>
                      <select id="front-left-brand" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                        <option></option>
                        <option value="1">8977 - TB</option>
                        <option value="2">7565 - T</option>
                        <option value="3">9856 - TH</option>
                        <option value="4">5709 - TB</option>
                      </select>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">تاريخ الإنتاج</label>
                      <input type="number" inputmode="numeric" class="form-control" />
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">K.M</label>
                      <div class="input-group">
                        <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                </div><!-- row -->
                <hr class="my-3">
                <h5 class="card-title">Front Left Test</h5>
                <div class="row g-3">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Back Right</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row row-cols-1 row-cols-md-4 g-3">
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="back-right-sensor">Sensor</label>
                      <select id="back-right-sensor" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                        <option></option>
                        <option value="1">نعم</option>
                        <option value="2">لا</option>
                      </select>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">Brand</label>
                      <select id="back-right-brand" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                        <option></option>
                        <option value="1">8977 - TB</option>
                        <option value="2">7565 - T</option>
                        <option value="3">9856 - TH</option>
                        <option value="4">5709 - TB</option>
                      </select>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">تاريخ الإنتاج</label>
                      <input type="number" inputmode="numeric" class="form-control" />
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">K.M</label>
                      <div class="input-group">
                        <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                </div><!-- row -->
                <hr class="my-3">
                <h5 class="card-title">Back Right Test</h5>
                <div class="row g-3">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Back Left</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row row-cols-1 row-cols-md-4 g-3">
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="back-left-sensor">Sensor</label>
                      <select id="back-left-sensor" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                        <option></option>
                        <option value="1">نعم</option>
                        <option value="2">لا</option>
                      </select>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">Brand</label>
                      <select id="back-left-brand" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                        <option></option>
                        <option value="1">8977 - TB</option>
                        <option value="2">7565 - T</option>
                        <option value="3">9856 - TH</option>
                        <option value="4">5709 - TB</option>
                      </select>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">تاريخ الإنتاج</label>
                      <input type="number" inputmode="numeric" class="form-control" />
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6" for="employee-sex">K.M</label>
                      <div class="input-group">
                        <input type="number" class="form-control" value="43438" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                </div><!-- row -->
                <hr class="my-3">
                <h5 class="card-title">Back Left Test</h5>
                <div class="row g-3">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-3">

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
            <div class="row row-cols-1 row-cols-md-2 g-3">
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-18.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">Transmission Mount</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-19.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">Rod</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">Bushing</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">Shock</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">Absorbers</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-17.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">AXLE</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">SEAL</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">Lower Arm</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">Bearing Front</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">Bearing Back</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">Drum Lathe Front</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">Drum Lathe Back</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">Bad Brakes Front</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">Bad Brakes Back</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col">
                <div class="card">
                  <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                    <img src="{{ asset('assets/images/technical/technical-icon-12.svg') }}" height="24px">
                    <h5 class="m-0 text-capitalize fw-semibold">Brake OIL</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3">
                    <div class="row g-3">
                      <div class="col-12">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                          <input type="text" class="form-control" id="defaultFormControlInput"/>
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                          <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                        </div><!-- formGroup -->
                      </div><!-- col -->
                      <div class="col-6">
                        <div class="formGroup">
                          <label for="defaultFormControlInput" class="form-label">العداد</label>
                          <div class="input-group">
                            <input type="number" class="form-control" aria-describedby="basic-addon11">
                            <span class="input-group-text" id="basic-addon11">كم</span>
                          </div><!-- input-group -->
                        </div><!-- formGroup -->
                      </div><!-- col -->
                    </div><!-- row -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-3">

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
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-13.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">AC - Condition FILTER</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row row-cols-1 row-cols-md-4 g-3">
                  <div class="col">
                    <div class="from-group">
                      <label class="form-label mb-2" for="latest-maintenance">نوع الفلتر</label>
                      <select id="latest-maintenance" class="select2 form-select" data-placeholder="اختر" data-allow-clear="flase" data-minimum-results-for-search="Infinity">
                        <option></option>
                        <option value="1">وكالة</option>
                        <option value="2">تجاري</option>
                      </select>
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group">
                      <label class="form-label mb-2" for="filter-status">حالة الفلتر</label>
                      <select id="filter-status" class="select2 form-select" data-placeholder="اختر" data-allow-clear="flase" data-minimum-results-for-search="Infinity">
                        <option></option>
                        <option value="1">وكالة</option>
                        <option value="2">تجاري</option>
                      </select>
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group">
                      <label class="form-label mb-2" for="car-statuss">تاريخ التركيب</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col-6">
                    <div class="from-group">
                      <label class="form-label mb-2" for="car-statuss">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- from-group -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-14.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Cooling Rate Test</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row row-cols-1 row-cols-md-4 g-3">
                  <div class="col">
                    <div class="from-group">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group">
                      <label for="defaultFormControlInput" class="form-label">يمين</label>
                      <input type="text" class="form-control" id="insurance-company-from"  />
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group">
                      <label for="defaultFormControlInput" class="form-label">يسار</label>
                      <input type="text" class="form-control" id="insurance-company-from"  />
                    </div><!-- from-group -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-15.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Air FILTER</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row row-cols-1 row-cols-md-4 g-3">
                  <div class="col">
                    <div class="from-group">
                      <label class="form-label mb-2" for="latest-maintenance">نوع الفلتر</label>
                      <select id="latest-maintenance" class="select2 form-select" data-placeholder="اختر" data-allow-clear="flase" data-minimum-results-for-search="Infinity">
                        <option></option>
                        <option value="1">وكالة</option>
                        <option value="2">تجاري</option>
                      </select>
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group">
                      <label class="form-label mb-2" for="filter-status">حالة الفلتر</label>
                      <select id="filter-status" class="select2 form-select" data-placeholder="اختر" data-allow-clear="flase" data-minimum-results-for-search="Infinity">
                        <option></option>
                        <option value="1">وكالة</option>
                        <option value="2">تجاري</option>
                      </select>
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group">
                      <label class="form-label mb-2" for="car-statuss">تاريخ التركيب</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col-6">
                    <div class="from-group">
                      <label class="form-label mb-2" for="car-statuss">العداد</label>
                      <div class="input-group">
                        <input type="number" class="form-control" aria-describedby="basic-addon11">
                        <span class="input-group-text" id="basic-addon11">كم</span>
                      </div><!-- input-group -->
                    </div><!-- from-group -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-3">

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
              <div class="card-body p-3">
                <div class="row row-cols-2 row-cols-md-4 g-4">
                  <div class="col">
                    <div class="from-group d-flex align-items-center justify-content-start gap-3">
                      <label for="back-right-basic" class="form-label m-0 fs-6">Back Right - Basic</label>
                      <label class="switch switch-lg">
                        <input type="checkbox" class="switch-input" id="back-right-basic" />
                        <span class="switch-toggle-slider">
                          <span class="switch-on">
                            <i class="ti ti-check"></i>
                          </span>
                          <span class="switch-off">
                            <i class="ti ti-x"></i>
                          </span>
                        </span>
                      </label>
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group d-flex align-items-center justify-content-start gap-3">
                      <label for="back-right-break" class="form-label m-0 fs-6">Back Right - Break</label>
                      <label class="switch switch-lg">
                        <input type="checkbox" class="switch-input" id="back-right-break" />
                        <span class="switch-toggle-slider">
                          <span class="switch-on">
                            <i class="ti ti-check"></i>
                          </span>
                          <span class="switch-off">
                            <i class="ti ti-x"></i>
                          </span>
                        </span>
                      </label>
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group d-flex align-items-center justify-content-start gap-3">
                      <label for="back-left-basic" class="form-label m-0 fs-6">Back Left - Basic</label>
                      <label class="switch switch-lg">
                        <input type="checkbox" class="switch-input" id="back-left-basic" />
                        <span class="switch-toggle-slider">
                          <span class="switch-on">
                            <i class="ti ti-check"></i>
                          </span>
                          <span class="switch-off">
                            <i class="ti ti-x"></i>
                          </span>
                        </span>
                      </label>
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group d-flex align-items-center justify-content-start gap-3">
                      <label for="back-left-break" class="form-label m-0 fs-6">Back Left - Break</label>
                      <label class="switch switch-lg">
                        <input type="checkbox" class="switch-input" id="back-left-break" />
                        <span class="switch-toggle-slider">
                          <span class="switch-on">
                            <i class="ti ti-check"></i>
                          </span>
                          <span class="switch-off">
                            <i class="ti ti-x"></i>
                          </span>
                        </span>
                      </label>
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group d-flex align-items-center justify-content-start gap-3">
                      <label for="front-right-basic" class="form-label m-0 fs-6">Front Right - Basic</label>
                      <label class="switch switch-lg">
                        <input type="checkbox" class="switch-input" id="front-right-basic" />
                        <span class="switch-toggle-slider">
                          <span class="switch-on">
                            <i class="ti ti-check"></i>
                          </span>
                          <span class="switch-off">
                            <i class="ti ti-x"></i>
                          </span>
                        </span>
                      </label>
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group d-flex align-items-center justify-content-start gap-3">
                      <label for="front-right-lh" class="form-label m-0 fs-6">Front Right - L & H</label>
                      <label class="switch switch-lg">
                        <input type="checkbox" class="switch-input" id="front-right-lh" />
                        <span class="switch-toggle-slider">
                          <span class="switch-on">
                            <i class="ti ti-check"></i>
                          </span>
                          <span class="switch-off">
                            <i class="ti ti-x"></i>
                          </span>
                        </span>
                      </label>
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group d-flex align-items-center justify-content-start gap-3">
                      <label for="front-left-basic" class="form-label m-0 fs-6">Front Left - Basic</label>
                      <label class="switch switch-lg">
                        <input type="checkbox" class="switch-input" id="front-left-basic" />
                        <span class="switch-toggle-slider">
                          <span class="switch-on">
                            <i class="ti ti-check"></i>
                          </span>
                          <span class="switch-off">
                            <i class="ti ti-x"></i>
                          </span>
                        </span>
                      </label>
                    </div><!-- from-group -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="from-group d-flex align-items-center justify-content-start gap-3">
                      <label for="front-left-lh" class="form-label m-0 fs-6">Front Left - L & H</label>
                      <label class="switch switch-lg">
                        <input type="checkbox" class="switch-input" id="front-left-lh" />
                        <span class="switch-toggle-slider">
                          <span class="switch-on">
                            <i class="ti ti-check"></i>
                          </span>
                          <span class="switch-off">
                            <i class="ti ti-x"></i>
                          </span>
                        </span>
                      </label>
                    </div><!-- from-group -->
                  </div><!-- col -->
                </div><!-- row -->
                <hr class="my-3">
                <h5 class="card-title">Lighting Details</h5>
                <div class="row g-3">
                  <div class="col-12 col-md-8">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
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
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-16.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">ملاحظات داخلية</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">الصورة</label>
                      <input class="form-control" type="file" id="formFile" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card mb-3">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-16.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">ملاحظات خارجية</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">الصورة</label>
                      <input class="form-control" type="file" id="formFile" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-16.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">ملاحظات اسفل السياره</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التفاصيل</label>
                      <input type="text" class="form-control" id="defaultFormControlInput"/>
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">التاريخ</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY / MM / DD" id="insurance-company-from" readonly="readonly" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                  <div class="col-12 col-md-3">
                    <div class="formGroup">
                      <label for="defaultFormControlInput" class="form-label">الصورة</label>
                      <input class="form-control" type="file" id="formFile" />
                    </div><!-- formGroup -->
                  </div><!-- col -->
                </div><!-- row -->
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
  <script type="module">
    // --------------------------------------------------------------------
    // Select2
    // --------------------------------------------------------------------
    $(document).ready(function() {
      $('.select2').select2();
      $('.select2-color-car').select2({
        containerCssClass: 'color-car-dropdown',
        templateResult: function(option) {
          if (!option.id) {
            return option.text; // Return text for placeholder
          }
          const $option = $(`<div class="car-class-option ${option.element.className}"><div class="color-box" style="background-color: ${option.id};"></div> ${option.text}</div>`);
          return $option;
        },
        templateSelection: function(option) {
          if (option.id) {
            const colorValue = option.id;
            const $selection = $(`<span><div class="color-box" style="background-color: ${colorValue}; display: inline-block;"></div>${option.text}</span>`);
            return $selection;
          } else {
            return 'اختر'; // Placeholder text
          }
        }
      });
    });

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
