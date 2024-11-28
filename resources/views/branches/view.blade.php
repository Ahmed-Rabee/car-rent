@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')

  <div id="branches-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">فرع الواحة</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="{{ url('/branches/{id}/edit') }}" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#branchDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div><!-- d-flex -->

    <div class="accordion d-flex flex-column gap-4 mb-4" id="accordionBranches">

      <div class="card accordion-item m-0 active">
        <div class="accordion-header" id="heading-accordionBranches">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between p-3"
            data-bs-toggle="collapse"
            data-bs-target="#accordion-accordionBranches"
            aria-expanded="true"
            aria-controls="accordion-accordionBranches"
          >
            <h5 class="m-0">تفاصيل الفرع</h5>
          </button>
        </div><!-- accordion-header -->
        <div id="accordion-accordionBranches" class="accordion-collapse collapse show" data-bs-parent="#accordionBranches">
          <div class="accordion-body p-3 pt-0">
            <div class="table-responsive text-nowrap">
              <table class="table table-striped table-bordered">
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td width="5%" class="p-3">اسم الفرع</td>
                    <td class="p-3">فرع الواحه</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">عنوان الفرع</td>
                    <td class="p-3">14 ش محمد احمد - من ش المنتصر بالله - مدينة نصر - القاهرة</td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">ايام العطلات</td>
                    <td class="p-3">
                      <div class="d-flex justify-content-start flex-wrap gap-2">
                        <span class="badge bg-label-dark">الجمعة</span>
                        <span class="badge bg-label-dark">السبت</span>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">مواعيد العمل</td>
                    <td class="p-3">
                      <div class="d-flex justify-content-start align-items-start flex-wrap gap-2">
                        <span class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></span>
                        <span class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">من <span dir="ltr">11:30 AM</span> - إلي <span dir="ltr">04:30 PM</span></span>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                  <tr>
                    <td width="5%" class="p-3">ارقام التواصل</td>
                    <td class="p-3">
                      <div class="d-flex justify-content-start align-items-start flex-wrap gap-2">
                        <a href="tel:96892035086" dir="ltr" class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">+96892035086</a>
                        <a href="tel:96892035086" dir="ltr" class="badge bg-label-dark d-flex align-items-center justify-content-start gap-1">+96892035086</a>
                      </div><!-- d-flex -->
                    </td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

    </div><!-- accordion -->

    <div class="row row-cols-2 row-cols-md-4 g-3">
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-success">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2">42</h5>
              <p class="m-0">مركبات متوفرة</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-success rounded-2 p-2">
                <i class="ti ti-car-garage ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-info">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2">42</h5>
              <p class="m-0">مركبات بالخارج</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-info rounded-2 p-2">
                <i class="ti ti-car ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-warning">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2">42</h5>
              <p class="m-0">مركبات في الصيانة</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-warning rounded-2 p-2">
                <i class="ti ti-car-off ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-primary">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2 d-flex align-items-center justify-content-start gap-1">364.00 <small>ريال</small></h5>
              <p class="m-0"><b>35</b> معاملة بنكية</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-primary rounded-2 p-2">
                <i class="ti ti-building-bank ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-primary">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2 d-flex align-items-center justify-content-start gap-1">364.00 <small>ريال</small></h5>
              <p class="m-0"><b>35</b> معاملة كاش</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-primary rounded-2 p-2">
                <i class="ti ti-cash ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-primary">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2 d-flex align-items-center justify-content-start gap-1">364.00 <small>ريال</small></h5>
              <p class="m-0"><b>35</b> معاملة POS</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-primary rounded-2 p-2">
                <i class="ti ti-cash ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-success">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2">6</h5>
              <p class="m-0">عقد ساري</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-success rounded-2 p-2">
                <i class="ti ti-contract ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-danger">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2">43</h5>
              <p class="m-0">عقد منتهى</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-danger rounded-2 p-2">
              <i class="ti ti-contract ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-danger">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2">49</h5>
              <p class="m-0">مديونيات</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-danger rounded-2 p-2">
              <i class="ti ti-receipt-2 ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-success">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2 d-flex align-items-center justify-content-start gap-1">867.00 <small>ريال</small></h5>
              <p class="m-0"><b>11</b> طلبات شراء</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-success rounded-2 p-2">
              <i class="ti ti-receipt-2 ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-success">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2 d-flex align-items-center justify-content-start gap-1">867.00 <small>ريال</small></h5>
              <p class="m-0"><b>11</b> حجوزات مؤكدة</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-success rounded-2 p-2">
              <i class="ti ti-receipt-2 ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-warning">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2 d-flex align-items-center justify-content-start gap-1">867.00 <small>ريال</small></h5>
              <p class="m-0"><b>11</b> حجوزات غير مؤكدة</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-warning rounded-2 p-2">
              <i class="ti ti-receipt-2 ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-danger">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2">54</h5>
              <p class="m-0">مخالفات مرورية</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-danger rounded-2 p-2">
              <i class="ti ti-receipt-2 ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-warning">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2 d-flex align-items-center justify-content-start gap-1">867.00 <small>ريال</small></h5>
              <p class="m-0">إجمالي الدخل</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-warning rounded-2 p-2">
              <i class="ti ti-receipt-2 ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
      <div class="col">
        <a href="#" title="#" class="card h-100 card-border-shadow-warning">
          <div class="card-body d-flex justify-content-between align-items-center p-3">
            <div class="card-title mb-0">
              <h5 class="mb-0 me-2 d-flex align-items-center justify-content-start gap-1">867.00 <small>ريال</small></h5>
              <p class="m-0">إجمالي المصروفات</p>
            </div><!-- card-title -->
            <div class="card-icon">
              <span class="badge bg-label-warning rounded-2 p-2">
              <i class="ti ti-receipt-2 ti-md"></i>
              </span>
            </div><!-- card-icon -->
          </div><!-- card-body -->
        </a><!-- card -->
      </div><!-- col -->
    </div><!-- row -->

    <!-- Branch Delete Modal -->
    @include('branches.Modals.delete')
    <!-- Branch Delete Modal -->

  </div><!-- branches-view-page -->

@endsection

@push('scripts')
@endpush
