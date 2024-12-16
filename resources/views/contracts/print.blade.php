@extends('layouts.print')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
  <style>
    @media print {
      @page {
        size: A4;
        margin: 0; /* This is for page margins */
        -webkit-print-color-adjust: exact;
      }
      body {
        margin: 0; /* This removes default body margins */
        padding: 0; /* This removes padding */
        -webkit-print-color-adjust: exact;
      }
      header, footer {
        display: none; /* Hide headers and footers */
      }
    }
  </style>
@endpush

@section('content')
  <div id="contracts-print-page" class="min-vh-100 bg-white d-flex flex-column">
    <div class="page-header flex-shrink-0">
      <div class="print-header d-flex justify-content-between">
        <div class="col-right d-flex flex-column gap-1 p-2">
          <h6 class="d-block m-0">اسم السجل التجاري</h6>
          <h6 class="d-block mb-1">س.ت : 335346</h6>
          <span class="d-flex align-items-center justify-content-start gap-2 text-body fw-medium"><i class="ti ti-xs ti-phone"></i> 99887766 - 99887766</span>
          <span class="d-flex align-items-center justify-content-start gap-2 text-body fw-medium"><i class="ti ti-xs ti-mailbox"></i> 1984</span>
          <span class="d-flex align-items-center justify-content-start gap-2 text-body fw-medium"><i class="ti ti-xs ti-map-pin"></i> صلاله - 211 - سلطنة عمان</span>
        </div><!-- col-right -->
        <div class="col-center align-self-stretch d-flex align-items-center justify-content-center flex-column gap-2 p-2">
          <img src="https://shasha.test/wp-content/themes/Shasha_2023/website/resources/images/logo.webp" alt="" class="mw-100 h-auto w-auto">
          <h4 class="d-block text-dark fw-bold m-0 text-center text-nowrap">شركة الآمانة لتآجير السيارات</h4>
        </div><!-- col-right -->
        <div class="col-left d-flex flex-column align-items-end gap-2 p-2">
          <div class="contarct-number fw-bold fs-5">رقم العقد : #4563</div>
          <div class="contarct-date d-block">بتاريخ : 12-12-2024</div>
          <div class="contarct-date d-block">الفرع : فرع الواحة</div>
        </div><!-- col-left -->
      </div><!-- print-header -->
      <div class="print-page-title d-flex align-items-center justify-content-center p-2">
        <span class="d-flex align-items-center justify-content-center fw-bold px-4 py-2">عــقــد تآجــيــر سيـــارة</span>
      </div><!-- print-page-title -->
    </div><!-- page-header -->
    <div class="page-content flex-grow-1 p-2 d-flex flex-column gap-2">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="2" class="text-center fw-bold text-capitalize p-2">بيانات العميل</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td width="50%" class="p-2 align-top">
              <div class="d-flex flex-column gap-2">
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">اسم الشركة :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1"></p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">اسم العميل :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1">محمد احمد محمود مصطفي</p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">رقم الجوال :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1" dir="ltr">+966 776655443</p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">رقم الواتس اب :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1" dir="ltr">+966 776655443</p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">العنوان :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1">صلالة ، عمان</p>
                  </b>
                </div><!-- item -->
              </div><!-- d-flex -->
            </td>
            <td width="50%" class="p-2 align-top">
              <div class="d-flex flex-column gap-2">
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">رقم الهوية الوطنية :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1">7876463746</p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">تاريخ إنتهاء الهوية الوطنية :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1">12-12-2026</p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">رقم رخصة القيادة :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1">7582759264</p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">جهة إصدار رخصة القيادة :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1">وزارة الداخلية</p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">مدة رخصة القيادة :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1">12-12-2020 ~ 12-12-2027</p>
                  </b>
                </div><!-- item -->
              </div><!-- d-flex -->
            </td>
          </tr>
        </tbody>
      </table>
      <div class="row row-cols-2 g-2">
        <div class="col">
          <table class="table table-bordered h-100">
            <thead>
              <tr>
                <th class="text-center fw-bold text-capitalize p-2">بيانات السيارة</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-2 align-top">
                  <div class="d-flex flex-column gap-2">
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <span class="d-block fw-medium flex-shrink-0">رقم السيارة :</span>
                      <b class="d-block flex-grow-1 align-self-stretch position-relative">
                        <p class="d-block m-0 position-relative z-1">TB-2347</p>
                      </b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <span class="d-block fw-medium flex-shrink-0">لون السيارة :</span>
                      <b class="d-block flex-grow-1 align-self-stretch position-relative">
                        <p class="d-block m-0 position-relative z-1">اسود</p>
                      </b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <span class="d-block fw-medium flex-shrink-0">الماركة :</span>
                      <b class="d-block flex-grow-1 align-self-stretch position-relative">
                        <p class="d-block m-0 position-relative z-1">كيا</p>
                      </b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <span class="d-block fw-medium flex-shrink-0">الموديل :</span>
                      <b class="d-block flex-grow-1 align-self-stretch position-relative">
                        <p class="d-block m-0 position-relative z-1">سبورتاج</p>
                      </b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <span class="d-block fw-medium flex-shrink-0">الفئة :</span>
                      <b class="d-block flex-grow-1 align-self-stretch position-relative">
                        <p class="d-block m-0 position-relative z-1">B1</p>
                      </b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <span class="d-block fw-medium flex-shrink-0">نوع التآمين :</span>
                      <b class="d-block flex-grow-1 align-self-stretch position-relative">
                        <p class="d-block m-0 position-relative z-1">تآمين شامل</p>
                      </b>
                    </div><!-- item -->
                  </div><!-- d-flex -->
                </td>
              </tr>
            </tbody>
          </table><!-- table -->
        </div><!-- col -->
        <div class="col">
          <table class="table table-bordered h-100">
            <thead>
              <tr>
                <th class="text-center fw-bold text-capitalize p-2">حالة السيارة</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-2 align-top">
                  <div class="d-flex flex-column gap-2">
                    <div class="item d-flex align-items-start justify-content-between gap-2">
                      <span class="d-block fw-medium flex-shrink-0">حالة الوقود :</span>
                      <div class="oil-status d-flex flex-grow-1 align-items-center justify-content-start gap-4">
                        <div class="slider-size flex-grow-1">
                          <div id="slider-pips"></div>
                        </div><!-- slider-size -->
                      </div><!-- oil-status -->
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <span class="d-block fw-medium flex-shrink-0">حالة النظافة :</span>
                      <b class="d-block flex-grow-1 align-self-stretch position-relative">
                        <p class="d-block m-0 position-relative z-1">نظيفة</p>
                      </b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <span class="d-block fw-medium flex-shrink-0"> :</span>
                      <b class="d-block flex-grow-1 align-self-stretch position-relative">
                        <p class="d-block m-0 position-relative z-1"></p>
                      </b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <span class="d-block fw-medium flex-shrink-0"> :</span>
                      <b class="d-block flex-grow-1 align-self-stretch position-relative">
                        <p class="d-block m-0 position-relative z-1"></p>
                      </b>
                    </div><!-- item -->
                  </div><!-- d-flex -->
                </td>
              </tr>
            </tbody>
          </table><!-- table -->
        </div><!-- col -->
      </div><!-- row -->

      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="3" class="text-center fw-bold text-capitalize p-2">مدة الإيجار</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td width="33.333%" class="p-2 align-center">
              <div class="item d-flex align-items-center justify-content-between gap-2">
                <span class="d-block fw-medium flex-shrink-0">من :</span>
                <b class="d-block flex-grow-1 align-self-stretch position-relative">
                  <p class="d-block m-0 position-relative z-1" dir="ltr">12-12-2024</p>
                </b>
              </div><!-- item -->
            </td>
            <td width="33.333%" class="p-2 align-center">
              <div class="item d-flex align-items-center justify-content-between gap-2">
                <span class="d-block fw-medium flex-shrink-0">إلي :</span>
                <b class="d-block flex-grow-1 align-self-stretch position-relative">
                  <p class="d-block m-0 position-relative z-1" dir="ltr">12-12-2024</p>
                </b>
              </div><!-- item -->
            </td>
            <td width="33.333%" class="p-2 align-center">
              <div class="item d-flex align-items-center justify-content-between gap-2">
                <span class="d-block fw-medium flex-shrink-0">عدد الايام :</span>
                <b class="d-block flex-grow-1 align-self-stretch position-relative">
                  <p class="d-block m-0 position-relative z-1">5 يوم</p>
                </b>
              </div><!-- item -->
            </td>
          </tr>
        </tbody>
      </table>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="2" class="text-center fw-bold text-capitalize p-2">تفاصيل الإيجار</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td width="50%" class="p-2 align-top">
              <div class="d-flex flex-column gap-2">
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">تاريخ المغادرة :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1" dir="ltr">12-12-2024</p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">وقت المغادرة :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1" dir="ltr">12:32 PM</p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">الكيلو متر عند المغادرة :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-flex align-items-center justify-content-start gap-1 m-0 position-relative z-1">34343 <small>كم</small></p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">مكان المغادرة :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block gap-1 m-0 position-relative z-1">المطار</p>
                  </b>
                </div><!-- item -->
              </div><!-- d-flex -->
            </td>
            <td width="50%" class="p-2 align-top">
              <div class="d-flex flex-column gap-2">
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">تاريخ العودة :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1" dir="ltr">12-12-2024</p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">وقت العودة :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block m-0 position-relative z-1" dir="ltr">12:32 PM</p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">مكان العودة :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-block gap-1 m-0 position-relative z-1">الفرع</p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">إجمالي الكيلو متر المسموح :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-flex align-items-center justify-content-start gap-1 m-0 position-relative z-1">500 <small>كم</small></p>
                  </b>
                </div><!-- item -->
              </div><!-- d-flex -->
            </td>
          </tr>
        </tbody>
      </table>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center fw-bold text-capitalize p-2">الفاتورة</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td width="50%" class="p-2 align-top">
              <div class="d-flex flex-column gap-2">
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">سعر الإيجار اليومي :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-flex align-items-center justify-content-start gap-1 m-0 position-relative z-1">10 <small>ريال</small></p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">المبلغ المدفوع مقدماً :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-flex align-items-center justify-content-start gap-1 m-0 position-relative z-1">10 <small>ريال</small></p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">المبلغ المتبقي :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-flex align-items-center justify-content-start gap-1 m-0 position-relative z-1">5 <small>ريال</small></p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">تكلفة خدمة التوصيل :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-flex align-items-center justify-content-start gap-1 m-0 position-relative z-1">3 <small>ريال</small></p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">خصم :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-flex align-items-center justify-content-start gap-1 m-0 position-relative z-1">- 2 <small>ريال</small></p>
                  </b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <span class="d-block fw-medium flex-shrink-0">إجمالي المبلغ :</span>
                  <b class="d-block flex-grow-1 align-self-stretch position-relative">
                    <p class="d-flex align-items-center justify-content-start gap-1 m-0 position-relative z-1">456 <small>ريال</small></p>
                  </b>
                </div><!-- item -->
              </div><!-- d-flex -->
            </td>
          </tr>
        </tbody>
      </table>

    </div><!-- p-2 -->
    <div class="print-footer flex-shrink-0 p-2">
    dfdfsd
    </div><!-- print-footer -->
  </div><!-- contracts-print-page -->
@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
  <script type="text/javascript">
    // window.onload = function() {
    //   window.print(); // Automatically open the print dialog when the page is loaded
    // };


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
  </script>
@endpush
