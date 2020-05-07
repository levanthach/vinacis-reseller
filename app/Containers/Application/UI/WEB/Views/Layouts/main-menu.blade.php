@include('application::Layouts.header')
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" style="overflow-x: hidden;">

  <!-- begin:: Page -->

  <!-- begin:: Header Mobile -->
  <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
      <a href="index.html">
        <img alt="Logo" src="{{ asset('./assets/imgs/logo-w.png') }}" style="width: 150px">
      </a>
    </div>
    <div class="kt-header-mobile__toolbar">
      <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
      <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
  </div>

  <!-- end:: Header Mobile -->
  <div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

      <!-- begin:: Aside -->

        <!-- Uncomment this to display the close button of the panel
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
-->
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside" style="overflow: hidden;">

  <!-- begin:: Aside -->
  <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand" kt-hidden-height="65" style="">
    <div class="kt-aside__brand-logo">
      <a href="#">
        <img alt="Logo" src="{{ asset('./assets/imgs/logo-w.png') }}" style="width: 100%;">
      </a>
    </div>
    <div class="kt-aside__brand-tools">
      <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
        <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <polygon points="0 0 24 0 24 24 0 24"></polygon>
            <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "></path>
            <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "></path>
          </g>
        </svg></span>
        <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <polygon points="0 0 24 0 24 24 0 24"></polygon>
            <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
            <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
          </g>
        </svg></span>
      </button>

              <!--
      <button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
    -->
  </div>
</div>

<!-- end:: Aside -->

<!-- begin:: Aside Menu -->
<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
  <div id="kt_aside_menu" class="kt-aside-menu kt-scroll ps ps--active-y" data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500" style="height: 55px; overflow: hidden;">
    <ul class="kt-menu__nav ">
      <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a href="./dashboard" class="kt-menu__link "><span class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <polygon points="0 0 24 0 24 24 0 24"></polygon>
          <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
          <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
        </g>
      </svg></span><span class="kt-menu__link-text">Dashboard</span></a></li>


      <li class="kt-menu__item " aria-haspopup="true"><a href="./manage-customers" class="kt-menu__link "><span class="kt-menu__link-icon">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <polygon points="0 0 24 0 24 24 0 24"/>
            <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
            <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
          </g>
        </svg>
      </span><span class="kt-menu__link-text">Quản lý khách hàng</span></a></li>
      <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <rect x="0" y="0" width="24" height="24"/>
            <path d="M13,5 L15,5 L15,20 L13,20 L13,5 Z M5,5 L5,20 L3,20 C2.44771525,20 2,19.5522847 2,19 L2,6 C2,5.44771525 2.44771525,5 3,5 L5,5 Z M16,5 L18,5 L18,20 L16,20 L16,5 Z M20,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,19 C22,19.5522847 21.5522847,20 21,20 L20,20 L20,5 Z" fill="#000000"/>
            <polygon fill="#000000" opacity="0.3" points="9 5 9 20 7 20 7 5"/>
          </g>
        </svg>
      </span><span class="kt-menu__link-text">Quản lý voucher</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
      <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
        <ul class="kt-menu__subnav">
          <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Quản lý voucher</span></span></li>
          <li class="kt-menu__item " aria-haspopup="true"><a href="./voucher-account" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Voucher nạp tiền tài khoản</span></a></li>
          <li class="kt-menu__item " aria-haspopup="true"><a href="./voucher-product" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Voucher nạp tiền sản phẩm</span></a></li>
        </ul>
      </div>
    </li>
    <li class="kt-menu__item " aria-haspopup="true"><a href="./recharge-customer" class="kt-menu__link "><span class="kt-menu__link-icon">

     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2"/>
        <rect fill="#000000" x="2" y="8" width="20" height="3"/>
        <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1"/>
      </g>
    </svg>
  </span><span class="kt-menu__link-text">Nạp tiền cho khách hàng</span></a></li>

  <li class="kt-menu__item " aria-haspopup="true"><a href="./manage-invoice" class="kt-menu__link "><span class="kt-menu__link-icon">

   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <polygon points="0 0 24 0 24 24 0 24"/>
      <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
      <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
      <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
    </g>
  </svg>
