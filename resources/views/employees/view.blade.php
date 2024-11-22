@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/fancybox/fancybox.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endpush

@section('content')

  <div id="employees-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">تفاصيل موظف</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="{{ url('/employees/{id}/edit') }}" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#employeeDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
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
                <span class="badge bg-label-secondary py-2">موظف إستقبال</span>
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
                  <span class="d-block flex-shrink-0">البريد الإلكتروني :</span>
                  <span class="d-block flex-grow-1">
                    <a href="mailto:vafgot@vultukir.org" target="_blank" dir="ltr">vafgot@vultukir.org</a>
                  </span>
                </div>
              </div><!-- col -->
              <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-1 flex-wrap">
                  <span class="d-block flex-shrink-0">تاريخ الميلاد :</span>
                  <span class="d-block flex-grow-1">2024-11-17</span>
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
                  <span class="d-block flex-shrink-0">الحالة الإجتماعية :</span>
                  <span class="d-block flex-grow-1">متزوج</span>
                </div>
              </div><!-- col -->
            </div><!-- row -->
            <div class="d-flex align-items-center justify-content-start gap-1 flex-wrap mt-3">
              <span class="d-block flex-shrink-0">محل الإقامة :</span>
              <span class="d-block flex-grow-1">الرياض</span>
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
          data-bs-target="#employee-job-info"
          aria-controls="employee-job-info"
          aria-selected="true"
        >
          معلومات العمل
        </button>
      </li>
      <li class="nav-item">
        <button
          type="button"
          class="nav-link"
          role="tab"
          data-bs-toggle="tab"
          data-bs-target="#employee-documents"
          aria-controls="employee-documents"
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
          data-bs-target="#employee-financial-info"
          aria-controls="employee-financial-info"
          aria-selected="false"
        >
          المعلومات الماليه
        </button>
      </li>
      <li class="nav-item">
        <button
          type="button"
          class="nav-link"
          role="tab"
          data-bs-toggle="tab"
          data-bs-target="#employee-penalties"
          aria-controls="employee-penalties"
          aria-selected="false"
        >
          الجزاءات
        </button>
      </li>
      <li class="nav-item">
        <button
          type="button"
          class="nav-link"
          role="tab"
          data-bs-toggle="tab"
          data-bs-target="#employee-advances"
          aria-controls="employee-advances"
          aria-selected="false"
        >
          السَّلَفُ
        </button>
      </li>
      <li class="nav-item">
        <button
          type="button"
          class="nav-link"
          role="tab"
          data-bs-toggle="tab"
          data-bs-target="#employee-rewards"
          aria-controls="employee-rewards"
          aria-selected="false"
        >
          المكافآت
        </button>
      </li>
    </ul>

    <div class="tab-content p-3">

      <div class="tab-pane fade show active" id="employee-job-info" role="tabpanel">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <tbody class="table-border-bottom-0">
              <tr>
                <td width="5%" class="p-3 text-nowrap">تاريخ التعيين</td>
                <td class="p-3">2024-11-17</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">الحالة</td>
                <td class="p-3">مفعل</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">ايام العطلات</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start flex-wrap gap-2">
                    <span class="badge bg-label-dark">الجمعة</span>
                    <span class="badge bg-label-dark">السبت</span>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">ساعات العمل</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    8 <small>ساعة</small>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">الصلاحيات</td>
                <td class="p-3">موظف</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">الفرع</td>
                <td class="p-3">فرع الواحة</td>
              </tr>
            </tbody>
          </table>
        </div><!-- table-responsive -->
      </div><!-- tab-pane -->

      <div class="tab-pane fade" id="employee-documents" role="tabpanel">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <tbody class="table-border-bottom-0">
              <tr>
                <td width="5%" class="p-3 text-nowrap">بطاقة الهوية الوطنية</td>
                <td class="p-3">
                  <div class="d-flex justify-content-start flex-wrap gap-3">
                    <a href="../../assets/img/elements/4.jpg" data-fancybox="employee-id-card" data-caption="بطاقة الهوية الوطنية">
                      <img src="../../assets/img/elements/4.jpg" class="rounded-1 m-0" alt="بطاقة الهوية الوطنية" height="32" width="32">
                    </a>
                    <a href="../../assets/img/elements/3.jpg" data-fancybox="employee-id-card" data-caption="بطاقة الهوية الوطنية">
                      <img src="../../assets/img/elements/3.jpg" class="rounded-1 m-0" alt="بطاقة الهوية الوطنية" height="32" width="32">
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">تاريخ إنتهاء الهوية الوطنية</td>
                <td class="p-3">2024-11-17</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">رخصة القيادة</td>
                <td class="p-3">
                  <div class="d-flex justify-content-start flex-wrap gap-3">
                    <a href="../../assets/img/elements/5.jpg" data-fancybox="employee-vehicle-license" data-caption="رخصة القيادة">
                      <img src="../../assets/img/elements/5.jpg" class="rounded-1 m-0" alt="رخصة القيادة" height="32" width="32">
                    </a>
                    <a href="../../assets/img/elements/6.jpg" data-fancybox="employee-vehicle-license" data-caption="رخصة القيادة">
                      <img src="../../assets/img/elements/6.jpg" class="rounded-1 m-0" alt="رخصة القيادة" height="32" width="32">
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">مدة رخصة القيادة</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-3">
                    <span>من : 18 / 11 / 2024</span>
                    <span>-</span>
                    <span>إلي : 18 / 11 / 2024</span>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">صورة جواز السفر</td>
                <td class="p-3">
                  <a href="../../assets/img/elements/1.jpg" data-fancybox data-caption="صورة جواز السفر">
                    <img src="../../assets/img/elements/1.jpg" class="rounded-1 m-0" alt="صورة جواز السفر" height="32" width="32">
                  </a>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">رقم جواز السفر</td>
                <td class="p-3">74466367373737</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">مدة جواز السفر</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-3">
                    <span>من : 18 / 11 / 2024</span>
                    <span>-</span>
                    <span>إلي : 18 / 11 / 2024</span>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">صورة التآشيرة</td>
                <td class="p-3">
                  <a href="../../assets/img/elements/11.jpg" data-fancybox data-caption="صورة التآشيرة">
                    <img src="../../assets/img/elements/11.jpg" class="rounded-1 m-0" alt="صورة التآشيرة" height="32" width="32">
                  </a>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">رقم التآشيرة</td>
                <td class="p-3">45684735348758734</td>
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
            </tbody>
          </table>
        </div><!-- table-responsive -->
      </div><!-- tab-pane -->

      <div class="tab-pane fade" id="employee-financial-info" role="tabpanel">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <tbody class="table-border-bottom-0">
              <tr>
                <td width="5%" class="p-3 text-nowrap">الراتب الشهري</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    1213 <small>ريال</small>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">رقم الحساب البنكي</td>
                <td class="p-3">76348765783465347</td>
              </tr>
              <tr>
                <td width="5%" class="p-3 text-nowrap">اسم البنك التابع له الحساب</td>
                <td class="p-3">البنك الوطني المتحد</td>
              </tr>
            </tbody>
          </table>
        </div><!-- table-responsive -->
      </div><!-- tab-pane -->

      <div class="tab-pane fade" id="employee-penalties" role="tabpanel">
        <div class="row justify-content-end">
          <div class="col-12 col-md-3">
            <div class="input-group input-group-merge mb-3">
              <span class="input-group-text"><i class="ti ti-calendar-month"></i></span>
              <input type="text" class="form-control employee-month-filter" id="employee-penalties-filter" placeholder="YYYY-MM" readonly="readonly" />
            </div><!-- input-group -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <div class="table-responsive text-nowrap">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th class="fw-bold p-3">التفاصيل</th>
                <th width="5%" class="fw-bold p-3">المبلغ</th>
                <th width="5%" class="fw-bold p-3">التاريخ</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td class="p-3">
                  التحدث مع العميل بشكل غير لائق
                </td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    121 <small>ريال</small>
                  </div><!-- d-flex -->
                </td>
                <td class="p-3">
                  2024-11-11
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- table-responsive -->
      </div><!-- tab-pane -->

      <div class="tab-pane fade" id="employee-advances" role="tabpanel">
        <div class="row justify-content-end">
          <div class="col-12 col-md-3">
            <div class="input-group input-group-merge mb-3">
              <span class="input-group-text"><i class="ti ti-calendar-month"></i></span>
              <input type="text" class="form-control employee-month-filter" id="employee-advances-filter" placeholder="YYYY-MM" readonly="readonly" />
            </div><!-- input-group -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <div class="table-responsive text-nowrap">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th class="fw-bold p-3">المبلغ</th>
                <th width="5%" class="fw-bold p-3">التاريخ</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    121 <small>ريال</small>
                  </div><!-- d-flex -->
                </td>
                <td class="p-3">
                  2024-11-11
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- table-responsive -->
      </div><!-- tab-pane -->

      <div class="tab-pane fade" id="employee-rewards" role="tabpanel">
        <div class="row justify-content-end">
          <div class="col-12 col-md-3">
            <div class="input-group input-group-merge mb-3">
              <span class="input-group-text"><i class="ti ti-calendar-month"></i></span>
              <input type="text" class="form-control employee-month-filter" id="employee-rewards-filter" placeholder="YYYY-MM" readonly="readonly" />
            </div><!-- input-group -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <div class="table-responsive text-nowrap">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th class="fw-bold p-3">التفاصيل</th>
                <th width="5%" class="fw-bold p-3">المبلغ</th>
                <th width="5%" class="fw-bold p-3">التاريخ</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td class="p-3">إيجاد حلول لمشاكل العملاء وتحسين خدمات العملاء</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    121 <small>ريال</small>
                  </div><!-- d-flex -->
                </td>
                <td class="p-3">
                  2024-11-11
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- table-responsive -->
      </div><!-- tab-pane -->

    </div><!-- tab-content -->

    <!-- Employee Delete Modal -->
    @include('employees.Modals.delete')
    <!-- Employee Delete Modal -->

  </div><!-- employees-view-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/fancybox/fancybox.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr-month/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr-month/month-select.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr-month/ar.js') }}"></script>
  <script>
    Fancybox.bind("[data-fancybox]");

    const currentDate = new Date();
    const options = { month: 'long', year: 'numeric' };
    const currentMonthName = currentDate.toLocaleDateString('ar', options); // Arabic formatting
    flatpickr(".employee-month-filter", {
      locale: "ar", // Set locale to Arabic
      defaultDate: currentDate, // Use the current date as the default
      plugins: [
        new monthSelectPlugin({
          shorthand: false, // Use full month names in Arabic
          dateFormat: "F - Y", // Backend format (e.g., "نوفمبر 2024")
          altFormat: "F - Y", // User-friendly format (e.g., "نوفمبر 2024")
        }),
      ],
    });
  </script>
@endpush
