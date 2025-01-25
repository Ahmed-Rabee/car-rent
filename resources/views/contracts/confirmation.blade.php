@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
@endpush

@section('content')

  <div id="contracts-create-page">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="m-0">إنهاء العقد - 76857</h4>
      </div>
    </div><!-- d-flex -->

    <div class="alert alert-warning d-flex align-items-center" role="alert">
      <span class="alert-icon text-warning me-2"><i class="ti ti-contract ti-xs"></i></span>
      هذا العقد تابع لحجز برقم - <a href="http://car-rent.test/reservations/{id}/view" class="alert-link text-decoration-underline">#45435</a>
    </div><!-- alert -->

    <div class="row g-3">
      <div class="col-12 col-md-9">
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="row g-3">
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-client-name">العميل</label>
                  <b class="show-label-data d-flex align-items-center justify-content-start gap-1">96892035086 | محمد احمد</b>
                </div><!-- form-group -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-branch">الفرع</label>
                  <b class="show-label-data d-flex align-items-center justify-content-start gap-1">فرع جدة</b>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-car">المركبة</label>
                  <b class="show-label-data d-flex align-items-center justify-content-start gap-1">TB - 125 | كيا | سبورتاج | بي 1</b>
                </div><!-- form-group -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->

        <ul class="nav nav-pills mb-3" role="tablist">
          <li class="nav-item">
            <button
              type="button"
              class="nav-link active"
              role="tab"
              data-bs-toggle="tab"
              data-bs-target="#navs-pills-top-home"
              aria-controls="navs-pills-top-home"
              aria-selected="true"
            >
              تفاصيل المغادرة و العودة
            </button>
          </li>
          <li class="nav-item">
            <button
              type="button"
              class="nav-link"
              role="tab"
              data-bs-toggle="tab"
              data-bs-target="#navs-pills-top-profile"
              aria-controls="navs-pills-top-profile"
              aria-selected="false"
            >
              إضافات آخري
            </button>
          </li>
        </ul>
        <div class="tab-content p-0 bg-transparent shadow-none border-0">
          <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
            <div class="card mb-4">
              <h5 class="card-header p-3">تفاصيل المغادرة</h5>
              <div class="card-body p-3">
                <div class="row g-3">
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-pickup-date">تاريخ المغادرة</label>
                      <b class="show-label-data d-flex align-items-center justify-content-start gap-1">2024-12-26</b>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-pickup-time">وقت المغادرة</label>
                      <b class="show-label-data d-flex align-items-center justify-content-start gap-1">14:00</b>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-pickup-location">مكان المغادرة</label>
                      <b class="show-label-data d-flex align-items-center justify-content-start gap-1">المطار</b>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12"><hr class="m-0"></div>
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-pickup-counter">العداد عند المغادرة</label>
                      <div class="input-group">
                        <b class="show-label-data-group d-flex align-items-center justify-content-start gap-1">1000</b>
                        <span class="input-group-text">كم</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-daily-kilometer">الكيلو متر اليومي</label>
                      <div class="input-group">
                        <b class="show-label-data-group d-flex align-items-center justify-content-start gap-1">100</b>
                        <span class="input-group-text">كم</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-total-kilometer-allowed">إجمالي الكيلو متر المسموح</label>
                      <div class="input-group">
                        <b class="show-label-data-group d-flex align-items-center justify-content-start gap-1">500</b>
                        <span class="input-group-text">كم</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12"><hr class="m-0"></div>
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-pickup-cleanliness-status">حالة النظافة عند المغادرة</label>
                      <b class="show-label-data d-flex align-items-center justify-content-start gap-1">نظيفة</b>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-pickup-oil-status">البترول عند المغادرة</label>
                      <div class="slider-size">
                        <div id="slider-pips"></div>
                      </div><!-- slider-size -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12"><hr class="m-0"></div>
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-number-rental-days">عدد أيام الإيجار</label>
                      <div class="input-group">
                        <input type="number" inputmode="numeric" id="contract-number-rental-days" class="form-control" value="5" />
                        <span class="input-group-text">يوم</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-daily-price">سعر الإيجار اليومي</label>
                      <div class="input-group">
                        <input type="number" inputmode="numeric" id="contract-daily-price" class="form-control" value="20" />
                        <span class="input-group-text">ريال</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-delivery-service">خدمة التوصيل</label>
                      <b class="show-label-data d-flex align-items-center justify-content-start gap-1">مدفوعة</b>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12"><hr class="m-0"></div>
                  <div class="col-12">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-notes">ملاحظات عند المغادرة</label>
                      <b class="show-label-data d-flex align-items-center justify-content-start gap-1">لا يوجد ملاحظات في الوقت الحالي</b>
                    </div><!-- form-group -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
            <div class="card">
              <h5 class="card-header p-3">تفاصيل العودة</h5>
              <div class="card-body p-3">
                <div class="row g-3">
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-return-date">تاريخ العودة</label>
                      <b class="show-label-data d-flex align-items-center justify-content-start gap-1">2024-12-26</b>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-return-time">وقت العودة</label>
                      <input
                        type="text"
                        class="form-control"
                        id="contract-return-time"
                        placeholder="HH:MM"
                      />
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-return-location">مكان العودة</label>
                      <input type="text" id="contract-return-location" class="form-control" />
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12"><hr class="m-0"></div>
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-return-counter">العداد عند العودة</label>
                      <div class="input-group">
                        <input type="number" inputmode="numeric" id="contract-return-counter" class="form-control" />
                        <span class="input-group-text">كم</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-total-kilometer-consumed">إجمالي الكيلو متر المستهلك</label>
                      <div class="input-group">
                        <input type="number" inputmode="numeric" id="contract-total-kilometer-consumed" class="form-control" value="600" disabled />
                        <span class="input-group-text">كم</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-extra-kilometer">الكيلو متر الزيادة</label>
                      <div class="input-group">
                        <input type="number" inputmode="numeric" id="contract-extra-kilometer" class="form-control" value="100" disabled />
                        <span class="input-group-text">كم</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12"><hr class="m-0"></div>
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-oil-status">البترول عند العودة</label>
                      <div id="slider-pips2"></div>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-return-cleanliness-status">حالة النظافة عند العودة</label>
                      <select id="contract-return-cleanliness-status" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                        <option></option>
                        <option value="AK">نظيفة</option>
                        <option value="HI">غير نظيفة</option>
                      </select>
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-discount">خصم عند العودة</label>
                      <div class="input-group">
                        <input type="number" inputmode="numeric" id="contract-discount" class="form-control" />
                        <span class="input-group-text">ريال</span>
                      </div><!-- input-group -->
                    </div><!-- form-group -->
                  </div><!-- col -->
                  <div class="col-12"><hr class="m-0"></div>
                  <div class="col-12">
                    <div class="form-group">
                      <label class="form-label mb-2 fs-6 required" for="contract-pickup-notes">ملاحظات عند العودة</label>
                      <textarea class="form-control" id="contract-pickup-notes" rows="3"></textarea>
                    </div><!-- form-group -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- tab-pane -->
          <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
            <div class="card form-repeater">
              <div class="card-header p-3 d-flex align-items-center justify-content-between gap-3">
                <h5 class="m-0 text-capitalize fw-semibold">إضافات آخري</h5>
                <button type="button" class="btn btn-icon btn-primary waves-effect waves-light m-0" data-repeater-create>
                  <span class="ti ti-plus"></span>
                </button>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div data-repeater-list="group-a">
                  <div data-repeater-item>
                    <div class="row align-items-end g-3">
                      <div class="col-lg-6 col-xl-8 col-12 mb-0">
                        <label for="defaultFormControlInput" class="form-label">اسم الخدمة</label>
                        <input type="text" class="form-control" id="defaultFormControlInput"/>
                      </div><!-- col -->
                      <div class="col-lg-6 col-xl-3 col-12 mb-0">
                        <label for="defaultFormControlInput" class="form-label">المبلغ</label>
                        <div class="input-group">
                          <input type="number" inputmode="numeric" id="contract-discount" class="form-control" />
                          <span class="input-group-text">ريال</span>
                        </div><!-- input-group -->
                      </div><!-- col -->
                      <div class="col-lg-12 col-xl-1 col-12 d-flex align-items-center mb-0">
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
          </div><!-- tab-pane -->
        </div><!-- tab-content -->

      </div><!-- col-12 -->
      <div class="col-12 col-md-3">
        <div class="reservation-cart-side position-sticky">
          <div class="card mb-3">
            <div class="card-body p-3">
              <ul class="d-flex flex-column gap-2 m-0 p-0 list-unstyled">
                <li class="d-flex align-items-center justify-content-between">
                  <span>عدد أيام الإيجار :</span>
                  <p class="m-0">4 <small>يوم</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <span>سعر الإيجار اليومي :</span>
                  <p class="m-0">10 <small>ريال</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <span>المبلغ المدفوع مقدماً :</span>
                  <p class="m-0">20 <small>ريال</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <span>المبلغ المتبقي :</span>
                  <p class="m-0">20 <small>ريال</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <span>تكلفة خدمة التوصيل :</span>
                  <p class="m-0">10 <small>ريال</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between text-danger">
                  <span>خصم :</span>
                  <p class="m-0">- 10 <small>ريال</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between text-danger">
                  <span>خصم عند العودة :</span>
                  <p class="m-0">- 10 <small>ريال</small></p>
                </li>
              </ul>
              <hr class="my-3">
              <div class="total-amount d-flex align-items-center justify-content-between fw-bold">
                <span>إجمالي المبلغ :</span>
                <p class="m-0">2000 <small>ريال</small></p>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
          <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light w-100">حفظ</button>
          <button type="button" class="btn btn-lg btn-warning waves-effect waves-light w-100 mt-3" data-bs-toggle="modal" data-bs-target="#contractDebtModal">مدونية علي العقد</button>
        </div><!--  -->
      </div><!-- col-12 -->
    </div><!-- row -->

    <!-- Debt Contract Modal -->
    <div class="modal fade" id="contractDebtModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="contractDebtModalLabel1">مديونية علي العقد</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label" for="car-number">مبلغ المديونية</label>
              <div class="col-12 col-sm-8">
                <div class="input-group">
                  <input type="number" inputmode="numeric" id="oil-status" class="form-control">
                  <span class="input-group-text">ريال</span>
                </div><!-- input-group -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label" for="car-number">تاريخ الإستحقاق</label>
              <div class="col-12 col-sm-8">
                <input
                  type="text"
                  class="form-control flatpickr-date"
                  id="contract-pickup-date"
                  placeholder="YYYY-MM-DD"
                />
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
        </div>
      </div>
    </div><!-- modal -->
    <!-- Debt Contract Modal -->

  </div><!-- contracts-create-page -->

