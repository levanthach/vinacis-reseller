@include('application::Layouts.header')

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
      <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

          <!--begin::Aside-->
          <div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url(assets/media/bg/bg-4.jpg);">
            <div class="kt-grid__item">
              <a href="#" class="kt-login__logo">
                <img alt="Logo" src="{{ asset('./assets/imgs/logo-w.png') }}">
              </a>
            </div>
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
              <div class="kt-grid__item kt-grid__item--middle">
                <h3 class="kt-login__title">Welcome to VinaCIS Reseller!</h3>
                
              </div>
            </div>
            <div class="kt-grid__item">
              <div class="kt-login__info">
                <div class="kt-login__copyright">
                  &copy 2020 VinaCIS
                </div>
               
              </div>
            </div>
          </div>

          <!--begin::Aside-->

          <!--begin::Content-->
          <div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">

            <!--begin::Body-->
            <div class="kt-login__body">

              <!--begin::Signin-->
              <div class="kt-login__form">
                <div class="kt-login__title">
                  <h3>Lấy lại mật khẩu</h3>
                </div>

                <!--begin::Form-->
                <form class="kt-form" action="" novalidate="novalidate" id="kt_login_form">
                  <div class="form-group">
                    <input class="form-control" type="email" placeholder="Nhập địa chỉ email" name="email" autocomplete="off">
                  </div>
                  <!--begin::Action-->
                  <div class="kt-login__actions">

                    <button id="kt_login_signin_submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Lấy lại</button>
                  </div>

                  <!--end::Action-->
                </form>

                <!--end::Form-->

              

                <!--end::Options-->
              </div>

              <!--end::Signin-->
            </div>

            <!--end::Body-->
          </div>

          <!--end::Content-->
        </div>
      </div>
    </div>


@include('application::Layouts.script')
