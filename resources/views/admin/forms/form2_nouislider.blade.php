<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  
<!-- Mirrored from ableproadmin.com/forms/form2_nouislider.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:14 GMT -->
<head>
    <title>noUiSlider | Able Pro Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Phoenixcoded">

    <!-- [Favicon] icon -->
    <link rel="icon" href="https://ableproadmin.com/assets/images/favicon.svg" type="image/x-icon">


    <!-- [Page specific CSS] start -->
    <link rel="stylesheet" href="css/plugins/nouislider.min.css">
    <!-- [Page specific CSS] end -->
    <!-- [Font] Family -->
    <link rel="stylesheet" href="fonts/inter/inter.css" id="main-font-link" />

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="css/style-preset.css" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-14K1GBX9FG');
    </script>
    <!-- WiserNotify -->
    <script>
      !(function () {
        if (window.t4hto4) console.log('WiserNotify pixel installed multiple time in this page');
        else {
          window.t4hto4 = !0;
          var t = document,
            e = window,
            n = function () {
              var e = t.createElement('script');
              (e.type = 'text/javascript'),
                (e.async = !0),
                (e.src = '../../pt.wisernotify.com/pixel6d4c.js?ti=1jclj6jkfc4hhry'),
                document.body.appendChild(e);
            };
          'complete' === t.readyState ? n() : window.attachEvent ? e.attachEvent('onload', n) : e.addEventListener('load', n, !1);
        }
      })();
    </script>
    <!-- Microsoft clarity -->
    <script type="text/javascript">
      (function (c, l, a, r, i, t, y) {
        c[a] =
          c[a] ||
          function () {
            (c[a].q = c[a].q || []).push(arguments);
          };
        t = l.createElement(r);
        t.async = 1;
        t.src = 'https://www.clarity.ms/tag/' + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
      })(window, document, 'clarity', 'script', 'gkn6wuhrtb');
    </script>

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body>
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
@include('admin.template.sidebar')
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none m-0 trig-drp-search"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <svg class="pc-icon">
          <use xlink:href="#custom-search-normal-1"></use>
        </svg>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3 py-2">
          <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . ." />
        </form>
      </div>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->

          
             @include('admin.template.navbar')
 </div>
</header>
<div class="offcanvas pc-announcement-offcanvas offcanvas-end" tabindex="-1" id="announcement" aria-labelledby="announcementLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="announcementLabel">What’s new announcement?</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p class="text-span">Today</p>
    <div class="card mb-3">
      <div class="card-body">
        <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
          <div class="badge bg-light-success f-12">Big News</div>
          <p class="mb-0 text-muted">2 min ago</p>
          <span class="badge dot bg-warning"></span>
        </div>
        <h5 class="mb-3">Able Pro is Redesigned</h5>
        <p class="text-muted">Able Pro is completely renowed with high aesthetics User Interface.</p>
        <img src="/img/layout/img-announcement-1.png" alt="img" class="img-fluid mb-3" />
        <div class="row">
          <div class="col-12">
            <div class="d-grid"
              ><a
                class="btn btn-outline-secondary"
                href="https://1.envato.market/c/1289604/275988/4415?subId1=phoenixcoded&amp;u=https%3A%2F%2Fthemeforest.net%2Fitem%2Fable-pro-responsive-bootstrap-4-admin-template%2F19300403"
                target="_blank"
                >Check Now</a
              ></div
            >
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-body">
        <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
          <div class="badge bg-light-warning f-12">Offer</div>
          <p class="mb-0 text-muted">2 hour ago</p>
          <span class="badge dot bg-warning"></span>
        </div>
        <h5 class="mb-3">Able Pro is in best offer price</h5>
        <p class="text-muted">Download Able Pro exclusive on themeforest with best price. </p>
        <a
          href="https://1.envato.market/c/1289604/275988/4415?subId1=phoenixcoded&amp;u=https%3A%2F%2Fthemeforest.net%2Fitem%2Fable-pro-responsive-bootstrap-4-admin-template%2F19300403"
          target="_blank"
          ><img src="/img/layout/img-announcement-2.png" alt="img" class="img-fluid"
        /></a>
      </div>
    </div>

    <p class="text-span mt-4">Yesterday</p>
    <div class="card mb-3">
      <div class="card-body">
        <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
          <div class="badge bg-light-primary f-12">Blog</div>
          <p class="mb-0 text-muted">12 hour ago</p>
          <span class="badge dot bg-warning"></span>
        </div>
        <h5 class="mb-3">Featured Dashboard Template</h5>
        <p class="text-muted">Do you know Able Pro is one of the featured dashboard template selected by Themeforest team.?</p>
        <img src="/img/layout/img-announcement-3.png" alt="img" class="img-fluid" />
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-body">
        <div class="align-items-center d-flex flex-wrap gap-2 mb-3">
          <div class="badge bg-light-primary f-12">Announcement</div>
          <p class="mb-0 text-muted">12 hour ago</p>
          <span class="badge dot bg-warning"></span>
        </div>
        <h5 class="mb-3">Buy Once - Get Free Updated lifetime</h5>
        <p class="text-muted">Get the lifetime free updates once you purchase the Able Pro.</p>
        <img src="/img/layout/img-announcement-4.png" alt="img" class="img-fluid" />
      </div>
    </div>
  </div>
