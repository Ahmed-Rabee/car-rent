<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
      <span class="app-brand-logo w-auto demo">
        <img src="{{ asset('assets/images/logo-default.png') }}" alt="" class="mh-100">
      </span>
      <span class="app-brand-text  menu-text fw-medium">اسم الشركة هنا</span>
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
  </div><!-- app-brand -->

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Homepage -->
    <li class="menu-item">
      <a href="{{ url('/') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-home"></i>
        <div>{{ __('Homepage') }}</div>
      </a>
    </li>
    <!-- Branches -->
    <li class="menu-item">
      <a href="{{ url('/branches') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-building"></i>
        <div>الفروع</div>
      </a>
    </li>
    <!-- Employees -->
    <li class="menu-item">
      <a href="{{ url('/employees') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-users"></i>
        <div>الموظفين</div>
      </a>
    </li>
    <!-- Manage Permissions -->
    <li class="menu-item">
      <a href="{{ url('/permissions') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-file-check"></i>
        <div>الصلاحيات</div>
      </a>
    </li>
    <!-- Cars Management -->
    <li class="menu-item">
      <a href="{{ url('/cars') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-car"></i>
        <div>المركبات</div>
      </a>
    </li>
    <!-- Technical Management -->
    <li class="menu-item">
      <a href="{{ url('/technical') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-car-garage"></i>
        <div>الإدارة الفنية</div>
      </a>
    </li>
    <!-- Manage Reservations -->
    <li class="menu-item">
      <a href="{{ url('/reservations') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-calendar-month"></i>
        <div>الحجوزات</div>
      </a>
    </li>
    <!-- Clients -->
    <li class="menu-item">
      <a href="{{ url('/clients') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-friends"></i>
        <div>العملاء</div>
      </a>
    </li>
    <!-- Contracts -->
    <li class="menu-item">
      <a href="{{ url('/contracts') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-contract"></i>
        <div>العقود</div>
      </a>
    </li>
    <!-- Reports -->
    <li class="menu-item">
      <a href="{{ url('/reports') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-report-analytics"></i>
        <div>التقارير</div>
      </a>
    </li>
    <!-- Checks -->
    <li class="menu-item">
      <a href="{{ url('/checks') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-receipt"></i>
        <div>الشيكات</div>
      </a>
    </li>
    <!-- Traffic Violations -->
    <li class="menu-item">
      <a href="{{ url('/traffic-violations') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-traffic-lights"></i>
        <div>المخالفات المرورية</div>
      </a>
    </li>
    <!-- Calculations -->
    <li class="menu-item">
      <a href="{{ url('/calculations') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-calculator"></i>
        <div>الحسابات</div>
      </a>
    </li>
    <!-- General settings -->
    <li class="menu-item">
      <a href="{{ url('/settings') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div>الإعدادات</div>
      </a>
    </li>
  </ul>
</aside>
