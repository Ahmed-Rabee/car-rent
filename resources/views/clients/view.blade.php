@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/fancybox/fancybox.css') }}" />
@endpush

@section('content')

  <div id="client-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">تفاصيل عميل : احمد محمد محمود</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="{{ url('/clients/{id}/edit') }}" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#clientDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div>

    <div class="row g-4 mb-4">
      <div class="col-xl-3 col-lg-4 col-md-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="d-flex align-items-center flex-column">
              <img class="img-fluid rounded mb-3" src="{{ asset('assets/images/user-avatar.webp') }}" height="100" width="100" alt="User avatar">
              <div class="user-info text-center">
                <h5 class="mb-2">احمد محمد محمود</h5>
                <span class="badge bg-label-secondary py-2">محلي</span>
              </div><!-- user-info -->
            </div><!-- d-flex -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col-12 -->
      <div class="col-xl-9 col-lg-8 col-md-8">
        <div class="card h-100">
          <div class="card-body p-3">
            <div class="row row-cols-1 row-cols-md-2 g-3">
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1 flex-wrap">
                  <span class="d-block flex-shrink-0">رقم الهاتف :</span>
                  <span class="d-block flex-grow-1">
                    <a href="tel:96892035086" target="_blank" dir="ltr">+96892035086</a>
                  </span>
                </div>
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1 flex-wrap">
                  <span class="d-block flex-shrink-0">رقم الواتس اب :</span>
                  <span class="d-block flex-grow-1">
                    <a href="https://wa.me/96892035086" target="_blank" dir="ltr">+96892035086</a>
                  </span>
                </div>
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1 flex-wrap">
                  <span class="d-block flex-shrink-0">البريد الإلكتروني :</span>
                  <span class="d-block flex-grow-1">
                    <a href="mailto:vafgot@vultukir.org" target="_blank" dir="ltr">vafgot@vultukir.org</a>
                  </span>
                </div>
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1 flex-wrap">
                  <span class="d-block flex-shrink-0">الجنس :</span>
                  <span class="d-block flex-grow-1">ذكر</span>
                </div>
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1 flex-wrap">
                  <span class="d-block flex-shrink-0">الجنسية :</span>
                  <span class="d-block flex-grow-1">مصري</span>
                </div>
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1 flex-wrap">
                  <span class="d-block flex-shrink-0">دولة الإقامة :</span>
                  <span class="d-block flex-grow-1">الرياض</span>
                </div>
              </div><!-- col -->
            </div><!-- row -->
            <div class="d-flex align-items-center justify-content-start gap-1 flex-wrap mt-3">
              <span class="d-block flex-shrink-0">العنوان :</span>
              <span class="d-block flex-grow-1">هنا يكتب العنوان للعميل ان وجد</span>
            </div>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col-12 -->
    </div><!-- row -->

    <ul class="nav nav-pills mb-3" role="tablist">
      <li class="nav-item">
        <button
          type="button"
          class="nav-link active"
          role="tab"
          data-bs-toggle="tab"
          data-bs-target="#client-documents"
          aria-controls="client-documents"
          aria-selected="true"
        >
        الوثائق الرسمية
        </button>
      </li>
      <li class="nav-item">
        <button
          type="button"
          class="nav-link"
          role="tab"
          data-bs-toggle="tab"
          data-bs-target="#client-reservations"
          aria-controls="client-reservations"
          aria-selected="false"
        >
          الحجوزات
        </button>
      </li>
    </ul>

    <div class="tab-content p-3">

      <div class="tab-pane fade show active" id="client-documents" role="tabpanel">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <tbody class="table-border-bottom-0">

              <!-- تصنيف العميل محلي -->
              <tr>
                <td width="5%" class="p-3 text-nowrap">رقم الهوية الوطنية</td>
                <td class="p-3">7668837346346</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">صورة الهوية الوطنية</td>
                <td class="p-3">
                  <div class="d-flex justify-content-start flex-wrap gap-3">
                    <a href="../../assets/img/elements/11.jpg" data-fancybox="local-customer-national-id-image" data-caption="صورة الهوية الوطنية">
                      <img src="../../assets/img/elements/11.jpg" class="rounded-1 m-0" alt="صورة الهوية الوطنية" height="32" width="32">
                    </a>
                    <a href="../../assets/img/elements/10.jpg" data-fancybox="local-customer-national-id-image" data-caption="صورة الهوية الوطنية">
                      <img src="../../assets/img/elements/10.jpg" class="rounded-1 m-0" alt="صورة الهوية الوطنية" height="32" width="32">
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">تاريخ إنتهاء الهوية الوطنية</td>
                <td class="p-3">18 / 11 / 2024</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">رقم رخصة القيادة</td>
                <td class="p-3">7668837346346</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">جهة إصدار رخصة القيادة</td>
                <td class="p-3">وزارة الداخلية</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">صورة رخصة القيادة</td>
                <td class="p-3">
                  <div class="d-flex justify-content-start flex-wrap gap-3">
                    <a href="../../assets/img/elements/8.jpg" data-fancybox="local-customer-driving-license-photo" data-caption="صورة رخصة القيادة">
                      <img src="../../assets/img/elements/8.jpg" class="rounded-1 m-0" alt="صورة رخصة القيادة" height="32" width="32">
                    </a>
                    <a href="../../assets/img/elements/7.jpg" data-fancybox="local-customer-driving-license-photo" data-caption="صورة رخصة القيادة">
                      <img src="../../assets/img/elements/7.jpg" class="rounded-1 m-0" alt="صورة رخصة القيادة" height="32" width="32">
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">مدة رخصة القيادة</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-2">
                    <span>من : 18 / 11 / 2024</span>
                    <span>-</span>
                    <span>إلي : 18 / 11 / 2024</span>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <!-- تصنيف العميل محلي -->

              <!-- تصنيف العميل مجلس تعاون الخليج -->
              <tr>
                <td width="5%" class="p-3 text-nowrap">رقم الهوية الوطنية</td>
                <td class="p-3">7668837346346</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">صورة الهوية الوطنية</td>
                <td class="p-3">
                  <div class="d-flex justify-content-start flex-wrap gap-3">
                    <a href="../../assets/img/elements/6.jpg" data-fancybox="gcc-customer-national-id-photo" data-caption="صورة الهوية الوطنية">
                      <img src="../../assets/img/elements/6.jpg" class="rounded-1 m-0" alt="صورة الهوية الوطنية" height="32" width="32">
                    </a>
                    <a href="../../assets/img/elements/5.jpg" data-fancybox="gcc-customer-national-id-photo" data-caption="صورة الهوية الوطنية">
                      <img src="../../assets/img/elements/5.jpg" class="rounded-1 m-0" alt="صورة الهوية الوطنية" height="32" width="32">
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">مدة الهوية الوطنية</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-2">
                    <span>من : 18 / 11 / 2024</span>
                    <span>-</span>
                    <span>إلي : 18 / 11 / 2024</span>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">رقم رخصة القيادة</td>
                <td class="p-3">76784747</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">جهة إصدار رخصة القيادة</td>
                <td class="p-3">-</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">صورة رخصة القيادة</td>
                <td class="p-3">
                  <div class="d-flex justify-content-start flex-wrap gap-3">
                    <a href="../../assets/img/elements/4.jpg" data-fancybox="gcc-customer-driving-license-photo" data-caption="صورة رخصة القيادة">
                      <img src="../../assets/img/elements/4.jpg" class="rounded-1 m-0" alt="صورة رخصة القيادة" height="32" width="32">
                    </a>
                    <a href="../../assets/img/elements/3.jpg" data-fancybox="gcc-customer-driving-license-photo" data-caption="صورة رخصة القيادة">
                      <img src="../../assets/img/elements/3.jpg" class="rounded-1 m-0" alt="صورة رخصة القيادة" height="32" width="32">
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">مدة رخصة القيادة</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-2">
                    <span>من : 18 / 11 / 2024</span>
                    <span>-</span>
                    <span>إلي : 18 / 11 / 2024</span>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <!-- تصنيف العميل مجلس تعاون الخليج -->

              <!-- تصنيف العميل اجنبي -->
              <tr>
                <td width="5%" class="p-3 text-nowrap">رقم جواز السفر</td>
                <td class="p-3">7668837346346</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">صورة جواز السفر</td>
                <td class="p-3">
                  <a href="../../assets/img/elements/3.jpg" data-fancybox="foreign-customer-passport-photo" data-caption="صورة جواز السفر">
                    <img src="../../assets/img/elements/3.jpg" class="rounded-1 m-0" alt="صورة جواز السفر" height="32" width="32">
                  </a>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">مدة جواز السفر</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-2">
                    <span>من : 18 / 11 / 2024</span>
                    <span>-</span>
                    <span>إلي : 18 / 11 / 2024</span>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">رقم التآشيرة</td>
                <td class="p-3">7668837346346</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">صورة التآشيرة</td>
                <td class="p-3">
                  <a href="../../assets/img/elements/2.jpg" data-fancybox="foreign-customer-visa-photo" data-caption="صورة التآشيرة">
                    <img src="../../assets/img/elements/2.jpg" class="rounded-1 m-0" alt="صورة التآشيرة" height="45" width="45">
                  </a>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">مدة التآشيرة</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-2">
                    <span>من : 18 / 11 / 2024</span>
                    <span>-</span>
                    <span>إلي : 18 / 11 / 2024</span>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">رقم رخصة القيادة</td>
                <td class="p-3">76784747</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">جهة إصدار رخصة القيادة</td>
                <td class="p-3">-</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">صورة رخصة القيادة</td>
                <td class="p-3">
                  <div class="d-flex justify-content-start flex-wrap gap-3">
                    <a href="../../assets/img/elements/4.jpg" data-fancybox="foreign-customer-driving-license-photo" data-caption="صورة رخصة القيادة">
                      <img src="../../assets/img/elements/4.jpg" class="rounded-1 m-0" alt="صورة رخصة القيادة" height="45" width="45">
                    </a>
                    <a href="../../assets/img/elements/3.jpg" data-fancybox="foreign-customer-driving-license-photo" data-caption="صورة رخصة القيادة">
                      <img src="../../assets/img/elements/3.jpg" class="rounded-1 m-0" alt="صورة رخصة القيادة" height="45" width="45">
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">مدة رخصة القيادة</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-2">
                    <span>من : 18 / 11 / 2024</span>
                    <span>-</span>
                    <span>إلي : 18 / 11 / 2024</span>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <!-- تصنيف العميل اجنبي -->

            </tbody>
          </table>
        </div><!-- table-responsive -->
      </div><!-- tab-pane -->

      <div class="tab-pane fade" id="client-reservations" role="tabpanel">
        <div class="table-responsive text-nowrap">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th width="5%" class="fw-bold p-3">#</th>
                <th class="fw-bold p-3">رقم المركبة</th>
                <th class="fw-bold p-3">تاريخ الاستلام</th>
                <th class="fw-bold p-3">مكان الاستلام</th>
                <th class="fw-bold p-3">تاريخ العودة</th>
                <th class="fw-bold p-3">مكان العودة</th>
                <th class="fw-bold p-3">حالة الحجز</th>
                <th class="fw-bold p-3">الكاتب</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td class="p-3">
                  <a href="{{ url('/reservations/{id}/view') }}" title="#">234</a>
                </td>
                <td class="p-3">9408 - TB</td>
                <td class="p-3">18 / 11 / 2024</td>
                <td class="p-3">المطار</td>
                <td class="p-3">18 / 11 / 2024</td>
                <td class="p-3">الفندق</td>
                <td class="p-3">مؤكد</td>
                <td class="p-3">محمد مصطفي</td>
              </tr>
            </tbody>
          </table>
        </div><!-- table-responsive -->
      </div><!-- tab-pane -->

    </div><!-- tab-content -->

    <!-- Client Delete Modal -->
    @include('clients.Modals.delete')
    <!-- Client Delete Modal -->

  </div><!-- client-view-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/fancybox/fancybox.umd.js') }}"></script>
  <script>
    Fancybox.bind("[data-fancybox]");
    Fancybox.bind('[data-fancybox="gallery"]');
  </script>
@endpush
