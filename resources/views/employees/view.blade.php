@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/fancybox/fancybox.css') }}" />
@endpush

@section('content')

  <div id="employees-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">تفاصيل موظف : احمد مصطفي</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="{{ url('/employees/{id}/edit') }}" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#employeeDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-xl-3 col-lg-4 col-md-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="user-avatar-section">
              <div class="d-flex align-items-center flex-column">
                <img class="img-fluid rounded mb-3" src="{{ asset('assets/images/user-avatar.webp') }}" height="100" width="100" alt="User avatar">
                <div class="user-info text-center">
                  <h5 class="mb-2">احمد محمد محمود</h5>
                  <span class="badge bg-label-secondary py-2 mt-1">موظف إستقبال</span>
                </div>
              </div>
            </div><!-- user-avatar-section -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col-12 -->
      <div class="col-xl-9 col-lg-8 col-md-8">

        <ul class="nav nav-pills mb-3" role="tablist">
          <li class="nav-item">
            <button
              type="button"
              class="nav-link active"
              role="tab"
              data-bs-toggle="tab"
              data-bs-target="#employee-personal-info"
              aria-controls="employee-personal-info"
              aria-selected="true"
            >
              المعلومات الشخصية
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
        </ul>

        <div class="tab-content p-3">

          <div class="tab-pane fade show active" id="employee-personal-info" role="tabpanel">
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">رقم الهاتف</td>
                    <td class="p-2">
                      <div class="d-flex align-items-center justify-content-start">
                        <a href="tel:96892035086" class="d-flex align-items-center justify-content-center gap-1" dir="ltr">
                          <span class="ti-xs ti ti-phone"></span> +96892035086
                        </a>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">البريد الإلكتروني</td>
                    <td class="p-2">
                      <div class="d-flex align-items-center justify-content-start">
                        <a href="mailto:vafgot@vultukir.org" class="d-flex align-items-center justify-content-center gap-1" dir="ltr">
                          <span class="ti-xs ti ti-mail"></span> vafgot@vultukir.org
                        </a>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">الحالة</td>
                    <td class="p-2">مفعل</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">تاريخ الميلاد</td>
                    <td class="p-2">2024-11-17</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">الجنس</td>
                    <td class="p-2">ذكر</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">الجنسية</td>
                    <td class="p-2">مصري</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">الفرع</td>
                    <td class="p-2">فرع الواحة</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">محل الإقامة</td>
                    <td class="p-2">الرياض</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">الحالة الإجتماعية</td>
                    <td class="p-2">متزوج</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">تاريخ التعيين</td>
                    <td class="p-2">2024-11-17</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">الصلاحيات</td>
                    <td class="p-2">موظف</td>
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
                    <td width="5%" class="p-2 text-nowrap">بطاقة الهوية الوطنية</td>
                    <td class="p-2">
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
                    <td width="5%" class="p-2 text-nowrap">تاريخ إنتهاء الهوية الوطنية</td>
                    <td class="p-2">2024-11-17</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">رخصة القيادة</td>
                    <td class="p-2">
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
                    <td width="5%" class="p-2 text-nowrap">مدة رخصة القيادة</td>
                    <td class="p-2">
                      <div class="d-flex align-items-center justify-content-start gap-2">
                        <span>من : 18 / 11 / 2024</span>
                        <span>-</span>
                        <span>إلي : 18 / 11 / 2024</span>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">صورة جواز السفر</td>
                    <td class="p-2">
                      <a href="../../assets/img/elements/1.jpg" data-fancybox data-caption="صورة جواز السفر">
                        <img src="../../assets/img/elements/1.jpg" class="rounded-1 m-0" alt="صورة جواز السفر" height="32" width="32">
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">رقم جواز السفر</td>
                    <td class="p-2">74466367373737</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">مدة جواز السفر</td>
                    <td class="p-2">
                      <div class="d-flex align-items-center justify-content-start gap-2">
                        <span>من : 18 / 11 / 2024</span>
                        <span>-</span>
                        <span>إلي : 18 / 11 / 2024</span>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">صورة التآشيرة</td>
                    <td class="p-2">
                      <a href="../../assets/img/elements/11.jpg" data-fancybox data-caption="صورة التآشيرة">
                        <img src="../../assets/img/elements/11.jpg" class="rounded-1 m-0" alt="صورة التآشيرة" height="32" width="32">
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">رقم التآشيرة</td>
                    <td class="p-2">45684735348758734</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">مدة التآشيرة</td>
                    <td class="p-2">
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
                    <td width="5%" class="p-2 text-nowrap">الراتب الشهري</td>
                    <td class="p-2">
                      <div class="d-flex align-items-center justify-content-start gap-1">
                        1213 <small>ريال</small>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">رقم الحساب البنكي</td>
                    <td class="p-2">76348765783465347</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-2 text-nowrap">اسم البنك التابع له الحساب</td>
                    <td class="p-2">البنك الوطني المتحد</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- tab-pane -->

          <div class="tab-pane fade" id="employee-penalties" role="tabpanel">
            <div class="table-responsive text-nowrap">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="fw-bold p-2">التفاصيل</th>
                    <th width="5%" class="fw-bold p-2">المبلغ</th>
                    <th width="5%" class="fw-bold p-2">التاريخ</th>
                    <th width="5%" class="p-2"></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td class="p-2">
                      التحدث مع العميل بشكل غير لائق
                    </td>
                    <td class="p-2">
                      <div class="d-flex align-items-center justify-content-start gap-1">
                        121 <small>ريال</small>
                      </div><!-- d-flex -->
                    </td>
                    <td class="p-2">
                      2024-11-11
                    </td>
                    <td class="p-2">
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#penaltyEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                          <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#penaltyDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- tab-pane -->

          <div class="tab-pane fade" id="employee-advances" role="tabpanel">
            <div class="table-responsive text-nowrap">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="fw-bold p-2">المبلغ</th>
                    <th width="5%" class="fw-bold p-2">التاريخ</th>
                    <th width="5%" class="p-2"></th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td class="p-2">
                      <div class="d-flex align-items-center justify-content-start gap-1">
                        121 <small>ريال</small>
                      </div><!-- d-flex -->
                    </td>
                    <td class="p-2">
                      2024-11-11
                    </td>
                    <td class="p-2">
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#penaltyEditModal"><i class="ti ti-pencil me-1"></i> تعديل</a>
                          <a class="dropdown-item waves-effect" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#penaltyDeleteModal"><i class="ti ti-trash me-1"></i> حذف</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- tab-pane -->

        </div><!-- tab-content -->

      </div><!-- col-12 -->
    </div><!-- row -->

    <!-- Employee Delete Modal -->
    @include('employees.Modals.delete')
    <!-- Employee Delete Modal -->

  </div><!-- employees-view-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/fancybox/fancybox.umd.js') }}"></script>
  <script>
    Fancybox.bind("[data-fancybox]");
  </script>
@endpush
