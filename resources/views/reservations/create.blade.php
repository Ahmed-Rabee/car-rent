@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush

@section('content')

  <div id="reservations-create-page">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="m-0">إضافة حجز جديد</h4>
      </div>
    </div>

    <div class="row g-3">
      <div class="col-12 col-md-9">
        <div class="card">
          <div class="card-body">
            <form action="/upload" method="post">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">العميل</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <select id="employee-permissions756" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                        <option></option>
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </select>
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">الفرع</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <select id="employee-permissions1" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                        <option></option>
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </select>
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">المركبة</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <select id="employee-permissions10" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                        <option></option>
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </select>
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">المركبة البديلة</label>
                <div class="col-sm-9">
                  <div class="row g-3">
                    <div class="col-12 col-md-6">
                      <select id="employee-permissions" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر الماركة">
                        <option></option>
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </select>
                    </div><!-- col-12 -->
                    <div class="col-12 col-md-6">
                      <select id="employee-permissionsw" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر الفئة">
                        <option></option>
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </select>
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">مكان الاستلام</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <input type="text" class="form-control" />
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">تاريخ الاستلام</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <input
                        type="text"
                        class="form-control flatpickr-datetime"
                        placeholder="YYYY-MM-DD HH:MM"
                      />
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">مكان العودة</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <input type="text" class="form-control" />
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">تاريخ العودة</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <input
                        type="text"
                        class="form-control flatpickr-datetime"
                        placeholder="YYYY-MM-DD HH:MM"
                      />
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <!-- <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">مدة الحجر</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <input
                        type="text"
                        class="form-control"
                        value="5 ايام + 3 ساعات + 1 يوم إضافي"
                        readonly
                        disabled
                      />
                    </div>
                  </div>
                </div>
              </div> -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">السعر اليومي</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <div class="input-group">
                        <input type="number" class="form-control" />
                        <span class="input-group-text">ريال</span>
                      </div>
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">خدمة التوصيل</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <select id="employee-permissions6987" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                        <option></option>
                        <option value="payment">مدفوعة</option>
                        <option value="free">مجانية</option>
                      </select>
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">تكلفة خدمة التوصيل</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <div class="input-group">
                        <input type="number" class="form-control" />
                        <span class="input-group-text">ريال</span>
                      </div>
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">خصم</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <div class="input-group">
                        <input type="number" class="form-control" />
                        <span class="input-group-text">ريال</span>
                      </div>
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">رقم رحلة الطيران</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <input type="number" class="form-control" />
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="employee-name">حالة الحجز</label>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-12 col-md-7">
                      <select id="employee-permissions6987aa" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                        <option></option>
                        <option value="payment">مؤكد</option>
                        <option value="free">غير مؤكد</option>
                        <option value="free">ملغي</option>
                      </select>
                    </div><!-- col-12 -->
                  </div><!-- row -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row">
                <label class="col-sm-3 col-form-label" for="employee-name">الملاحظات</label>
                <div class="col-sm-9">
                  <textarea class="form-control p-3" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div><!-- col-12 -->
              </div><!-- row -->
            </form>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col-12 -->
      <div class="col-12 col-md-3">
        <div class="reservation-cart-side position-sticky">
          <div class="card mb-3">
            <div class="card-body p-3">
              <ul class="d-flex flex-column gap-2 m-0 p-0 list-unstyled">
                <li class="d-flex align-items-center justify-content-between">
                  <span>مدة الحجر :</span>
                  <p class="m-0">4 <small>ايام</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <span>سعر الحجز :</span>
                  <p class="m-0">123 <small>ريال</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                  <span>تكلفة خدمة التوصيل :</span>
                  <p class="m-0">123 <small>ريال</small></p>
                </li>
                <li class="d-flex align-items-center justify-content-between text-danger">
                  <span>خصم :</span>
                  <p class="m-0">- 123 <small>ريال</small></p>
                </li>
              </ul>
              <hr class="my-3">
              <div class="total-amount d-flex align-items-center justify-content-between fw-bold">
                <span>إجمالي المبلغ :</span>
                <p class="m-0">2000 <small>ريال</small></p>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
          <button type="submit" class="btn btn-lg btn-primary px-5 w-100">حفظ</button>
        </div><!--  -->
      </div><!-- col-12 -->
    </div><!-- row -->

  </div><!-- reservations-create-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script type="module">
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

      // Flat Picker
      // --------------------------------------------------------------------
      const flatpickrDateTime = $('.flatpickr-datetime');

      // Datetime
      if (flatpickrDateTime) {
        flatpickrDateTime.flatpickr({
          enableTime: true,
          dateFormat: 'Y-m-d H:i'
        });
      }
    })();
  </script>
@endpush
