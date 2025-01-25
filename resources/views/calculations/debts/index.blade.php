@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')
  <div id="general-expenses-index-page">

    <h4 class="mb-3">المديونيات</h4>

    <a href="{{ url('/calculations') }}" class="btn btn-icon bg-white text-body waves-effect waves-light mb-3"><span class="ti ti-chevron-right"></span></a>

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th class="fw-bold">القسم</th>
              <th class="fw-bold">الوصف</th>
              <th class="fw-bold">المبلغ</th>
              <th class="fw-bold">تاريخ الإستحقاق</th>
              <th class="fw-bold">التاريخ</th>
              <th width="5%"></th>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>المصروفات العامة</td>
              <td>
                <a href="{{ url('/calculations/general-expenses/{id}/view') }}">بيع سيارة مستعمله</a>
              </td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">
                  2334 <small>ريال</small>
                </div><!-- d-flex -->
              </td>
              <td>2024-10-13</td>
              <td>2024-10-13</td>
              <td><button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#debtRepaymentModal">سداد المديونية</button></td>
            </tr>
            <tr>
              <td>مصروفات مركبة</td>
              <td>
                <a href="{{ url('/calculations/general-expenses/{id}/view') }}">بيع سيارة مستعمله</a>
              </td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">
                  2334 <small>ريال</small>
                </div><!-- d-flex -->
              </td>
              <td>2024-10-13</td>
              <td>2024-10-13</td>
              <td><button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#debtRepaymentModal">سداد المديونية</button></td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Debt Repayment Contract Modal -->
    <div class="modal fade" id="debtRepaymentModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="debtRepaymentModalLabel1">سداد المدونية</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="swal2-icon swal2-info swal2-icon-show d-flex m-0 mx-auto mb-4" style="display: flex;"><div class="swal2-icon-content">i</div></div>
            <h5 class="d-block text-center fw-medium mb-3">مبلغ المديونية المستحق <b>500</b> ريال</h5>
            <h5 class="d-block text-center fw-medium m-0">هل أنت متأكد من سداد المديونية ؟</h5>
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-primary px-5 m-0">نعم</button>
          </div><!-- modal-footer -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <!-- Debt Repayment Contract Modal -->

  </div><!-- general-expenses-index-page -->
@endsection

@push('scripts')
@endpush
