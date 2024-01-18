<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ableproadmin.com/elements/ac_rangeslider.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:24 GMT -->
<head>
  <title>Range Slider | Able Pro Dashboard Template</title>
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
  <!-- rangeslider css -->
  <link rel="stylesheet" href="css/plugins/bootstrap-slider.min.css">
  <!-- [Page specific CSS] start -->
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

  <link rel="stylesheet" href="css/uikit.css">
</head>

<body class="component-page">
  <!-- [ Main Content ] start -->
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->

  <!-- [ Nav ] start -->
  <nav class="navbar navbar-expand-md navbar-light default">
    <div class="container">
      <a class="navbar-brand" href="https://ableproadmin.com/index.html">
        <img src="https://ableproadmin.com/assets/images/logo-dark.svg" alt="logo" />
      </a>
      <button
        class="navbar-toggler rounded"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-start">
          <li class="nav-item px-1">
            <a class="nav-link" href="https://codedthemes.gitbook.io/able-pro-bootstrap/" target="_blank">Documentation</a>
          </li>
          <li class="nav-item px-1">
            <a class="nav-link" href="../dashboard/index.html">Live Preview</a>
          </li>
          <li class="nav-item px-1 me-2 mb-2 mb-md-0">
            <a
              class="btn btn-icon btn-light-dark"
              target="_blank"
              href="https://1.envato.market/c/1289604/275988/4415?subId1=phoenixcoded&amp;u=https%3A%2F%2Fthemeforest.net%2Fitem%2Fable-pro-responsive-bootstrap-4-admin-template%2F19300403"
              ><i class="ti ti-brand-github"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="btn btn btn-success"
              target="_blank"
              href="https://1.envato.market/c/1289604/275988/4415?subId1=phoenixcoded&amp;u=https%3A%2F%2Fthemeforest.net%2Fitem%2Fable-pro-responsive-bootstrap-4-admin-template%2F19300403"
              >Purchase Now <i class="ti ti-external-link"></i
            ></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- [ Nav ] start -->

  <section class="component-block">
    <div class="container">
      <div class="row">
        
        @include('template.navbarbc')

        <div class="col-xl-9">
          <div class="row">
            <div class="col-md-10 col-xxl-9 mb-4">
              <a href="#" class="d-xl-none btn btn-dark mb-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_component"
                ><i class="ti ti-menu-2"></i> Explore Components
              </a>
              <h2>Range Slider</h2>
              <p class="text-muted">Create an input element in the DOM, and then create an instance of Slider</p>
              <div>
                <a class="btn btn-sm btn-light-dark" role="button" target="_blank" href="https://seiyria.com/bootstrap-slider/">
                  <i class="ti ti-external-link"></i>
                  Reference
                </a>
              </div>
            </div>

          </div>
          <!-- [ Main Content ] start -->
          <div class="row">
            <!-- [ rangeslider ] start -->
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Basic example with custom formatter and colored selected region via CSS.</h6>
                  <hr>
                  <input id="ex1" data-slider-id="ex1Slider" type="text" data-slider-min="0" data-slider-max="20"
                    data-slider-step="1" data-slider-value="14">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Range selector, options specified via data attribute.</h6>
                  <hr> Filter by price interval: <b>€ 10</b>
                  <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000"
                    data-slider-step="5" data-slider-value="[250,450]">
                  <b>€ 1000</b>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Sliders can be enabled and disabled.</h6>
                  <hr>
                  <input id="ex7" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1"
                    data-slider-value="5" data-slider-enabled="false">
                  <input id="ex7-enabled" type="checkbox"> Enabled
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Using events to work with the values and style the selection and handles via CSS.</h6>
                  <hr>
                  <p><b>R</b>
                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255"
                      data-slider-step="1" data-slider-value="128" data-slider-id="RC" id="R" data-slider-tooltip="hide"
                      data-slider-handle="square">
                  </p>
                  <p><b>G</b>
                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255"
                      data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide"
                      data-slider-handle="round">
                  </p>
                  <p><b>B</b>
                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255"
                      data-slider-step="1" data-slider-value="128" data-slider-id="BC" id="B" data-slider-tooltip="hide"
                      data-slider-handle="triangle">
                  </p>
                  <div id="RGB"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Vertical slider with reversed values (largest to smallest).</h6>
                  <hr>
                  <input id="ex4" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1"
                    data-slider-value="-3" data-slider-orientation="vertical">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Unusual tooltip positions</h6>
                  <hr>
                  <input id="ex17a" type="text">
                  <input id="ex17b" type="text">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Destroy instance of slider by calling <code>destroy()</code> method on slider instance via
                    JavaScript.</h6>
                  <hr>
                  <input id="ex5" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1"
                    data-slider-value="0">
                  <button id="destroyEx5Slider" class="btn btn-danger">Click to Destroy</button>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Able to bind to 'slide' JQuery event on slider, which is triggered whenever the slider is used.
                  </h6>
                  <hr>
                  <input id="ex6" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1"
                    data-slider-value="3">
                  <span id="ex6CurrentSliderValLabel">Current Slider Value: <span id="ex6SliderVal">3</span></span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Tooltip can always be displayed.</h6>
                  <hr>
                  <input id="ex8" data-slider-id="ex1Slider" type="text" data-slider-min="0" data-slider-max="20"
                    data-slider-step="1" data-slider-value="14">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Precision (number of places after the decimal) can be specified.</h6>
                  <hr>
                  <input id="ex9" type="text">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Setting custom handlers.</h6>
                  <hr>
                  <input id="ex10" type="text" data-slider-handle="custom">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Using a custom step interval.</h6>
                  <hr>
                  <input id="ex11" type="text" data-slider-handle="custom">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Coloring the low and high track segments.</h6>
                  <hr>
                  <input id="ex12a" type="text">
                  <br>
                  Note that there is no low track on the single-value slider. The area to lesser than the value of the
                  handle is the
                  selection.
                  <br>
                  <input id="ex12b" type="text">
                  <br>
                  <input id="ex12c" type="text">
                  <br>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Using tick marks and labels.</h6>
                  <hr>
                  <input id="ex13" type="text" data-slider-ticks="[0, 100, 200, 300, 400]"
                    data-slider-ticks-snap-bounds="30"
                    data-slider-ticks-labels='["$0", "$100", "$200", "$300", "$400"]'>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Using tick marks at specific positions.</h6>
                  <hr>
                  <input id="ex14" type="text" data-slider-ticks="[0, 10, 20, 30, 40]"
                    data-slider-ticks-snap-bounds="95" data-slider-ticks-labels='["$0", "$10", "$20", "$30", "$40"]'
                    data-ticks_positions="[0, 30, 60, 70, 90, 100]">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>With a logarithmic scale.</h6>
                  <hr>
                  <input id="ex15" type="text" data-slider-min="1000" data-slider-max="10000000" data-slider-step="5">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Focus the slider handle after a value change.</h6>
                  <hr>
                  <input id="ex16a" type="text">
                  <br>
                  <input id="ex16b" type="text">
                  <br>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Accessibility with ARIA labels</h6>
                  <hr>
                  <span id="ex18-label-1" class="hidden">Example slider label</span>
                  <input id="ex18a" type="text">
                  <span id="ex18-label-2a" class="hidden">Example low value</span>
                  <span id="ex18-label-2b" class="hidden">Example high value</span>
                  <input id="ex18b" type="text">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Highlight ranges on slider with rangeHighlights attribute 14</h6>
                  <hr>
                  <input id="ex22" type="text" data-slider-id="slider22" data-slider-min="0" data-slider-max="20"
                    data-slider-step="1" data-slider-value="14" data-slider-rangeHighlights='[{ "start": 2, "end": 5, "class": "category1" },
                                               { "start": 7, "end": 8, "class": "category2" },
                                               { "start": 17, "end": 19 },
                                               { "start": 17, "end": 24 }, //not visible -  out of slider range
                                               { "start": -3, "end": 19 }]'>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Using tick marks at specific positions..</h6>
                  <hr>
                  <input id="ex23" type="text" data-slider-ticks="[0, 1, 2, 3, 4]" data-slider-step="0.01"
                    data-slider-ticks-snap-bounds="200" data-slider-ticks-tooltip="true"
                    data-ticks_positions="[0, 30, 60, 70, 90, 100]">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h6>Rtl mode (auto)</h6>
                  <hr>
                  <div class="well" dir="rtl">
                    <span>-5</span>
                    <input id="ex24" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1"
                      data-slider-value="14">
                    <span>20</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ rangeslider ] end -->
          </div>
          <!-- [ Main Content ] end -->
        </div>
      </div>
    </div>
  </section>
  <!-- [ Main Content ] end -->
  <!-- Required Js -->
  <script src="/js/plugins/popper.min.js"></script>
  <script src="/js/plugins/simplebar.min.js"></script>
  <script src="/js/plugins/bootstrap.min.js"></script>
  <script src="/js/fonts/custom-font.js"></script>
  <script src="/js/config.js"></script>
  <script src="/js/pcoded.js"></script>
  <script src="/js/plugins/feather.min.js"></script>

  <script src="../../cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
  <script src="/js/plugins/clipboard.min.js"></script>
  <script src="js/component.js"></script>
  <script>
      // pc-component
      var elem = document.querySelectorAll('.component-list-card a');
      for (var l = 0; l < elem.length; l++) {
          var pageUrl = window.location.href.split(/[?#]/)[0];
          if (elem[l].href == pageUrl && elem[l].getAttribute('href') != '') {
              elem[l].classList.add('active');
          }
      }
      document.querySelector('#compo-menu-search').addEventListener("keyup", function () {
          var tval = document.querySelector('#compo-menu-search').value.toLowerCase();
          var elem = document.querySelectorAll('.component-list-card a');
          for (var l = 0; l < elem.length; l++) {
              var aval = elem[l].innerHTML.toLowerCase();
              var n = aval.indexOf(tval);
              if (n !== -1) {
                  elem[l].style.display= "block";
              } else {
                  elem[l].style.display= "none";
              }
          }
      });
  </script>
  <!-- [Page Specific JS] start -->
  <!-- range slider Js -->
  <script src="/js/plugins/bootstrap-slider.min.js"></script>
  <script src="js/pages/ac-rangeslider.js"></script>
  <!-- [Page Specific JS] end -->
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

</body>


<!-- Mirrored from ableproadmin.com/elements/ac_rangeslider.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:25 GMT -->
</html>