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
    </div>

    <div class="accordion d-flex flex-column gap-4 mb-4" id="accordionEmployee">

      <div class="card accordion-item m-0 active">
        <div class="accordion-header" id="heading-personal-information">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between"
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
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-name">الاسم</label>
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
              <label class="col-sm-2 col-form-label" for="employee-mobile">رقم الهاتف</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="input-group">
                      <input type="tel" inputmode="numeric" id="employee-mobile" dir="ltr" class="form-control" />
                      <span class="input-group-text" dir="ltr">+966</span>
                    </div><!-- input-group -->
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-email">البريد الإلكتروني</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <input type="email" inputmode="email" class="form-control" id="employee-email" dir="ltr" />
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-address">محل الإقامة</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <input type="text" class="form-control" id="employee-address" />
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-date-birth">تاريخ الميلاد</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <input type="date" class="form-control flatpickr-date" id="employee-date-birth" placeholder="YYYY-MM-DD" readonly="readonly" />
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="branch-name">الجنس</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
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
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-nationality">الجنسية</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <select id="employee-nationality" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                      <option></option>
                      <option value="AK">مصري</option>
                      <option value="HI">سوري</option>
                    </select>
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-marital-status">الحالة الإجتماعية</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <select id="employee-marital-status" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                      <option></option>
                      <option value="AK1">متزوج</option>
                      <option value="HI2">اعزب</option>
                      <option value="HI3">مطلق</option>
                      <option value="HI4">أرمل</option>
                    </select>
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
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
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-date-appointment">تاريخ التعيين</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <input type="date" class="form-control flatpickr-date" id="employee-date-appointment" placeholder="YYYY-MM-DD" readonly="readonly" />
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-status">الحالة</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
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
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-permissions">الصلاحيات</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <select id="employee-permissions" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
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
              <label class="col-sm-2 col-form-label" for="employee-branch">الفرع</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <select id="employee-branch" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                      <option></option>
                      <option value="AK">مصري</option>
                      <option value="HI">سوري</option>
                    </select>
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <div class="card accordion-item m-0">
        <div class="accordion-header" id="heading-official-documents">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between collapsed"
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
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-selfie">الصورة الشخصية</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div action="/upload" class="dropzone needsclick dropzoneBasic" id="employee-selfie">
                      <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                      <div class="fallback">
                        <input name="employee-selfie" type="file" />
                      </div>
                    </div><!-- dropzone -->
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-id-card">بطاقة الهوية الوطنية</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div action="/upload" class="dropzone needsclick dropzoneBasic" id="employee-id-card">
                      <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                      <div class="fallback">
                        <input name="employee-id-card" type="file" />
                      </div>
                    </div><!-- dropzone -->
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-national-id-expiry-date">تاريخ إنتهاء الهوية الوطنية</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-national-id-expiry-date" readonly="readonly" />
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-vehicle-license">رخصة القيادة</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div action="/upload" class="dropzone needsclick dropzoneBasic" id="employee-vehicle-license">
                      <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                      <div class="fallback">
                        <input name="employee-vehicle-license" type="file" />
                      </div>
                    </div><!-- dropzone -->
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-driving-license-duration">مدة رخصة القيادة</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="input-group">
                      <span class="input-group-text">من</span>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-driving-license-duration" readonly="readonly" />
                      <span class="input-group-text">إلي</span>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-driving-license-duration-to" readonly="readonly" />
                    </div><!-- input-group -->
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-passport-photo">صورة جواز السفر</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div action="/upload" class="dropzone needsclick dropzoneBasic" id="employee-passport-photo">
                      <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                      <div class="fallback">
                        <input name="file" type="file" />
                      </div>
                    </div><!-- dropzone -->
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-passport-number">رقم جواز السفر</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <input type="number" class="form-control" id="employee-passport-number" />
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-passport-duration-from">مدة جواز السفر</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="input-group">
                      <span class="input-group-text">من</span>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-passport-duration-from" readonly="readonly" />
                      <span class="input-group-text">إلي</span>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-passport-duration" readonly="readonly" />
                    </div><!-- input-group -->
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-visa-photo">صورة التآشيرة</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div action="/upload" class="dropzone needsclick dropzoneBasic" id="employee-visa-photo">
                      <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                      <div class="fallback">
                        <input name="file" type="file" />
                      </div>
                    </div><!-- dropzone -->
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-visa-number">رقم التآشيرة</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <input type="number" class="form-control" id="employee-visa-number" />
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-visa-duration">مدة التآشيرة</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="input-group">
                      <span class="input-group-text">من</span>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-visa-duration-from" readonly="readonly" />
                      <span class="input-group-text">إلي</span>
                      <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="employee-visa-duration" readonly="readonly" />
                    </div><!-- input-group -->
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- accordion-body -->
        </div><!-- accordion-collapse -->
      </div><!-- card -->

      <div class="card accordion-item m-0">
        <div class="accordion-header" id="heading-financial-information">
          <button
            type="button"
            class="accordion-button d-flex align-items-center justify-content-between collapsed"
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
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-salary">الراتب الشهري</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="input-group">
                      <input type="number" inputmode="numeric" class="form-control" id="employee-salary" />
                      <span class="input-group-text">ريال</span>
                    </div><!-- input-group -->
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-bank-account-number">رقم الحساب البنكي</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <input type="number" inputmode="numeric" class="form-control" id="employee-bank-account-number" />
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-2 col-form-label" for="employee-bank-name">اسم البنك التابع له الحساب</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <input type="text" class="form-control" id="employee-bank-name" />
                  </div><!-- col-12 -->
                </div><!-- row -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
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
