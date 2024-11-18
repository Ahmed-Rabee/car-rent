@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/fancybox/fancybox.css') }}" />
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
                    <td width="5%" class="p-3">العميل</td>
                    <td class="p-3">
                      <a href="#" title="#">محمد احمد محمود</a>
                    </td>
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
                    <td width="5%" class="p-3">تكلفة خدمة التوصيل</td>
                    <td class="p-3">121 <small>ريال</small></td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">خصم</td>
                    <td class="p-3">- 75 <small>ريال</small></td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">رقم رحلة الطيران</td>
                    <td class="p-3">234423465566</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">حالة الحجز</td>
                    <td class="p-3">مؤكد</td>
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
        </div><!--  -->
      </div><!-- col-12 -->
    </div><!-- row -->

    <!-- Reservation Delete Modal -->
    @include('reservations.Modals.delete')
    <!-- Reservation Delete Modal -->

  </div><!-- reservations-view-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/fancybox/fancybox.umd.js') }}"></script>
  <script>
    Fancybox.bind("[data-fancybox]");
    Fancybox.bind('[data-fancybox="gallery"]');
  </script>
@endpush
