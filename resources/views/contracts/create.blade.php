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
        <h4 class="m-0">إضافة عقد جديد</h4>
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
                  <select id="contract-client-name" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                    <option></option>
                    <option value="ar">96892035086 | محمد احمد</option>
                    <option value="af">96813035086 | مصطفي محفوظ</option>
                    <option value="ac">96897145086 | زين عبدالله</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col-12 -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-branch">الفرع</label>
                  <select id="contract-branch" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر" disabled>
                    <option></option>
                    <option value="AK" selected>فرع الواحة</option>
                    <option value="HI">فرع جدة</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-car">المركبة</label>
                  <select id="contract-car" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                    <option></option>
                    <option value="AK">TB - 125 | كيا | سبورتاج | بي 1</option>
                    <option value="HI">BC - 472 | كيا | سبورتاج | بي 2</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->
        <div class="card mb-4">
          <div class="card-body p-3">
            <div class="row g-3">
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-pickup-date">تاريخ المغادرة</label>
                  <input
                    type="text"
                    class="form-control flatpickr-date"
                    id="contract-pickup-date"
                    placeholder="YYYY-MM-DD"
                  />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-pickup-time">وقت المغادرة</label>
                  <input
                    type="text"
                    class="form-control"
                    id="contract-pickup-time"
                    placeholder="HH:MM"
                  />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-pickup-location">مكان المغادرة</label>
                  <input type="text" id="contract-pickup-location" class="form-control" />
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
                  <label class="form-label mb-2 fs-6 required" for="contract-pickup-counter">العداد عند المغادرة</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-pickup-counter" class="form-control" />
                    <span class="input-group-text">كم</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-daily-kilometer">الكيلو متر اليومي</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-daily-kilometer" class="form-control" />
                    <span class="input-group-text">كم</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-total-kilometer-allowed">إجمالي الكيلو متر المسموح</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-total-kilometer-allowed" class="form-control" value="1000" disabled />
                    <span class="input-group-text">كم</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-pickup-cleanliness-status">حالة النظافة عند المغادرة</label>
                  <select id="contract-pickup-cleanliness-status" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                    <option></option>
                    <option value="AK">نظيفة</option>
                    <option value="HI">غير نظيفة</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-pickup-oil-status">البترول عند المغادرة</label>
                  <div id="slider-pips"></div>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12"><hr class="m-0"></div>
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-number-rental-days">عدد أيام الإيجار</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-number-rental-days" class="form-control" />
                    <span class="input-group-text">يوم</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-daily-price">سعر الإيجار اليومي</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-daily-price" class="form-control" />
                    <span class="input-group-text">ريال</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-advance-payment">المبلغ المدفوع مقدماً</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-advance-payment" class="form-control" />
                    <span class="input-group-text">ريال</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12"><hr class="m-0"></div>
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-daily-price">المبلغ المتبقي</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-daily-price" class="form-control" value="10" disabled readonly />
                    <span class="input-group-text">ريال</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-delivery-service">خدمة التوصيل</label>
                  <select id="contract-delivery-service" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                    <option></option>
                    <option value="free" selected>مجانية</option>
                    <option value="payment">مدفوعة</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4" id="contract-delivery-service-cost-element" style="display: none;">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-delivery-service-cost">تكلفة خدمة التوصيل</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-delivery-service-cost" class="form-control" />
                    <span class="input-group-text">ريال</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-discount">خصم</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-discount" class="form-control" />
                    <span class="input-group-text">ريال</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12 col-md-4">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-payment-method">طريقة الدفع</label>
                  <select id="contract-payment-method" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                    <option></option>
                    <option value="free">نقداً</option>
                    <option value="payment2">POS</option>
                    <option value="payment3">تحويل بنكي</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col-12"><hr class="m-0"></div>
              <div class="col-12">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-pickup-notes">ملاحظات عند المغادرة</label>
                  <textarea class="form-control" id="contract-pickup-notes" rows="3"></textarea>
                </div><!-- form-group -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->
        <div class="card">
          <h5 class="card-header p-3">التآمين</h5>
          <div class="card-body p-3">
            <div class="row row-cols-1 row-cols-md-3 g-3">
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-delivery-service">نوع التآمين</label>
                  <select id="contract-delivery-service" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                    <option></option>
                    <option value="free" selected>تآمين مخالفات مرورية</option>
                    <option value="payment">تآمين أضرار</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-discount">مبلغ التآمين</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-discount" class="form-control" />
                    <span class="input-group-text">ريال</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-payment-method1">طريقة الدفع</label>
                  <select id="contract-payment-method1" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                    <option></option>
                    <option value="free">نقداً</option>
                    <option value="payment2">POS</option>
                    <option value="payment3">تحويل بنكي</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col-12 -->
      <div class="col-12 col-md-3">
        <div class="reservation-cart-side position-sticky">
          <div class="card mb-3">
            <div class="card-body p-3">
              <ul class="d-flex flex-column gap-2 m-0 p-0 list-unstyled">
                <li class="d-flex align-items-center justify-content-between d-none">
                  <span>عدد أيام الإيجار :</span>
                  <div class="m-0 d-flex align-items-center justify-content-end gap-1"><div id="contract-number-rental-days-text"></div><small>يوم</small></div>
                </li>
                <li class="d-flex align-items-center justify-content-between d-none">
                  <span>سعر الإيجار اليومي :</span>
                  <div class="m-0 d-flex align-items-center justify-content-end gap-1"><div id="contract-daily-price-text"></div><small>ريال</small></div>
                </li>
                <li class="d-flex align-items-center justify-content-between d-none">
                  <span>المبلغ المدفوع مقدماً :</span>
                  <div class="m-0 d-flex align-items-center justify-content-end gap-1"><div id="contract-advance-payment-text"></div><small>ريال</small></div>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <span>المبلغ المتبقي :</span>
                  <p class="m-0">20 <small>ريال</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between d-none">
                  <span>تكلفة خدمة التوصيل :</span>
                  <div class="m-0 d-flex align-items-center justify-content-end gap-1"><div id="contract-delivery-service-cost-text"></div><small>ريال</small></div>
                </li>
                <li class="d-flex align-items-center justify-content-between text-danger d-none">
                  <span>خصم :</span>
                  <div class="m-0 d-flex align-items-center justify-content-end gap-1">- <div id="contract-discount-text"></div><small>ريال</small></div>
                </li>
              </ul>
              <hr class="my-3">
              <div class="total-amount d-flex align-items-center justify-content-between fw-bold">
                <span>إجمالي المبلغ :</span>
                <p class="m-0">2000 <small>ريال</small></p>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
          <button type="submit" class="btn btn-lg btn-primary px-5 w-100">حفظ</button>
        </div><!--  -->
      </div><!-- col-12 -->
    </div><!-- row -->

  </div><!-- contracts-create-page -->

