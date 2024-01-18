<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  
<!-- Mirrored from ableproadmin.com/forms/form2_lay-multicolumn.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:28 GMT -->
<head>
    <title>Multi Form Layouts | Able Pro Dashboard Template</title>
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
                  <li class="breadcrumb-item" aria-current="page">Multi Layout</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Multi Layout</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ form-element ] start -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5>2 Columns Form Layout</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group row">
                    <div class="col-lg-6">
                      <label class="form-label">Name:</label>
                      <input type="email" class="form-control" placeholder="Enter full name">
                      <small class="form-text text-muted">Please enter your full name</small>
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label">Email:</label>
                      <input type="email" class="form-control" placeholder="Enter contact number">
                      <small class="form-text text-muted">Please enter your Email id</small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-6">
                      <label class="form-label">Password:</label>
                      <div class="input-group search-form">
                        <input type="Password" class="form-control" placeholder="Please enter your Password">
                        <span class="input-group-text bg-transparent"><i class="feather icon-lock"></i></span>
                      </div>
                      <small class="form-text text-muted">Please enter your Password</small>
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label">Profile URL:</label>
                      <div class="input-group search-form">
                        <input type="text" class="form-control" placeholder="Please enter your Profile URL">
                        <span class="input-group-text bg-transparent"><i class="feather icon-link"></i></span>
                      </div>
                      <small class="form-text text-muted">Please enter your Profile URL</small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-6">
                      <label class="form-label">User Type:</label>
                      <div>
                        <div class="form-check form-check-inline">
                          <input type="radio" id="customRadioInline1" name="customRadioInline1" class="form-check-input" checked>
                          <label class="form-check-label" for="customRadioInline1">Administrator</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="radio" id="customRadioInline2" name="customRadioInline1" class="form-check-input">
                          <label class="form-check-label" for="customRadioInline2">Author</label>
                        </div>
                      </div>
                      <small class="form-text text-muted">Please select user type</small>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>2 Columns Horizontal Form Layout</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Name:</label>
                    <div class="col-lg-3">
                      <input type="email" class="form-control" placeholder="Enter full name">
                      <small class="form-text text-muted">Please enter your full name</small>
                    </div>
                    <label class="col-lg-2 col-form-label">Email:</label>
                    <div class="col-lg-3">
                      <input type="email" class="form-control" placeholder="Enter contact number">
                      <small class="form-text text-muted">Please enter your Email id</small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Password:</label>
                    <div class="col-lg-3">
                      <div class="input-group search-form">
                        <input type="password" class="form-control" placeholder="Enter your Password">
                        <span class="input-group-text bg-transparent"><i class="feather icon-lock"></i></span>
                      </div>
                      <small class="form-text text-muted">Please enter your Password</small>
                    </div>
                    <label class="col-lg-2 col-form-label">Profile URL:</label>
                    <div class="col-lg-3">
                      <div class="input-group search-form">
                        <input type="text" class="form-control" placeholder="Enter your Profile URL">
                        <span class="input-group-text bg-transparent"><i class="feather icon-link"></i></span>
                      </div>
                      <small class="form-text text-muted">Please enter your Profile URL</small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-form-label">User Type:</label>
                    <div class="col-lg-3">
                      <div>
                        <div class="form-check form-check-inline">
                          <input type="radio" id="customRadioInline21" name="customRadioInline1" class="form-check-input" checked>
                          <label class="form-check-label" for="customRadioInline21">Administrator</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="radio" id="customRadioInline22" name="customRadioInline1" class="form-check-input">
                          <label class="form-check-label" for="customRadioInline22">Author</label>
                        </div>
                      </div>
                      <small class="form-text text-muted">Please select user type</small>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>3 Columns Form Layout</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group row">
                    <div class="col-lg-4">
                      <label class="form-label">Name:</label>
                      <input type="email" class="form-control" placeholder="Enter full name">
                      <small class="form-text text-muted">Please enter your full name</small>
                    </div>
                    <div class="col-lg-4">
                      <label class="form-label">Email:</label>
                      <input type="email" class="form-control" placeholder="Enter email">
                      <small class="form-text text-muted">Please enter your email</small>
                    </div>
                    <div class="col-lg-4">
                      <label class="form-label">Password:</label>
                      <div class="input-group">
                        <span class="input-group-text"><i class="feather icon-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Enter Password">
                      </div>
                      <small class="form-text text-muted">Please enter your Password</small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-4">
                      <label class="form-label">Contact:</label>
                      <input type="email" class="form-control" placeholder="Enter contact number">
                      <small class="form-text text-muted">Please enter your contact</small>
                    </div>
                    <div class="col-lg-4">
                      <label class="form-label">Profile URL:</label>
                      <div class="input-group search-form">
                        <input type="text" class="form-control" placeholder="Profile URL">
                        <span class="input-group-text bg-transparent"><i class="feather icon-link"></i></span>
                      </div>
                      <small class="form-text text-muted">Please enter Profile URL</small>
                    </div>
                    <div class="col-lg-4">
                      <label class="form-label">Pin code:</label>
                      <input type="text" class="form-control" placeholder="Enter your Pin code">
                      <small class="form-text text-muted">Please enter your Pin code</small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-4">
                      <label class="form-label">Address:</label>
                      <input type="text" class="form-control" placeholder="Enter your address">
                      <small class="form-text text-muted">Please enter your address</small>
                    </div>
                    <div class="col-lg-4">
                      <label class="form-label">User Type:</label>
                      <div>
                        <div class="form-check form-check-inline">
                          <input type="radio" id="customRadioInline221" name="customRadioInline1" class="form-check-input" checked>
                          <label class="form-check-label" for="customRadioInline221">Administrator</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="radio" id="customRadioInline222" name="customRadioInline1" class="form-check-input">
                          <label class="form-check-label" for="customRadioInline222">Author</label>
                        </div>
                      </div>
                      <small class="form-text text-muted">Please select User Type</small>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>3 Columns Horizontal Form Layout</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group row">
                    <div class="col-lg-4">
                      <div class="row">
                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Name:</label>
                        <div class="col-lg-9">
                          <input type="email" class="form-control" placeholder="Full name">
                          <small class="form-text text-muted">Please enter your full name</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row">
                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Email:</label>
                        <div class="col-lg-9">
                          <input type="email" class="form-control" placeholder="Enter email">
                          <small class="form-text text-muted">Please enter your email</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row">
                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Password:</label>
                        <div class="col-lg-9">
                          <div class="input-group">
                            <span class="input-group-text"><i class="feather icon-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Enter Password">
                          </div>
                          <small class="form-text text-muted">Please enter your Password</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                  <div class="form-group row">
                    <div class="col-lg-4">
                      <div class="row">
                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Contact:</label>
                        <div class="col-lg-9">
                          <input type="email" class="form-control" placeholder="Enter contact number">
                          <small class="form-text text-muted">Please enter your contact</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row">
                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Profile URL:</label>
                        <div class="col-lg-9">
                          <div class="input-group search-form">
                            <input type="text" class="form-control" placeholder="Fax Profile URL">
                            <span class="input-group-text bg-transparent"><i class="feather icon-alert-circle"></i></span>
                          </div>
                          <small class="form-text text-muted">Please enter Profile URL</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row">
                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Pin code:</label>
                        <div class="col-lg-9">
                          <input type="text" class="form-control" placeholder="Enter your Pin code">
                          <small class="form-text text-muted">Please enter your Pin code</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                  <div class="form-group row">
                    <div class="col-lg-4">
                      <div class="row">
                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Address:</label>
                        <div class="col-lg-9">
                          <input type="text" class="form-control" placeholder="Enter your address">
                          <small class="form-text text-muted">Please enter your address</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row">
                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">User Type:</label>
                        <div class="col-lg-9">
                          <div>
                            <div class="form-check form-check-inline">
                              <input type="radio" id="customRadioInline231" name="customRadioInline1" class="form-check-input" checked>
                              <label class="form-check-label" for="customRadioInline231">Administrator</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input type="radio" id="customRadioInline232" name="customRadioInline1" class="form-check-input">
                              <label class="form-check-label" for="customRadioInline232">Author</label>
                            </div>
                          </div>
                          <small class="form-text text-muted">Please select User Type</small>
                        </div>
                      </div>
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
</body
  >
  <!-- [Body] end -->

<!-- Mirrored from ableproadmin.com/forms/form2_lay-multicolumn.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:28 GMT -->
</html>
