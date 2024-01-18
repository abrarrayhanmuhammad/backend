<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ableproadmin.com/elements/bc_dropdowns.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:19 GMT -->
<head>
  <title>Dropdowns | Able Pro Dashboard Template</title>
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
              <h2>Dropdowns</h2>
              <p class="text-muted">Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin.</p>
              <div>
                <a class="btn btn-sm btn-light-dark" role="button" target="_blank" href="https://getbootstrap.com/docs/5.2/components/dropdowns/">
                  <i class="ti ti-external-link"></i>
                  Reference
                </a>
              </div>
            </div>

          </div>
          <!-- [ Main Content ] start -->
          <div class="row btn-page">
            <!-- [ basic-dropdown-button ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Basic Dropdown Button</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Primary</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Secondary</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Success</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Danger</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Warning</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Info</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ basic-dropdown-button ] end -->
            <!-- [ split-danger-button ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Split Dropdown Button</h5>
                </div>
                <div class="card-body pc-component">
                  <!-- Example split danger button -->
                  <div class="btn-group mb-2 me-2">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
                        Dropdown</span></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Separated link</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
                        Dropdown</span></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Separated link</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
                        Dropdown</span></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Separated link</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
                        Dropdown</span></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Separated link</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
                        Dropdown</span></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Separated link</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
                        Dropdown</span></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Separated link</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ split-danger-button ] end -->
            <!-- [ outline-dropdown-button ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Basic Outline Dropdown Button</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Primary</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Secondary</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-outline-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Success</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-outline-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Danger</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-outline-warning dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Warning</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-outline-info dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Info</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ outline-dropdown-button ] end -->
            <!-- [ split-dropdown-button ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Split Outline Dropdown Button</h5>
                </div>
                <div class="card-body pc-component">
                  <!-- Example split danger button -->
                  <div class="btn-group mb-2 me-2">
                    <button type="button" class="btn btn-outline-primary">Primary</button>
                    <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
                        Dropdown</span></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Separated link</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
                        Dropdown</span></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Separated link</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button type="button" class="btn btn-outline-success">Success</button>
                    <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
                        Dropdown</span></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Separated link</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button type="button" class="btn btn-outline-danger">Danger</button>
                    <button type="button" class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
                        Dropdown</span></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Separated link</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button type="button" class="btn btn-outline-warning">Warning</button>
                    <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
                        Dropdown</span></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Separated link</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button type="button" class="btn btn-outline-info">Info</button>
                    <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle
                        Dropdown</span></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Separated link</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ split-dropdown-button ] end -->
            <!-- [ basic-dropdown-button ] start -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5>Dark dropdowns</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Primary</button>
                    <div class="dropdown-menu dropdown-menu-dark">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Secondary</button>
                    <div class="dropdown-menu dropdown-menu-dark">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Success</button>
                    <div class="dropdown-menu dropdown-menu-dark">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Danger</button>
                    <div class="dropdown-menu dropdown-menu-dark">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Warning</button>
                    <div class="dropdown-menu dropdown-menu-dark">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Info</button>
                    <div class="dropdown-menu dropdown-menu-dark">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ basic-dropdown-button ] end -->
            <!-- [ Dropright ] start -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h5>Dropright</h5>
                </div>
                <div class="card-body pc-component">
                  <!-- Default dropend button -->
                  <div class="btn-group dropend">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false"> Dropright </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>

                  <!-- Split dropend button -->
                  <div class="btn-group dropend">
                    <button type="button" class="btn btn-light-primary"> Split dropup </button>
                    <button type="button" class="btn btn-light-primary dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Dropright ] end -->
            <!-- [ Dropleft ] start -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h5>Dropleft</h5>
                </div>
                <div class="card-body pc-component">
                  <!-- Default Dropleft button -->
                  <div class="btn-group dropstart">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false"> Dropup </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>

                  <!-- Split Dropleft button -->
                  <div class="btn-group dropstart">
                    <button type="button" class="btn btn-light-secondary"> Split dropup </button>
                    <button type="button" class="btn btn-light-secondary dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Dropleft ] end -->
            <!-- [ Dropup ] start -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h5>Dropup</h5>
                </div>
                <div class="card-body pc-component">
                  <!-- Default dropup button -->
                  <div class="btn-group dropup">
                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false"> Dropup </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>

                  <!-- Split dropup button -->
                  <div class="btn-group dropup">
                    <button type="button" class="btn btn-light-success"> Split dropup </button>
                    <button type="button" class="btn btn-light-success dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Dropup ] end -->
            <!-- [ Menu alignment ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Menu alignment</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Right-aligned menu example
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><button class="dropdown-item" type="button">Action</button></li>
                      <li><button class="dropdown-item" type="button">Another action</button></li>
                      <li><button class="dropdown-item" type="button">Something else here</button></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Menu alignment ] end -->
            <!-- [ Responsive alignment ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Responsive alignment</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="row">
                    <div class="col-12">
                      <h5>Left-aligned but right aligned when large screen</h5>
                      <div class="btn-group mb-2">
                        <button type="button" class="btn btn-light-secondary dropdown-toggle" data-bs-toggle="dropdown"
                          data-bs-display="static" aria-expanded="false">
                          Responsive Dropdown Example
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                          <li><button class="dropdown-item" type="button">Action</button></li>
                          <li><button class="dropdown-item" type="button">Another action</button></li>
                          <li><button class="dropdown-item" type="button">Something else here</button> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-12 mt-3">
                      <h5>Right-aligned but left aligned when large screen</h5>
                      <div class="btn-group mb-2">
                        <button type="button" class="btn btn-light-secondary dropdown-toggle" data-bs-toggle="dropdown"
                          data-bs-display="static" aria-expanded="false">
                          Responsive Dropdown Example
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                          <li><button class="dropdown-item" type="button">Action</button></li>
                          <li><button class="dropdown-item" type="button">Another action</button></li>
                          <li><button class="dropdown-item" type="button">Something else here</button> </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Responsive alignment ] end -->
            <!-- [ Alignment options ] start -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5>Alignment options</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group mr-2 mb-2">
                    <button class="btn btn-light-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>
                  <div class="btn-group mr-2 mb-2">
                    <button type="button" class="btn btn-light-primary dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Right-aligned menu
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>
                  <div class="btn-group mr-2 mb-2">
                    <button type="button" class="btn btn-light-primary dropdown-toggle" data-bs-toggle="dropdown"
                      data-bs-display="static" aria-expanded="false">
                      Left-aligned, right-aligned lg
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>
                  <div class="btn-group mr-2 mb-2">
                    <button type="button" class="btn btn-light-primary dropdown-toggle" data-bs-toggle="dropdown"
                      data-bs-display="static" aria-expanded="false">
                      Right-aligned, left-aligned lg
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>
                  <div class="btn-group mr-2 mb-2 dropstart">
                    <button type="button" class="btn btn-light-primary dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Dropstart
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>
                  <div class="btn-group mr-2 mb-2 dropend">
                    <button type="button" class="btn btn-light-primary dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Dropend
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>
                  <div class="btn-group mr-2 mb-2 dropup">
                    <button type="button" class="btn btn-light-primary dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Dropup
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Alignment options ] end -->
            <!-- [ Text ] start -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h5>Text</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-light-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Text</button>
                    <div class="p-4 dropdown-menu">
                      <h6>Some title example</h6>
                      <p class="mb-2 text-muted small">And this is more</p>
                      <p class="mb-0 text-muted">Some example text that's free-flowing within the dropdown menu.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Text ] end -->
            <!-- [ Forms ] start -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h5>Forms</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group mb-2 me-2">
                    <button class="btn btn-light-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Forms</button>
                    <div class="dropdown-menu" style="min-width: 16rem">
                      <form class="px-4 py-3">
                        <div class="mb-3">
                          <label for="exampleDropdownFormEmail1" class="form-label">Email Address</label>
                          <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                            placeholder="email@example.com">
                        </div>
                        <div class="mb-3">
                          <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleDropdownFormPassword1"
                            placeholder="Password">
                        </div>
                        <div class="mb-3">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">Remember me</label>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Sign in</button>
                        <button type="submit" class="btn btn-light btn-sm">Reset</button>
                      </form>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">New around here? Sign up</a>
                      <a class="dropdown-item" href="#">Forgot password?</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Forms ] end -->
            <!-- [ Offset & Reference ] start -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h5>Offset & Reference</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="dropdown me-1">
                    <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset"
                      data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                      Offset
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary">Reference</button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                      id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false"
                      data-bs-reference="parent">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Offset & Reference ] end -->
            <!-- [ Auto close behavior ] start -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5>Auto close behavior</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group mr-2 mb-2">
                    <button class="btn btn-light-info dropdown-toggle" type="button" id="defaultDropdown"
                      data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                      Default dropdown
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>

                  <div class="btn-group mr-2 mb-2">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuClickableOutside"
                      data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                      Clickable outside
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>

                  <div class="btn-group mr-2 mb-2">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuClickableInside"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                      Clickable inside
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>

                  <div class="btn-group mr-2 mb-2">
                    <button class="btn btn-light-info dropdown-toggle" type="button" id="dropdownMenuClickable"
                      data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                      Manual close
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickable">
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                      <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Auto close behavior ] end -->
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


<!-- Mirrored from ableproadmin.com/elements/bc_dropdowns.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:19 GMT -->
</html>