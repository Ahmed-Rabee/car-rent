@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/fancybox/fancybox.css') }}" />
@endpush

@section('content')

  <div id="technical-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-3">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">الحالة الفنية للمركبة : 9408 - TB</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="{{ url('/technical/{id}/edit') }}" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#technicalDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div><!-- d-flex -->

    <div class="card">
      <div class="card-body">
        <div class="row row-cols-2 row-cols-md-2 g-3">
          <div class="col">
            <p class="d-flex align-items-center justify-content-start gap-1 fw-medium m-0">رقم المركبة : <b>8977 - TB</b></p>
          </div><!-- col -->
          <div class="col">
            <p class="d-flex align-items-center justify-content-start gap-1 fw-medium m-0">
              مفتاح إحتياطي :
              <span class="badge badge-center bg-label-success"><i class="ti ti-check"></i></span>
              <span class="badge badge-center bg-label-danger"><i class="ti ti-x"></i></span>
            </p>
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
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize shadow-none shadow-none align-items-center collapsed"
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
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold p-2">التفاصيل</th>
                        <th class="fw-bold p-2" width="5%">التاريخ</th>
                        <th class="fw-bold p-2" width="5%">كم</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">2024-11-12</td>
                        <td class="p-2">36137</td>
                      </tr>
                      <tr>
                        <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                        <td class="p-2">2024-11-22</td>
                        <td class="p-2">85223</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                        <td class="p-2">2024-11-11</td>
                        <td class="p-2">78240</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجت راس مكينة</td>
                        <td class="p-2">2024-11-04</td>
                        <td class="p-2">10928</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card">
              <div class="card-header p-3 pb-0 d-flex align-items-center justify-content-start gap-3">
                <img src="{{ asset('assets/images/technical/technical-icon-2.svg') }}" height="24px">
                <h5 class="m-0 text-capitalize fw-semibold">Oil Last check</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold p-2">التفاصيل</th>
                        <th class="fw-bold p-2" width="5%">التاريخ</th>
                        <th class="fw-bold p-2" width="5%">كم</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">2024-11-12</td>
                        <td class="p-2">36137</td>
                      </tr>
                      <tr>
                        <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                        <td class="p-2">2024-11-22</td>
                        <td class="p-2">85223</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                        <td class="p-2">2024-11-11</td>
                        <td class="p-2">78240</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجت راس مكينة</td>
                        <td class="p-2">2024-11-04</td>
                        <td class="p-2">10928</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
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
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize shadow-none shadow-none align-items-center collapsed"
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
                    <p class="d-flex align-items-center justify-content-start gap-1 fw-medium m-0">
                      Date Filling : <b>24 / 01 / 2025</b>
                    </p>
                  </div><!-- col -->
                  <div class="col">
                    <p class="d-flex align-items-center justify-content-start gap-1 fw-medium m-0">
                      Water Color : <b>ابيض</b>
                    </p>
                  </div><!-- col -->
                  <div class="col">
                    <p class="d-flex align-items-center justify-content-start gap-1 fw-medium m-0">
                      Water Type : <b>مياة وكالة</b>
                    </p>
                  </div><!-- col -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Radiator</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Spark Coils</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                    <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-3">

      <div class="card border-0 shadow-none bg-transparent m-0 accordion-item">
        <h2 class="accordion-header" id="headingElectricity">
          <button
            type="button"
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize shadow-none shadow-none align-items-center collapsed"
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

            <div class="row mb-4">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">

                <div class="card mb-4">
                  <div class="card-header p-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Battery</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">نوع البطارية</th>
                            <th class="fw-bold p-2" width="5%">تاريخ التركيب</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
                  </div><!-- card-body -->
                </div><!-- card -->

                <div class="card m-0">
                  <div class="card-header p-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Battery Test</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Spark Plug</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Coils</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-3">

      <div class="card border-0 shadow-none bg-transparent m-0 accordion-item">
        <h2 class="accordion-header" id="headingTayrs">
          <button
            type="button"
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize shadow-none shadow-none align-items-center collapsed"
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Tire Rotation</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">الميزانية</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Spare</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold">كم</th>
                        <th class="fw-bold">الحساس</th>
                        <th class="fw-bold">الماركة</th>
                        <th class="fw-bold">تاريخ الإنتاج</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>1243</td>
                        <td><span class="badge bg-label-success">نعم</span></td>
                        <td>YOKOHAMA</td>
                        <td>22-24</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Spare Test</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold p-2">التفاصيل</th>
                        <th class="fw-bold p-2" width="5%">التاريخ</th>
                        <th class="fw-bold p-2" width="5%">كم</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">2024-11-12</td>
                        <td class="p-2">36137</td>
                      </tr>
                      <tr>
                        <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                        <td class="p-2">2024-11-22</td>
                        <td class="p-2">85223</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                        <td class="p-2">2024-11-11</td>
                        <td class="p-2">78240</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجت راس مكينة</td>
                        <td class="p-2">2024-11-04</td>
                        <td class="p-2">10928</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Front Right</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold">كم</th>
                        <th class="fw-bold">الحساس</th>
                        <th class="fw-bold">الماركة</th>
                        <th class="fw-bold">تاريخ الإنتاج</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>1243</td>
                        <td><span class="badge bg-label-success">نعم</span></td>
                        <td>YOKOHAMA</td>
                        <td>22-24</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Front Right Test</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold p-2">التفاصيل</th>
                        <th class="fw-bold p-2" width="5%">التاريخ</th>
                        <th class="fw-bold p-2" width="5%">كم</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">2024-11-12</td>
                        <td class="p-2">36137</td>
                      </tr>
                      <tr>
                        <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                        <td class="p-2">2024-11-22</td>
                        <td class="p-2">85223</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                        <td class="p-2">2024-11-11</td>
                        <td class="p-2">78240</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجت راس مكينة</td>
                        <td class="p-2">2024-11-04</td>
                        <td class="p-2">10928</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Front Left</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold">كم</th>
                        <th class="fw-bold">الحساس</th>
                        <th class="fw-bold">الماركة</th>
                        <th class="fw-bold">تاريخ الإنتاج</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>1243</td>
                        <td><span class="badge bg-label-success">نعم</span></td>
                        <td>YOKOHAMA</td>
                        <td>22-24</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Front Left Test</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold p-2">التفاصيل</th>
                        <th class="fw-bold p-2" width="5%">التاريخ</th>
                        <th class="fw-bold p-2" width="5%">كم</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">2024-11-12</td>
                        <td class="p-2">36137</td>
                      </tr>
                      <tr>
                        <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                        <td class="p-2">2024-11-22</td>
                        <td class="p-2">85223</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                        <td class="p-2">2024-11-11</td>
                        <td class="p-2">78240</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجت راس مكينة</td>
                        <td class="p-2">2024-11-04</td>
                        <td class="p-2">10928</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Back Right</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold">كم</th>
                        <th class="fw-bold">الحساس</th>
                        <th class="fw-bold">الماركة</th>
                        <th class="fw-bold">تاريخ الإنتاج</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>1243</td>
                        <td><span class="badge bg-label-success">نعم</span></td>
                        <td>YOKOHAMA</td>
                        <td>22-24</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Back Right Test</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold p-2">التفاصيل</th>
                        <th class="fw-bold p-2" width="5%">التاريخ</th>
                        <th class="fw-bold p-2" width="5%">كم</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">2024-11-12</td>
                        <td class="p-2">36137</td>
                      </tr>
                      <tr>
                        <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                        <td class="p-2">2024-11-22</td>
                        <td class="p-2">85223</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                        <td class="p-2">2024-11-11</td>
                        <td class="p-2">78240</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجت راس مكينة</td>
                        <td class="p-2">2024-11-04</td>
                        <td class="p-2">10928</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Back Left</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold">كم</th>
                        <th class="fw-bold">الحساس</th>
                        <th class="fw-bold">الماركة</th>
                        <th class="fw-bold">تاريخ الإنتاج</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>1243</td>
                        <td><span class="badge bg-label-success">نعم</span></td>
                        <td>YOKOHAMA</td>
                        <td>22-24</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Back Left Test</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold p-2">التفاصيل</th>
                        <th class="fw-bold p-2" width="5%">التاريخ</th>
                        <th class="fw-bold p-2" width="5%">كم</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">2024-11-12</td>
                        <td class="p-2">36137</td>
                      </tr>
                      <tr>
                        <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                        <td class="p-2">2024-11-22</td>
                        <td class="p-2">85223</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                        <td class="p-2">2024-11-11</td>
                        <td class="p-2">78240</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجت راس مكينة</td>
                        <td class="p-2">2024-11-04</td>
                        <td class="p-2">10928</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
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
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize shadow-none shadow-none align-items-center collapsed"
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Transmission Mount</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Rod</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Bushing</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Shock</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Absorbers</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">AXLE</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">SEAL</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Lower Arm</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Bearing Front</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Bearing Back</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Drum  Lathe Front</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Drum  Lathe Back</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Bad Brakes Front</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Bad Brakes Back</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card mb-4">
                  <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Brake OIL</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                            <th class="fw-bold p-2" width="5%">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">سير مجموعة جديد وكالة</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">36137</td>
                          </tr>
                          <tr>
                            <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                            <td class="p-2">2024-11-22</td>
                            <td class="p-2">85223</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                            <td class="p-2">2024-11-11</td>
                            <td class="p-2">78240</td>
                          </tr>
                          <tr>
                            <td class="p-2">جازجت راس مكينة</td>
                            <td class="p-2">2024-11-04</td>
                            <td class="p-2">10928</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-12 -->
            </div><!-- row -->

          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <hr class="my-3">

      <div class="card border-0 shadow-none bg-transparent m-0 accordion-item">
        <h2 class="accordion-header" id="headingAirCondition">
          <button
            type="button"
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize shadow-none shadow-none align-items-center shadow-none collapsed"
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

            <div class="row mb-4">
              <div class="col-12 col-md-1">
                <div class="d-flex align-items-center justify-content-center">
                  <img src="https://i.postimg.cc/kgnd9st2/erba.png" alt="" class="w-auto h-auto mw-100" style="max-height: 75px;">
                </div><!-- d-flex -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-11">
                <div class="card mb-4">
                  <div class="card-header p-3">
                    <h5 class="m-0 text-capitalize fw-semibold">AC - Condition FILTER</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">نوع الفلتر</th>
                            <th class="fw-bold p-2">حالة الفلتر</th>
                            <th class="fw-bold p-2">نوع الفلتر</th>
                            <th class="fw-bold p-2">تاريخ التركيب</th>
                            <th class="fw-bold p-2">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">وكالة</td>
                            <td class="p-2">جديد</td>
                            <td class="p-2">AWS</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">3473</td>
                          </tr>
                          <tr>
                            <td class="p-2">وكالة</td>
                            <td class="p-2">جديد</td>
                            <td class="p-2">AWS</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">3473</td>
                          </tr>
                          <tr>
                            <td class="p-2">وكالة</td>
                            <td class="p-2">جديد</td>
                            <td class="p-2">AWS</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">3473</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
                  </div><!-- card-body -->
                </div><!-- card -->

                <div class="card m-0">
                  <div class="card-header p-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Cooling Rate Test</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">التفاصيل</th>
                            <th class="fw-bold p-2">يمين</th>
                            <th class="fw-bold p-2">يسار</th>
                            <th class="fw-bold p-2" width="5%">التاريخ</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">وكالة</td>
                            <td class="p-2">جديد</td>
                            <td class="p-2">AWS</td>
                            <td class="p-2">2024-11-12</td>
                          </tr>
                          <tr>
                            <td class="p-2">وكالة</td>
                            <td class="p-2">جديد</td>
                            <td class="p-2">AWS</td>
                            <td class="p-2">2024-11-12</td>
                          </tr>
                          <tr>
                            <td class="p-2">وكالة</td>
                            <td class="p-2">جديد</td>
                            <td class="p-2">AWS</td>
                            <td class="p-2">2024-11-12</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
                <div class="card">
                  <div class="card-header p-3">
                    <h5 class="m-0 text-capitalize fw-semibold">Air FILTER</h5>
                  </div><!-- card-header -->
                  <div class="card-body p-3 pt-0">
                    <div class="table-responsive text-nowrap">
                      <table class="table table-striped table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="fw-bold p-2">نوع الفلتر</th>
                            <th class="fw-bold p-2">حالة الفلتر</th>
                            <th class="fw-bold p-2">تاريخ التركيب</th>
                            <th class="fw-bold p-2">كم</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <tr>
                            <td class="p-2">وكالة</td>
                            <td class="p-2">جديد</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">343433</td>
                          </tr>
                          <tr>
                            <td class="p-2">وكالة</td>
                            <td class="p-2">جديد</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">343433</td>
                          </tr>
                          <tr>
                            <td class="p-2">وكالة</td>
                            <td class="p-2">جديد</td>
                            <td class="p-2">2024-11-12</td>
                            <td class="p-2">343433</td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
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
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize shadow-none shadow-none align-items-center collapsed"
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
            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Lighting Details</h5>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row row-cols-2 row-cols-md-2 g-3">
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Back Right - Basic</label>
                      <div class="col-12 col-sm-8">
                        <span class="badge badge-center bg-label-success"><i class="ti ti-check"></i></span>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Back Right - Break</label>
                      <div class="col-12 col-sm-8">
                        <span class="badge badge-center bg-label-danger"><i class="ti ti-x"></i></span>
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
                        <span class="badge badge-center bg-label-success"><i class="ti ti-check"></i></span>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Back Left - Break</label>
                      <div class="col-12 col-sm-8">
                        <span class="badge badge-center bg-label-danger"><i class="ti ti-x"></i></span>
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
                        <span class="badge badge-center bg-label-success"><i class="ti ti-check"></i></span>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Front Right - L & H</label>
                      <div class="col-12 col-sm-8">
                        <span class="badge badge-center bg-label-danger"><i class="ti ti-x"></i></span>
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
                        <span class="badge badge-center bg-label-success"><i class="ti ti-check"></i></span>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                  <div class="col">
                    <div class="row align-items-center">
                      <label class="col-sm-4 col-form-label fw-medium" for="car-number">Front Left - L & H</label>
                      <div class="col-12 col-sm-8">
                        <span class="badge badge-center bg-label-danger"><i class="ti ti-x"></i></span>
                      </div><!-- col-12 -->
                    </div><!-- row -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">Lighting Test</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold p-2">التفاصيل</th>
                        <th class="fw-bold p-2" width="5%">التاريخ</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">2024-11-12</td>
                      </tr>
                      <tr>
                        <td class="p-2">يوجد ليك قديم اسفل راس المكينه</td>
                        <td class="p-2">2024-11-22</td>
                      </tr>
                      <tr>
                        <td class="p-2">جازجيت+حلقات بستم+مخرطة 4 بستم</td>
                        <td class="p-2">2024-11-11</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
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
            class="accordion-button bg-transparent p-0 fs-4 fw-semibold text-capitalize shadow-none shadow-none align-items-center collapsed"
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

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">ملاحظات خارجية</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold p-2" width="5%">صورة</th>
                        <th class="fw-bold p-2">التفاصيل</th>
                        <th class="fw-bold p-2" width="5%">التاريخ</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td class="p-2">
                          <a href="../../assets/img/elements/11.jpg" data-fancybox data-caption="بطاقة الهوية">
                            <img src="../../assets/img/elements/11.jpg" class="rounded-1 m-0" alt="بطاقة الهوية" height="32" width="32">
                          </a>
                        </td>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">18 / 11 / 2024</td>
                      </tr>
                      <tr>
                        <td class="p-2">
                          <a href="../../assets/img/elements/11.jpg" data-fancybox data-caption="بطاقة الهوية">
                            <img src="../../assets/img/elements/11.jpg" class="rounded-1 m-0" alt="بطاقة الهوية" height="32" width="32">
                          </a>
                        </td>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">18 / 11 / 2024</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">ملاحظات داخلية</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold p-2" width="5%">صورة</th>
                        <th class="fw-bold p-2">التفاصيل</th>
                        <th class="fw-bold p-2" width="5%">التاريخ</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td class="p-2">
                          <a href="../../assets/img/elements/11.jpg" data-fancybox data-caption="بطاقة الهوية">
                            <img src="../../assets/img/elements/11.jpg" class="rounded-1 m-0" alt="بطاقة الهوية" height="32" width="32">
                          </a>
                        </td>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">18 / 11 / 2024</td>
                      </tr>
                      <tr>
                        <td class="p-2">
                          <a href="../../assets/img/elements/11.jpg" data-fancybox data-caption="بطاقة الهوية">
                            <img src="../../assets/img/elements/11.jpg" class="rounded-1 m-0" alt="بطاقة الهوية" height="32" width="32">
                          </a>
                        </td>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">18 / 11 / 2024</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mb-4">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">ملاحظات اسفل السياره</h5>
              </div><!-- card-header -->
              <div class="card-body p-3 pt-0">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th class="fw-bold p-2" width="5%">صورة</th>
                        <th class="fw-bold p-2">التفاصيل</th>
                        <th class="fw-bold p-2" width="5%">التاريخ</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td class="p-2">
                          <a href="../../assets/img/elements/11.jpg" data-fancybox data-caption="بطاقة الهوية">
                            <img src="../../assets/img/elements/11.jpg" class="rounded-1 m-0" alt="بطاقة الهوية" height="32" width="32">
                          </a>
                        </td>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">18 / 11 / 2024</td>
                      </tr>
                      <tr>
                        <td class="p-2">
                          <a href="../../assets/img/elements/11.jpg" data-fancybox data-caption="بطاقة الهوية">
                            <img src="../../assets/img/elements/11.jpg" class="rounded-1 m-0" alt="بطاقة الهوية" height="32" width="32">
                          </a>
                        </td>
                        <td class="p-2">سير مجموعة جديد وكالة</td>
                        <td class="p-2">18 / 11 / 2024</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card-body -->
            </div><!-- card -->

          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

    </div><!-- accordion -->

    <!-- Technical Delete Modal -->
    <div class="modal fade" id="technicalDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="technicalDeleteModalLabel1">حذف الحالة الفنية للمركبة : 9408 - TB</h5>
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف الحالة الفنية ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Technical Delete Modal -->

  </div><!-- technical-view-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/fancybox/fancybox.umd.js') }}"></script>
  <script>
    Fancybox.bind("[data-fancybox]");
  </script>
@endpush
