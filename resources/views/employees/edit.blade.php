@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush

@section('content')

  <div id="employees-edit-page">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="m-0">تعديل موظف : احمد مصطفي</h4>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body">
        <form action="/upload" method="post">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label" for="employee-name">اسم الموظف</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" class="form-control" id="employee-name" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label" for="employee-phone">رقم الهاتف</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="input-group">
                    <input type="text" id="employee-phone" dir="ltr" class="form-control phone-number-mask" maxlength="9" placeholder="00 00 00 00 0" />
                    <span class="input-group-text" dir="ltr">+966</span>
                  </div>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label" for="employee-password">كلمة المرور</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="password" class="form-control" id="employee-password" placeholder="كلمة المرور" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label" for="employee-id-card">بطاقة الهوية</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input class="form-control" type="file" id="employee-id-card">
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label" for="employee-vehicle-license">رخصة سياقة المركبة</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input class="form-control" type="file" id="employee-vehicle-license">
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label" for="employee-selfie">صورة شخصية</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input class="form-control" type="file" id="employee-selfie">
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label" for="employee-date">تاريخ التعيين</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-date" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label" for="employee-job-title">المسمي الوظيفي</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" class="form-control" id="employee-job-title" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label" for="employee-permissions">الصلاحيات</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <select id="employee-permissions" class="select2 form-select" data-allow-clear="true">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                  </select>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label" for="branch-name">الراتب</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="input-group">
                    <input type="text" class="form-control" />
                    <span class="input-group-text">ريال</span>
                  </div>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
        </form>
      </div>
    </div><!-- card -->

    <div class="button-area d-flex align-items-center justify-content-end">
      <button type="submit" class="btn btn-lg btn-primary px-5">حفظ</button>
    </div><!-- button-area -->

  </div><!-- employees-edit-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script type="module">
      (function () {
        // Flat Picker
        // --------------------------------------------------------------------
        const flatpickrDate = $('.flatpickr-date');
        if (flatpickrDate) {
          flatpickrDate.flatpickr({
            monthSelectorType: 'static'
          });
        }
      })();

      (function () {
        const phoneMask = document.querySelector('.phone-number-mask');
        // Phone Number
        if (phoneMask) {
          new Cleave(phoneMask, {
            phone: true,
            phoneRegionCode: 'OM'
          });
        }
      })();

      (function () {
        const select2 = $('.select2');
        if (select2.length) {
          select2.each(function () {
            var $this = $(this);
            $this.wrap('<div class="position-relative"></div>').select2({
              placeholder: 'Select value',
              dropdownParent: $this.parent()
            });
          });
        }
      })();
    </script>

@endpush
