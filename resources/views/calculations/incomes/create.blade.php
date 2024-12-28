@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endpush

@section('content')

  <div id="incomes-create-page">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
      <h4 class="m-0">إضافة إيراد جديد</h4>
    </div><!-- d-flex -->

    <a href="{{ url('/calculations/incomes') }}" class="btn btn-icon bg-white text-body waves-effect waves-light mb-3"><span class="ti ti-chevron-right"></span></a>

    <div class="card mb-3">
      <div class="card-body p-3">
        <div class="row align-items-center">
          <label class="col-sm-2 col-form-label" for="income-title">الوصف</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-12 col-md-6">
                <input type="text" class="form-control" id="income-title" />
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-2 col-form-label" for="income-category">القسم</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-12 col-md-6">
                <select id="income-category" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                  <option></option>
                  <option value="AK">تآجير</option>
                  <option value="HI">بيع</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-2 col-form-label" for="income-branch">الفرع</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-12 col-md-6">
                <select id="income-branch" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                  <option></option>
                  <option value="AK">فرع الواحة</option>
                  <option value="HI">فرع جدة</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-2 col-form-label" for="income-amount">المبلغ</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="input-group">
                  <input type="number" inputmode="numeric" class="form-control" id="income-amount" />
                  <span class="input-group-text">ريال</span>
                </div><!-- input-group -->
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-2 col-form-label" for="income-tax">الضريبة</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="input-group">
                  <input type="number" inputmode="numeric" class="form-control" id="income-tax" />
                  <span class="input-group-text">ريال</span>
                </div><!-- input-group -->
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-2 col-form-label" for="income-amount-including-tax">المبلغ شامل الضريبة</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="input-group">
                  <b class="show-label-data-group d-flex align-items-center justify-content-start gap-1" id="amount-including-tax-field">0</b>
                  <span class="input-group-text">ريال</span>
                </div><!-- input-group -->
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-2 col-form-label" for="income-payment-methods">طريقة الدفع</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-12 col-md-6">
                <select id="income-payment-methods" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                  <option></option>
                  <option value="AK">نقداً</option>
                  <option value="HI">تحويل بنكي</option>
                  <option value="ew">POS</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-2 col-form-label" for="income-status">الحالة</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-12 col-md-6">
                <select id="income-status" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                  <option></option>
                  <option value="AK">آجل</option>
                  <option value="HI">مدفوع</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-2 col-form-label" for="income-date">تاريخ الصرف</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-12 col-md-6">
                <input type="date" class="form-control flatpickr-date" id="income-date" placeholder="YYYY-MM-DD" readonly="readonly" />
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-2 col-form-label" for="income-attach">مرفقات</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-12 col-md-6">
                <div action="/upload" class="dropzone needsclick dropzoneBasic" id="income-attach">
                  <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                  <div class="fallback">
                    <input name="income-attach" type="file" />
                  </div>
                </div><!-- dropzone -->
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-2 col-form-label" for="income-notes">ملاحظات</label>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-12 col-md-6">
                <input type="text" class="form-control" id="income-notes" />
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- col-12 -->
        </div><!-- row -->
      </div><!-- card-body -->
    </div><!-- card -->

    <div class="button-area d-flex align-items-center justify-content-end">
      <button type="submit" class="btn btn-lg btn-primary px-5">{{ __('Save') }}</button>
    </div><!-- button-area -->

  </div><!-- incomes-create-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
  <script type="module">
    $(document).ready(function() {
      function calculateAmountIncludingTax() {
        var amount = parseFloat($('#income-amount').val()) || 0;
        var tax = parseFloat($('#income-tax').val()) || 0;
        var total = amount + tax;
        $('#amount-including-tax-field').text(total);
      }
      $('#income-amount, #income-tax').on('input', calculateAmountIncludingTax);
    });

    // --------------------------------------------------------------------
    // Flat Picker
    // --------------------------------------------------------------------
    $(".flatpickr-date").flatpickr({
      monthSelectorType: 'static'
    });

    // --------------------------------------------------------------------
    // Select2
    // --------------------------------------------------------------------
    $(".select2").select2();

    // --------------------------------------------------------------------
    // Dropzone
    // --------------------------------------------------------------------
    $(document).ready(function () {
      const previewTemplate = `
        <div class="dz-preview w-auto dz-file-preview">
          <div class="dz-details">
            <div class="dz-thumbnail w-auto border-0">
              <img class="mx-auto" data-dz-thumbnail>
              <span class="dz-nopreview">No preview</span>
              <div class="dz-success-mark"></div>
              <div class="dz-error-mark"></div>
              <div class="dz-error-message"><span data-dz-errormessage></span></div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
              </div>
            </div>
          </div>
        </div>
      `;
      const income_attach_image = document.querySelector('#income-attach');
      if (income_attach_image) {
        const myDropzoneMulti = new Dropzone(income_attach_image, {
          previewTemplate: previewTemplate,
          url: "/file-upload", // Replace with your upload URL
          acceptedFiles: "image/png, image/jpeg, image/jpg, image/webp",
          dictInvalidFileType: "Only images (PNG, JPEG, JPG, WEBP) are allowed.",
          parallelUploads: 2,
          maxFiles: 2, // Allow only one file
          maxFilesize: 1,
          addRemoveLinks: true,
          dictRemoveFile: "حذف الصورة",
          init: function () {
            const income_attach_image_Instance = this;
            income_attach_image_Instance.on("addedfile", function () {
              if (income_attach_image_Instance.files.length === 2) {
                $("#income-attach").addClass("dz-upload-disabled");
              }
            });
            // When a file is removed
            income_attach_image_Instance.on("removedfile", function () {
              $("#income-attach").removeClass("dz-upload-disabled");
            });
          },
        });
      };
    });
  </script>
@endpush
