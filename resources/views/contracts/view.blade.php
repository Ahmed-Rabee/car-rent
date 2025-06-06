@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endpush

@section('content')

  <div id="contracts-view-page">

    <h4 class="mb-3">تفاصيل عقد : 9408</h4>

    <div class="alert alert-warning d-flex align-items-center" role="alert">
      <span class="alert-icon text-warning me-2"><i class="ti ti-contract ti-xs"></i></span>
      هذا العقد تابع لحجز برقم - <a href="{{ url('/reservations/{id}/view') }}" class="alert-link text-decoration-underline">#45435</a>
    </div><!-- alert -->

    <div class="alert alert-danger alert-dismissible d-flex align-items-baseline" role="alert">
      <span class="alert-icon alert-icon-lg text-danger me-2"><i class="ti ti-ban ti-sm"></i></span>
      <div class="d-flex flex-column ps-1">
        <h5 class="alert-heading mb-2">
          <span class="d-flex gap-1">يوجد مديونية علي هذا العقد بقيمة <b>500</b> ريال</span>
        </h5>
        <p class="mb-1">تكلفة نظافة المركبة وتكلفة اصلاح النور الامامي</p>
        <small class="d-flex align-items-center justify-content-start gap-1">تاريخ الإستحقاق : <b>2024-12-26</b></small>
      </div><!-- d-flex -->
    </div><!-- alert -->

    <div class="buttons-area d-flex align-items-center justify-content-start gap-3 flex-wrap mb-3">
      <a href="{{ url('/contracts/{id}/edit') }}" class="btn btn-info waves-effect waves-light btn-sm">
        <span class="ti-xs ti ti-pencil me-1"></span> تعديل العقد
      </a>
      <a href="{{ url('/contracts/print') }}" class="btn btn-dark waves-effect waves-light btn-sm">
        <span class="ti-xs ti ti-printer me-1"></span> طباعة العقد
      </a>
      <button type="button" class="btn btn-primary waves-effect waves-light btn-sm" data-bs-toggle="modal" data-bs-target="#addTrafficViolationModal">
        <span class="ti-xs ti ti-traffic-lights me-1"></span> إضافة مخالفة مرورية
      </button>
    </div><!-- card-buttons-area -->

    <div class="row g-3">
      <div class="col-12 col-md-9 order-2 order-md-1">
        <div class="row row-cols-1 row-cols-md-2 g-3">
          <div class="col">
            <div class="card">
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <tbody class="table-border-bottom-0">
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">رقم العقد</td>
                      <td class="p-3"><b>8654</b></td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">رقم الحجز</td>
                      <td class="p-3"><b>9684</b></td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">المركبة</td>
                      <td class="p-3"><b><a href="{{ url('/cars/{id}/view') }}" title="#" dir="ltr">TB - 2343</a></b></td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">تاريخ الاستلام</td>
                      <td class="p-3"><b dir="ltr">12-12-2024 12:32 PM</b></td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">مكان الاستلام</td>
                      <td class="p-3"><b>المطار</b></td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">تاريخ العودة</td>
                      <td class="p-3"><b dir="ltr">12-12-2024 12:32 PM</b></td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">مكان العودة</td>
                      <td class="p-3"><b>الفندق</b></td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">الكاتب</td>
                      <td class="p-3"><b>محمد مصطفي</b></td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- table-responsive -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col">
            <div class="card">
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <tbody class="table-border-bottom-0">
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">العميل</td>
                      <td class="p-3">
                        <b><a href="{{ url('/clients/{id}/view') }}" title="#">محمد احمد محمود</a></b>
                      </td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">اسم الشركة</td>
                      <td class="p-3"><b>-</b></td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">الفرع</td>
                      <td class="p-3"><b><a href="{{ url('/branches/{id}/view') }}" title="#">فرع الواحة</a></b></td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">خدمة التوصيل</td>
                      <td class="p-3"><b>مدفوع</b></td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">حالة النظافة</td>
                      <td class="p-3"><b>نظيفة</b></td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">نوع التآمين</td>
                      <td class="p-3"><b>الإمارات العربية المتحدة</b></td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">الكيلو متر الحالي</td>
                      <td class="p-3"><b dir="ltr">243243 K.M</b></td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">حالة العقد</td>
                      <td class="p-3">
                        <span class="badge bg-label-success">ساري</span>
                        <span class="badge bg-label-secondary">منتهي</span>
                        <span class="badge bg-label-danger">ملغي</span>
                        <span class="badge bg-label-warning">مديونية</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- table-responsive -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 w-100">
            <div class="card">
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <tbody class="table-border-bottom-0">
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">حالة البترول</td>
                      <td class="p-3">
                        <div class="row g-3">
                          <div class="col-12 col-md-6">
                            <div class="pb-4">
                              <div id="slider-pips"></div>
                            </div>
                          </div><!-- col-12 -->
                          <div class="col-12 col-md-6">
                            <b>4353 كم</b>
                          </div><!-- col-12 -->
                        </div><!-- row -->
                      </td>
                    </tr>
                    <tr>
                      <td width="5%" class="p-3 text-nowrap">الملاحظات</td>
                      <td class="p-3"><b>الملاحظات الملاحظات الملاحظات الملاحظات الملاحظات الملاحظات الملاحظات الملاحظات</b></td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- table-responsive -->
            </div><!-- card -->
          </div><!-- col-12 -->
        </div><!-- row -->
      </div><!-- col-12 -->
      <div class="col-12 col-md-3 order-1 order-md-2">
        <div class="reservation-cart-side position-sticky">
          <div class="card">
            <div class="card-body p-3">
              <ul class="d-flex flex-column gap-2 m-0 p-0 list-unstyled">
                <li class="d-flex align-items-center justify-content-between">
                  <span>مدة الإيجار :</span>
                  <p class="m-0">4 <small>ايام</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <span>السعر اليومي :</span>
                  <p class="m-0">123 <small>ريال</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <span>القيمة المضافة <small>(2%)</small> :</span>
                  <p class="m-0">2 <small>ريال</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <span>تكلفة خدمة التوصيل :</span>
                  <p class="m-0">123 <small>ريال</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between text-danger">
                  <span>خصم :</span>
                  <p class="m-0">- 123 <small>ريال</small></p>
                </li>
              </ul>
              <hr class="my-3">
              <div class="total-amount d-flex align-items-center justify-content-between fw-bold">
                <span>إجمالي المبلغ :</span>
                <p class="m-0">2000 <small>ريال</small></p>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
          <a href="{{ url('/contracts/{id}/confirmation') }}" class="btn btn-lg btn-success waves-effect waves-light w-100 mt-3">تقفيل العقد</a>
          <button type="button" class="btn btn-lg btn-info waves-effect waves-light w-100 mt-3" data-bs-toggle="modal" data-bs-target="#contractDebtRepaymentModal">سداد المديونية</button>
          <button type="button" class="btn btn-lg btn-danger waves-effect waves-light w-100 mt-3" data-bs-toggle="modal" data-bs-target="#contractCancelModal">إلغاء العقد</button>
        </div><!-- reservation-cart-side -->
      </div><!-- col-12 -->
    </div><!-- row -->

    <!-- Cancel Contract Modal -->
    <div class="modal fade" id="contractCancelModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="contractCancelModalLabel1">إلغاء العقد</h5>
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد إلغاء العقد ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم</button>
          </div><!-- modal-footer -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <!-- Cancel Contract Modal -->

    <!-- Debt Repayment Contract Modal -->
    <div class="modal fade" id="contractDebtRepaymentModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="contractDebtRepaymentModalLabel1">سداد المدونية</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label" for="car-number">مبلغ المديونية</label>
              <div class="col-12 col-sm-8">
                <b class="d-flex align-items-center justify-content-start gap-1">12121 <small>ريال</small></b>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label" for="car-number">المبلغ المدفوع</label>
              <div class="col-12 col-sm-8">
                <div class="input-group">
                  <input type="number" inputmode="numeric" id="oil-status" class="form-control">
                  <span class="input-group-text">ريال</span>
                </div><!-- input-group -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label" for="car-number">طريقة الدفع</label>
              <div class="col-12 col-sm-8">
                <select id="contract-payment-method" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر"  data-dropdown-parent="#contractDebtRepaymentModal">
                  <option></option>
                  <option value="free">نقداً</option>
                  <option value="payment2">POS</option>
                  <option value="payment3">تحويل بنكي</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label" for="car-number">تفاصيل المديونية</label>
              <div class="col-12 col-sm-8">
                <input type="text" id="contract-pickup-location" class="form-control" />
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-primary px-5 m-0">حفظ</button>
          </div>
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <!-- Debt Repayment Contract Modal -->

    <!-- Add Traffic Violation Modal -->
    <div class="modal fade" id="addTrafficViolationModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="addTrafficViolationModalLabel1">إضافة مخالفة مرورية</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label" for="car-number">رقم المخالفة</label>
              <div class="col-12 col-sm-8">
                <input type="number" inputmode="numeric" id="oil-status" class="form-control">
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label" for="car-number">تاريخ المخالفة</label>
              <div class="col-12 col-sm-8">
                <input type="text" class="form-control" placeholder="YYYY-MM-DD HH:MM" id="flatpickr-datetime" />
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-primary px-5 m-0">حفظ</button>
          </div>
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <!-- Add Traffic Violation Modal -->

  </div><!-- contracts-view-page -->

