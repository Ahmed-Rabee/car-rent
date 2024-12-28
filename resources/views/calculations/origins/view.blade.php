@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/fancybox/fancybox.css') }}" />
@endpush

@section('content')

  <div id="origins-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-3">
      <h4 class="m-0 flex-grow-1">جهاز كمبيوتر</h4>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="{{ url('/calculations/origins/{id}/edit') }}" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#originsDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div><!-- d-flex -->

    <a href="{{ url('/calculations/origins') }}" class="btn btn-icon bg-white text-body waves-effect waves-light mb-3"><span class="ti ti-chevron-right"></span></a>

    <div class="row rows-cols-1 rows-cols-md-2 g-3">
      <div class="col">
        <div class="card">
          <div class="card-body p-3">
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td width="5%" class="p-3 text-nowrap">القسم</td>
                    <td class="p-3"><b>تآجير</b></td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3 text-nowrap">الفرع</td>
                    <td class="p-3"><b>فرع الواحة</b></td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3 text-nowrap">المورد</td>
                    <td class="p-3"><b>-</b></td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3 text-nowrap">المبلغ</td>
                    <td class="p-3"><b class="d-flex align-items-center justify-content-start gap-1">12121 <small>ريال</small></b></td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3 text-nowrap">الضريبة</td>
                    <td class="p-3"><b class="d-flex align-items-center justify-content-start gap-1">12121 <small>ريال</small></b></td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3 text-nowrap">المبلغ شامل الضريبة</td>
                    <td class="p-3"><b class="d-flex align-items-center justify-content-start gap-1">12121 <small>ريال</small></b></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3">
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td width="5%" class="p-3 text-nowrap">معدل الإهلاك</td>
                    <td class="p-3"><b>10%</b></td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3 text-nowrap">طريقة الدفع</td>
                    <td class="p-3"><b>نقداً</b></td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3 text-nowrap">الحالة</td>
                    <td class="p-3"><b>مدفوع</b></td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3 text-nowrap">تاريخ الصرف</td>
                    <td class="p-3"><b>2024-10-13</b></td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3 text-nowrap">مرفقات</td>
                    <td class="p-3">
                      <div class="d-flex justify-content-start flex-wrap gap-3">
                        <a href="../../../assets/img/elements/4.jpg" data-fancybox="employee-id-card" data-caption="مرفقات">
                          <img src="../../../assets/img/elements/4.jpg" class="rounded-1 m-0" alt="مرفقات" height="32" width="32">
                        </a>
                        <a href="../../../assets/img/elements/3.jpg" data-fancybox="employee-id-card" data-caption="مرفقات">
                          <img src="../../../assets/img/elements/3.jpg" class="rounded-1 m-0" alt="مرفقات" height="32" width="32">
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3 text-nowrap">ملاحظات</td>
                    <td class="p-3"><b>-</b></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
    </div><!-- row -->

    <!-- origins Delete Modal -->
    <div class="modal fade" id="originsDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="originsDeleteModalLabel1">حذف أصل : جهاز كمبيوتر</h5>
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف آصل ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
    <!-- origins Delete Modal -->

  </div><!-- origins-view-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/fancybox/fancybox.umd.js') }}"></script>
  <script>
    Fancybox.bind("[data-fancybox]");
  </script>
@endpush
