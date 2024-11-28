@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />
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
            <label class="col-sm-2 col-form-label fw-medium" for="car-gallery">معرض صور السيارة</label>
            <div class="col-12 col-sm-10">
              <div action="/upload" class="dropzone needsclick dropzoneBasic" id="car-gallery">
                <div class="dz-message needsclick">قم بإسقاط الملفات هنا أو انقر للتحميل</div>
                <div class="fallback">
                  <input name="car-gallery" type="file" />
                </div>
              </div><!-- dropzone -->
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
                    <option value="new">جديدة</option>
                    <option value="used">مستعملة</option>
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
  <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
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
      })();

      // color picker (pickr)
      // --------------------------------------------------------------------
      (function () {
        const classicPicker = document.querySelector('#color-picker-classic');
        if (classicPicker) {
          pickr.create({
            el: classicPicker,
            theme: 'classic',
            default: '#000000',
            swatches: [
              '#000000',
              '#ffffff',
              '#C0C0C0',
              '#808080',
              '#FF0000',
              '#800000',
              '#FFFF00',
              '#008000',
              '#00FF00',
              '#0000FF',
            ],
            components: {
              // Main components
              preview: true,
              opacity: false,
              hue: true,
              // Input / output Options
              interaction: {
                hex: true,
                rgba: false,
                hsla: false,
                hsva: false,
                cmyk: false,
                input: true,
                clear: false,
                save: true
              }
            }
          });
        }
      })();

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
