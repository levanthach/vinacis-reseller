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

            <!--begin::Head-->
            <div class="kt-login__head">
              <span class="kt-login__signup-label">Bạn đã có tài khoản!</span>&nbsp;&nbsp;
              <a href="./login" class="kt-link kt-login__signup-link">Đăng nhập ngay</a>
            </div>

            <!--end::Head-->

            <!--begin::Body-->
            <div class="kt-login__body">

              <!--begin::Signin-->
              <div class="kt-login__form">
                <div class="kt-login__title">
                  <h3>Đăng ký</h3>
                </div>

                <!--begin::Form-->
                <form class="kt-form" action="" novalidate="novalidate" id="kt_login_form">
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Họ tên" name="fullname" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email" name="email" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" placeholder="Password" name="password" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" placeholder="Nhập lại Password" name="confirm-password" autocomplete="off">
                  </div>

                  <!--begin::Action-->
                  <div class="kt-login__actions">
                    <label><input type="checkbox">&nbsp Đồng ý với các điều khoản dịch vụ.</label>
                    <button id="kt_login_signin_submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Đăng ký</button>
                  </div>

                  <!--end::Action-->
                </form>

                <!--end::Form-->

                <!--begin::Divider-->
                <div class="kt-login__divider">
                  <div class="kt-divider">
                    <span></span>
                    <span>HOẶC ĐĂNG KÝ BẰNG</span>
                    <span></span>
                  </div>
                </div>

                <!--end::Divider-->

                <!--begin::Options-->
                <div class="kt-login__options">
                  <a href="#" class="btn btn-primary kt-btn">
                    <i class="fab fa-facebook-f"></i>
                    Facebook
                  </a>
                  <a href="#" class="btn btn-info kt-btn">
                    <i class="fab fa-twitter"></i>
                    Twitter
                  </a>
                  <a href="#" class="btn btn-danger kt-btn">
                    <i class="fab fa-google"></i>
                    Google
                  </a>
                </div>

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
