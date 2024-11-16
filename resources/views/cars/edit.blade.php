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
    </div>

    <div class="card mb-4">
      <div class="card-body">
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
            <label class="col-sm-2 col-form-label fw-medium" for="car-brand">الفرع</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <select id="car-brand22" class="select2 form-select" data-allow-clear="true" data-placeholder="">
                    <option></option>
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
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
                  <input class="form-control" type="file" id="employee-vehicle-license">
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label fw-medium" for="car-gallery">معرض صور السيارة</label>
            <div class="col-12 col-sm-10">
              <div action="/upload" class="dropzone needsclick" id="car-images">
                <div class="dz-message needsclick">
                  Drop files here or click to upload
                  <span class="note needsclick">(This is just a demo dropzone. Selected files are <span class="fw-medium">not</span> actually uploaded.)</span>
                </div>
                <div class="fallback">
                  <input name="file" type="file" accept="image/png, image/jpeg" />
                </div>
              </div>
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label fw-medium" for="car-image">صورة الملكية</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input class="form-control" type="file" id="employee-vehicle-license">
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label fw-medium" for="car-image">صورة بطاقة التشغيل</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input class="form-control" type="file" id="employee-vehicle-license">
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
                  <select id="car-brand" class="select2 form-select" data-allow-clear="true" data-placeholder="">
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
            <label class="col-sm-2 col-form-label fw-medium" for="car-model">الموديل</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <select id="car-model" class="select2 form-select" data-allow-clear="true" data-placeholder="">
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
            <label class="col-sm-2 col-form-label fw-medium" for="car-category">الفئة</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <select id="car-category" class="select2 form-select" data-allow-clear="true" data-placeholder="">
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
            <label class="col-sm-2 col-form-label fw-medium" for="car-date">سنة الصنع</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input class="form-control" type="tel" id="car-date" pattern="[0-9]{9}" maxlength="4" />
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
                  <input class="form-control" type="tel" id="car-shasy" pattern="[0-9]{9}" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="insurance-company">شركة التآمين</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <select id="insurance-company" class="select2 form-select" data-allow-clear="true" data-placeholder="">
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
            <label class="col-sm-2 col-form-label fw-medium" for="insurance-company">مدة التآمين</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="input-group">
                    <span class="input-group-text">من</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="insurance-company-from" readonly="readonly" />
                    <span class="input-group-text">إلي</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="insurance-company-to" readonly="readonly" />
                  </div>
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
                <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="car-ownership-from" readonly="readonly" />
                <span class="input-group-text">إلي</span>
                <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="car-ownership-to" readonly="readonly" />
              </div>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="operating-card">رقم بطاقة التشغيل</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" class="form-control" id="employee-name" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="operating-card">مدة بطاقة التشغيل</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="input-group">
                    <span class="input-group-text">من</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="operating-card-from" readonly="readonly" />
                    <span class="input-group-text">إلي</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="operating-card-to" readonly="readonly" />
                  </div>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="operating-card">GPS</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="input-group">
                    <span class="input-group-text">من</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="GPS-from" readonly="readonly" />
                    <span class="input-group-text">إلي</span>
                    <input type="text" class="form-control flatpickr-date" placeholder="YYYY-MM-DD" id="GPS-to" readonly="readonly" />
                  </div>
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label fw-medium" for="color-picker-classic">لون السيارة</label>
            <div class="col-12 col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div id="color-picker-classic"></div>
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
                  <select id="car-status" class="select2 form-select" data-allow-clear="true" data-placeholder="">
                    <option></option>
                    <option value="new">جديدة</option>
                    <option value="used">مستعملة</option>
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
