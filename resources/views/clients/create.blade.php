@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush

@section('content')

  <div id="employees-create-page">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="m-0">إضافة عميل جديد</h4>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-3">
      <div class="col">
        <div class="card">
          <div class="card-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label required" for="employee-name">الإسم بالعربية</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="employee-name" />
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label required" for="employee-name">الإسم بالإنجليزية</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="employee-name" />
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label" for="employee-name">الصورة الشخصية</label>
              <div class="col-sm-9">
                <input class="form-control" type="file" id="employee-selfie">
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label required" for="employee-name">الجنس</label>
              <div class="col-sm-9">
                <select id="sex" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                  <option></option>
                  <option value="AK">ذكر</option>
                  <option value="HI">أنثي</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label required" for="employee-name">الجنسية</label>
              <div class="col-sm-9">
                <select id="nat" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                  <option></option>
                  <option value="AK">ذكر</option>
                  <option value="HI">أنثي</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label required" for="employee-name">تاريخ الميلاد</label>
              <div class="col-sm-9">
                <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-date" />
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label required" for="employee-name">رقم الجوال</label>
              <div class="col-sm-9">
                <input type="tel" inputmode="numeric" id="employee-phone" dir="ltr" class="form-control" />
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label required" for="employee-name">البريد الالكتروني</label>
              <div class="col-sm-9">
                <input type="email" inputmode="email" id="employee-phone" dir="ltr" class="form-control" />
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label required" for="employee-name">الإسم بالعربية</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="employee-name" />
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label required" for="employee-name">الإسم بالإنجليزية</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="employee-name" />
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label required" for="employee-name">الجنس</label>
              <div class="col-sm-9">
                <select id="sex" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                  <option></option>
                  <option value="AK">ذكر</option>
                  <option value="HI">أنثي</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label required" for="employee-name">الجنسية</label>
              <div class="col-sm-9">
                <select id="nat" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                  <option></option>
                  <option value="AK">ذكر</option>
                  <option value="HI">أنثي</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label required" for="employee-name">تاريخ الميلاد</label>
              <div class="col-sm-9">
                <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-date" />
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
    </div><!-- row -->

    <div class="button-area d-flex align-items-center justify-content-end">
      <button type="submit" class="btn btn-lg btn-primary px-5">حفظ</button>
    </div><!-- button-area -->

  </div><!-- employees-create-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script type="module">
    $(".select2").select2();

    // --------------------------------------------------------------------
    // Flat Picker
    // --------------------------------------------------------------------
    $(".flatpickr-date").flatpickr({
      monthSelectorType: 'static'
    });
  </script>
@endpush
