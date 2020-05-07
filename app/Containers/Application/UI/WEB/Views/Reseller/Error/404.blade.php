@include("application::Layouts.header")
<!-- begin::Body -->
<!-- begin::Body -->
  <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid  kt-error-v3" style="background-image: url({{ asset('./assets/media/error/bg3.jpg') }});">
        <div class="kt-error_container">
          <span class="kt-error_number">
            <h1>404</h1>
          </span>
          <p class="kt-error_title kt-font-light">
            How did you get here
          </p>
          <p class="kt-error_subtitle">
            Sorry we can't seem to find the page you're looking for.
          </p>
          <p class="kt-error_description">
            There may be amisspelling in the URL entered,<br>
            or the page you are looking for may no longer exist.
          </p>
        </div>
      </div>
    </div>

    
    <!--end::Global Theme Bundle -->
  </body>

  @include("application::Layouts.script") 

