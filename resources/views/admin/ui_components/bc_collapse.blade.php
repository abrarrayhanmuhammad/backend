<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ableproadmin.com/elements/bc_collapse.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:14 GMT -->
<head>
  <title>Collapse | Able Pro Dashboard Template</title>
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
  <link href="css/plugins/animate.min.css" rel="stylesheet" type="text/css">
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
              <h2>Collapse</h2>
              <p class="text-muted">Toggle the visibility of content across your project with a few classes and our JavaScript plugins.</p>
              <div>
                <a class="btn btn-sm btn-light-dark" role="button" target="_blank" href="https://getbootstrap.com/docs/5.2/components/collapse/">
                  <i class="ti ti-external-link"></i>
                  Reference
                </a>
              </div>
            </div>

          </div>
          <!-- [ Main Content ] start -->
          <div class="row">
            <!-- [ basic-collapse ] start -->
            <div class="col-sm-12">
              <h5 class="mb-3">Basic Collapse</h5>
              <hr>
              <div class="pc-component">
                <div class="card">
                  <div class="card-header">
                    <a class="btn btn-primary m-t-5" data-bs-toggle="collapse" href="#collapseExample" role="button"
                      aria-expanded="false" aria-controls="collapseExample">Link with href</a>
                    <button class="btn btn-primary m-t-5" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Button
                      with data-bs-target</button>
                  </div>
                  <div class="collapse" id="collapseExample">
                    <div class="card-body">
                      <p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                        richardson ad squid. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ basic-collapse ] end -->
            <!-- [ multiple-collapse ] start -->
            <div class="col-sm-12 mb-3">
              <h5 class="mb-3">Multiple Targets</h5>
              <hr>
              <div class="pc-component">
                <a class="btn mb-1 btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                  aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                <button class="btn mb-1 btn-primary" type="button" data-bs-toggle="collapse"
                  data-bs-target="#multiCollapseExample2" aria-expanded="false"
                  aria-controls="multiCollapseExample2">Toggle second element</button>
                <button class="btn mb-1 btn-primary" type="button" data-bs-toggle="collapse"
                  data-bs-target=".multi-collapse" aria-expanded="false"
                  aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="collapse multi-collapse mt-2" id="multiCollapseExample1">
                      <div class="card">
                        <div class="card-body">
                          <p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                            richardson ad squid. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="collapse multi-collapse mt-2" id="multiCollapseExample2">
                      <div class="card">
                        <div class="card-body">
                          <p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                            richardson ad squid. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ multiple-collapse ] end -->
            <!-- [ accordion-collapse ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Accordion</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="accordion card" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Accordion Item #1
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is hidden by default, until the
                          collapse plugin adds the
                          appropriate classes that we use to style each element. These classes control the overall
                          appearance, as well as the showing
                          and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our
                          default variables. It's also
                          worth noting that just about any HTML can go within the <code>.accordion-body</code>, though
                          the transition does limit
                          overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Accordion Item #2
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                          collapse plugin adds the
                          appropriate classes that we use to style each element. These classes control the overall
                          appearance, as well as the showing
                          and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our
                          default variables. It's also
                          worth noting that just about any HTML can go within the <code>.accordion-body</code>, though
                          the transition does limit
                          overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Accordion Item #3
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                          collapse plugin adds the
                          appropriate classes that we use to style each element. These classes control the overall
                          appearance, as well as the showing
                          and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our
                          default variables. It's also
                          worth noting that just about any HTML can go within the <code>.accordion-body</code>, though
                          the transition does limit
                          overflow.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <h5 class="mt-4 mb-3">Accordion Flush</h5>
              <hr>
              <div class="card">
                <div class="card-body pc-component">
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Accordion Item #1
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                          terry richardson ad squid. 3 wolf moon officia aute,
                          non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
                          wolf moon tempor, sunt aliqua
                          put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                          helvetica, craft beer labore
                          wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                          Leggings occaecat craft beer
                          farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                          labore sustainable VHS.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Accordion Item #2
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                          terry richardson ad squid. 3 wolf moon officia aute,
                          non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
                          wolf moon tempor, sunt aliqua
                          put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                          helvetica, craft beer labore
                          wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                          Leggings occaecat craft beer
                          farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                          labore sustainable VHS.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseThree" aria-expanded="false"
                          aria-controls="flush-collapseThree">
                          Accordion Item #3
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                          terry richardson ad squid. 3 wolf moon officia aute,
                          non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
                          wolf moon tempor, sunt aliqua
                          put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                          helvetica, craft beer labore
                          wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                          Leggings occaecat craft beer
                          farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                          labore sustainable VHS.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ accordion-collapse ] end -->
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


<!-- Mirrored from ableproadmin.com/elements/bc_collapse.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:14 GMT -->
</html>