@endsection

@push('scripts')
  <script type="text/javascript" src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
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
      function updateRentalInfo() {
        const rentalDays = $('#contract-number-rental-days').val();
        const dailyPrice = $('#contract-daily-price').val();
        const advancePayment = $('#contract-advance-payment').val();
        const deliveryServiceCost = $('#contract-delivery-service-cost').val();
        const discount = $('#contract-discount').val();


        if (rentalDays) {
          $('#contract-number-rental-days-text').text(rentalDays);
          $('li:has(#contract-number-rental-days-text)').removeClass('d-none');
        } else {
          $('#contract-number-rental-days-text').empty();
          $('li:has(#contract-number-rental-days-text)').addClass('d-none');
        }
        if (dailyPrice) {
          $('#contract-daily-price-text').text(dailyPrice);
          $('li:has(#contract-daily-price-text)').removeClass('d-none');
        } else {
          $('#contract-daily-price-text').empty();
          $('li:has(#contract-daily-price-text)').addClass('d-none');
        }
        if (advancePayment) {
          $('#contract-advance-payment-text').text(advancePayment);
          $('li:has(#contract-advance-payment-text)').removeClass('d-none');
        } else {
          $('#contract-advance-payment-text').empty();
          $('li:has(#contract-advance-payment-text)').addClass('d-none');
        }
        if (deliveryServiceCost) {
          $('#contract-delivery-service-cost-text').text(deliveryServiceCost);
          $('li:has(#contract-delivery-service-cost-text)').removeClass('d-none');
        } else {
          $('#contract-delivery-service-cost-text').empty();
          $('li:has(#contract-delivery-service-cost-text)').addClass('d-none');
        }
        if (discount) {
          $('#contract-discount-text').text(discount);
          $('li:has(#contract-discount-text)').removeClass('d-none');
        } else {
          $('#contract-discount-text').empty();
          $('li:has(#contract-discount-text)').addClass('d-none');
        }
      }
      $('#contract-number-rental-days, #contract-daily-price, #contract-advance-payment, #contract-delivery-service-cost, #contract-discount').on('input', updateRentalInfo);
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
