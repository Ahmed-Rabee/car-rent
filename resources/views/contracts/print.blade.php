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
  <div id="contracts-print-page" class="min-vh-100 bg-white d-flex flex-column p-2 mx-auto">
    <div class="page-header flex-shrink-0">
      <div class="print-header d-flex justify-content-between">
        <div class="col-right d-flex flex-column gap-1">
          <div class="d-block">شركة الرؤية المتكاملة للإستثمار ش.م.م</div>
          <div class="d-block">س.ت : 335346</div>
          <div class="d-flex align-items-center justify-content-start gap-2"><i class="ti ti-xs ti-phone"></i> 99887766 - 99887766</div>
          <div class="d-flex align-items-center justify-content-start gap-2"><i class="ti ti-xs ti-mailbox"></i> 1984</div>
          <div class="d-flex align-items-center justify-content-start gap-2"><i class="ti ti-xs ti-map-pin"></i> صلاله - 211 - سلطنة عمان</div>
        </div><!-- col-right -->
        <div class="col-center align-self-stretch d-flex align-items-center justify-content-center flex-column gap-3">
          <img src="https://i.postimg.cc/MKjJTgGv/logo.png" alt="شركة الآمانة لتآجير السيارات" class="mw-100 h-auto w-auto">
          <div class="d-block fw-bold m-0 text-center text-nowrap">شركة الآمانة لتآجير السيارات</div>
        </div><!-- col-right -->
        <div class="col-left d-flex flex-column align-items-end gap-1">
          <div class="contarct-number">رقم العقد : #4563</div>
          <div class="contarct-date d-block">تاريخ العقد : 12-12-2024</div>
          <div class="contarct-branch d-block">الفرع : فرع الواحة</div>
        </div><!-- col-left -->
      </div><!-- print-header -->
      <div class="print-page-title d-flex align-items-center justify-content-center my-1">
        <div class="d-flex align-items-center justify-content-center fw-bold px-4 py-2">عــقــد تآجــيــر سيـــارة</div>
      </div><!-- print-page-title -->
    </div><!-- page-header -->
    <div class="print-page-content flex-grow-1 d-flex flex-column gap-1">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="2" class="fw-bold text-capitalize p-1">بيانات العميل</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td width="50%" class="p-1 align-top">
              <div class="d-flex flex-column gap-1">
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <div class="d-block flex-shrink-0">اسم الشركة :</div>
                  <b class="d-block flex-grow-1"></b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <div class="d-block flex-shrink-0">اسم العميل :</div>
                  <b class="d-block flex-grow-1">محمد احمد محمود مصطفي</b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <div class="d-block flex-shrink-0">رقم الجوال :</div>
                  <b class="d-block flex-grow-1" dir="ltr">+966 776655443</b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <div class="d-block flex-shrink-0">رقم الواتس اب :</div>
                  <b class="d-block flex-grow-1" dir="ltr">+966 776655443</b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <div class="d-block flex-shrink-0">العنوان :</div>
                  <b class="d-block flex-grow-1">صلالة ، عمان</b>
                </div><!-- item -->
              </div><!-- d-flex -->
            </td>
            <td width="50%" class="p-1 align-top">
              <div class="d-flex flex-column gap-1">
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <div class="d-block flex-shrink-0">رقم الهوية الوطنية :</div>
                  <b class="d-block flex-grow-1">7876463746</b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <div class="d-block flex-shrink-0">تاريخ إنتهاء الهوية الوطنية :</div>
                  <b class="d-block flex-grow-1">12-12-2026</b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <div class="d-block flex-shrink-0">رقم رخصة القيادة :</div>
                  <b class="d-block flex-grow-1">7582759264</b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <div class="d-block flex-shrink-0">جهة إصدار رخصة القيادة :</div>
                  <b class="d-block flex-grow-1">وزارة الداخلية</b>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-between gap-2">
                  <div class="d-block flex-shrink-0">مدة رخصة القيادة :</div>
                  <b class="d-block flex-grow-1">12-12-2020 ~ 12-12-2027</b>
                </div><!-- item -->
              </div><!-- d-flex -->
            </td>
          </tr>
        </tbody>
      </table>
      <div class="row row-cols-2 g-1">
        <div class="col">
          <table class="table table-bordered h-100">
            <thead>
              <tr>
                <th class="fw-bold text-capitalize p-1">بيانات السيارة</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-1 align-top">
                  <div class="d-flex flex-column gap-1">
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">رقم السيارة :</div>
                      <b class="d-block flex-grow-1">TB-2347</b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">لون السيارة :</div>
                      <b class="d-block flex-grow-1">اسود</b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">الماركة :</div>
                      <b class="d-block flex-grow-1">كيا</b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">الموديل :</div>
                      <b class="d-block flex-grow-1">سبورتاج</b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">الفئة :</div>
                      <b class="d-block flex-grow-1">B1</b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">نوع التآمين :</div>
                      <b class="d-block flex-grow-1">تآمين شامل</b>
                    </div><!-- item -->
                  </div><!-- d-flex -->
                </td>
              </tr>
            </tbody>
          </table><!-- table -->
        </div><!-- col -->
        <div class="col">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="fw-bold text-capitalize p-1">الفاتورة</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-1 align-top">
                  <div class="row">
                    <div class="col">
                      <div class="d-flex flex-column gap-1">
                        <div class="item d-flex align-items-center justify-content-between gap-2">
                          <div class="d-block flex-shrink-0">سعر الإيجار اليومي :</div>
                          <b class="d-flex align-items-center justify-content-start gap-1 flex-grow-1">100 <small>ريال</small></b>
                        </div><!-- item -->
                        <div class="item d-flex align-items-center justify-content-between gap-2">
                          <div class="d-block flex-shrink-0">المبلغ المدفوع مقدماً :</div>
                          <b class="d-flex align-items-center justify-content-start gap-1 flex-grow-1">100 <small>ريال</small></b>
                        </div><!-- item -->
                        <div class="item d-flex align-items-center justify-content-between gap-2">
                          <div class="d-block flex-shrink-0">المبلغ المتبقي :</div>
                          <b class="d-flex align-items-center justify-content-start gap-1 flex-grow-1">100 <small>ريال</small></b>
                        </div><!-- item -->
                        <div class="item d-flex align-items-center justify-content-between gap-2">
                          <div class="d-block flex-shrink-0">تكلفة خدمة التوصيل :</div>
                          <b class="d-flex align-items-center justify-content-start gap-1 flex-grow-1">100 <small>ريال</small></b>
                        </div><!-- item -->
                        <div class="item d-flex align-items-center justify-content-between gap-2">
                          <div class="d-block flex-shrink-0">خصم :</div>
                          <b class="d-flex align-items-center justify-content-start gap-1 flex-grow-1">- 100 <small>ريال</small></b>
                        </div><!-- item -->
                      </div><!-- d-flex -->
                    </div><!-- col -->
                    <div class="col">
                      <div class="d-flex flex-column gap-1">
                        <div class="item d-flex align-items-center justify-content-between gap-2">
                          <div class="d-block flex-shrink-0">غسيل :</div>
                          <b class="d-flex align-items-center justify-content-start gap-1 flex-grow-1">100 <small>ريال</small></b>
                        </div><!-- item -->
                        <div class="item d-flex align-items-center justify-content-between gap-2">
                          <div class="d-block flex-shrink-0">كيلو متر زيادة :</div>
                          <b class="d-flex align-items-center justify-content-start gap-1 flex-grow-1">100 <small>ريال</small></b>
                        </div><!-- item -->
                        <div class="item d-flex align-items-center justify-content-between gap-2">
                          <div class="d-block flex-shrink-0">فرق بترول :</div>
                          <b class="d-flex align-items-center justify-content-start gap-1 flex-grow-1">100 <small>ريال</small></b>
                        </div><!-- item -->
                        <div class="item d-flex align-items-center justify-content-between gap-2">
                          <div class="d-block flex-shrink-0">خصم عند العودة :</div>
                          <b class="d-flex align-items-center justify-content-start gap-1 flex-grow-1">- 100 <small>ريال</small></b>
                        </div><!-- item -->
                      </div><!-- d-flex -->
                    </div><!-- col -->
                  </div><!-- row -->
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th class="fw-bold text-capitalize p-1">
                  <div class="item d-flex align-items-center justify-content-between gap-2">
                    <div class="d-block flex-shrink-0">إجمالي المبلغ :</div>
                    <b class="d-block flex-grow-1 align-self-stretch position-relative">
                      <p class="d-flex align-items-center justify-content-start gap-1 m-0 position-relative z-1">456 <small>ريال</small></p>
                    </b>
                  </div><!-- item -->
                </th>
              </tr>
            </tfoot>
          </table>
        </div><!-- col -->
      </div><!-- row -->

      <div class="row g-1">
        <div class="col">
          <table class="table table-bordered h-100">
            <thead>
              <tr>
                <th class="fw-bold text-capitalize p-1">مدة الإيجار</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-1 align-top">
                  <div class="d-flex flex-column gap-1">
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">من :</div>
                      <b class="d-block flex-grow-1" dir="ltr">12-12-2020</b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">إلي :</div>
                      <b class="d-block flex-grow-1" dir="ltr">12-12-2020</b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">عدد الايام :</div>
                      <b class="d-block flex-grow-1">5 يوم</b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">الكيلو متر اليومي :</div>
                      <b class="d-flex align-items-center justify-content-start gap-1 flex-grow-1">34343 <small>كم</small></b>
                    </div><!-- item -->
                  </div><!-- d-flex -->
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- col -->
        <div class="col">
          <table class="table table-bordered h-100">
            <thead>
              <tr>
                <th colspan="2" class="fw-bold text-capitalize p-1">تفاصيل الإيجار</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td width="50%" class="p-1 align-top">
                  <div class="d-flex flex-column gap-1">
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">تاريخ المغادرة :</div>
                      <b class="d-block flex-grow-1" dir="ltr">12-12-2024</b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">وقت المغادرة :</div>
                      <b class="d-block flex-grow-1" dir="ltr">12-12-2024</b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">مكان المغادرة :</div>
                      <b class="d-block flex-grow-1">المطار</b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">الكيلو متر عند المغادرة :</div>
                      <b class="d-flex align-items-center justify-content-start gap-1 flex-grow-1">34343 <small>كم</small></b>
                    </div><!-- item -->
                  </div><!-- d-flex -->
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- col -->
      </div><!-- row -->

      <div class="row g-1">
        <div class="col-4 d-flex flex-column gap-2">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td class="p-1 align-top">
                  <div class="d-flex flex-column gap-1">
                    <div class="item d-flex align-items-start justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">حالة الوقود :</div>
                      <div class="oil-status d-flex flex-grow-1 align-items-center justify-content-start gap-4">
                        <div class="slider-size flex-grow-1">
                          <div id="slider-pips"></div>
                        </div><!-- slider-size -->
                      </div><!-- oil-status -->
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">نوع الوقود :</div>
                      <b class="d-block flex-grow-1">95</b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">حالة النظافة :</div>
                      <b class="d-block flex-grow-1">نظيفة</b>
                    </div><!-- item -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">إجمالي الكيلو متر المسموح :</div>
                      <b class="d-flex align-items-center justify-content-start gap-1 flex-grow-1">34343 <small>كم</small></b>
                    </div><!-- item -->
                  </div><!-- d-flex -->
                </td>
              </tr>
            </tbody>
          </table><!-- table -->
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td class="py-2 px-1 align-top">
                  <div class="d-flex flex-column gap-2">
                    <div class="item-with-dots d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">تاريخ العودة :</div>
                      <b class="d-block flex-grow-1 align-self-stretch position-relative">
                        <b class="d-block flex-grow-1" dir="ltr"></b>
                      </b>
                    </div><!-- item-with-dots -->
                    <div class="item-with-dots d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">وقت العودة :</div>
                      <b class="d-block flex-grow-1 align-self-stretch position-relative">
                        <b class="d-block flex-grow-1" dir="ltr"></b>
                      </b>
                    </div><!-- item-with-dots -->
                    <div class="item d-flex align-items-center justify-content-between gap-2">
                      <div class="d-block flex-shrink-0">مكان العودة :</div>
                      <b class="d-block flex-grow-1">الفرع</b>
                    </div><!-- item -->
                  </div><!-- d-flex -->
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- col -->
        <div class="col-8">
          <table class="table table-bordered h-100">
            <tbody>
              <tr>
                <td width="50%" class="p-1 align-middle">
                  <div class="imgthumb d-flex align-items-center justify-content-center">
                    <img src="https://i.postimg.cc/MH4KSpD4/car-image.png" alt="Car" class="img-fluid">
                  </div><!-- imgthumb -->
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- print-page-content -->
    <div class="print-footer flex-shrink-0 d-flex flex-column gap-2 mt-2">
      <div class="top-area">
        <ul class="p-0 m-0">
          <li>ساعات الدوام من 9 ص الي 1 ومن 4:30 الي 10 م</li>
          <li>لا تستلم السيارة بدون مفتاح</li>
          <li>لا تستلم السيارة بدون مفتاح</li>
          <li>لا تستلم السيارة بدون مفتاح</li>
          <li>لا تستلم السيارة بدون مفتاح</li>
          <li>لا تستلم السيارة بدون مفتاح</li>
          <li>لا تستلم السيارة بدون مفتاح</li>
          <li>لا تستلم السيارة بدون مفتاح</li>
          <li>لا تستلم السيارة بدون مفتاح</li>
          <li>لا تستلم السيارة بدون مفتاح</li>
        </ul>
      </div><!-- top-area -->
      <div class="bottom-area p-1">
        <div class="bottom-area-title d-flex align-items-center justify-content-center mb-2">
          <div class="d-flex align-items-center justify-content-center fw-bold px-4 py-2">إقرار وتعهد من المستأجر</div>
        </div><!-- bottom-area-title -->
        <div class="bottom-area-content">
          هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
        </div><!-- bottom-area-content -->
        <div class="txt text-center mt-2 fw-bold">أقر أنا المستأجر بأن بياناتي وعنواني صحيحة وأتحمل كامل المسئولية الناتجة عن أي خطأ في ذلك</div>
        <div class="signature-area d-flex align-items-center justify-content-end mt-3 pb-3">
          <div class="item d-flex align-items-center justify-content-between gap-2">
            <span class="d-block fw-medium flex-shrink-0">توقيع المستأجر :</span>
            <b class="d-block flex-grow-1 align-self-stretch position-relative"></b>
          </div><!-- item -->
        </div><!-- signature-area -->
      </div><!-- bottom-area -->
      <div class="signature-users pt-2 pb-2">
        <div class="item-col d-flex flex-column gap-3">
          <div class="item d-flex align-items-center justify-content-between gap-2">
            <span class="d-block fw-medium flex-shrink-0">توقيع المسؤول عند المغادرة :</span>
            <b class="d-block flex-grow-1 align-self-stretch position-relative"></b>
          </div><!-- item -->
          <div class="item d-flex align-items-center justify-content-between gap-2">
            <span class="d-block fw-medium flex-shrink-0">توقيع المسؤول عند العودة :</span>
            <b class="d-block flex-grow-1 align-self-stretch position-relative"></b>
          </div><!-- item -->
        </div><!-- col -->
        <div class="item-col d-flex flex-column gap-3">
          <div class="item d-flex align-items-center justify-content-between gap-2">
            <span class="d-block fw-medium flex-shrink-0">توقيع المستاجر عند المغارة :</span>
            <b class="d-block flex-grow-1 align-self-stretch position-relative"></b>
          </div><!-- item -->
          <div class="item d-flex align-items-center justify-content-between gap-2">
            <span class="d-block fw-medium flex-shrink-0">توقيع المستاجر عند العودة :</span>
            <b class="d-block flex-grow-1 align-self-stretch position-relative"></b>
          </div><!-- item -->
        </div><!-- col -->
      </div><!-- signature-users -->
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
