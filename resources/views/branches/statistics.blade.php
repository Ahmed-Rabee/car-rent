@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@section('content')

  <div id="branches-statistics-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">فرع الواحة</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="{{ url('/branches/{id}/edit') }}" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#branchDeleteModal" class="btn btn-icon btn-label-danger waves-effect"><span class="ti ti-trash"></span></a>
      </div>
    </div>

    <div class="tabs-area d-flex align-items-center justify-content-start gap-3 flex-wrap mb-4">
      <a href="{{ url('/branches/{id}/view') }}" title="تفاصيل الفرع" class="btn">تفاصيل الفرع</a>
      <a href="{{ url('/branches/{id}/statistics') }}" title="إحصائيات الفرع" class="btn btn-primary waves-effect waves-light">إحصائيات الفرع</a>
    </div><!-- tabs-area -->

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

  </div><!-- branches-statistics-page -->

@endsection

@push('scripts')
@endpush