</span><span class="kt-menu__link-text">Quản lý hóa đơn</span></a></li>

<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-icon">

 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <rect x="0" y="0" width="24" height="24"/>
    <rect fill="#000000" opacity="0.3" x="17" y="4" width="3" height="13" rx="1.5"/>
    <rect fill="#000000" opacity="0.3" x="12" y="9" width="3" height="8" rx="1.5"/>
    <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"/>
    <rect fill="#000000" opacity="0.3" x="7" y="11" width="3" height="6" rx="1.5"/>
  </g>
</svg>
</span><span class="kt-menu__link-text">Xem báo cáo</span></a></li>


</ul>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 55px; right: 3px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div></div></div>
</div>

<!-- end:: Aside Menu -->
</div>

<!-- end:: Aside -->
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

  <!-- begin:: Header -->
  <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

    <!-- begin:: Header Menu -->

            <!-- Uncomment this to display the close button of the panel
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
-->
<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
  <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">


  </div>
</div>

<!-- end:: Header Menu -->

<!-- begin:: Header Topbar -->
<div class="kt-header__topbar">

  <!--begin: Search -->

  <!--begin: Search -->
  <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
      <span class="kt-header__topbar-icon">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <rect x="0" y="0" width="24" height="24"></rect>
            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
          </g>
        </svg> </span>
      </div>
      <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
        <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
          <form method="get" class="kt-quick-search__form">
            <div class="input-group">
              <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
              <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
              <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
            </div>
          </form>
          <div class="kt-quick-search__wrapper kt-scroll ps" data-scroll="true" data-height="325" data-mobile-height="200" style="height: 325px; overflow: hidden;">
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
          </div>
        </div>
      </div>

      <!--end: Search -->

      <!--end: Search -->

      <!--begin: Notifications -->
      <div class="kt-header__topbar-item dropdown">
        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px" aria-expanded="true">
          <span class="kt-header__topbar-icon kt-pulse kt-pulse--brand">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#000000"/>
                <rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2"/>
              </g>
            </svg>
            <span class="kt-pulse__ring"></span>
          </span>

                  <!--
                Use dot badge instead of animated pulse effect:
                <span class="kt-badge kt-badge--dot kt-badge--notify kt-badge--sm kt-badge--brand"></span>
              -->
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
              <form>

                <!--begin: Head -->
                <div class="kt-head kt-head--skin-dark kt-head--fit-x kt-head--fit-b" style="background-image: url(assets/media/misc/bg-1.jpg)">
                  <h3 class="kt-head__title">
                    User Notifications
                    &nbsp;
                    <span class="btn btn-success btn-sm btn-bold btn-font-md">10 new</span>
                  </h3>
                  <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-success kt-notification-item-padding-x" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Alerts</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab" aria-selected="false">Events</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab" aria-selected="false">Logs</a>
                    </li>
                  </ul>
                </div>

                <!--end: Head -->
                <div class="tab-content">
                  <div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
                    <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll ps" data-scroll="true" data-height="300" data-mobile-height="200" style="height: 300px; overflow: hidden;">
                      <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                          <i class="flaticon2-line-chart kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                          <div class="kt-notification__item-title">
                            New order has been received
                          </div>
                          <div class="kt-notification__item-time">
                            2 hrs ago
                          </div>
                        </div>
                      </a>
                      <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                          <i class="flaticon2-box-1 kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                          <div class="kt-notification__item-title">
                            New customer is registered
                          </div>
                          <div class="kt-notification__item-time">
                            3 hrs ago
                          </div>
                        </div>
                      </a>
                      <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                          <i class="flaticon2-chart2 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                          <div class="kt-notification__item-title">
                            Application has been approved
                          </div>
                          <div class="kt-notification__item-time">
                            3 hrs ago
                          </div>
                        </div>
                      </a>
                      <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                          <i class="flaticon2-image-file kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                          <div class="kt-notification__item-title">
                            New file has been uploaded
                          </div>
                          <div class="kt-notification__item-time">
                            5 hrs ago
                          </div>
                        </div>
                      </a>
                      <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                          <i class="flaticon2-drop kt-font-info"></i>
                        </div>
                        <div class="kt-notification__item-details">
                          <div class="kt-notification__item-title">
                            New user feedback received
                          </div>
                          <div class="kt-notification__item-time">
                            8 hrs ago
                          </div>
                        </div>
                      </a>
                      <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                          <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                          <div class="kt-notification__item-title">
                            System reboot has been successfully completed
                          </div>
                          <div class="kt-notification__item-time">
                            12 hrs ago
                          </div>
                        </div>
                      </a>
                      <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                          <i class="flaticon2-favourite kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                          <div class="kt-notification__item-title">
                            New order has been placed
                          </div>
                          <div class="kt-notification__item-time">
                            15 hrs ago
                          </div>
                        </div>
                      </a>
                      <a href="#" class="kt-notification__item kt-notification__item--read">
                        <div class="kt-notification__item-icon">
                          <i class="flaticon2-safe kt-font-primary"></i>
                        </div>
                        <div class="kt-notification__item-details">
                          <div class="kt-notification__item-title">
                            Company meeting canceled
                          </div>
                          <div class="kt-notification__item-time">
                            19 hrs ago
                          </div>
                        </div>
                      </a>
                      <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                          <i class="flaticon2-psd kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                          <div class="kt-notification__item-title">
                            New report has been received
                          </div>
                          <div class="kt-notification__item-time">
                            23 hrs ago
                          </div>
                        </div>
                      </a>
                      <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                          <i class="flaticon-download-1 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                          <div class="kt-notification__item-title">
                            Finance report has been generated
                          </div>
                          <div class="kt-notification__item-time">
                            25 hrs ago
                          </div>
                        </div>
                      </a>
                      <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                          <i class="flaticon-security kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                          <div class="kt-notification__item-title">
                            New customer comment recieved
                          </div>
                          <div class="kt-notification__item-time">
                            2 days ago
                          </div>
                        </div>
                      </a>
                      <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                          <i class="flaticon2-pie-chart kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                          <div class="kt-notification__item-title">
                            New customer is registered
                          </div>
                          <div class="kt-notification__item-time">
                            3 days ago
                          </div>
                        </div>
                      </a>
                      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                    </div>
                    <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                      <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll ps" data-scroll="true" data-height="300" data-mobile-height="200" style="height: 300px; overflow: hidden;">
                        <a href="#" class="kt-notification__item">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon2-psd kt-font-success"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              New report has been received
                            </div>
                            <div class="kt-notification__item-time">
                              23 hrs ago
                            </div>
                          </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon-download-1 kt-font-danger"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              Finance report has been generated
                            </div>
                            <div class="kt-notification__item-time">
                              25 hrs ago
                            </div>
                          </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon2-line-chart kt-font-success"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              New order has been received
                            </div>
                            <div class="kt-notification__item-time">
                              2 hrs ago
                            </div>
                          </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon2-box-1 kt-font-brand"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              New customer is registered
                            </div>
                            <div class="kt-notification__item-time">
                              3 hrs ago
                            </div>
                          </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon2-chart2 kt-font-danger"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              Application has been approved
                            </div>
                            <div class="kt-notification__item-time">
                              3 hrs ago
                            </div>
                          </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon2-image-file kt-font-warning"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              New file has been uploaded
                            </div>
                            <div class="kt-notification__item-time">
                              5 hrs ago
                            </div>
                          </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon2-drop kt-font-info"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              New user feedback received
                            </div>
                            <div class="kt-notification__item-time">
                              8 hrs ago
                            </div>
                          </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              System reboot has been successfully completed
                            </div>
                            <div class="kt-notification__item-time">
                              12 hrs ago
                            </div>
                          </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon2-favourite kt-font-brand"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              New order has been placed
                            </div>
                            <div class="kt-notification__item-time">
                              15 hrs ago
                            </div>
                          </div>
                        </a>
                        <a href="#" class="kt-notification__item kt-notification__item--read">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon2-safe kt-font-primary"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              Company meeting canceled
                            </div>
                            <div class="kt-notification__item-time">
                              19 hrs ago
                            </div>
                          </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon2-psd kt-font-success"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              New report has been received
                            </div>
                            <div class="kt-notification__item-time">
                              23 hrs ago
                            </div>
                          </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon-download-1 kt-font-danger"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              Finance report has been generated
                            </div>
                            <div class="kt-notification__item-time">
                              25 hrs ago
                            </div>
                          </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon-security kt-font-warning"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              New customer comment recieved
                            </div>
                            <div class="kt-notification__item-time">
                              2 days ago
                            </div>
                          </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                          <div class="kt-notification__item-icon">
                            <i class="flaticon2-pie-chart kt-font-success"></i>
                          </div>
                          <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                              New customer is registered
                            </div>
                            <div class="kt-notification__item-time">
                              3 days ago
                            </div>
                          </div>
                        </a>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                      </div>
                      <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                        <div class="kt-grid kt-grid--ver" style="min-height: 200px;">
                          <div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
                            <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                              All caught up!
                              <br>No new notifications.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <!--end: Notifications -->

              <!--begin: Language bar -->
      {{--         <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                  <span class="kt-header__topbar-icon">
                    <img class="" src="{{ asset('./assets/media/flags/226-united-states.svg') }}" alt="">
                  </span>
                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
                  <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                    <li class="kt-nav__item kt-nav__item--active">
                      <a href="#" class="kt-nav__link">
                        <span class="kt-nav__link-icon"><img src="{{ asset('./assets/media/flags/226-united-states.svg') }}" alt=""></span>
                        <span class="kt-nav__link-text">English</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <span class="kt-nav__link-icon"><img src="{{ asset('./assets/media/flags/128-spain.svg') }}" alt=""></span>
                        <span class="kt-nav__link-text">Spanish</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <span class="kt-nav__link-icon"><img src="{{ asset('./assets/media/flags/162-germany.svg') }}" alt=""></span>
                        <span class="kt-nav__link-text">German</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div> --}}

              <!--end: Language bar -->

              <!--begin: User Bar -->
              <div class="kt-header__topbar-item kt-header__topbar-item--user">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                  <div class="kt-header__topbar-user">
                    <span class="kt-header__topbar-username kt-hidden-mobile">Lê Thạch</span>
                    <img class="kt-hidden" alt="Pic" src="{{ asset('./assets/media/users/300_25.jpg') }}">

                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">T</span>
                  </div>
                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl" style="width: 250px">

                  <!--begin: Head -->

                  <div class="kt-user-card__avatar">
                    <img class="kt-hidden" alt="Pic" src="{{ asset('./assets/media/users/300_25.jpg') }}">

                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                  </div>



                  <!--end: Head -->

                  <!--begin: Navigation -->
                  <div class="kt-notification">
                    <a href="./profile" class="kt-notification__item">
                      <div class="kt-notification__item-icon">
                        <i class="flaticon2-calendar-3 kt-font-success"></i>
                      </div>
                      <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title kt-font-bold">
                          Chỉnh sửa tài khoản
                        </div>

                      </div>
                    </a>
                    <a href="./password-change" class="kt-notification__item">
                      <div class="kt-notification__item-icon">
                        <i class="flaticon2-mail kt-font-warning"></i>
                      </div>
                      <div class="kt-notification__item-details">
                        <div class="kt-notification__item-title kt-font-bold">
                          Thay đổi mật khẩu
                        </div>
                        
                      </div>
                    </a>

                    <div class="kt-notification__custom kt-space-between">
                      <a href="../login" class="btn btn-label btn-label-brand btn-sm btn-bold">Đăng xuất</a>

                    </div>
                  </div>

                  <!--end: Navigation -->
                </div>
              </div>

              <!--end: User Bar -->
            </div>

            <!-- end:: Header Topbar -->
          </div>

          <!-- end:: Header -->


