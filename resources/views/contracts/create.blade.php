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
    </div>

    <div class="row g-3">
      <div class="col-12 col-md-9">
        <div class="card">
          <div class="card-body p-3">
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-reservation-number">رقم الحجز</label>
                  <span>#5654645</span>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-client-name">العميل</label>
                  <select id="contract-client-name" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                    <option></option>
                    <option value="ar">#1123 | 96892035086 | محمد احمد</option>
                    <option value="af">#5790 | 96813035086 | مصطفي محفوظ</option>
                    <option value="ac">#2376 | 96897145086 | زين عبدالله</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-branch">الفرع</label>
                  <select id="contract-branch" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر" disabled>
                    <option></option>
                    <option value="AK" selected>فرع الواحة</option>
                    <option value="HI">فرع جدة</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-car">المركبة</label>
                  <select id="contract-car" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                    <option></option>
                    <option value="AK">TB - 125 | كيا | سبورتاج | بي 1</option>
                    <option value="HI">BC - 472 | كيا | سبورتاج | بي 2</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-pickup-date">تاريخ الاستلام</label>
                  <input
                    type="text"
                    class="form-control flatpickr-datetime"
                    id="contract-pickup-date"
                    dir="ltr"
                    placeholder="YYYY-MM-DD HH:MM"
                  />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-pickup-location">مكان الاستلام</label>
                  <input type="text" id="contract-pickup-location" class="form-control" />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-return-date">تاريخ العودة</label>
                  <input
                    type="text"
                    class="form-control flatpickr-datetime"
                    id="contract-return-date"
                    dir="ltr"
                    placeholder="YYYY-MM-DD HH:MM"
                  />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-return-place">مكان العودة</label>
                  <input type="text" id="contract-return-place" class="form-control" />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-daily-price">السعر اليومي</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-daily-price" class="form-control" />
                    <span class="input-group-text">ريال</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-delivery-service">خدمة التوصيل</label>
                  <div class="row row-cols-2 g-1 g-md-3">
                    <div class="col">
                      <div class="form-check custom-option custom-option-basic m-0">
                        <label class="form-check-label custom-option-content py-2" for="contract-delivery-service-free">
                          <input
                            name="contract-delivery-service"
                            class="form-check-input"
                            type="radio"
                            id="contract-delivery-service-free"
                            checked
                          />
                          <span class="custom-option-header p-0">مجانية</span>
                        </label>
                      </div><!-- form-check -->
                    </div><!-- col -->
                    <div class="col">
                      <div class="form-check custom-option custom-option-basic m-0">
                        <label class="form-check-label custom-option-content py-2" for="contract-delivery-service-payment">
                          <input
                            name="contract-delivery-service"
                            class="form-check-input"
                            type="radio"
                            id="contract-delivery-service-payment"
                          />
                          <span class="custom-option-header p-0">مدفوعة</span>
                        </label>
                      </div><!-- form-check -->
                    </div><!-- col -->
                  </div><!-- row -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col" id="contract-delivery-service-cost-element" style="display: none;">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-delivery-service-cost">تكلفة خدمة التوصيل</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-delivery-service-cost" class="form-control" />
                    <span class="input-group-text">ريال</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-discount">خصم</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-discount" class="form-control" />
                    <span class="input-group-text">ريال</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-oil-status">حالة الوقود</label>
                  <div class="row g-3">
                    <div class="col-12 col-md-7">
                      <div id="slider-pips"></div>
                    </div><!-- col-12 -->
                    <div class="col-12 col-md-5">
                      <div class="input-group">
                        <input type="number" inputmode="numeric" id="oil-status" class="form-control">
                        <span class="input-group-text">كم</span>
                      </div><!-- input-group -->
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-cleanliness-status">حالة النظافة</label>
                  <div class="row row-cols-2 g-1 g-md-3">
                    <div class="col">
                      <div class="form-check custom-option custom-option-basic m-0">
                        <label class="form-check-label custom-option-content py-2" for="contract-cleanliness-yes">
                          <input
                            name="contract-cleanliness-status"
                            class="form-check-input"
                            type="radio"
                            id="contract-cleanliness-yes"
                            checked
                          />
                          <span class="custom-option-header p-0">نظيفة</span>
                        </label>
                      </div><!-- form-check -->
                    </div><!-- col -->
                    <div class="col">
                      <div class="form-check custom-option custom-option-basic m-0">
                        <label class="form-check-label custom-option-content py-2" for="contract-cleanliness-no">
                          <input
                            name="contract-cleanliness-status"
                            class="form-check-input"
                            type="radio"
                            id="contract-cleanliness-no"
                          />
                          <span class="custom-option-header p-0">غير نظيفة</span>
                        </label>
                      </div><!-- form-check -->
                    </div><!-- col -->
                  </div><!-- row -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-type-insurance">نوع التآمين</label>
                  <input type="text" id="contract-type-insurance" class="form-control" />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-current-kilometer">الكيلو متر الحالي</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" id="contract-current-kilometer" class="form-control">
                    <span class="input-group-text">كم</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-status">حالة العقد</label>
                  <select id="contract-status" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                    <option></option>
                    <option value="AK">ساري</option>
                    <option value="HI">مديونية</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="contract-notes">الملاحظات</label>
                  <input type="text" id="contract-notes" class="form-control" />
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
                <li class="d-flex align-items-center justify-content-between">
                  <span>مدة الحجر :</span>
                  <p class="m-0">4 <small>ايام</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <span>السعر اليومي :</span>
                  <p class="m-0">123 <small>ريال</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <span>سعر الحجز :</span>
                  <p class="m-0">123 <small>ريال</small></p>
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
        $(".flatpickr-datetime").flatpickr({
            enableTime: true,          // Enable time picking
            dateFormat: "Y-m-d h:i K", // This sets the output format
            onChange: function(selectedDates) {
                if (selectedDates.length > 0) {
                    const inputField = this.input; // Get the specific input field
                    updateInput(inputField, selectedDates[0]); // Update only this input field
                }
            },
            onClose: function(selectedDates) {
                // If no date was selected, do not update the input.
                if (selectedDates.length === 0) {
                    $(this.input).val(''); // Clear the input field if no date was selected
                }
            }
        });

        // Function to update the input with formatted date
        function updateInput(inputField, date) {
            let hours = date.getHours();
            const minutes = date.getMinutes();
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0'); // 01-12
            const day = String(date.getDate()).padStart(2, '0'); // 01-31

            // Convert time to 12-hour format
            const amPm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12 || 12; // Convert hours to 12-hour format

            // Format the final output
            const formattedDate = `${year}-${month}-${day} ${hours}:${String(minutes).padStart(2, '0')} ${amPm}`;

            // Set the formatted date in the specific input
            $(inputField).val(formattedDate);
        }
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
