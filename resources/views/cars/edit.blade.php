@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endpush

@section('content')

  <div id="cars-edit-page">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="m-0">تعديل مركبة : 9408 - TB</h4>
      </div>
    </div><!-- d-flex -->

    <div class="card mb-4">
      <div class="card-body p-3">
        <form>
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-number">رقم السيارة</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" class="form-control" id="car-number" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-branch">الفرع</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <select id="car-branch" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                    <option></option>
                    <option value="AK">فرع الواحة</option>
                    <option value="HI">فرع مكة</option>
                  </select>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label fw-medium" for="car-image">صورة السيارة</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div action="/upload" class="dropzone needsclick dropzoneBasic" id="car-image">
                    <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                    <div class="fallback">
                      <input name="car-image" type="file" />
                    </div>
                  </div><!-- dropzone -->
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label fw-medium" for="car-property-image">صورة الملكية</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div action="/upload" class="dropzone needsclick dropzoneBasic" id="car-property-image">
                    <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                    <div class="fallback">
                      <input name="car-property-image" type="file" />
                    </div>
                  </div><!-- dropzone -->
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label fw-medium" for="car-operating-card-image">صورة بطاقة التشغيل</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div action="/upload" class="dropzone needsclick dropzoneBasic" id="car-operating-card-image">
                    <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                    <div class="fallback">
                      <input name="car-operating-card-image" type="file" />
                    </div>
                  </div><!-- dropzone -->
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-brand">الماركة</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <select id="car-brand" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                    <option></option>
                    <option value="AK">كيا</option>
                    <option value="HI">اوبترا</option>
                  </select>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-model">الموديل</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <select id="car-model" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                    <option></option>
                    <option value="AK">موديل ١</option>
                    <option value="HI">موديل ٢</option>
                  </select>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-category">الفئة</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <select id="car-category" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                    <option></option>
                    <option value="AK">فئة ١</option>
                    <option value="HI">فئة ٢</option>
                  </select>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-date">سنة الصنع</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="number" inputmode="numeric" id="car-date" class="form-control" pattern="[0-9]{9}" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-shasy">رقم الشاصي</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="number" inputmode="numeric" id="car-shasy" class="form-control" pattern="[0-9]{9}" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-insurance-company">شركة التآمين</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <select id="car-insurance-company" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                    <option></option>
                    <option value="AK">مصر للتآمين</option>
                    <option value="HI">الهدف للتآمين</option>
                  </select>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-insurance-period">مدة التآمين</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="input-group">
                    <span class="input-group-text">من</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="car-insurance-period" readonly="readonly" />
                    <span class="input-group-text">إلي</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="car-insurance-period-to" readonly="readonly" />
                  </div><!-- input-group -->
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-type-insurance">نوع التآمين</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" id="car-type-insurance" class="form-control" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-ownership">ملكية السيارة</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
              <div class="input-group">
                <span class="input-group-text">من</span>
                <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="car-ownership" readonly="readonly" />
                <span class="input-group-text">إلي</span>
                <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="car-ownership-to" readonly="readonly" />
              </div>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="card-operating-card">رقم بطاقة التشغيل</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" id="card-operating-card" class="form-control" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-operating-card-duration">مدة بطاقة التشغيل</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="input-group">
                    <span class="input-group-text">من</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="car-operating-card-duration" readonly="readonly" />
                    <span class="input-group-text">إلي</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="car-operating-card-duration-to" readonly="readonly" />
                  </div><!-- input-group -->
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-gps-service-provider">مزود خدمة GPS</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" id="car-gps-service-provider" class="form-control" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-gps">GPS</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="input-group">
                    <span class="input-group-text">من</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="car-gps" readonly="readonly" />
                    <span class="input-group-text">إلي</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="car-gps-to" readonly="readonly" />
                  </div><!-- input-group -->
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="color-color">لون السيارة</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <select id="car-color" class="select2-color-car form-select" data-allow-clear="false" data-placeholder="اختر">
                    <option></option>
                    <option value="red" data-class="car-red">احمر</option>
                    <option value="white" data-class="car-white">ابيض</option>
                    <option value="blue" data-class="car-blue">ازرق</option>
                    <option value="gray" data-class="car-gray">رمادي</option>
                    <option value="maroon" data-class="car-maroon">عنابي</option>
                    <option value="yellow" data-class="car-yellow">اصفر</option>
                    <option value="black" data-class="car-black">اسود</option>
                  </select>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="car-status">حالة السيارة</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <select id="car-status" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر">
                    <option></option>
                    <option value="available">متاحة</option>
                    <option value="maintenance">في الصيانة</option>
                    <option value="canceled">ملغية</option>
                  </select>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
        </form>
      </div>
    </div><!-- card -->

    <div class="button-area d-flex align-items-center justify-content-end">
      <button type="submit" class="btn btn-lg btn-primary px-5">{{ __('Save') }}</button>
    </div><!-- button-area -->

  </div><!-- cars-edit-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
  <script type="text/javascript">
    // --------------------------------------------------------------------
    // Select2
    // --------------------------------------------------------------------
    $(document).ready(function() {
      $('.select2').select2();
      $('.select2-color-car').select2({
        containerCssClass: 'color-car-dropdown',
        templateResult: function(option) {
          if (!option.id) {
            return option.text; // Return text for placeholder
          }
          const $option = $(`<div class="car-class-option ${option.element.className}"><div class="color-box" style="background-color: ${option.id};"></div> ${option.text}</div>`);
          return $option;
        },
        templateSelection: function(option) {
          if (option.id) {
            const colorValue = option.id;
            const $selection = $(`<span><div class="color-box" style="background-color: ${colorValue}; display: inline-block;"></div>${option.text}</span>`);
            return $selection;
          } else {
            return 'اختر'; // Placeholder text
          }
        }
      });
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
          </div>
        </div>
      `;
      const car_image_photo = document.querySelector('#car-image');
      if (car_image_photo) {
        const myDropzoneMulti = new Dropzone(car_image_photo, {
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
            const car_image_photo_Instance = this;
            car_image_photo_Instance.on("addedfile", function () {
              if (car_image_photo_Instance.files.length === 1) {
                $("#car-image").addClass("dz-upload-disabled");
              }
            });
            car_image_photo_Instance.on("removedfile", function () {
              $("#car-image").removeClass("dz-upload-disabled");
            });
          },
        });
      };
      const car_property_image = document.querySelector('#car-property-image');
      if (car_property_image) {
        const myDropzoneMulti = new Dropzone(car_property_image, {
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
            const car_property_image_Instance = this;
            car_property_image_Instance.on("addedfile", function () {
              if (car_property_image_Instance.files.length === 1) {
                $("#car-property-image").addClass("dz-upload-disabled");
              }
            });
            car_property_image_Instance.on("removedfile", function () {
              $("#car-property-image").removeClass("dz-upload-disabled");
            });
          },
        });
      };
      const car_operating_card_image = document.querySelector('#car-operating-card-image');
      if (car_operating_card_image) {
        const myDropzoneMulti = new Dropzone(car_operating_card_image, {
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
            const car_operating_card_image_Instance = this;
            car_operating_card_image_Instance.on("addedfile", function () {
              if (car_operating_card_image_Instance.files.length === 1) {
                $("#car-operating-card-image").addClass("dz-upload-disabled");
              }
            });
            car_operating_card_image_Instance.on("removedfile", function () {
              $("#car-operating-card-image").removeClass("dz-upload-disabled");
            });
          },
        });
      };
    });

    (function () {
      const flatpickrDateTime = $('.flatpickr-datetime'),
            flatpickrDate = $('.flatpickr-date');

      if (flatpickrDateTime) {
        flatpickrDateTime.flatpickr({
          enableTime: true,
          dateFormat: 'Y-m-d H:i'
        });
      }

      if (flatpickrDate) {
        flatpickrDate.flatpickr({
          monthSelectorType: 'static'
        });
      }
    })();

    (function () {
      // previewTemplate: Updated Dropzone default previewTemplate
      // ! Don't change it unless you really know what you are doing
      const previewTemplate = `<div class="dz-preview dz-file-preview">
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
        </div>`;

      // ? Start your code from here

      // Multiple Dropzone
      // --------------------------------------------------------------------
      const dropzoneMulti = document.querySelector('#car-images');
      if (dropzoneMulti) {
        const myDropzoneMulti = new Dropzone(dropzoneMulti, {
          previewTemplate: previewTemplate,
          parallelUploads: 1,
          maxFilesize: 5,
          addRemoveLinks: true
        });
      }
    })();
  </script>
@endpush
