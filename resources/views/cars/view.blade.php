@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/fancybox/fancybox.css') }}" />
@endpush

@section('content')

  <div id="cars-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">تفاصيل مركبة : 9408 - TB</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="{{ url('/cars/{id}/edit') }}" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#carDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div>

    <div class="card">
      <div class="card-body p-3">
        <div class="table-responsive text-nowrap">
          <table class="table table-striped table-bordered">
            <tbody class="table-border-bottom-0">
              <tr>
                <td width="5%" class="p-3">رقم السياره</td>
                <td class="p-3">TB - 125</td>
              </tr>
              <tr>
                <td width="5%" class="p-3">صورة السيارة</td>
                <td class="p-3">
                  <a href="../../assets/img/elements/11.jpg" data-fancybox data-caption="صورة السيارة">
                    <img src="../../assets/img/elements/11.jpg" class="rounded-1 m-0" alt="صورة السيارة" height="64" width="64">
                  </a>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">معرض صور السيارة</td>
                <td class="p-3">
                  <div class="d-flex justify-content-start flex-wrap gap-3">
                    <a href="../../assets/img/elements/10.jpg" data-fancybox="gallery" data-caption="رخصة سياقة المركبة">
                      <img src="../../assets/img/elements/10.jpg" class="rounded-1 m-0" alt="رخصة سياقة المركبة" height="64" width="64">
                    </a>
                    <a href="../../assets/img/elements/10.jpg" data-fancybox="gallery" data-caption="رخصة سياقة المركبة">
                      <img src="../../assets/img/elements/10.jpg" class="rounded-1 m-0" alt="رخصة سياقة المركبة" height="64" width="64">
                    </a>
                    <a href="../../assets/img/elements/10.jpg" data-fancybox="gallery" data-caption="رخصة سياقة المركبة">
                      <img src="../../assets/img/elements/10.jpg" class="rounded-1 m-0" alt="رخصة سياقة المركبة" height="64" width="64">
                    </a>
                    <a href="../../assets/img/elements/10.jpg" data-fancybox="gallery" data-caption="رخصة سياقة المركبة">
                      <img src="../../assets/img/elements/10.jpg" class="rounded-1 m-0" alt="رخصة سياقة المركبة" height="64" width="64">
                    </a>
                  </div>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">صورة الملكية</td>
                <td class="p-3">
                  <a href="../../assets/img/elements/10.jpg" data-fancybox data-caption="صورة الملكية">
                    <img src="../../assets/img/elements/10.jpg" class="rounded-1 m-0" alt="صورة الملكية" height="64" width="64">
                  </a>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">صورة بطاقة التشغيل</td>
                <td class="p-3">
                  <a href="../../assets/img/elements/9.jpg" data-fancybox data-caption="صورة بطاقة التشغيل">
                    <img src="../../assets/img/elements/9.jpg" class="rounded-1 m-0" alt="صورة بطاقة التشغيل" height="64" width="64">
                  </a>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">الماركة</td>
                <td class="p-3">كيا</td>
              </tr>
              <tr>
                <td width="5%" class="p-3">الموديل</td>
                <td class="p-3">سبورتاج</td>
              </tr>
              <tr>
                <td width="5%" class="p-3">الفئة</td>
                <td class="p-3">بي 1</td>
              </tr>
              <tr>
                <td width="5%" class="p-3">سنة الصنع</td>
                <td class="p-3">2010</td>
              </tr>
              <tr>
                <td width="5%" class="p-3">رقم الشاصي</td>
                <td class="p-3">554433554545</td>
              </tr>
              <tr>
                <td width="5%" class="p-3">شركة التآمين</td>
                <td class="p-3">مصر للتأمين</td>
              </tr>
              <tr>
                <td width="5%" class="p-3">مدة التآمين</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1 gap-md-5 flex-wrap">
                    <span>من : 18 / 11 / 2024</span>
                    <span>إلي : 18 / 11 / 2024</span>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">ملكية السيارة</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1 gap-md-5 flex-wrap">
                    <span>من : 18 / 11 / 2024</span>
                    <span>إلي : 18 / 11 / 2024</span>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">رقم بطاقة التشغيل</td>
                <td class="p-3">
                  5467894356
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">مدة بطاقة التشغيل</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1 gap-md-5 flex-wrap">
                    <span>من : 18 / 11 / 2024</span>
                    <span>إلي : 18 / 11 / 2024</span>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">GPS</td>
                <td class="p-3">
                  <div class="d-flex align-items-center justify-content-start gap-1 gap-md-5 flex-wrap">
                    <span>من : 18 / 11 / 2024</span>
                    <span>إلي : 18 / 11 / 2024</span>
                  </div><!-- d-flex -->
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">لون السيارة</td>
                <td class="p-3">
                  <div class="badge badge-center rounded-1 d-block border" style="background-color: blue;"></div>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">حالة السياره</td>
                <td class="p-3">جديدة</td>
              </tr>
            </tbody>
          </table>
        </div><!-- table-responsive -->
      </div><!-- card-body -->
    </div><!-- card -->

    <!-- Car Delete Modal -->
    <div class="modal fade" id="carDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="carDeleteModalLabel1">حذف مركبة : 1 2 3 ف ق ص</h5>
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف المركبة ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Car Delete Modal -->

  </div><!-- cars-view-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/fancybox/fancybox.umd.js') }}"></script>
  <script>
    Fancybox.bind("[data-fancybox]");
    Fancybox.bind('[data-fancybox="gallery"]');
  </script>
@endpush
