<div class="modal fade" id="reservationConfirmedModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header p-3">
        <h5 class="modal-title" id="reservationConfirmedModalLabel1">إنشاء عقد للحجز : 23432</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div><!-- modal-header -->
      <div class="modal-body p-3">
        <div class="row align-items-center">
          <label class="col-sm-3 col-form-label fw-medium" for="reservation-status">اسم الشركة</label>
          <div class="col-12 col-sm-9">
            <input type="text" class="form-control" />
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-3 col-form-label fw-medium" for="fuel image">حالة البترول</label>
          <div class="col-12 col-sm-9">
            <div id="slider-pips"></div>
            <div class="input-group mt-5">
              <input type="number" inputmode="numeric" class="form-control" aria-describedby="basic-addon11">
              <span class="input-group-text" id="basic-addon11">كم</span>
            </div><!-- input-group -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-3 col-form-label fw-medium" for="reservation-status">حالة النظافة</label>
          <div class="col-12 col-sm-9">
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
                    <span class="custom-option-header p-0">نظيفة</span>
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
                    <span class="custom-option-header p-0">غير نظيفة</span>
                  </label>
                </div><!-- form-check -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-3 col-form-label fw-medium" for="reservation-status">نوع التآمين</label>
          <div class="col-12 col-sm-9">
            <input type="text" class="form-control" />
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-3 col-form-label fw-medium" for="reservation-status">الـ كم الحالي</label>
          <div class="col-12 col-sm-9">
            <div class="input-group">
              <input type="number" inputmode="numeric" class="form-control" aria-describedby="basic-addon11">
              <span class="input-group-text" id="basic-addon11">كم</span>
            </div><!-- input-group -->
          </div><!-- col-12 -->
        </div><!-- row -->
      </div><!-- modal-body -->
      <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
        <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
        <button type="button" class="btn btn-primary px-5 m-0">حفظ</button>
      </div>
    </div>
  </div>
</div>
