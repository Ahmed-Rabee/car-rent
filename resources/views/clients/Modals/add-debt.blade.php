<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#clientAddDebtModal" class="btn btn-danger waves-effect">اضافة مديونية</a>

<div class="modal fade" id="clientAddDebtModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="clientAddDebtModalLabel1">اضافة مديونية</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label" for="car-number">مبلغ المديونية</label>
              <div class="col-12 col-sm-8">
                <div class="input-group">
                  <input type="number" inputmode="numeric" id="oil-status" class="form-control">
                  <span class="input-group-text">ريال</span>
                </div><!-- input-group -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label" for="car-number">تفاصيل المديونية</label>
              <div class="col-12 col-sm-8">
                <input type="text" id="contract-pickup-location" class="form-control" />
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label d-flex align-items-center justify-content-start gap-1" for="car-number">
                رقم العقد <small class="text-muted">( إن وجد )</small>
              </label>
              <div class="col-12 col-sm-8">
                <select id="select-car-brand" class="select2 form-select" data-allow-clear="true" data-placeholder="" data-dropdown-parent="#clientAddDebtModal">
                  <option></option>
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-4 col-form-label" for="car-number">حالة المديونية</label>
              <div class="col-12 col-sm-8">
                <label class="switch switch-lg">
                  <input type="checkbox" class="switch-input" id="front-right-basic" />
                  <span class="switch-toggle-slider">
                    <span class="switch-on">
                      <i class="ti ti-check"></i>
                    </span>
                    <span class="switch-off">
                      <i class="ti ti-x"></i>
                    </span>
                  </span>
                </label>
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-primary px-5 m-0">حفظ</button>
          </div>
        </div>
      </div>
    </div><!-- modal -->
