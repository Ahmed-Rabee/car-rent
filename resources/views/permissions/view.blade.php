@extends('layouts.app')

@push('styles')
@endpush

@section('content')

  <div id="permissions-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">تفاصيل دور : المشرف العام</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="{{ url('/permissions/{id}/edit') }}" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#permissionDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div>

    <div class="card overflow-hidden">
      <div class="table-responsive text-nowrap">
        <table class="table">
          <tbody class="table-border-bottom-0">
            <tr>
              <td width="20%" class="fw-bold p-3">اسم الدور</td>
              <td width="80%">المدير العام</td>
            </tr>
            <tr>
              <td width="20%" class="fw-bold p-3 align-top">صلاحيات الدور</td>
              <td class="p-3" width="80%">
              <div class="row row-cols-1 row-cols-xl-4 g-2 g-md-3">
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
                <div class="col">
                  <div class="d-flex align-items-center justify-content-start gap-1">
                    <i class="ti ti-circle-dashed-check flex-shrink-0 text-primary"></i>
                    <span class="d-block flex-grow-1">اسم الصلاحية هنا</span>
                  </div><!-- d-flex -->
                </div><!-- col -->
              </div><!-- row -->
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Permission Delete Modal -->
    <div class="modal fade" id="permissionDeleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="epermissionDeleteModalLabel1">حذف دور : المدير العام</h5>
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
              <h5 class="d-block text-center fw-medium text-danger m-0">هل أنت متأكد أنك تريد حذف الدور ؟</h5>
            </div><!-- top-area -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-danger px-5 m-0">نعم, احذف</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Permission Delete Modal -->

  </div><!-- permissions-view-page -->

@endsection

@push('scripts')
@endpush
