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

    <div class="card">
      <div class="card-body p-3">
        <div class="table-responsive text-nowrap">
          <table class="table table-striped table-bordered">
            <tbody class="table-border-bottom-0">
              <tr>
                <td width="5%" class="p-3">اسم الموظف</td>
                <td class="p-3">محمد احمد محمود</td>
              </tr>
              <tr>
                <td width="5%" class="p-3">رقم الهاتف</td>
                <td class="p-3"><span dir="ltr">+966 554433221</span></td>
              </tr>
              <tr>
                <td width="5%" class="p-3">بطاقة الهوية</td>
                <td class="p-3">
                  <a href="../../assets/img/elements/11.jpg" data-fancybox data-caption="بطاقة الهوية">
                    <img src="../../assets/img/elements/11.jpg" class="rounded-1 m-0" alt="بطاقة الهوية" height="64" width="64">
                  </a>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">رخصة سياقة المركبة</td>
                <td class="p-3">
                  <a href="../../assets/img/elements/10.jpg" data-fancybox data-caption="رخصة سياقة المركبة">
                    <img src="../../assets/img/elements/10.jpg" class="rounded-1 m-0" alt="رخصة سياقة المركبة" height="64" width="64">
                  </a>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">صورة شخصية</td>
                <td class="p-3">
                  <a href="../../assets/img/elements/9.jpg" data-fancybox data-caption="صورة شخصية">
                    <img src="../../assets/img/elements/9.jpg" class="rounded-1 m-0" alt="صورة شخصية" height="64" width="64">
                  </a>
                </td>
              </tr>
              <tr>
                <td width="5%" class="p-3">تاريخ التعيين</td>
                <td class="p-3">18 / 11 / 2024</td>
              </tr>
              <tr>
                <td width="5%" class="p-3">المسمي الوظيفي</td>
                <td class="p-3">موظف استقبال</td>
              </tr>
              <tr>
                <td width="5%" class="p-3">الصلاحيات</td>
                <td class="p-3">موظف</td>
              </tr>
              <tr>
                <td width="5%" class="p-3">الراتب</td>
                <td class="p-3">
                  <span class="d-flex align-items-center justify-content-start gap-1">1421 <small>ريال</small></span>
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- table-responsive -->
      </div><!-- card-body -->
    </div><!-- card -->

    <!-- Employee Delete Modal -->
    <div class="modal fade" id="employeeDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="employeeDeleteModalLabel1">حذف موظف : احمد محمد</h5>
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف الموظف ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Employee Delete Modal -->

  </div><!-- employees-view-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/fancybox/fancybox.umd.js') }}"></script>
  <script>
    Fancybox.bind("[data-fancybox]");
  </script>
@endpush
