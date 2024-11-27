@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
@endpush

@section('content')

  <div id="contracts-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">تفاصيل عقد : 9408</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="{{ url('/contracts/{id}/edit') }}" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#contractDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div>

    <div class="alert alert-warning d-flex align-items-center" role="alert">
      <span class="alert-icon text-warning me-2"><i class="ti ti-contract ti-xs"></i></span>
      هذا العقد تابع لحجز برقم - <a href="{{ url('/reservations/{id}/view') }}" class="alert-link text-decoration-underline">#45435</a>
    </div><!-- alert -->

    <div class="row g-3">
      <div class="col-12 col-md-9">
        <div class="card">
          <div class="card-body p-3">
            <div class="table-responsive text-nowrap">
              <table class="table table-striped table-bordered">
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td width="5%" class="p-3">رقم العقد</td>
                    <td class="p-3">8654</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">رقم الحجز</td>
                    <td class="p-3">1526</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">العميل</td>
                    <td class="p-3">
                      <a href="{{ url('/clients/{id}/view') }}" title="#">محمد احمد محمود</a>
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">اسم الشركة</td>
                    <td class="p-3">-</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">الفرع</td>
                    <td class="p-3">
                      <a href="{{ url('/branches/{id}/view') }}" title="#">فرع الواحة</a>
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">المركبة</td>
                    <td class="p-3">
                      <a href="{{ url('/cars/{id}/view') }}" title="#" dir="ltr">TB - 2343</a>
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">تاريخ الاستلام</td>
                    <td class="p-3">18 / 11 / 2024</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">مكان الاستلام</td>
                    <td class="p-3">المطار</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">تاريخ العودة</td>
                    <td class="p-3">18 / 11 / 2024</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">مكان العودة</td>
                    <td class="p-3">الفندق</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">خدمة التوصيل</td>
                    <td class="p-3">مدفوع</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">حالة البترول</td>
                    <td class="p-3">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="pb-4">
                            <div id="slider-pips"></div>
                          </div>
                        </div><!-- col-12 -->
                        <div class="col-12 col-md-6">
                        <span>4353 كم</span>
                        </div><!-- col-12 -->
                      </div><!-- row -->
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">حالة النظافة</td>
                    <td class="p-3">نظيفة</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">نوع التآمين</td>
                    <td class="p-3">الإمارات العربية المتحدة</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">الكيلو متر الحالي</td>
                    <td class="p-3">243243 كم</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">الكاتب</td>
                    <td class="p-3">محمد مصطفي</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">الملاحظات</td>
                    <td class="p-3">الملاحظات الملاحظات الملاحظات الملاحظات الملاحظات الملاحظات</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col-12 -->
      <div class="col-12 col-md-3">
        <div class="reservation-cart-side">
          <div class="card">
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
                  <p class="m-0">453 <small>ريال</small></p>
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
        </div><!-- reservation-cart-side -->
      </div><!-- col-12 -->
    </div><!-- row -->

    <!-- contracts Delete Modal -->
    @include('contracts.Modals.delete')
    <!-- contracts Delete Modal -->

  </div><!-- contracts-view-page -->

@endsection

@push('scripts')
  <script type="text/javascript" src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
  <script type="text/javascript">
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