@endsection

@push('scripts')
  <script type="text/javascript" src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.select2').select2();
    });

    $(document).ready(function () {
      function toggleCostElement() {
        if ($('#contract-delivery-service-payment').is(':checked')) {
          $('#contract-delivery-service-cost-element').show(); // Show the cost element
        } else {
          $('#contract-delivery-service-cost-element').hide(); // Hide the cost element
        }
      }
      $('input[name="contract-delivery-service"]').change(toggleCostElement);
      toggleCostElement();
    });

    $(document).ready(function() {
      $(".flatpickr-date").flatpickr({
        monthSelectorType: 'static'
      });
      $("#contract-pickup-time").flatpickr({
        enableTime: true,
        noCalendar: true
      });
      $("#contract-return-time").flatpickr({
        enableTime: true,
        noCalendar: true
      });
    });

    $(document).ready(function() {
      $('#contract-delivery-service').change(function() {
        var selectedValue = $(this).val();
        if (selectedValue === 'payment') {
            $('#contract-delivery-service-cost-element').show(); // Show the element
        } else {
            $('#contract-delivery-service-cost-element').hide(); // Hide the element
        }
      });
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
    // Initially disable the slider by adding the 'slider-disabled' class
    sliderPips.classList.add('slider-disabled'); // Disable without button interaction
    })();

    'use strict';
    (function () {
      const sliderPips = document.getElementById('slider-pips2');
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
              to: value => customLabels[value] || '', // Show custom labels or empty
              from: value => value
            }
          },
          direction: isRtl ? 'rtl' : 'ltr'
        });
      }

    })();
  </script>
@endpush
