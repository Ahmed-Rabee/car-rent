@extends('layouts.app')

@push('styles')
@endpush

@section('content')

  <div id="reports-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">إدارة التقارير</h4>
      </div>
    </div><!-- d-flex -->

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      <div class="col">
        <a href="#" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-building display-6"></i></h2>
            <h5 class="d-block m-0">تقرير الفروع</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-users display-6"></i></h2>
            <h5 class="d-block m-0">تقرير الموظفين</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-car display-6"></i></h2>
            <h5 class="d-block m-0">تقرير المركبات</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-calendar-month display-6"></i></h2>
            <h5 class="d-block m-0">تقرير الحجوزات</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-friends display-6"></i></h2>
            <h5 class="d-block m-0">تقرير العملاء</h5>
          </div>
        </a>
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card">
          <div class="card-body text-center">
            <h2 class="d-block mb-2"><i class="ti ti-contract display-6"></i></h2>
            <h5 class="d-block m-0">تقرير العقود</h5>
          </div>
        </a>
      </div><!-- col -->
    </div><!-- row -->



    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="fw-bold">اسم العميل</th>
              <th class="fw-bold">مبلغ المدونية</th>
              <th class="fw-bold">التفاصيل</th>
              <th class="fw-bold">الحالة</th>
              <th class="fw-bold">التاريخ</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>محمد احمد محمود</td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">
                  2334 <small>ريال</small>
                </div><!-- d-flex -->
              </td>
              <td>مبلغ صيانه لكسر المرايه جهة اليمين</td>
              <td><span class="badge bg-label-success">مدفوع</span></td>
            </tr>
            <tr>
              <td>محمد احمد محمود</td>
              <td>
                <div class="d-flex align-items-center justify-content-start gap-1">
                  2334 <small>ريال</small>
                </div><!-- d-flex -->
              </td>
              <td>
                مبلغ مديونية علي العقد
                <a href="#">#5656</a>
              </td>
              <td><span class="badge bg-label-danger">مديونية</span></td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

  </div><!-- reports-index-page -->

@endsection

@push('scripts')
@endpush
