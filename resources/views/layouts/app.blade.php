<!doctype html>

<html
  lang="{{ str_replace('_', '-', app()->getLocale()) }}"
  dir="{{app()->getLocale() == 'en' ? 'ltr' : 'rtl'}}"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-wide"
  data-theme="theme-default"
  data-assets-path="../../../../assets/"
  data-template="vertical-menu-template"
>
  <head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="{{ asset('') }}" /> -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/images/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />

    <!-- Page CSS -->
    @stack('styles')

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
  </head>

  <body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Menu -->
        @include('partials.default.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Navbar -->
          @include('partials.default.header')
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-fluid flex-grow-1 container-p-y">

              @yield('content')

            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('partials.default.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js ../../assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    @stack('scripts')

  </body>
</html>