</div>
<!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <section class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="https://ableproadmin.com/navigation/index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Forms</a></li>
                  <li class="breadcrumb-item" aria-current="page">noUiSlider</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">noUiSlider</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ form-element ] start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <form>
                  <div class="form-group row mb-5">
                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Basic Setup</label>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="row align-items-center">
                        <div class="col-4">
                          <input type="text" class="form-control" id="pc-no_ui_slider-1-input" placeholder="Quantity">
                        </div>
                        <div class="col-8">
                          <div id="pc-no_ui_slider-1" class="pc-no_ui_slider--drag-danger"></div>
                        </div>
                      </div>
                      <small class="form-text text-muted">Input control is attached to slider</small>
                    </div>
                  </div>

                  <div class="form-group row mb-5">
                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Working with dates</label>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="row align-items-center">
                        <div class="col-6">
                          <input type="text" class="form-control mb-2" id="event-start" placeholder="Date">
                          <input type="text" class="form-control" id="event-end" placeholder="Date">
                        </div>
                        <div class="col-6">
                          <div id="pc-no_ui_slider-9" class="pc-nouislider"></div>
                        </div>
                      </div>
                      <small class="form-text text-muted"
                        >dates to numerical ranges, and then use the update event to display them in a pretty format.</small
                      >
                    </div>
                  </div>

                  <div class="form-group row mb-5">
                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Moving the slider by clicking pips</label>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="row align-items-center">
                        <div class="col-4">
                          <input type="text" class="form-control" id="pc-no_ui_slider-10-input" placeholder="Currency">
                        </div>
                        <div class="col-8 mb-4">
                          <div id="pc-no_ui_slider-10" class="pc-nouislider pc-no_ui_slider--handle-danger"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row mb-5">
                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Slider With Tooltip</label>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="row align-items-center">
                        <div class="col-3">
                          <input type="text" class="form-control" id="pc-no_ui_slider-3-input" placeholder="Quantity">
                        </div>
                        <div class="col-3">
                          <input type="text" class="form-control" id="pc-no_ui_slider-3.1-input" placeholder="Quantity">
                        </div>
                        <div class="col-6">
                          <div id="pc-no_ui_slider-3" class="pc-nouislider"></div>
                        </div>
                      </div>
                      <small class="form-text text-muted">always show slider values.</small>
                    </div>
                  </div>

                  <div class="form-group row mb-5">
                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Using HTML5 input elements</label>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="row align-items-center">
                        <div class="col-3">
                          <select class="form-control" id="pc-no_ui_slider-input-select"></select>
                        </div>
                        <div class="col-3">
                          <input type="number" class="form-control" id="pc-no_ui_slider-input-number" placeholder="Quantity">
                        </div>
                        <div class="col-6">
                          <div
                            id="pc-no_ui_slider-4"
                            class="pc-nouislider pc-no_ui_slider--handle-primary pc-no_ui_slider--connect-warning"
                          ></div>
                        </div>
                      </div>
                      <small class="form-text text-muted"
                        >noUiSlider's <code>'update'</code> method is useful for synchronizing with other elements</small
                      >
                    </div>
                  </div>

                  <div class="form-group row mb-5">
                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Soft Limits</label>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="row align-items-center mb-4">
                        <div class="col-4">
                          <input type="text" class="form-control" id="pc-no_ui_slider-5-input" placeholder="Quantity">
                        </div>
                        <div class="col-8">
                          <div id="pc-no_ui_slider-5"></div>
                        </div>
                      </div>
                      <small class="form-text text-muted"
                        >If you want to disable the edges of a slider, the set event can be used to reset the value if a limit is
                        passed.</small
                      >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Vertical Slider</label>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="row mb-3">
                        <div class="col-4">
                          <input type="text" class="form-control" id="pc-no_ui_slider-6-input" placeholder="Quantity">
                        </div>
                        <div class="col-8">
                          <div id="pc-no_ui_slider-6" class="pc-toggle-noUiSlider"></div>
                        </div>
                      </div>
                      <small class="form-text text-muted">Vertical orientation slider example</small>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </section>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid">
        <div class="row">
          <div class="col my-1">
            <p class="m-0"
              >Able Pro &#9829; crafted by Team <a href="https://themeforest.net/user/phoenixcoded" target="_blank">Phoenixcoded</a></p
            >
          </div>
          <div class="col-auto my-1">
            <ul class="list-inline footer-link mb-0">
              <li class="list-inline-item"><a href="https://ableproadmin.com/index.html">Home</a></li>
              <li class="list-inline-item"><a href="https://codedthemes.gitbook.io/able-pro-bootstrap/" target="_blank">Documentation</a></li>
              <li class="list-inline-item"><a href="https://phoenixcoded.authordesk.app/" target="_blank">Support</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
 <!-- Required Js -->
