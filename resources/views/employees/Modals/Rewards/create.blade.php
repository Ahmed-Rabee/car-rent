<div class="modal fade" id="rewardCreateModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header p-3">
        <h5 class="modal-title" id="rewardCreateModalLabel1">إضافة مكافآة جديد</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div><!-- modal-header -->
      <div class="modal-body p-3">
        <div class="row align-items-center">
          <label class="col-sm-3 col-form-label fw-medium" for="employee-name-1">الموظف</label>
          <div class="col-12 col-sm-9">
            <select id="employee-name-1" class="select2 form-select" data-allow-clear="false" data-placeholder="" data-dropdown-parent="#rewardCreateModal">
              <option></option>
              <option value="AK">احمد محمود</option>
              <option value="HI">مصطفي محمد</option>
              <option value="ew">عبدالرحمن عمر</option>
            </select>
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-start">
          <label class="col-sm-3 col-form-label fw-medium" for="employee-reward-details">التفاصيل</label>
          <div class="col-12 col-sm-9">
            <textarea class="form-control p-2" id="employee-reward-details" rows="3"></textarea>
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-3 col-form-label fw-medium" for="employee-reward-amount">المبلغ</label>
          <div class="col-12 col-sm-9">
            <div class="input-group">
              <input type="number" inputmode="numeric" class="form-control" id="employee-reward-amount" />
              <span class="input-group-text">ريال</span>
            </div><!-- input-group -->
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-3 col-form-label fw-medium" for="employee-reward-date">التاريخ</label>
          <div class="col-12 col-sm-9">
            <input type="date" class="form-control flatpickr-date" id="employee-reward-date" placeholder="YYYY-MM-DD" readonly="readonly" />
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
