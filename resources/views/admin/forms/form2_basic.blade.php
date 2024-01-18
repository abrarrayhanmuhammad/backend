<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  
<!-- Mirrored from ableproadmin.com/forms/form2_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:10 GMT -->
<head>
    <title>Basic Components | Able Pro Dashboard Template</title>
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
                  <li class="breadcrumb-item" aria-current="page">Basic Components</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Basic Components</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ form-element ] start -->
          <div class="col-sm-6">
            <!-- Basic Inputs -->
            <div class="card">
              <div class="card-header">
                <h5>Basic Inputs</h5>
              </div>
              <div class="card-body">
                <div class="alert alert-primary">
                  <div class="media align-items-center">
                    <i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                    <div class="media-body ms-3"> Basic HTML form components with custom style. </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control form-control" placeholder="email@company.com">
                </div>
                <div class="form-group">
                  <label class="form-label" for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  <small>Your password must be between 8 and 30 characters.</small>
                </div>
                <div class="form-group">
                  <label class="form-label" for="exampleSelect1">Select</label>
                  <select class="form-select" id="exampleSelect1">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="form-label" for="exampleSelect2">Multiple select</label>
                  <select multiple="" class="form-select" id="exampleSelect2">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                  <small>Hold shift or press ctrl for multi select.</small>
                </div>
                <div class="form-group mb-0">
                  <label class="form-label" for="exampleTextarea">Textarea</label>
                  <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-light">Reset</button>
              </div>
            </div>
            <!-- HTML Input Types -->
            <div class="card">
              <div class="card-header">
                <h5>HTML Input Types</h5>
              </div>
              <div class="card-body">
                <div class="alert alert-primary">
                  <div class="media align-items-center">
                    <i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                    <div class="media-body ms-3">
                      Here are the different input types you can use in HTML. Check more at
                      <a href="https://www.w3schools.com/html/html_form_input_types.asp" rel="nofollow">W3Schools</a>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="demo-text-input" class="col-form-label">Simple Input Text</label>
                  <input class="form-control" type="text" value="John Doe" id="demo-text-input">
                </div>
                <div class="form-group">
                  <label for="demo-number-input" class="col-form-label">Number</label>
                  <input class="form-control" type="number" value="100" id="demo-number-input">
                </div>
                <div class="form-group">
                  <label for="demo-tel-input" class="col-form-label">Telephone</label>
                  <input class="form-control" type="tel" value="+918888888888" id="demo-tel-input">
                </div>
                <div class="form-group">
                  <label for="demo-email-input" class="col-form-label">Email</label>
                  <input class="form-control" type="email" value="demo@example.com" id="demo-email-input">
                </div>
                <div class="form-group">
                  <label for="demo-password-input" class="col-form-label">Password</label>
                  <input class="form-control" type="password" value="password123" id="demo-password-input">
                </div>
                <div class="form-group">
                  <label for="demo-input-file" class="col-form-label">File</label>
                  <input class="form-control" type="file" id="demo-input-file">
                </div>
                <div class="form-group">
                  <label for="demo-multi-input-file" class="col-form-label">Multi Files</label>
                  <input class="form-control" type="file" id="demo-multi-input-file" multiple>
                  <small>Try selecting more than one file when browsing for files.</small>
                </div>
                <div class="form-group">
                  <label for="demo-URL-input" class="col-form-label">URL</label>
                  <input class="form-control" type="url" value="https://validator.w3.org/" id="demo-URL-input">
                </div>
                <div class="form-group">
                  <label for="demo-search-input" class="col-form-label">Search</label>
                  <input class="form-control" type="search" value="Best Admin Template" id="demo-search-input">
                  <small>a search field behaves like a regular text field</small>
                </div>
                <div class="form-group">
                  <label for="demo-datetime-local" class="col-form-label">Date Time Local</label>
                  <input class="form-control" type="datetime-local" value="2021-12-31T04:03:20" id="demo-datetime-local">
                </div>
                <div class="form-group">
                  <label for="demo-date-only" class="col-form-label">Date only</label>
                  <input class="form-control" type="date" value="2021-12-31" id="demo-date-only">
                </div>
                <div class="form-group">
                  <label for="demo-time-only" class="col-form-label">Time only</label>
                  <input class="form-control" type="time" value="04:03:20" id="demo-time-only">
                </div>
                <div class="form-group">
                  <label for="demo-month-only" class="col-form-label">Month only</label>
                  <input class="form-control" type="month" value="2021-12" id="demo-month-only">
                </div>
                <div class="form-group">
                  <label for="demo-week-only" class="col-form-label">Week only</label>
                  <input class="form-control" type="week" value="2021-W41" id="demo-week-only">
                </div>
                <div class="form-group">
                  <label for="demo-color-input" class="col-form-label">Color</label>
                  <input class="form-control form-control-color-picker" type="color" value="#5052FC" id="demo-color-input">
                </div>
                <div class="form-group mb-0">
                  <label for="demo-range-input" class="col-form-label">Range</label>
                  <input class="form-range" type="range" min="0" max="50" id="demo-range-input">
                </div>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-secondary">Cancel</button>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-header">
                <h5>Sizing</h5>
              </div>
              <div class="card-body">
                <div class="alert alert-primary">
                  <div class="media align-items-center">
                    <i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                    <div class="media-body ms-3">
                      Input sizing using <code>.form-control-lg</code> and <code>.form-control-sm</code>
                      class.
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                  <small><code>.form-control-sm</code></small>
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Default Input">
                  <small><code>.form-control</code></small>
                </div>
                <div class="form-group">
                  <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                  <small><code>.form-control-lg</code></small>
                </div>
                <hr>
                <div class="form-group">
                  <label class="form-label">Large select</label>
                  <select class="form-select form-select-lg">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="form-label">Default select</label>
                  <select class="form-select">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                  </select>
                </div>
                <div class="form-group mb-0">
                  <label class="form-label">Small select</label>
                  <select class="form-select form-select-sm">
                    <option>Option 1</option>
                    <option>Option 2</option>
                  </select>
                </div>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-light">Reset</button>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Input Attributes </h5>
              </div>
              <form>
                <div class="card-body">
                  <div class="alert alert-primary">
                    <div class="media align-items-center">
                      <i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                      <div class="media-body ms-3">
                        Examples of <code>autofocus, value, readonly, disabled, required</code>
                        attributes in Input .
                      </div>
                    </div>
                  </div>
                  <!-- For Auto Focus Use this control-->
                  <!-- <div class="form-group">
                                <label class="form-label" for="example-auto-focus">Auto focus</label>
                                <input type="email" class="form-control" placeholder="Enter email"
                                    id="example-auto-focus" autofocus>
                                <small>autofocus on page load</small>
                            </div>
                            -->
                  <!-- Auto Focus - Demo Preview Only-->
                  <div class="form-group">
                    <label class="form-label">Auto focus</label>
                    <input type="email" class="form-control" placeholder="Enter email">
                    <small>autofocus on page load</small>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Value</label>
                    <input type="text" class="form-control" value="John Doe">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="example-required">Required</label>
                    <input type="text" class="form-control" id="example-required" required>
                    <small>Submit the form to see it in action</small>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="example-read-only">Readonly</label>
                    <input type="text" class="form-control" value="demo@email.com" id="example-read-only" readonly>
                    <small>The input <code>readonly</code> attribute specifies that an input field is read-only</small>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="example-disabled">Disabled</label>
                    <input type="text" class="form-control" value="26" id="example-disabled" disabled>
                    <small>The value of a <code>disabled</code> input field will not be sent when submitting the form</small>
                  </div>
                  <div class="form-group mb-0">
                    <label class="form-label" for="example-disabled-select">Disabled select</label>
                    <select class="form-select" id="example-disabled-select" disabled>
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-primary me-2">Submit</button>
                  <button type="reset" class="btn btn-light">Reset</button>
                </div>
              </form>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Advance Input attributes </h5>
              </div>
              <form>
                <div class="card-body">
                  <div class="alert alert-primary">
                    <div class="media align-items-center">
                      <i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                      <div class="media-body ms-3">
                        Examples of <code>maxlength, min, max, step, pattern, list</code> attributes of Input.
                        <br>
                        Submit form for checkout attribute functionality.
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="example-max-length">Max Length</label>
                    <input type="text" class="form-control" placeholder="Enter PIN" id="example-max-length" maxlength="4">
                    <small>maxlength set to 4 characters</small>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="example-datemax">Date</label>
                    <input type="date" class="form-control" id="example-datemax" max="1979-12-31">
                    <small>Enter a date before 1980-01-01</small>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="example-datemin">Date</label>
                    <input type="date" class="form-control" id="example-datemin" min="2000-01-02">
                    <small>Enter a date after 2000-01-01</small>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="example-quantity">Quantity</label>
                    <input type="number" class="form-control" id="example-quantity" min="1" max="5">
                    <small>i.e.between 1 and 5</small>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="example-steps">Points</label>
                    <input type="number" class="form-control" id="example-steps" step="3" value="1">
                    <small>step set to 3</small>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="example-country-code">Country code</label>
                    <input
                      type="text"
                      class="form-control"
                      id="example-country-code"
                      pattern="[A-Za-z]{3}"
                      title="Three letter country code"
                   >
                    <small><code>pattern</code> attribute - three letter country code</small>
                  </div>
                  <div class="form-group mb-0">
                    <label class="form-label" for="example-data-list">List (Browsers)</label>
                    <input type="text" class="form-control" id="example-data-list" list="browsers">
                    <datalist id="browsers">
                      <option value="Internet Explorer"> </option><option value="Firefox"> </option><option value="Chrome"> </option
                      ><option value="Opera"> </option><option value="Safari"> </option
                    ></datalist>

                    <small>The datalist tag is not supported in Safari 12.0 (or earlier).</small>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button type="reset" class="btn btn-light">Reset</button>
                </div>
              </form>
            </div>
            <!-- [ form-element ] end -->
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

<!-- Mirrored from ableproadmin.com/forms/form2_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:10 GMT -->
</html>