<script src="/js/plugins/popper.min.js"></script>
<script src="/js/plugins/simplebar.min.js"></script>
<script src="/js/plugins/bootstrap.min.js"></script>
<script src="/js/fonts/custom-font.js"></script>
<script src="/js/config.js"></script>
<script src="/js/pcoded.js"></script>
<script src="/js/plugins/feather.min.js"></script>
 <div class="pct-c-btn">
  <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
    <svg class="pc-icon">
      <use xlink:href="#custom-setting-2"></use>
    </svg>
  </a>
</div>
<div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Settings</h5>
    <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas" aria-label="Close"
      ><i class="ti ti-x"></i
    ></button>
  </div>
  <div class="pct-body" style="height: calc(100% - 85px)">
    <div class="offcanvas-body py-0">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="pc-dark">
            <h6 class="mb-1">Theme Mode</h6>
            <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
            <div class="row theme-layout">
              <div class="col-4">
                <div class="d-grid">
                  <button class="preset-btn btn active" data-value="true" onclick="layout_change('light');">
                    <svg class="pc-icon text-warning">
                      <use xlink:href="#custom-sun-1"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="col-4">
                <div class="d-grid">
                  <button class="preset-btn btn" data-value="false" onclick="layout_change('dark');">
                    <svg class="pc-icon">
                      <use xlink:href="#custom-moon"></use>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="col-4">
                <div class="d-grid">
                  <button class="preset-btn btn" data-value="default" onclick="layout_change_default();">
                    <svg class="pc-icon">
                      <use xlink:href="#custom-setting-2"></use>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <h6 class="mb-1">Theme Contrast</h6>
          <p class="text-muted text-sm">Choose theme contrast</p>
          <div class="row theme-contrast">
            <div class="col-6">
              <div class="d-grid">
                <button class="preset-btn btn" data-value="true" onclick="layout_sidebar_change('true');">
                  <svg class="pc-icon">
                    <use xlink:href="#custom-mask"></use>
                  </svg>
                </button>
              </div>
            </div>
            <div class="col-6">
              <div class="d-grid">
                <button class="preset-btn btn active" data-value="false" onclick="layout_sidebar_change('false');">
                  <svg class="pc-icon">
                    <use xlink:href="#custom-mask-1-outline"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <h6 class="mb-1">Custom Theme</h6>
          <p class="text-muted text-sm">Choose your Primary color</p>
          <div class="theme-color preset-color">
            <a href="#!" class="active" data-value="preset-1"><i class="ti ti-check"></i></a>
            <a href="#!" data-value="preset-2"><i class="ti ti-check"></i></a>
            <a href="#!" data-value="preset-3"><i class="ti ti-check"></i></a>
            <a href="#!" data-value="preset-4"><i class="ti ti-check"></i></a>
            <a href="#!" data-value="preset-5"><i class="ti ti-check"></i></a>
            <a href="#!" data-value="preset-6"><i class="ti ti-check"></i></a>
            <a href="#!" data-value="preset-7"><i class="ti ti-check"></i></a>
            <a href="#!" data-value="preset-8"><i class="ti ti-check"></i></a>
            <a href="#!" data-value="preset-9"><i class="ti ti-check"></i></a>
            <a href="#!" data-value="preset-10"><i class="ti ti-check"></i></a>
          </div>
        </li>
        <li class="list-group-item">
          <h6 class="mb-1">Sidebar Caption</h6>
          <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
          <div class="row theme-nav-caption">
            <div class="col-6">
              <div class="d-grid">
                <button class="preset-btn btn active" data-value="true" onclick="layout_caption_change('true');">
                  <img src="https://ableproadmin.com/assets/images/customizer/img-caption-1.svg" alt="img" class="img-fluid" width="70%" />
                </button>
              </div>
            </div>
            <div class="col-6">
              <div class="d-grid">
                <button class="preset-btn btn" data-value="false" onclick="layout_caption_change('false');">
                  <img src="https://ableproadmin.com/assets/images/customizer/img-caption-2.svg" alt="img" class="img-fluid" width="70%" />
                </button>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="pc-rtl">
            <h6 class="mb-1">Theme Layout</h6>
            <p class="text-muted text-sm">LTR/RTL</p>
            <div class="row theme-direction">
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn active" data-value="false" onclick="layout_rtl_change('false');">
                    <img src="https://ableproadmin.com/assets/images/customizer/img-layout-1.svg" alt="img" class="img-fluid" width="70%" />
                  </button>
                </div>
              </div>
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn" data-value="true" onclick="layout_rtl_change('true');">
                    <img src="https://ableproadmin.com/assets/images/customizer/img-layout-2.svg" alt="img" class="img-fluid" width="70%" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="pc-container-width">
            <h6 class="mb-1">Layout Width</h6>
            <p class="text-muted text-sm">Choose Full or Container Layout</p>
            <div class="row theme-container">
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn active" data-value="false" onclick="change_box_container('false')">
                    <img src="https://ableproadmin.com/assets/images/customizer/img-container-1.svg" alt="img" class="img-fluid" width="70%" />
                  </button>
                </div>
              </div>
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn" data-value="true" onclick="change_box_container('true')">
                    <img src="https://ableproadmin.com/assets/images/customizer/img-container-2.svg" alt="img" class="img-fluid" width="70%" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="d-grid">
            <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>


    <!-- [Page Specific JS] start -->
    <!-- tagify -->
    <script src="/js/plugins/wNumb.min.js"></script>
    <script src="/js/plugins/nouislider.min.js"></script>
    <script>
      (function () {
        // init slider
        var slider = document.getElementById('pc-no_ui_slider-1');

        noUiSlider.create(slider, {
          start: [0],
          step: 2,
          range: {
            min: [0],
            max: [10]
          },
          format: wNumb({
            decimals: 0
          })
        });

        // init slider input
        var sliderInput = document.getElementById('pc-no_ui_slider-1-input');

        slider.noUiSlider.on('update', function (values, handle) {
          sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function () {
          slider.noUiSlider.set(this.value);
        });
      })();
      (function () {
        // init slider
        var slider = document.getElementById('pc-no_ui_slider-3');

        noUiSlider.create(slider, {
          start: [20, 80],
          connect: true,
          direction: 'rtl',
          tooltips: [
            true,
            wNumb({
              decimals: 1
            })
          ],
          range: {
            min: [0],
            '10%': [10, 10],
            '50%': [80, 50],
            '80%': 150,
            max: 200
          }
        });

        // init slider input
        var sliderInput0 = document.getElementById('pc-no_ui_slider-3-input');
        var sliderInput1 = document.getElementById('pc-no_ui_slider-3.1-input');
        var sliderInputs = [sliderInput1, sliderInput0];

        slider.noUiSlider.on('update', function (values, handle) {
          sliderInputs[handle].value = values[handle];
        });
      })();
      (function () {
        var slider = document.getElementById('pc-no_ui_slider-input-select');

        // Append the option elements
        for (var i = -20; i <= 40; i++) {
          var option = document.createElement('option');
          option.text = i;
          option.value = i;

          slider.appendChild(option);
        }

        // init slider
        var html5Slider = document.getElementById('pc-no_ui_slider-4');

        noUiSlider.create(html5Slider, {
          start: [10, 30],
          connect: true,
          range: {
            min: -20,
            max: 40
          }
        });

        // init slider input
        var inputNumber = document.getElementById('pc-no_ui_slider-input-number');

        html5Slider.noUiSlider.on('update', function (values, handle) {
          var value = values[handle];

          if (handle) {
            inputNumber.value = value;
          } else {
            slider.value = Math.round(value);
          }
        });

        slider.addEventListener('change', function () {
          html5Slider.noUiSlider.set([this.value, null]);
        });

        inputNumber.addEventListener('change', function () {
          html5Slider.noUiSlider.set([null, this.value]);
        });
      })();
      (function () {
        // init slider
        var slider = document.getElementById('pc-no_ui_slider-5');

        noUiSlider.create(slider, {
          start: 20,
          range: {
            min: 0,
            max: 100
          },
          pips: {
            mode: 'values',
            values: [20, 80],
            density: 4
          }
        });

        var sliderInput = document.getElementById('pc-no_ui_slider-5-input');

        slider.noUiSlider.on('update', function (values, handle) {
          sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function () {
          slider.noUiSlider.set(this.value);
        });

        slider.noUiSlider.on('change', function (values, handle) {
          if (values[handle] < 20) {
            slider.noUiSlider.set(20);
          } else if (values[handle] > 80) {
            slider.noUiSlider.set(80);
          }
        });
      })();
      (function () {
        var verticalSlider = document.getElementById('pc-no_ui_slider-6');
        noUiSlider.create(verticalSlider, {
          orientation: 'vertical',
          start: 0,
          range: {
            min: [0, 1],
            max: 1
          },
          format: wNumb({
            decimals: 0
          })
        });
        verticalSlider.noUiSlider.on('update', function (values, handle) {
          if (values[handle] === '1') {
            verticalSlider.classList.add('off');
          } else {
            verticalSlider.classList.remove('off');
          }
        });
        var sliderInput = document.getElementById('pc-no_ui_slider-6-input');
        verticalSlider.noUiSlider.on('update', function (values, handle) {
          sliderInput.value = values[handle];
        });
        sliderInput.addEventListener('change', function () {
          verticalSlider.noUiSlider.set(this.value);
        });
      })();
      (function () {
        function timestamp(str) {
          return new Date(str).getTime();
        }
        var weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        var months = [
          'January',
          'February',
          'March',
          'April',
          'May',
          'June',
          'July',
          'August',
          'September',
          'October',
          'November',
          'December'
        ];

        function nth(d) {
          if (d > 3 && d < 21) return 'th';
          switch (d % 10) {
            case 1:
              return 'st';
            case 2:
              return 'nd';
            case 3:
              return 'rd';
            default:
              return 'th';
          }
        }

        function formatDate(date) {
          return (
            weekdays[date.getDay()] + ', ' + date.getDate() + nth(date.getDate()) + ' ' + months[date.getMonth()] + ' ' + date.getFullYear()
          );
        }
        var dateSlider = document.getElementById('pc-no_ui_slider-9');
        noUiSlider.create(dateSlider, {
          range: {
            min: timestamp('2010'),
            max: timestamp('2016')
          },
          step: 7 * 24 * 60 * 60 * 1000,
          start: [timestamp('2011'), timestamp('2015')],
          format: wNumb({
            decimals: 0
          })
        });

        var sliderInput0 = document.getElementById('event-start');
        var sliderInput1 = document.getElementById('event-end');
        var sliderInputs = [sliderInput1, sliderInput0];

        dateSlider.noUiSlider.on('update', function (values, handle) {
          sliderInputs[handle].value = formatDate(new Date(+values[handle]));
        });
      })();
      (function () {
        var pipsSlider = document.getElementById('pc-no_ui_slider-10');
        noUiSlider.create(pipsSlider, {
          range: {
            min: 0,
            max: 100
          },
          start: [50],
          pips: {
            mode: 'count',
            values: 5
          }
        });
        var pips = pipsSlider.querySelectorAll('.noUi-value');

        function clickOnPip() {
          var value = Number(this.getAttribute('data-value'));
          pipsSlider.noUiSlider.set(value);
        }
        for (var i = 0; i < pips.length; i++) {
          pips[i].style.cursor = 'pointer';
          pips[i].addEventListener('click', clickOnPip);
        }
        var sliderInput = document.getElementById('pc-no_ui_slider-10-input');
        pipsSlider.noUiSlider.on('update', function (values, handle) {
          sliderInput.value = values[handle];
        });
      })();
    </script>

    <!-- [Page Specific JS] end -->
  </body>
  <!-- [Body] end -->

<!-- Mirrored from ableproadmin.com/forms/form2_nouislider.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:16 GMT -->
</html>
