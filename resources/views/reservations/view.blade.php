@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/fancybox/fancybox.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
@endpush

@section('content')

  <div id="reservations-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">تفاصيل حجز : 9408</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="{{ url('/reservations/{id}/edit') }}" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#reservationDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div>

    <div class="alert alert-warning d-flex align-items-center" role="alert">
      <span class="alert-icon text-warning me-2"><i class="ti ti-contract ti-xs"></i></span>
      تم إنشاء عقد لهذا الحجز برقم - <a href="#" class="alert-link">#45435</a>
    </div><!-- alert -->

    <div class="row g-3">
      <div class="col-12 col-md-9">
        <div class="card">
          <div class="card-body p-3">
            <div class="table-responsive text-nowrap">
              <table class="table table-striped table-bordered">
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td width="5%" class="p-3">رقم الحجز</td>
                    <td class="p-3">433433</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">
                      <div class="d-flex align-items-center justify-content-start gap-2">
                        حالة الحجز
                        <button type="button" class="p-0 bg-transparent border-0 text-primary" data-bs-toggle="modal" data-bs-target="#reservationStatusModal"><i class="ti ti-edit ti-xs"></i></button>
                      </div><!-- d-flex -->
                    </td>
                    <td class="p-3">
                      <span class="badge bg-label-success">مكتمل</span>
                      <span class="badge bg-label-primary">مؤكد</span>
                      <span class="badge bg-label-secondary">غير مؤكد</span>
                      <span class="badge bg-label-danger">ملغي</span>
                    </td>
                  </tr>
                  <tr class="tr-reservation-status">
                    <td width="5%" class="p-0">
                      <div class="p-3 m-0 w-100 h-100 align-middle badge bg-label-danger text-start fs-6">سبب الإلغاء</div>
                    </td>
                    <td class="p-0">
                      <div class="p-3 m-0 w-100 h-100 align-middle badge bg-label-danger text-start fs-6">العميل لم يتواجد في الوقت المحدد للحجز</div>
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">العميل</td>
                    <td class="p-3">
                      <a href="#" title="#">محمد احمد محمود</a>
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">اسم الشركة</td>
                    <td class="p-3">-</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">الفرع</td>
                    <td class="p-3">فرع الواحة</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">المركبة</td>
                    <td class="p-3">9408 - TB</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">المركبة البديلة</td>
                    <td class="p-3">
                      <div class="d-flex align-items-center justify-content-start gap-1 gap-md-5 flex-wrap">
                        <span>الماركة : تويوتا</span>
                        <span>الفئة : SVU</span>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">مكان الاستلام</td>
                    <td class="p-3">المطار</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">تاريخ الاستلام</td>
                    <td class="p-3">18 / 11 / 2024</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">مكان العودة</td>
                    <td class="p-3">الفندق</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">تاريخ العودة</td>
                    <td class="p-3">18 / 11 / 2024</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">خدمة التوصيل</td>
                    <td class="p-3">مدفوع</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">رقم رحلة الطيران</td>
                    <td class="p-3">234423465566</td>
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
          <a href="{{ url('/contracts/create') }}" class="btn btn-lg btn-primary px-5 w-100 waves-effect waves-light mt-4">إنشاء عقد</a>
        </div><!--  -->
      </div><!-- col-12 -->
    </div><!-- row -->

    <!-- Reservation Delete Modal -->
    @include('reservations.Modals.delete')
    <!-- Reservation Delete Modal -->

    <!-- Reservation Status Modal -->
    @include('reservations.Modals.status')
    <!-- Reservation Status Modal -->

  </div><!-- reservations-view-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/fancybox/fancybox.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
  <script>
    // --------------------------------------------------------------------
    // Fancybox
    // --------------------------------------------------------------------
    Fancybox.bind("[data-fancybox]");
    Fancybox.bind('[data-fancybox="gallery"]');

    // --------------------------------------------------------------------
    // Select 2
    // --------------------------------------------------------------------
    $(".select2").select2();



    /**
 * Sliders
 */
'use strict';

(function () {
  const sliderPips = document.getElementById('slider-pips');
  const customLabels = {
    0: 'E',
    1: '',
    2: '1/4',
    3: '',
    4: '%',
    5: '',
    6: '3/4',
    7: '',
    8: 'F',
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
        max: 8
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
