@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endpush

@section('content')

  <div id="employees-create-page">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="m-0">إضافة موظف جديد</h4>
      </div>
    </div><!-- d-flex -->

    <div class="accordion d-flex flex-column gap-4 mb-4" id="accordionEmployee">

      <div class="card accordion-item m-0 active">
        <div class="accordion-header" id="heading-personal-information">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between p-3"
            data-bs-toggle="collapse"
            data-bs-target="#accordion-personal-information"
            aria-expanded="true"
            aria-controls="accordion-personal-information"
          >
            <h5 class="m-0">المعلومات الشخصية</h5>
          </button>
        </div><!-- accordion-header -->
        <div id="accordion-personal-information" class="accordion-collapse collapse show" data-bs-parent="#accordionEmployee">
          <div class="accordion-body p-3">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-name">الاسم</label>
                  <input type="text" class="form-control" id="employee-name" />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-mobile">رقم الهاتف</label>
                  <div class="input-group">
                    <input type="tel" inputmode="numeric" id="employee-mobile" dir="ltr" class="form-control" />
                    <span class="input-group-text" dir="ltr">+966</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-email">البريد الإلكتروني</label>
                  <input type="email" inputmode="email" class="form-control" id="employee-email" dir="ltr" />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-address">محل الإقامة</label>
                  <input type="text" class="form-control" id="employee-address" />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-date-birth">تاريخ الميلاد</label>
                  <input type="date" class="form-control flatpickr-date" id="employee-date-birth" placeholder="YYYY-MM-DD" readonly="readonly" />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-sex">الجنس</label>
                    <div class="row row-cols-2 g-1 g-md-3">
                      <div class="col">
                        <div class="form-check custom-option custom-option-basic m-0">
                          <label class="form-check-label custom-option-content py-2" for="employee-male">
                            <input
                              name="employee-sex"
                              class="form-check-input"
                              type="radio"
                              id="employee-male"
                              checked
                            />
                            <span class="custom-option-header p-0">ذكر</span>
                          </label>
                        </div><!-- form-check -->
                      </div><!-- col -->
                      <div class="col">
                        <div class="form-check custom-option custom-option-basic m-0">
                          <label class="form-check-label custom-option-content py-2" for="employee-female">
                            <input
                              name="employee-sex"
                              class="form-check-input"
                              type="radio"
                              id="employee-female"
                            />
                            <span class="custom-option-header p-0">آنثي</span>
                          </label>
                        </div><!-- form-check -->
                      </div><!-- col -->
                    </div><!-- row -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-nationality">الجنسية</label>
                  <select id="employee-nationality" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                    <option></option>
                    <option value="AK">مصري</option>
                    <option value="HI">سوري</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-marital-status">الحالة الإجتماعية</label>
                  <select id="employee-marital-status" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                    <option></option>
                    <option value="AK1">متزوج</option>
                    <option value="HI2">اعزب</option>
                    <option value="HI3">مطلق</option>
                    <option value="HI4">أرمل</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <div class="card accordion-item m-0">
        <div class="accordion-header" id="heading-job-info">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between p-3 collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordion-job-info"
            aria-expanded="false"
            aria-controls="accordion-job-info"
          >
            <h5 class="m-0">معلومات العمل</h5>
          </button>
        </div><!-- accordion-header -->
        <div id="accordion-job-info" class="accordion-collapse collapse" aria-labelledby="heading-job-info" data-bs-parent="#accordionEmployee">
          <div class="accordion-body p-3">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-job-title">المسمي الوظيفي</label>
                  <input type="text" class="form-control" id="employee-job-title" />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-date-appointment">تاريخ التعيين</label>
                  <input type="date" class="form-control flatpickr-date" id="employee-date-appointment" placeholder="YYYY-MM-DD" readonly="readonly" />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-status">الحالة</label>
                  <select id="employee-status" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                    <option></option>
                    <option value="AK1">تحت التدريب</option>
                    <option value="HI2">فعال</option>
                    <option value="HI3">أجازة سنوية</option>
                    <option value="HI4">أجازة مرضية</option>
                    <option value="HI5">أجازة غير مدفوعة</option>
                    <option value="HI6">مسرح</option>
                    <option value="HI7">مستقيل</option>
                    <option value="HI8">مفصول</option>
                    <option value="HI9">موقوف</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-holidays">ايام العطلات</label>
                  <select id="employee-holidays" class="select2 form-select" data-allow-clear="false" multiple="multiple" data-placeholder="اختر">
                    <option></option>
                    <option value="AK1">السبت</option>
                    <option value="HI2">الاحد</option>
                    <option value="HI3">الاثنين</option>
                    <option value="HI4">الثلاثاء</option>
                    <option value="HI5">الاربعاء</option>
                    <option value="HI6">الخميس</option>
                    <option value="HI7">الجمعة</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-date-birth">ساعات العمل</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" class="form-control" id="employee-salary" />
                    <span class="input-group-text">ساعة</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-date-birth">الصلاحيات</label>
                  <select id="employee-permissions" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                    <option></option>
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-date-birth">الفرع</label>
                  <select id="employee-branch" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                    <option></option>
                    <option value="AK">مصري</option>
                    <option value="HI">سوري</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <div class="card accordion-item m-0">
        <div class="accordion-header" id="heading-official-documents">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between p-3 collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordion-official-documents"
            aria-expanded="false"
            aria-controls="accordion-official-documents"
          >
            <h5 class="m-0">الوثائق الرسمية</h5>
          </button>
        </div><!-- accordion-header -->
        <div id="accordion-official-documents" class="accordion-collapse collapse" aria-labelledby="heading-official-documents" data-bs-parent="#accordionEmployee">
          <div class="accordion-body p-3">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-selfie">الصورة الشخصية</label>
                  <div action="/upload" class="dropzone needsclick dropzoneBasic" id="employee-selfie">
                    <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                    <div class="fallback">
                      <input name="employee-selfie" type="file" />
                    </div>
                  </div><!-- dropzone -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-id-card">بطاقة الهوية الوطنية</label>
                  <div action="/upload" class="dropzone needsclick dropzoneBasic" id="employee-id-card">
                    <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                    <div class="fallback">
                      <input name="employee-id-card" type="file" />
                    </div>
                  </div><!-- dropzone -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-national-id-expiry-date">تاريخ إنتهاء الهوية الوطنية</label>
                  <input type="date" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-national-id-expiry-date" readonly="readonly" />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-vehicle-license">رخصة القيادة</label>
                  <div action="/upload" class="dropzone needsclick dropzoneBasic" id="employee-vehicle-license">
                    <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                    <div class="fallback">
                      <input name="employee-vehicle-license" type="file" />
                    </div>
                  </div><!-- dropzone -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-driving-license-duration">مدة رخصة القيادة</label>
                  <div class="input-group">
                    <span class="input-group-text">من</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-driving-license-duration" readonly="readonly" />
                    <span class="input-group-text">إلي</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-driving-license-duration-to" readonly="readonly" />
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-passport-photo">صورة جواز السفر</label>
                  <div action="/upload" class="dropzone needsclick dropzoneBasic" id="employee-passport-photo">
                    <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                    <div class="fallback">
                      <input name="file" type="file" />
                    </div>
                  </div><!-- dropzone -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-passport-number">رقم جواز السفر</label>
                  <input type="number" class="form-control" id="employee-passport-number" />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-passport-duration">مدة جواز السفر</label>
                  <div class="input-group">
                    <span class="input-group-text">من</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-passport-duration" readonly="readonly" />
                    <span class="input-group-text">إلي</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-passport-duration-to" readonly="readonly" />
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-visa-photo">صورة التآشيرة</label>
                  <div action="/upload" class="dropzone needsclick dropzoneBasic" id="employee-visa-photo">
                    <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                    <div class="fallback">
                      <input name="file" type="file" />
                    </div>
                  </div><!-- dropzone -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-visa-number">رقم التآشيرة</label>
                  <input type="number" class="form-control" id="employee-visa-number" />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-visa-duration">مدة التآشيرة</label>
                  <div class="input-group">
                    <span class="input-group-text">من</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-visa-duration" readonly="readonly" />
                    <span class="input-group-text">إلي</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-visa-duration-to" readonly="readonly" />
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <div class="card accordion-item m-0">
        <div class="accordion-header" id="heading-financial-information">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between p-3 collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#accordion-financial-information"
            aria-expanded="false"
            aria-controls="accordion-financial-information"
          >
            <h5 class="m-0">المعلومات الماليه</h5>
          </button>
        </div><!-- accordion-header -->
        <div id="accordion-financial-information" class="accordion-collapse collapse" aria-labelledby="heading-financial-information" data-bs-parent="#accordionEmployee">
          <div class="accordion-body p-3">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-salary">الراتب الشهري</label>
                  <div class="input-group">
                    <input type="number" inputmode="numeric" class="form-control" id="employee-salary" />
                    <span class="input-group-text">ريال</span>
                  </div><!-- input-group -->
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-bank-account-number">رقم الحساب البنكي</label>
                  <input type="number" inputmode="numeric" class="form-control" id="employee-bank-account-number" />
                </div><!-- form-group -->
              </div><!-- col -->
              <div class="col">
                <div class="form-group">
                  <label class="form-label mb-2 fs-6 required" for="employee-bank-name">اسم البنك التابع له الحساب</label>
                  <input type="text" class="form-control" id="employee-bank-name" />
                </div><!-- form-group -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

    </div><!-- accordion -->

    <div class="button-area d-flex align-items-center justify-content-end">
      <button type="submit" class="btn btn-lg btn-primary px-5">حفظ</button>
    </div><!-- button-area -->

  </div><!-- employees-create-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
  <script type="module">
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
      const employeeـselfie_image = document.querySelector('#employee-selfie');
      if (employeeـselfie_image) {
        const myDropzoneMulti = new Dropzone(employeeـselfie_image, {
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
            const employeeـselfie_image_Instance = this;
            employeeـselfie_image_Instance.on("addedfile", function () {
              if (employeeـselfie_image_Instance.files.length === 1) {
                $("#employee-selfie").addClass("dz-upload-disabled");
              }
            });
            // When a file is removed
            employeeـselfie_image_Instance.on("removedfile", function () {
              $("#employee-selfie").removeClass("dz-upload-disabled");
            });
          },
        });
      };
      const employee_id_card_image = document.querySelector('#employee-id-card');
      if (employee_id_card_image) {
        const myDropzoneMulti = new Dropzone(employee_id_card_image, {
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
            const employee_id_card_image_Instance = this;
            employee_id_card_image_Instance.on("addedfile", function () {
              if (employee_id_card_image_Instance.files.length === 2) {
                $("#employee-id-card").addClass("dz-upload-disabled");
              }
            });
            // When a file is removed
            employee_id_card_image_Instance.on("removedfile", function () {
              $("#employee-id-card").removeClass("dz-upload-disabled");
            });
          },
        });
      };
      const employee_vehicle_license_image = document.querySelector('#employee-vehicle-license');
      if (employee_vehicle_license_image) {
        const myDropzoneMulti = new Dropzone(employee_vehicle_license_image, {
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
            const employee_vehicle_license_image_Instance = this;
            employee_vehicle_license_image_Instance.on("addedfile", function () {
              if (employee_vehicle_license_image_Instance.files.length === 2) {
                $("#employee-vehicle-license").addClass("dz-upload-disabled");
              }
            });
            // When a file is removed
            employee_vehicle_license_image_Instance.on("removedfile", function () {
              $("#employee-vehicle-license").removeClass("dz-upload-disabled");
            });
          },
        });
      };
      const employee_passport_photo = document.querySelector('#employee-passport-photo');
      if (employee_passport_photo) {
        const myDropzoneMulti = new Dropzone(employee_passport_photo, {
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
            const employee_passport_photo_Instance = this;
            employee_passport_photo_Instance.on("addedfile", function () {
              if (employee_passport_photo_Instance.files.length === 1) {
                $("#employee-passport-photo").addClass("dz-upload-disabled");
              }
            });
            employee_passport_photo_Instance.on("removedfile", function () {
              $("#employee-passport-photo").removeClass("dz-upload-disabled");
            });
          },
        });
      };
      const employee_visa_photo = document.querySelector('#employee-visa-photo');
      if (employee_visa_photo) {
        const myDropzoneMulti = new Dropzone(employee_visa_photo, {
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
            const employee_visa_photo_Instance = this;
            employee_visa_photo_Instance.on("addedfile", function () {
              if (employee_visa_photo_Instance.files.length === 1) {
                $("#employee-visa-photo").addClass("dz-upload-disabled");
              }
            });
            employee_visa_photo_Instance.on("removedfile", function () {
              $("#employee-visa-photo").removeClass("dz-upload-disabled");
            });
          },
        });
      };
    });

    // --------------------------------------------------------------------
    // Select 2
    // --------------------------------------------------------------------
    $(".select2").select2();
  </script>

@endpush
