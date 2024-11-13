@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css') }}" />
@endpush

@section('content')

  <div id="branches-create-page">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4">
      <div class="d-flex flex-column justify-content-center">
        <h4 class="m-0">إضافة فرع جديد</h4>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body">
        <form>
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label" for="branch-name">اسم الفرع</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" class="form-control" id="branch-name" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row align-items-center">
            <label class="col-sm-2 col-form-label" for="branch-address">عنوان الفرع</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-12 col-md-6">
                  <input type="text" class="form-control" id="branch-address" />
                </div><!-- col-12 -->
              </div><!-- row -->
            </div><!-- col-12 -->
          </div><!-- row -->
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label" for="working-hours">مواعيد العمل</label>
            <div class="col-sm-10">
              <div class="input-group">
                <span class="input-group-text">من</span>
                <input type="text" id="working-hours-from" placeholder="HH:MMam" class="form-control timepicker-basic" autocomplete="off" />
                <span class="input-group-text">إلي</span>
                <input type="text" id="working-hours-to" placeholder="HH:MMam" class="form-control timepicker-basic" autocomplete="off" />
              </div><!-- input-group -->
            </div>
          </div>
          <hr class="my-3">
          <div class="row">
            <label class="col-sm-2 col-form-label" for="working-hours">ارقام التواصل</label>
            <div class="col-sm-10">
              <div class="form-repeater">
                <div data-repeater-list="group-a">
                  <div data-repeater-item>
                    <div class="row align-items-end">
                      <div class="mb-3 col-lg-6 col-xl-6 col-12 mb-0">
                        <div class="input-group">
                          <input type="text" id="phone-number-mask" dir="ltr" class="form-control" placeholder="00 00 00 00 0" />
                          <span class="input-group-text" dir="ltr">+966</span>
                        </div>
                      </div>
                      <div class="mb-3 col-lg-12 col-xl-2 col-12 d-flex align-items-center mb-0">
                        <button class="btn btn-label-danger" type="button" data-repeater-delete>
                          <i class="ti ti-x ti-xs me-1"></i>
                          <span class="align-middle">حذف</span>
                        </button>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>
                <div class="mb-0">
                  <button class="btn btn-primary" type="button" data-repeater-create>
                    <i class="ti ti-plus me-1"></i>
                    <span class="align-middle">إضافة</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div><!-- card -->

    <div class="button-area d-flex align-items-center justify-content-end">
      <button type="submit" class="btn btn-lg btn-primary px-5">حفظ</button>
    </div><!-- button-area -->

  </div><!-- branches-create-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
  <script type="module">
    $(function () {
      const basicTimepicker = $('.timepicker-basic');
      if (basicTimepicker.length) {
        basicTimepicker.timepicker({
          orientation: isRtl ? 'r' : 'l'
        });
      }
    });

    $(function () {
      var formRepeater = $('.form-repeater');
      // Form Repeater
      // ! Using jQuery each loop to add dynamic id and class for inputs. You may need to improve it based on form fields.
      // -----------------------------------------------------------------------------------------------------------------
      if (formRepeater.length) {
        var row = 2;
        var col = 1;
        formRepeater.on('submit', function (e) {
          e.preventDefault();
        });
        formRepeater.repeater({
          show: function () {
            var fromControl = $(this).find('.form-control, .form-select');
            var formLabel = $(this).find('.form-label');

            fromControl.each(function (i) {
              var id = 'form-repeater-' + row + '-' + col;
              $(fromControl[i]).attr('id', id);
              $(formLabel[i]).attr('for', id);
              col++;
            });

            row++;

            $(this).slideDown();
          },
          hide: function (e) {
            confirm('Are you sure you want to delete this element?') && $(this).slideUp(e);
          }
        });
      }
    });
  </script>
@endpush
