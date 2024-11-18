@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/intl-tel-input/intlTelInput.css') }}" />
@endpush

@section('content')

  <div id="employees-create-page">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="m-0">تعديل عميل : محمد احمد محمود</h4>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-3">
      <div class="col">
        <div class="card">
          <div class="card-body d-flex flex-column gap-4 p-3">
            <div class="form-group">
              <label class="form-label fs-6 mb-2 required" for="customer-classification">تصنيف العميل</label>
              <select id="customer-classification" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                <option></option>
                <option value="local-client-fields" selected>محلي</option>
                <option value="gcc-client-fields">مجلس تعاون الخليج</option>
                <option value="foreign-client-fields">اجنبي</option>
              </select>
            </div><!-- form-group -->
            <div class="form-group">
              <label class="form-label fs-6 mb-2 required" for="customer-name">اسم العميل</label>
              <input type="text" class="form-control" id="customer-name" />
            </div><!-- form-group -->
            <div class="form-group">
              <label class="form-label fs-6 mb-2 required" for="customer-nationality">الجنس</label>
              <select id="customer-sex" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                <option></option>
                <option value="AK">ذكر</option>
                <option value="HI">آنثي</option>
              </select>
            </div><!-- form-group -->
            <div class="form-group">
              <label class="form-label fs-6 mb-2 required" for="customer-nationality">الجنسية</label>
              <select id="customer-nationality" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                <option></option>
                <option value="AK">مصري</option>
                <option value="HI">سوري</option>
              </select>
            </div><!-- form-group -->
            <div class="form-group">
              <label class="form-label fs-6 mb-2 required" for="customer-country-residence">دولة الإقامة</label>
              <select id="customer-country-residence" class="select2 form-select" data-allow-clear="true" data-placeholder="اختر">
                <option></option>
                <option value="AK">النمسا</option>
                <option value="HI">العراق</option>
              </select>
            </div><!-- form-group -->
            <div class="form-group">
              <label class="form-label fs-6 mb-2 required" for="customer-mobile-number">رقم الجوال</label>
              <div class="d-flex align-items-center justify-content-start gap-3">
                <input type="tel" inputmode="numeric" id="customer-mobile-number" dir="ltr" class="form-control input-phone-flags">
                <label class="switch switch-square switch-lg flex-shrink-0">
                  <input type="checkbox" id="customer-mobile-number-switch" class="switch-input" checked />
                  <span class="switch-toggle-slider">
                    <span class="switch-on"><i class="ti ti-check"></i></span>
                    <span class="switch-off"><i class="ti ti-x"></i></span>
                  </span>
                  <span class="switch-label">متاح واتس اب</span>
                </label>
              </div><!-- d-flex -->
            </div><!-- form-group -->
            <div id="customer-whatsapp-number-element" style="display: none;">
              <div class="form-group">
                <label class="form-label fs-6 mb-2" for="customer-whatsapp-number">رقم الواتس اب</label>
                <input type="tel" inputmode="numeric" id="customer-whatsapp-number" dir="ltr" class="form-control input-phone-flags">
              </div><!-- form-group -->
            </div><!-- customer-whatsapp-number-element -->
            <div class="form-group">
              <label class="form-label fs-6 mb-2" for="customer-email">البريد الالكتروني</label>
              <input type="email" inputmode="email" id="customer-email" dir="ltr" class="form-control" />
            </div><!-- form-group -->
            <div class="form-group">
              <label class="form-label fs-6 mb-2" for="customer-address">العنوان</label>
              <input type="text" id="customer-address" dir="ltr" class="form-control" />
            </div><!-- form-group -->
            <div class="form-group">
              <label class="form-label fs-6 mb-2" for="customer-notes">الملاحظات</label>
              <textarea class="form-control" id="customer-notes" rows="3"></textarea>
            </div><!-- form-group -->
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col">
        <div class="card">
          <div class="card-header p-3">
            <h4 class="card-title m-0">الوثائق الرسمية</h4>
          </div><!-- card-header -->
          <div class="card-body p-3">

            <!-- تصنيف العميل محلي -->
            <div id="local-client-fields" class="toggle-element">
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="local-customer-national-id-number">رقم الهوية الوطنية</label>
                <input type="text" class="form-control" id="local-customer-national-id-number" />
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="local-customer-national-id-image">صورة الهوية الوطنية</label>
                <div action="/upload" class="dropzone needsclick dropzoneBasic" id="local-customer-national-id-image">
                  <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                  <div class="fallback">
                    <input name="local-customer-national-id-image" type="file" />
                  </div>
                </div><!-- dropzone -->
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 required" for="local-customer-national-id-expiry-date">تاريخ إنتهاء الهوية الوطنية</label>
                <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="local-customer-national-id-expiry-date" readonly="readonly" />
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 required" for="local-customer-driving-license-number">رقم رخصة القيادة</label>
                <input type="text" class="form-control" id="local-customer-driving-license-number" disabled value="" />
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 required" for="local-customer-driving-license-issuer">جهة إصدار رخصة القيادة</label>
                <input type="text" class="form-control" id="local-customer-driving-license-issuer" />
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="local-customer-driving-license-photo">صورة رخصة القيادة</label>
                <div action="/upload" class="dropzone needsclick dropzoneBasic" id="local-customer-driving-license-photo">
                  <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                  <div class="fallback">
                    <input name="local-customer-driving-license-photo" type="file" />
                  </div>
                </div><!-- dropzone -->
              </div><!-- form-group -->
              <div class="form-group">
                <label class="form-label fs-6 mb-2 required" for="local-customer-driving-license-duration">مدة رخصة القيادة</label>
                <div class="input-group">
                  <span class="input-group-text">من</span>
                  <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="local-customer-driving-license-duration" readonly="readonly" />
                  <span class="input-group-text">إلي</span>
                  <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="local-customer-driving-license-duration-to" readonly="readonly" />
                </div><!-- input-group -->
              </div><!-- form-group -->
            </div><!-- local-client-fields -->
            <!-- تصنيف العميل محلي -->

            <!-- تصنيف العميل مجلس تعاون الخليج -->
            <div id="gcc-client-fields" class="toggle-element" style="display:none;">
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="gcc-customer-national-id-number">رقم الهوية الوطنية</label>
                <input type="text" class="form-control" id="gcc-customer-national-id-number" />
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="gcc-customer-national-id-photo">صورة الهوية الوطنية</label>
                <div action="/upload" class="dropzone needsclick dropzoneBasic" id="gcc-customer-national-id-photo">
                  <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                  <div class="fallback">
                    <input name="local-customer-national-id-image" type="file" />
                  </div>
                </div><!-- dropzone -->
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="gcc-customer-national-id-duration">مدة الهوية الوطنية</label>
                <div class="input-group">
                  <span class="input-group-text">من</span>
                  <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="gcc-customer-national-id-duration" readonly="readonly" />
                  <span class="input-group-text">إلي</span>
                  <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="gcc-customer-national-id-duration-to" readonly="readonly" />
                </div><!-- input-group -->
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="gcc-customer-driving-license-number">رقم رخصة القيادة</label>
                <input type="text" class="form-control" id="gcc-customer-driving-license-number" />
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="gcc-customer-driving-license-issuing-authority">جهة إصدار رخصة القيادة</label>
                <input type="text" class="form-control" id="gcc-customer-driving-license-issuing-authority" />
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="gcc-customer-driving-license-photo">صورة رخصة القيادة</label>
                <div action="/upload" class="dropzone needsclick dropzoneBasic" id="gcc-customer-driving-license-photo">
                  <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                  <div class="fallback">
                    <input name="file" type="file" />
                  </div>
                </div><!-- dropzone -->
              </div><!-- form-group -->
              <div class="form-group">
                <label class="form-label fs-6 mb-2 required" for="gcc-customer-driving-license-duration">مدة رخصة القيادة</label>
                <div class="input-group">
                  <span class="input-group-text">من</span>
                  <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="gcc-customer-driving-license-duration" readonly="readonly" />
                  <span class="input-group-text">إلي</span>
                  <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="gcc-customer-driving-license-duration-to" readonly="readonly" />
                </div><!-- input-group -->
              </div><!-- form-group -->
            </div><!-- gcc-client-fields -->
            <!-- تصنيف العميل مجلس تعاون الخليج -->

            <!-- تصنيف العميل اجنبي -->
            <div id="foreign-client-fields" class="toggle-element" style="display:none;">
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="foreign-customer-passport-number">رقم جواز السفر</label>
                <input type="text" class="form-control" id="foreign-customer-passport-number" />
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="foreign-customer-passport-duration">مدة جواز السفر</label>
                <div class="input-group">
                  <span class="input-group-text">من</span>
                  <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="foreign-customer-passport-duration-from" readonly="readonly" />
                  <span class="input-group-text">إلي</span>
                  <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="foreign-customer-passport-duration" readonly="readonly" />
                </div><!-- input-group -->
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="foreign-customer-passport-photo">صورة جواز السفر</label>
                <div action="/upload" class="dropzone needsclick dropzoneBasic" id="foreign-customer-passport-photo">
                  <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                  <div class="fallback">
                    <input name="file" type="file" />
                  </div>
                </div><!-- dropzone -->
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="foreign-customer-visa-number">رقم التآشيرة</label>
                <input type="text" class="form-control" id="foreign-customer-visa-number" />
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="foreign-customer-visa-duration">مدة التآشيرة</label>
                <div class="input-group">
                  <span class="input-group-text">من</span>
                  <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="foreign-customer-visa-duration-from" readonly="readonly" />
                  <span class="input-group-text">إلي</span>
                  <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="foreign-customer-visa-duration" readonly="readonly" />
                </div><!-- input-group -->
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="foreign-customer-visa-photo">صورة التآشيرة</label>
                <div action="/upload" class="dropzone needsclick dropzoneBasic" id="foreign-customer-visa-photo">
                  <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                  <div class="fallback">
                    <input name="file" type="file" />
                  </div>
                </div><!-- dropzone -->
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="foreign-customer-driving-license-number">رقم رخصة القيادة</label>
                <input type="text" class="form-control" id="foreign-customer-driving-license-number" />
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="foreign-customer-driving-license-issuing-authority">جهة إصدار رخصة القيادة</label>
                <input type="text" class="form-control" id="foreign-customer-driving-license-issuing-authority" />
              </div><!-- form-group -->
              <div class="form-group mb-4">
                <label class="form-label fs-6 mb-2 required" for="foreign-customer-driving-license-photo">صورة رخصة القيادة</label>
                <div action="/upload" class="dropzone needsclick dropzoneBasic" id="foreign-customer-driving-license-photo">
                  <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                  <div class="fallback">
                    <input name="file" type="file" />
                  </div>
                </div><!-- dropzone -->
              </div><!-- form-group -->
              <div class="form-group">
                <label class="form-label fs-6 mb-2 required" for="foreign-customer-driving-license-duration">مدة رخصة القيادة</label>
                <div class="input-group">
                  <span class="input-group-text">من</span>
                  <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="foreign-customer-driving-license-duration-from" readonly="readonly" />
                  <span class="input-group-text">إلي</span>
                  <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="foreign-customer-driving-license-duration" readonly="readonly" />
                </div><!-- input-group -->
              </div><!-- form-group -->
            </div><!-- foreign-client-fields -->
            <!-- تصنيف العميل اجنبي -->

          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
    </div><!-- row -->

    <div class="button-area d-flex align-items-center justify-content-end mt-4">
      <button type="submit" class="btn btn-lg btn-primary px-5">حفظ</button>
    </div><!-- button-area -->

  </div><!-- employees-create-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/intl-tel-input/intlTelInput.min.js') }}"></script>
  <script type="module">
    // --------------------------------------------------------------------
    // Show Classification Options
    // --------------------------------------------------------------------
    $(document).ready(function () {
      $('#customer-classification').on('change', function () {
        const selectedValue = $(this).val();
        // Hide all elements with the class 'toggle-element'
        $('.toggle-element').hide();
        // Show the selected element if it's not "none"
        if (selectedValue !== 'none') {
          $(`#${selectedValue}`).show();
        }
      });
    });

    // --------------------------------------------------------------------
    // Show/Hide National ID Number
    // --------------------------------------------------------------------
    $(document).ready(function () {
      $("#customer-mobile-number-switch").on("change", function () {
        if ($(this).is(":checked")) {
          $("#customer-whatsapp-number-element").hide(); // Hide the element when checkbox is checked
        } else {
          $("#customer-whatsapp-number-element").show(); // Show the element when checkbox is unchecked
        }
      });
    });

    // --------------------------------------------------------------------
    // Copy Value From National ID Number To Driving License Number
    // --------------------------------------------------------------------
    $(document).ready(function () {
      $("#local-customer-national-id-number").on("input", function () {
        const value = $(this).val();
        $("#local-customer-driving-license-number").val(value);
      });
    });

    // --------------------------------------------------------------------
    // Convert Number AR To EN In Tel Input
    // --------------------------------------------------------------------
    function toEnglishNumber(strNum) {
      var ar = '٠١٢٣٤٥٦٧٨٩'.split('');
      var en = '0123456789'.split('');
      strNum = strNum.replace(/[٠١٢٣٤٥٦٧٨٩]/g, x => en[ar.indexOf(x)]);
      strNum = strNum.replace(/[^\d]/g, '');
      return strNum;
    }
    $(document).on('keyup', 'input[type="tel"]', function(e) {
      var val = toEnglishNumber($(this).val())
      $(this).val(val)
    });

    // --------------------------------------------------------------------
    // International Telephone Input
    // --------------------------------------------------------------------
    const inputs = document.querySelectorAll(".input-phone-flags");
    inputs.forEach((input) => {
      window.intlTelInput(input, {
        initialCountry: "eg", // Default country
        separateDialCode: true, // Display dial code separately
      });
    });

    // --------------------------------------------------------------------
    // Select 2
    // --------------------------------------------------------------------
    $(".select2").select2();

    // --------------------------------------------------------------------
    // Flat Picker
    // --------------------------------------------------------------------
    $(".flatpickr-date").flatpickr({
      monthSelectorType: 'static'
    });

    // --------------------------------------------------------------------
    // Dropzone
    // --------------------------------------------------------------------
    $(document).ready(function () {
      const previewTemplate = `
        <div class="dz-preview dz-file-preview">
          <div class="dz-details">
            <div class="dz-thumbnail">
              <img data-dz-thumbnail>
              <span class="dz-nopreview">No preview</span>
              <div class="dz-success-mark"></div>
              <div class="dz-error-mark"></div>
              <div class="dz-error-message"><span data-dz-errormessage></span></div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
              </div>
            </div>
            <div class="dz-filename" data-dz-name></div>
            <div class="dz-size" data-dz-size></div>
          </div>
        </div>
      `;
      const local_customer_national_id_image = document.querySelector('#local-customer-national-id-image');
      if (local_customer_national_id_image) {
        const myDropzoneMulti = new Dropzone(local_customer_national_id_image, {
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
            const local_customer_national_id_image_Instance = this;
            local_customer_national_id_image_Instance.on("addedfile", function () {
              if (local_customer_national_id_image_Instance.files.length === 2) {
                $("#local-customer-national-id-image").addClass("dz-upload-disabled");
              }
            });
            // When a file is removed
            local_customer_national_id_image_Instance.on("removedfile", function () {
              $("#local-customer-national-id-image").removeClass("dz-upload-disabled");
            });
          },
        });
      };
      const local_customer_driving_license_photo = document.querySelector('#local-customer-driving-license-photo');
      if (local_customer_driving_license_photo) {
        const myDropzoneMulti = new Dropzone(local_customer_driving_license_photo, {
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
            const local_customer_driving_license_photo_Instance = this;
            local_customer_driving_license_photo_Instance.on("addedfile", function () {
              if (local_customer_driving_license_photo_Instance.files.length === 2) {
                $("#local-customer-driving-license-photo").addClass("dz-upload-disabled");
              }
            });
            local_customer_driving_license_photo_Instance.on("removedfile", function () {
              $("#local-customer-driving-license-photo").removeClass("dz-upload-disabled");
            });
          },
        });
      };
      const gcc_customer_national_id_photo = document.querySelector('#gcc-customer-national-id-photo');
      if (gcc_customer_national_id_photo) {
        const myDropzoneMulti = new Dropzone(gcc_customer_national_id_photo, {
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
            const gcc_customer_national_id_photo_Instance = this;
            gcc_customer_national_id_photo_Instance.on("addedfile", function () {
              if (gcc_customer_national_id_photo_Instance.files.length === 2) {
                $("#gcc-customer-national-id-photo").addClass("dz-upload-disabled");
              }
            });
            gcc_customer_national_id_photo_Instance.on("removedfile", function () {
              $("#gcc-customer-national-id-photo").removeClass("dz-upload-disabled");
            });
          },
        });
      };
      const gcc_customer_driving_license_photo = document.querySelector('#gcc-customer-driving-license-photo');
      if (gcc_customer_driving_license_photo) {
        const myDropzoneMulti = new Dropzone(gcc_customer_driving_license_photo, {
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
            const gcc_customer_driving_license_photo_Instance = this;
            gcc_customer_driving_license_photo_Instance.on("addedfile", function () {
              if (gcc_customer_driving_license_photo_Instance.files.length === 2) {
                $("#gcc-customer-driving-license-photo").addClass("dz-upload-disabled");
              }
            });
            gcc_customer_driving_license_photo_Instance.on("removedfile", function () {
              $("#gcc-customer-driving-license-photo").removeClass("dz-upload-disabled");
            });
          },
        });
      };
      const foreign_customer_passport_photo = document.querySelector('#foreign-customer-passport-photo');
      if (foreign_customer_passport_photo) {
        const myDropzoneMulti = new Dropzone(foreign_customer_passport_photo, {
          previewTemplate: previewTemplate,
          url: "/file-upload", // Replace with your upload URL
          acceptedFiles: "image/png, image/jpeg, image/jpg, image/webp",
          dictInvalidFileType: "Only images (PNG, JPEG, JPG, WEBP) are allowed.",
          parallelUploads: 1,
          maxFiles: 1, // Allow only one file
          maxFilesize: 1,
          addRemoveLinks: true,
          dictRemoveFile: "حذف الصورة",
          init: function () {
            const foreign_customer_passport_photo_Instance = this;
            foreign_customer_passport_photo_Instance.on("addedfile", function () {
              if (foreign_customer_passport_photo_Instance.files.length === 1) {
                $("#foreign-customer-passport-photo").addClass("dz-upload-disabled");
              }
            });
            foreign_customer_passport_photo_Instance.on("removedfile", function () {
              $("#foreign-customer-passport-photo").removeClass("dz-upload-disabled");
            });
          },
        });
      };
      const foreign_customer_visa_photo = document.querySelector('#foreign-customer-visa-photo');
      if (foreign_customer_visa_photo) {
        const myDropzoneMulti = new Dropzone(foreign_customer_visa_photo, {
          previewTemplate: previewTemplate,
          url: "/file-upload", // Replace with your upload URL
          acceptedFiles: "image/png, image/jpeg, image/jpg, image/webp",
          dictInvalidFileType: "Only images (PNG, JPEG, JPG, WEBP) are allowed.",
          parallelUploads: 1,
          maxFiles: 1, // Allow only one file
          maxFilesize: 1,
          addRemoveLinks: true,
          dictRemoveFile: "حذف الصورة",
          init: function () {
            const foreign_customer_visa_photo_Instance = this;
            foreign_customer_visa_photo_Instance.on("addedfile", function () {
              if (foreign_customer_visa_photo_Instance.files.length === 1) {
                $("#foreign-customer-visa-photo").addClass("dz-upload-disabled");
              }
            });
            foreign_customer_visa_photo_Instance.on("removedfile", function () {
              $("#foreign-customer-visa-photo").removeClass("dz-upload-disabled");
            });
          },
        });
      };
      const foreign_customer_driving_license_photo = document.querySelector('#foreign-customer-driving-license-photo');
      if (foreign_customer_driving_license_photo) {
        const myDropzoneMulti = new Dropzone(foreign_customer_driving_license_photo, {
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
            const foreign_customer_driving_license_photo_Instance = this;
            foreign_customer_driving_license_photo_Instance.on("addedfile", function () {
              if (foreign_customer_driving_license_photo_Instance.files.length === 2) {
                $("#foreign-customer-driving-license-photo").addClass("dz-upload-disabled");
              }
            });
            foreign_customer_driving_license_photo_Instance.on("removedfile", function () {
              $("#foreign-customer-driving-license-photo").removeClass("dz-upload-disabled");
            });
          },
        });
      };
    });
  </script>
@endpush
