@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}" />
@endpush

@section('content')

  <div id="homepage-page">

    <div class="filter-statistics-homepage position-relative mb-4">
      <div class="input-group input-group-merge">
        <span class="input-group-text" id="basic-addon-search31"><i class="ti ti-calendar-month"></i></span>
        <input type="text" class="form-control" id="bs-rangepicker-range" aria-describedby="basic-addon-search31" readonly />
      </div><!-- input-group -->
    </div><!-- filter-statistics-homepage -->

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

  </div><!-- homepage--page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
  <script type="module">
    (function () {
      // Bootstrap Daterange Picker
      // --------------------------------------------------------------------
      var bsRangePickerRange = $('#bs-rangepicker-range');
      if (bsRangePickerRange.length) {
        bsRangePickerRange.daterangepicker({
          ranges: {
            'اليوم': [moment(), moment()],
            'امس': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'آخر 7 آيام': [moment().subtract(6, 'days'), moment()],
            'آخر 30 يوم': [moment().subtract(29, 'days'), moment()],
            'هذا الشهر': [moment().startOf('month'), moment().endOf('month')],
            'الشهر الماضى': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          "locale": {
            "format": "MM/DD/YYYY",
            "separator": " - ",
            "applyLabel": "آختر",
            "cancelLabel": "إلغاء",
            "fromLabel": "من",
            "toLabel": "إلي",
            "customRangeLabel": "فترة مخصصة",
            "weekLabel": "W",
            "daysOfWeek": [
                "Su",
                "Mo",
                "Tu",
                "We",
                "Th",
                "Fr",
                "Sa"
            ],
            "monthNames": [
                "يناير",
                "فبراير",
                "مارس",
                "ابريل",
                "مايو",
                "June",
                "July",
                "اغسطس",
                "سبتمبر",
                "اكتوبر",
                "نوفمبر",
                "ديسمبر"
            ],
            "firstDay": 1
          },
          "alwaysShowCalendars": true,
          "parentEl": ".filter-statistics-homepage",
          opens: isRtl ? 'left' : 'right'
        });
      }
    })();
  </script>
@endpush
