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
                    <td width="5%" class="p-3">رقم المركبة</td>
                    <td class="p-3">9408 - TB</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">العميل</td>
                    <td class="p-3">
                      <a href="#" title="#">محمد احمد محمود</a>
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
                    <td width="5%" class="p-3">حالة الحجز</td>
                    <td class="p-3">مؤكد</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">الكاتب</td>
                    <td class="p-3">محمد مصطفي</td>
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
        </div><!--  -->
      </div><!-- col-12 -->
    </div><!-- row -->

    <!-- Reservation Delete Modal -->
    <div class="modal fade" id="reservationDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="reservationDeleteModalLabel1">حذف الحجز : 9408</h5>
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف الحجز ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
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
