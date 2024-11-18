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

    <ul class="nav nav-pills mb-4" role="tablist">
      <li class="nav-item">
        <button
          type="button"
          class="nav-link active"
          role="tab"
          data-bs-toggle="tab"
          data-bs-target="#general-information-tab"
          aria-controls="general-information-tab"
          aria-selected="true"
        >
          معلومات عامة
        </button>
      </li>
      <li class="nav-item">
        <button
          type="button"
          class="nav-link"
          role="tab"
          data-bs-toggle="tab"
          data-bs-target="#official-documents-tab"
          aria-controls="official-documents-tab"
          aria-selected="false"
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
          data-bs-target="#reservations-tab"
          aria-controls="reservations-tab"
          aria-selected="false"
        >
          الحجوزات
        </button>
      </li>
    </ul>

    <div class="tab-content bg-transparent p-0 shadow-none">
      <div class="tab-pane fade show active" id="general-information-tab" role="tabpanel">
        <div class="card">
          <div class="card-body">
            <div class="row row-cols-1 row-cols-md-2 g-3">
              <div class="col d-flex flex-column gap-4">
                <div class="item d-flex align-items-center justify-content-start gap-1 gap-md-2 flex-wrap">
                  <span class="d-block flex-shrink-0">تصنيف العميل :</span>
                  <span class="d-block flex-grow-1">محلي</span>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-start gap-1 gap-md-2 flex-wrap">
                  <span class="d-block flex-shrink-0">الجنس :</span>
                  <span class="d-block flex-grow-1">ذكر</span>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-start gap-1 gap-md-2 flex-wrap">
                  <span class="d-block flex-shrink-0">الجنسية :</span>
                  <span class="d-block flex-grow-1">قطري</span>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-start gap-1 gap-md-2 flex-wrap">
                  <span class="d-block flex-shrink-0">دولة الإقامة :</span>
                  <span class="d-block flex-grow-1">عمان</span>
                </div><!-- item -->
              </div><!-- col -->
              <div class="col d-flex flex-column gap-4">
                <div class="item d-flex align-items-center justify-content-start gap-1 gap-md-2 flex-wrap">
                  <span class="d-block flex-shrink-0">اسم العميل :</span>
                  <span class="d-block flex-grow-1">احمد محمد محمود</span>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-start gap-1 gap-md-2 flex-wrap">
                  <span class="d-block flex-shrink-0">رقم الجوال :</span>
                  <span class="d-block flex-grow-1">
                    <div class="d-flex align-items-center justify-content-start">
                      <a href="tel:96892035086" class="d-flex align-items-center justify-content-center gap-1" dir="ltr">
                        <span class="ti-xs ti ti-phone"></span> +96892035086
                      </a>
                    </div><!-- d-flex -->
                  </span>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-start gap-1 gap-md-2 flex-wrap">
                  <span class="d-block flex-shrink-0">رقم الواتس اب :</span>
                  <span class="d-block flex-grow-1">
                    <div class="d-flex align-items-center justify-content-start">
                      <a href="https://wa.me/96892035086" class="d-flex align-items-center justify-content-center gap-1" dir="ltr">
                        <span class="ti-xs ti ti-brand-whatsapp"></span> +96892035086
                      </a>
                    </div><!-- d-flex -->
                  </span>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-start gap-1 gap-md-2 flex-wrap">
                  <span class="d-block flex-shrink-0">البريد الالكتروني :</span>
                  <span class="d-block flex-grow-1">
                    <div class="d-flex align-items-center justify-content-start">
                      <a href="email:test@test.com" class="d-flex align-items-center justify-content-center gap-1" dir="ltr">
                        <span class="ti-xs ti ti-mail"></span> test@test.com
                      </a>
                    </div><!-- d-flex -->
                  </span>
                </div><!-- item -->
                <div class="item d-flex align-items-center justify-content-start gap-1 gap-md-2 flex-wrap">
                  <span class="d-block flex-shrink-0">العنوان :</span>
                  <span class="d-block flex-grow-1">-</span>
                </div><!-- item -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- general-information-tab -->
      <div class="tab-pane fade" id="official-documents-tab" role="tabpanel">

        <!-- تصنيف العميل محلي -->
        <div class="card mb-4">
          <div class="card-header p-3">
            <h5 class="card-title m-0">الهوية الوطنية</h5>
          </div><!-- card-header -->
          <div class="card-body p-3 pt-0">
            <div class="table-responsive text-nowrap">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="33.333%" class="fw-bold">رقم الهوية الوطنية</th>
                    <th width="33.333%" class="fw-bold">صورة الهوية الوطنية</th>
                    <th width="33.333%" class="fw-bold">تاريخ إنتهاء الهوية الوطنية</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td>7668837346346</td>
                    <td>
                      <div class="d-flex justify-content-start flex-wrap gap-3">
                        <a href="../../assets/img/elements/11.jpg" data-fancybox="local-customer-national-id-image" data-caption="صورة الهوية الوطنية">
                          <img src="../../assets/img/elements/11.jpg" class="rounded-1 m-0" alt="صورة الهوية الوطنية" height="45" width="45">
                        </a>
                        <a href="../../assets/img/elements/10.jpg" data-fancybox="local-customer-national-id-image" data-caption="صورة الهوية الوطنية">
                          <img src="../../assets/img/elements/10.jpg" class="rounded-1 m-0" alt="صورة الهوية الوطنية" height="45" width="45">
                        </a>
                      </div>
                    </td>
                    <td>18 / 11 / 2024</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card-body -->
        </div><!-- card -->
        <div class="card mb-4">
          <div class="card-header p-3">
            <h5 class="card-title m-0">رخصة القيادة</h5>
          </div><!-- card-header -->
          <div class="card-body p-3 pt-0">
            <div class="table-responsive text-nowrap">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="25%" class="fw-bold">رقم رخصة القيادة</th>
                    <th width="25%" class="fw-bold">جهة إصدار رخصة القيادة</th>
                    <th width="25%" class="fw-bold">صورة رخصة القيادة</th>
                    <th width="25%" class="fw-bold">مدة رخصة القيادة</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td>7668837346346</td>
                    <td>وزارة الداخلية</td>
                    <td>
                      <div class="d-flex justify-content-start flex-wrap gap-3">
                        <a href="../../assets/img/elements/8.jpg" data-fancybox="local-customer-driving-license-photo" data-caption="صورة رخصة القيادة">
                          <img src="../../assets/img/elements/8.jpg" class="rounded-1 m-0" alt="صورة رخصة القيادة" height="45" width="45">
                        </a>
                        <a href="../../assets/img/elements/7.jpg" data-fancybox="local-customer-driving-license-photo" data-caption="صورة رخصة القيادة">
                          <img src="../../assets/img/elements/7.jpg" class="rounded-1 m-0" alt="صورة رخصة القيادة" height="45" width="45">
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center justify-content-start gap-2">
                        <span>من : 18 / 11 / 2024</span>
                        <span>-</span>
                        <span>إلي : 18 / 11 / 2024</span>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card-body -->
        </div><!-- card -->
        <!-- تصنيف العميل محلي -->

        <div class="divider mb-4 mt-0">
          <div class="divider-text fs-4">تصنيف العميل مجلس تعاون الخليج</div>
        </div>

        <!-- تصنيف العميل مجلس تعاون الخليج -->
        <div class="card mb-4">
          <div class="card-header p-3">
            <h5 class="card-title m-0">الهوية الوطنية</h5>
          </div><!-- card-header -->
          <div class="card-body p-3 pt-0">
            <div class="table-responsive text-nowrap">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="33.333%" class="fw-bold">رقم الهوية الوطنية</th>
                    <th width="33.333%" class="fw-bold">صورة الهوية الوطنية</th>
                    <th width="33.333%" class="fw-bold">مدة الهوية الوطنية</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td>7668837346346</td>
                    <td>
                      <div class="d-flex justify-content-start flex-wrap gap-3">
                        <a href="../../assets/img/elements/6.jpg" data-fancybox="gcc-customer-national-id-photo" data-caption="صورة الهوية الوطنية">
                          <img src="../../assets/img/elements/6.jpg" class="rounded-1 m-0" alt="صورة الهوية الوطنية" height="45" width="45">
                        </a>
                        <a href="../../assets/img/elements/5.jpg" data-fancybox="gcc-customer-national-id-photo" data-caption="صورة الهوية الوطنية">
                          <img src="../../assets/img/elements/5.jpg" class="rounded-1 m-0" alt="صورة الهوية الوطنية" height="45" width="45">
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center justify-content-start gap-2">
                        <span>من : 18 / 11 / 2024</span>
                        <span>-</span>
                        <span>إلي : 18 / 11 / 2024</span>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card-body -->
        </div><!-- card -->
        <div class="card mb-4">
          <div class="card-header p-3">
            <h5 class="card-title m-0">رخصة القيادة</h5>
          </div><!-- card-header -->
          <div class="card-body p-3 pt-0">
            <div class="table-responsive text-nowrap">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="25%" class="fw-bold">رقم رخصة القيادة</th>
                    <th width="25%" class="fw-bold">جهة إصدار رخصة القيادة</th>
                    <th width="25%" class="fw-bold">صورة رخصة القيادة</th>
                    <th width="25%" class="fw-bold">مدة رخصة القيادة</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td>76784747</td>
                    <td>-</td>
                    <td>
                      <div class="d-flex justify-content-start flex-wrap gap-3">
                        <a href="../../assets/img/elements/4.jpg" data-fancybox="gcc-customer-driving-license-photo" data-caption="صورة رخصة القيادة">
                          <img src="../../assets/img/elements/4.jpg" class="rounded-1 m-0" alt="صورة رخصة القيادة" height="45" width="45">
                        </a>
                        <a href="../../assets/img/elements/3.jpg" data-fancybox="gcc-customer-driving-license-photo" data-caption="صورة رخصة القيادة">
                          <img src="../../assets/img/elements/3.jpg" class="rounded-1 m-0" alt="صورة رخصة القيادة" height="45" width="45">
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center justify-content-start gap-2">
                        <span>من : 18 / 11 / 2024</span>
                        <span>-</span>
                        <span>إلي : 18 / 11 / 2024</span>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card-body -->
        </div><!-- card -->
        <!-- تصنيف العميل مجلس تعاون الخليج -->

        <div class="divider mb-4 mt-0">
          <div class="divider-text fs-4">تصنيف العميل اجنبي</div>
        </div>

        <!-- تصنيف العميل اجنبي -->
        <div class="card mb-4">
          <div class="card-header p-3">
            <h5 class="card-title m-0">جواز السفر</h5>
          </div><!-- card-header -->
          <div class="card-body p-3 pt-0">
            <div class="table-responsive text-nowrap">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="33.333%" class="fw-bold">رقم جواز السفر</th>
                    <th width="33.333%" class="fw-bold">صورة جواز السفر</th>
                    <th width="33.333%" class="fw-bold">مدة جواز السفر</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td>7668837346346</td>
                    <td>
                      <a href="../../assets/img/elements/3.jpg" data-fancybox="foreign-customer-passport-photo" data-caption="صورة جواز السفر">
                        <img src="../../assets/img/elements/3.jpg" class="rounded-1 m-0" alt="صورة جواز السفر" height="45" width="45">
                      </a>
                    </td>
                    <td>
                      <div class="d-flex align-items-center justify-content-start gap-2">
                        <span>من : 18 / 11 / 2024</span>
                        <span>-</span>
                        <span>إلي : 18 / 11 / 2024</span>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card-body -->
        </div><!-- card -->
        <div class="card mb-4">
          <div class="card-header p-3">
            <h5 class="card-title m-0">التآشيرة</h5>
          </div><!-- card-header -->
          <div class="card-body p-3 pt-0">
            <div class="table-responsive text-nowrap">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="33.333%" class="fw-bold">رقم التآشيرة</th>
                    <th width="33.333%" class="fw-bold">صورة التآشيرة</th>
                    <th width="33.333%" class="fw-bold">مدة التآشيرة</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td>7668837346346</td>
                    <td>
                      <a href="../../assets/img/elements/2.jpg" data-fancybox="foreign-customer-visa-photo" data-caption="صورة التآشيرة">
                        <img src="../../assets/img/elements/2.jpg" class="rounded-1 m-0" alt="صورة التآشيرة" height="45" width="45">
                      </a>
                    </td>
                    <td>
                      <div class="d-flex align-items-center justify-content-start gap-2">
                        <span>من : 18 / 11 / 2024</span>
                        <span>-</span>
                        <span>إلي : 18 / 11 / 2024</span>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card-body -->
        </div><!-- card -->
        <div class="card">
          <div class="card-header p-3">
            <h5 class="card-title m-0">رخصة القيادة</h5>
          </div><!-- card-header -->
          <div class="card-body p-3 pt-0">
            <div class="table-responsive text-nowrap">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="25%" class="fw-bold">رقم رخصة القيادة</th>
                    <th width="25%" class="fw-bold">جهة إصدار رخصة القيادة</th>
                    <th width="25%" class="fw-bold">صورة رخصة القيادة</th>
                    <th width="25%" class="fw-bold">مدة رخصة القيادة</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td>76784747</td>
                    <td>-</td>
                    <td>
                      <div class="d-flex justify-content-start flex-wrap gap-3">
                        <a href="../../assets/img/elements/4.jpg" data-fancybox="foreign-customer-driving-license-photo" data-caption="صورة رخصة القيادة">
                          <img src="../../assets/img/elements/4.jpg" class="rounded-1 m-0" alt="صورة رخصة القيادة" height="45" width="45">
                        </a>
                        <a href="../../assets/img/elements/3.jpg" data-fancybox="foreign-customer-driving-license-photo" data-caption="صورة رخصة القيادة">
                          <img src="../../assets/img/elements/3.jpg" class="rounded-1 m-0" alt="صورة رخصة القيادة" height="45" width="45">
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center justify-content-start gap-2">
                        <span>من : 18 / 11 / 2024</span>
                        <span>-</span>
                        <span>إلي : 18 / 11 / 2024</span>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card-body -->
        </div><!-- card -->
        <!-- تصنيف العميل اجنبي -->
      </div><!-- official-documents-tab -->
      <div class="tab-pane fade" id="reservations-tab" role="tabpanel">
        <div class="card">
          <div class="table-responsive text-nowrap">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th width="5%" class="fw-bold">#</th>
                  <th class="fw-bold">رقم المركبة</th>
                  <th class="fw-bold">تاريخ الاستلام</th>
                  <th class="fw-bold">مكان الاستلام</th>
                  <th class="fw-bold">تاريخ العودة</th>
                  <th class="fw-bold">مكان العودة</th>
                  <th class="fw-bold">حالة الحجز</th>
                  <th class="fw-bold">الكاتب</th>
                  <th width="5%"></th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td>
                    <a href="{{ url('/reservations/{id}/view') }}" title="#">234</a>
                  </td>
                  <td>9408 - TB</td>
                  <td>18 / 11 / 2024</td>
                  <td>المطار</td>
                  <td>18 / 11 / 2024</td>
                  <td>الفندق</td>
                  <td>مؤكد</td>
                  <td>محمد مصطفي</td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                        <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                        <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#reservationDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="{{ url('/reservations/{id}/view') }}" title="#">234</a>
                  </td>
                  <td>9408 - TB</td>
                  <td>18 / 11 / 2024</td>
                  <td>المطار</td>
                  <td>18 / 11 / 2024</td>
                  <td>الفندق</td>
                  <td>مؤكد</td>
                  <td>محمد مصطفي</td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                        <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                        <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#reservationDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="{{ url('/reservations/{id}/view') }}" title="#">234</a>
                  </td>
                  <td>9408 - TB</td>
                  <td>18 / 11 / 2024</td>
                  <td>المطار</td>
                  <td>18 / 11 / 2024</td>
                  <td>الفندق</td>
                  <td>مؤكد</td>
                  <td>محمد مصطفي</td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                        <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                        <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#reservationDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="{{ url('/reservations/{id}/view') }}" title="#">234</a>
                  </td>
                  <td>9408 - TB</td>
                  <td>18 / 11 / 2024</td>
                  <td>المطار</td>
                  <td>18 / 11 / 2024</td>
                  <td>الفندق</td>
                  <td>مؤكد</td>
                  <td>محمد مصطفي</td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                        <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                        <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#reservationDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="{{ url('/reservations/{id}/view') }}" title="#">234</a>
                  </td>
                  <td>9408 - TB</td>
                  <td>18 / 11 / 2024</td>
                  <td>المطار</td>
                  <td>18 / 11 / 2024</td>
                  <td>الفندق</td>
                  <td>مؤكد</td>
                  <td>محمد مصطفي</td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/view') }}"><i class="ti ti-eye me-1"></i> عرض</a>
                        <a class="dropdown-item waves-effect" href="{{ url('/reservations/{id}/edit') }}"><i class="ti ti-pencil me-1"></i> تعديل</a>
                        <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#reservationDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->
        </div><!-- card -->
        <!-- Reservation Delete Modal -->
        @include('reservations.Modals.delete')
        <!-- Reservation Delete Modal -->
      </div><!-- reservations-tab -->
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