@endsection

@push('scripts')
  <script type="text/javascript" src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script type="text/javascript">

    // --------------------------------------------------------------------
    // Select2
    // --------------------------------------------------------------------
    $(".select2").select2();

    'use strict';
    (function () {
      const sliderPips = document.getElementById('slider-pips');
      const customLabels = {
        0: 'E',
        1: '',
        2: '',
        3: '1/4',
        4: '',
        5: '',
        6: '%',
        7: '',
        8: '',
        9: '3/4',
        10: '',
        11: '',
        12: 'F',
      };

      // Scale and Pips
      // --------------------------------------------------------------------
      if (sliderPips) {
        noUiSlider.create(sliderPips, {
          start: [3],
          behaviour: 'tap-drag',
          step: 1,
          tooltips: false,
          connect: [true, false],
          range: {
            min: 0,
            max: 12
          },
          pips: {
            mode: 'steps',
            stepped: true,
            density: 10,
            format: {
              to: value => customLabels[value] || '', // Show custom labels or empty
              from: value => value
            }
          },
          direction: isRtl ? 'rtl' : 'ltr'
        });
      }
    sliderPips.classList.add('slider-disabled');
    })();

    'use strict';
    (function () {
      const sliderPips2 = document.getElementById('slider-pips2');
      const customLabels2 = {
        0: 'E',
        1: '',
        2: '',
        3: '1/4',
        4: '',
        5: '',
        6: '%',
        7: '',
        8: '',
        9: '3/4',
        10: '',
        11: '',
        12: 'F',
      };

      if (sliderPips2) {
        noUiSlider.create(sliderPips2, {
          start: [0],
          behaviour: 'tap-drag',
          step: 1,
          tooltips: false,
          connect: [true, false],
          range: {
            min: 0,
            max: 12
          },
          pips: {
            mode: 'steps',
            stepped: true,
            density: 10,
            format: {
              to: value => customLabels2[value] || '', // Show custom labels or empty
              from: value => value
            }
          },
          direction: isRtl ? 'rtl' : 'ltr'
        });
      }

    })();

    $(document).ready(function () {
      function toggleCostElement() {
        if ($('#contract-car-cleanliness-status-no').is(':checked')) {
          $('#contract-car-cleanliness-status-no-element').show(); // Show the cost element
        } else {
          $('#contract-car-cleanliness-status-no-element').hide(); // Hide the cost element
        }
      }
      $('input[name="contract-car-cleanliness-status"]').change(toggleCostElement);
      toggleCostElement();
    });

    $(document).ready(function() {
      const $flatpickrDateTime = $('#flatpickr-datetime');
      if ($flatpickrDateTime.length) {
        $flatpickrDateTime.flatpickr({
          enableTime: true,
          dateFormat: 'Y-m-d H:i'
        });
      }
    });

  </script>
@endpush
