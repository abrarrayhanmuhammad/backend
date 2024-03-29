<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  
<!-- Mirrored from ableproadmin.com/forms/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:30 GMT -->
<head>
    <title>Form Validation | Able Pro Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Phoenixcoded">

    @include('admin.template.css')
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
                  <li class="breadcrumb-item" aria-current="page">Form Validation</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Form Validation</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ Form Validation ] start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Form Validation</h5>
              </div>
              <div class="card-body">
                <form class="validate-me" id="validate-me" data-validate>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Upload any file:</label>
                    <div class="col-lg-6">
                      <input name="file" id="file" type="file" class="form-control" data-bouncer-target="#file-error-msg" required>
                      <small id="file-error-msg" class="form-text text-danger"></small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Color Picker:</label>
                    <div class="col-lg-6">
                      <input
                        type="color"
                        name="color"
                        id="color"
                        class="form-control form-control-color">
                      <small class="form-text text-muted">7-Character Hexadecimal (ex. #f7f7f7)</small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Date:</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" name=" date" id="date" required>
                      <small class="form-text text-muted">YYYY-MM-DD</small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Time:</label>
                    <div class="col-lg-6">
                      <input type="time" class="form-control" name=" time" id="time" required>
                      <small class="form-text text-muted">HH:MM (24-hour time)</small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Month:</label>
                    <div class="col-lg-6">
                      <input type="month" class="form-control" name="month" id="month" required>
                      <small class="form-text text-muted">YYYY-MM</small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Email:</label>
                    <div class="col-lg-6">
                      <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        data-bouncer-message="The domain portion of the email address is invalid (the portion after the @)."
                        required
                     >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">URL:</label>
                    <div class="col-lg-6">
                      <input
                        type="url"
                        name="url"
                        id="url"
                        class="form-control"
                        data-bouncer-message="The URL is a missing a TLD (for example, .com)."
                        required
                     >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">URL without TLD allowed:</label>
                    <div class="col-lg-6">
                      <input
                        type="url"
                        name="url_not_ld"
                        id="url_not_ld"
                        class="form-control"
                        pattern="(?:(?:https?|HTTPS?|ftp|FTP):\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)*)(?::\d{2,5})?(?:[\/?#]\S*)?"
                        required
                     >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Number</label>
                    <div class="col-lg-6">
                      <input type="number" class="form-control" name="number" id="number" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Number (no decimals)</label>
                    <div class="col-lg-6">
                      <input
                        type="number"
                        class="form-control"
                        step="any"
                        name="integer"
                        id="integer"
                        required
                     >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Number with Min and Max</label>
                    <div class="col-lg-6">
                      <input type="number" class="form-control" min="2" max="7" name="number_min_max" id="number_min_max" required>
                      <small class="form-text text-muted">Must be between 2 and 7</small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Telephone Number</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="tel" id="tel" pattern="^(?:\d{3}[\-]\d{3}[\-]\d{4})$" required>
                      <small class="form-text text-muted">123-456-7890</small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Password</label>
                    <div class="col-lg-6">
                      <input
                        type="password"
                        class="form-control"
                        name="password"
                        id="password"
                        data-bouncer-message="Please choose a password that includes at least 1 uppercase character, 1 lowercase character, and 1 number."
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*"
                        required
                     >
                      <small class="form-text text-muted">At least 1 uppercase character, 1 lowercase character, and 1 number</small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Confirm Password</label>
                    <div class="col-lg-6">
                      <input
                        type="password"
                        name="confirm-password"
                        id="confirm-password"
                        data-bouncer-match="#password"
                        class="form-control"
                        data-bouncer-mismatch-message="Your passwords do not match."
                        required
                     >
                      <small class="form-text text-muted">must match the field above</small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Text with MinLength and MaxLength</label>
                    <div class="col-lg-6">
                      <input class="form-control" type="text" minlength="3" maxlength="9" name="text_min_max" id="text_min_max" required>
                      <small class="form-text text-muted">must be between 3 and 9 characters long</small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Select</label>
                    <div class="col-lg-6">
                      <select class="form-control" name="select" id="select" required>
                        <option label="select"></option>
                        <option>Harry Potter</option>
                        <option>Lord of the Rings</option>
                        <option>Star Wars</option>
                        <option>Start Trek</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-end">Radio Buttons</label>
                    <div class="col-lg-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" id="radio-1" required>
                        <label class="form-check-label" for="radio-1"> Yes </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" id="radio-2" required>
                        <label class="form-check-label" for="radio-2"> No </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row align-items-center">
                    <label class="col-lg-4 col-form-label text-lg-end">Checkboxes</label>
                    <div class="col-lg-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkbox-1" id="checkbox-1" required>
                        <label class="form-check-label" for="checkbox-1"> Default checkbox </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-4 col-form-label"></div>
                    <div class="col-lg-6">
                      <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- [ Form Validation ] end -->
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
    <!-- jquery-validation Js -->
    <script src="/js/plugins/bouncer.min.js"></script>
    <script src="js/pages/form-validation.js"></script>
    <!-- [Page Specific JS] end -->
  </body>
  <!-- [Body] end -->

<!-- Mirrored from ableproadmin.com/forms/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:31 GMT -->
</html>
