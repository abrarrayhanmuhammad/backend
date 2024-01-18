<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ableproadmin.com/elements/bc_button.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:14 GMT -->
<head>
  <title>Button | Able Pro Dashboard Template</title>
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
              <h2>Button</h2>
              <p class="text-muted">Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
              <div>
                <a class="btn btn-sm btn-light-dark" role="button" target="_blank" href="https://getbootstrap.com/docs/5.2/components/buttons/">
                  <i class="ti ti-external-link"></i>
                  Reference
                </a>
              </div>
            </div>

          </div>
          <!-- [ Main Content ] start -->
          <div class="row btn-page">
            <!-- [ default-button ] start -->
            <div class="col-sm-6">
              <div class="card">
                <div class="card-header">
                  <h5>Default</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>
                    <button type="button" class="btn btn-link">Link</button>
                  </div>
                  <div class="d-grid gap-2 mt-2">
                    <button class="btn btn-primary" type="button">Block Level Button</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ default-button ] end -->
            <!-- [ light-button ] start -->
            <div class="col-sm-6">
              <div class="card">
                <div class="card-header">
                  <h5>Light</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-light-primary">Primary</button>
                    <button type="button" class="btn btn-light-secondary">Secondary</button>
                    <button type="button" class="btn btn-light-success">Success</button>
                    <button type="button" class="btn btn-light-danger">Danger</button>
                    <button type="button" class="btn btn-light-warning text-dark">Warning</button>
                    <button type="button" class="btn btn-light-info">Info</button>
                    <button type="button" class="btn btn-light-dark">Dark</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ light-button ] end -->
            <!-- [ link-button ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Link</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-primary" role="button" href="#">Primary link</a>
                    <a class="btn btn-primary disabled" tabindex="-1" role="button"
                      href="#">Disabled Primary link</a>
                    <a class="btn btn-link-success" role="button" href="#">Light Success link</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ link-button ] end -->
            <!-- [ outline-button ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Outline</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-outline-primary">Primary</button>
                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    <button type="button" class="btn btn-outline-success">Success</button>
                    <button type="button" class="btn btn-outline-danger">Danger</button>
                    <button type="button" class="btn btn-outline-warning">Warning</button>
                    <button type="button" class="btn btn-outline-info">Info</button>
                    <button type="button" class="btn btn-outline-dark">Dark</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ outline-button ] end -->
            <!-- [ disabled-button ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Disabled Button</h5>
                </div>
                <div class="card-body pc-component">
                  <p>use <code>.disabled</code> in class <code>.btn</code> class to get Disabled button</p>
                  <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn disabled btn-primary">Primary</button>
                    <button type="button" class="btn disabled btn-secondary">Secondary</button>
                    <button type="button" class="btn disabled btn-success">Success</button>
                    <button type="button" class="btn disabled btn-danger">Danger</button>
                    <button type="button" class="btn disabled btn-warning">Warning</button>
                    <button type="button" class="btn disabled btn-info">Info</button>
                    <button type="button" class="btn disabled btn-light">Light</button>
                    <button type="button" class="btn disabled btn-dark">Dark</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ disabled-button ] end -->
            <!-- [ default-shadow ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Shadow</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-shadow btn-primary">Primary</button>
                    <button type="button" class="btn btn-shadow btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-shadow btn-success">Success</button>
                    <button type="button" class="btn btn-shadow btn-danger">Danger</button>
                    <button type="button" class="btn btn-shadow btn-warning">Warning</button>
                    <button type="button" class="btn btn-shadow btn-info">Info</button>
                    <button type="button" class="btn btn-shadow btn-light">Light</button>
                    <button type="button" class="btn btn-shadow btn-dark">Dark</button>
                    <button type="button" class="btn btn-shadow btn-link">Link</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ default-shadow ] end -->
            <!-- [ size-button ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Sizes [ Large ]</h5>
                </div>
                <div class="card-body pc-component">
                  <p>use <code>.btn-lg</code> in class <code>.btn</code> class to get Large button</p>
                  <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                    <button type="button" class="btn btn-secondary btn-lg">Large button</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ size-button ] end -->
            <!-- [ size-small-button ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Sizes [ Small ]</h5>
                </div>
                <div class="card-body pc-component">
                  <p>use <code>.btn-sm</code> in class <code>.btn</code> class to get Small button</p>
                  <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                    <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ size-small-button ] end -->
          </div>
          <div class="row btn-page">
                
            <!-- [ button-icon ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Button With Icon</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary d-inline-flex"><i class="ti ti-thumb-up me-1"></i>Primary</button>
                    <button type="button" class="btn btn-secondary d-inline-flex"><i class="ti ti-camera me-1"></i>Secondary</button>
                    <button type="button" class="btn btn-success d-inline-flex"><i class="ti ti-circle-check me-1"></i>Success</button>
                    <button type="button" class="btn btn-danger d-inline-flex"><i class="ti ti-alert-triangle me-1"></i>Danger</button>
                    <button type="button" class="btn btn-warning d-inline-flex"><i class="ti ti-triangle me-1"></i>Warning</button>
                    <button type="button" class="btn btn-info d-inline-flex"><i class="ti ti-info-circle me-1"></i>Info</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ button-icon ] end -->
            <!-- [ button-outline ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Outline Icon Buttons</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-outline-primary d-inline-flex"><i class="ti ti-thumb-up me-1"></i>Primary</button>
                    <button type="button" class="btn btn-outline-secondary d-inline-flex"><i class="ti ti-camera me-1"></i>Secondary</button>
                    <button type="button" class="btn btn-outline-success d-inline-flex"><i class="ti ti-circle-check me-1"></i>Success</button>
                    <button type="button" class="btn btn-outline-danger d-inline-flex"><i class="ti ti-alert-triangle me-1"></i>Danger</button>
                    <button type="button" class="btn btn-outline-warning d-inline-flex"><i class="ti ti-triangle me-1"></i>Warning</button>
                    <button type="button" class="btn btn-outline-info d-inline-flex"><i class="ti ti-info-circle me-1"></i>Info</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ button-outline ] end -->
            <!-- [ only-icon ] start -->
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h5>Button Icon</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="row">
                    <div class="col-lg-6">
                      <h5>Basic</h5>
                      <div class="d-flex flex-wrap gap-2 mb-4">
                        <button type="button" class="btn btn-icon btn-primary"><i class="ti ti-thumb-up"></i></button>
                        <button type="button" class="btn btn-icon btn-secondary"><i class="ti ti-camera"></i></button>
                        <button type="button" class="btn btn-icon btn-success"><i class="ti ti-circle-check"></i></button>
                        <button type="button" class="btn btn-icon btn-danger"><i class="ti ti-alert-triangle"></i></button>
                        <button type="button" class="btn btn-icon btn-warning"><i class="ti ti-triangle"></i></button>
                        <button type="button" class="btn btn-icon btn-info"><i class="ti ti-info-circle"></i></button>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <h5>Light</h5>
                      <div class="d-flex flex-wrap gap-2 mb-4">
                        <button type="button" class="btn btn-icon btn-light-primary"><i class="ti ti-thumb-up"></i></button>
                        <button type="button" class="btn btn-icon btn-light-secondary"><i class="ti ti-camera"></i></button>
                        <button type="button" class="btn btn-icon btn-light-success"><i class="ti ti-circle-check"></i></button>
                        <button type="button" class="btn btn-icon btn-light-danger"><i class="ti ti-alert-triangle"></i></button>
                        <button type="button" class="btn btn-icon btn-light-warning"><i class="ti ti-triangle"></i></button>
                        <button type="button" class="btn btn-icon btn-light-info"><i class="ti ti-info-circle"></i></button>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <h5>Outline</h5>
                      <div class="d-flex flex-wrap gap-2 mb-4">
                        <button type="button" class="btn btn-icon btn-outline-primary"><i class="ti ti-thumb-up"></i></button>
                        <button type="button" class="btn btn-icon btn-outline-secondary"><i class="ti ti-camera"></i></button>
                        <button type="button" class="btn btn-icon btn-outline-success"><i class="ti ti-circle-check"></i></button>
                        <button type="button" class="btn btn-icon btn-outline-danger"><i class="ti ti-alert-triangle"></i></button>
                        <button type="button" class="btn btn-icon btn-outline-warning"><i class="ti ti-triangle"></i></button>
                        <button type="button" class="btn btn-icon btn-outline-info"><i class="ti ti-info-circle"></i></button>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <h5>Link</h5>
                      <div class="d-flex flex-wrap gap-2 mb-4">
                        <button type="button" class="btn btn-icon btn-link-primary"><i class="ti ti-thumb-up"></i></button>
                        <button type="button" class="btn btn-icon btn-link-secondary"><i class="ti ti-camera"></i></button>
                        <button type="button" class="btn btn-icon btn-link-success"><i class="ti ti-circle-check"></i></button>
                        <button type="button" class="btn btn-icon btn-link-danger"><i class="ti ti-alert-triangle"></i></button>
                        <button type="button" class="btn btn-icon btn-link-warning"><i class="ti ti-triangle"></i></button>
                        <button type="button" class="btn btn-icon btn-link-info"><i class="ti ti-info-circle"></i></button>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <h5>Size</h5>
                      <div class="d-flex flex-wrap gap-2 mb-4">
                        <button type="button" class="btn btn-icon btn-primary avtar-xl">A</button>
                        <button type="button" class="btn btn-icon btn-primary avtar-l">A</button>
                        <button type="button" class="btn btn-icon btn-primary">A</button>
                        <button type="button" class="btn btn-icon btn-primary avtar-s">A</button>
                        <button type="button" class="btn btn-icon btn-primary avtar-xs">A</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ only-icon ] end -->
          </div>
          <div class="row btn-page">
            <!-- [ basic-button-group ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Basic Button Group</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Left</button>
                    <button type="button" class="btn btn-primary">Middle</button>
                    <button type="button" class="btn btn-primary">Right</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ basic-button-group ] end -->
            <!-- [ button-toolbar ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Button Toolbar</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-toolbar d-flex flex-wrap gap-2" role="toolbar">
                    <div class="btn-group" role="group">
                      <button type="button" class="btn btn-light-secondary">1</button>
                      <button type="button" class="btn btn-light-secondary">2</button>
                      <button type="button" class="btn btn-light-secondary">3</button>
                      <button type="button" class="btn btn-light-secondary">4</button>
                    </div>
                    <div class="btn-group" role="group">
                      <button type="button" class="btn btn-light-secondary">5</button>
                      <button type="button" class="btn btn-light-secondary">6</button>
                      <button type="button" class="btn btn-light-secondary">7</button>
                    </div>
                    <div class="btn-group" role="group">
                      <button type="button" class="btn btn-light-secondary">8</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ button-toolbar ] end -->
            <!-- [ button-toolbar-input ] start -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5>Button Toolbar Input</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="row">
                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group my-1 me-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-light-secondary">1</button>
                        <button type="button" class="btn btn-light-secondary">2</button>
                        <button type="button" class="btn btn-light-secondary">3</button>
                        <button type="button" class="btn btn-light-secondary">4</button>
                      </div>
                      <div class="input-group my-1">
                        <div class="input-group-text" id="btnGroupAddon">@</div>
                        <input type="text" class="form-control" placeholder="Input group example"
                          aria-label="Input group example" aria-describedby="btnGroupAddon">
                      </div>
                    </div>

                    <div class="btn-toolbar justify-content-between" role="toolbar"
                      aria-label="Toolbar with button groups">
                      <div class="btn-group my-1" role="group" aria-label="First group">
                        <button type="button" class="btn btn-light-secondary">1</button>
                        <button type="button" class="btn btn-light-secondary">2</button>
                        <button type="button" class="btn btn-light-secondary">3</button>
                        <button type="button" class="btn btn-light-secondary">4</button>
                      </div>
                      <div class="input-group my-1">
                        <div class="input-group-text" id="btnGroupAddon2">@</div>
                        <input type="text" class="form-control" placeholder="Input group example"
                          aria-label="Input group example" aria-describedby="btnGroupAddon2">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ button-toolbar-input ] end -->
            <!-- [ button-toolbar-size ] start -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5>Button Toolbar Size</h5>
                  <p>use <code>.btn-group-lg</code> in class <code>.btn-group</code> class to get Large size button group</p>
                  </div>
                <div class="card-body pc-component">
                  <div class="row">
                    <div class="col-xxl-4 col-md-12 mb-2">
                      <div class="btn-group btn-group-lg" role="group" aria-label="button groups xl">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mt-3 mb-2">
                      <div class="btn-group" role="group" aria-label="button groups">
                        <button type="button" class="btn btn-light-secondary">Left</button>
                        <button type="button" class="btn btn-light-secondary">Middle</button>
                        <button type="button" class="btn btn-light-secondary">Right</button>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mt-4 mb-2">
                      <div class="btn-group btn-group-sm" role="group" aria-label="button groups sm">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ button-toolbar-size ] end -->
            <!-- [ nesting ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Nesting</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-primary">1</button>
                    <button type="button" class="btn btn-primary">2</button>
                    <div class="btn-group" role="group">
                      <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </button>
                      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="#!">Dropdown link</a>
                        <a class="dropdown-item" href="#!">Dropdown link</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ nesting ] end -->
            <!-- [ vertical-variation ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Vertical Variation</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="row">
                    <div class="col-4">
                      <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn m-0 btn-secondary">1</button>
                        <button type="button" class="btn m-0 btn-secondary">2</button>
                        <button type="button" class="btn m-0 btn-secondary">3</button>
                      </div>
                    </div>
                    <div class="col-8">
                      <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn m-0 btn-secondary">1</button>
                        <button type="button" class="btn m-0 btn-secondary">2</button>
                        <div class="btn-group" role="group">
                          <button id="btnGroupDrop3" type="button" class="btn m-0 btn-secondary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                          <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                            <a class="dropdown-item" href="#!">Dropdown link</a>
                            <a class="dropdown-item" href="#!">Dropdown link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ vertical-variation ] end -->
            <!-- [ Mixed styles ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Mixed styles</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-danger">A</button>
                    <button type="button" class="btn btn-warning">A</button>
                    <button type="button" class="btn btn-primary">A</button>
                    <button type="button" class="btn btn-success">A</button>
                  </div>
                  <hr>
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-light-danger">A</button>
                    <button type="button" class="btn btn-light-warning text-dark">A</button>
                    <button type="button" class="btn btn-light-primary">A</button>
                    <button type="button" class="btn btn-light-success">A</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Mixed styles ] end -->
            <!-- [ Outlined styles ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Outlined styles</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-secondary">Left</button>
                    <button type="button" class="btn btn-outline-secondary">Middle</button>
                    <button type="button" class="btn btn-outline-secondary">Right</button>
                  </div>
                  <hr>
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-primary">Left</button>
                    <button type="button" class="btn btn-outline-success">Middle</button>
                    <button type="button" class="btn btn-outline-danger">Right</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Mixed styles ] end -->
            <!-- [ Checkbox button groups ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Checkbox button groups</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group" role="group">
                    <input type="checkbox" class="btn-check" id="btncheck1">
                    <label class="btn btn-outline-secondary" for="btncheck1">Checkbox 1</label>
                    <input type="checkbox" class="btn-check" id="btncheck2">
                    <label class="btn btn-outline-secondary" for="btncheck2">Checkbox 2</label>
                    <input type="checkbox" class="btn-check" id="btncheck3">
                    <label class="btn btn-outline-secondary" for="btncheck3">Checkbox 3</label>
                  </div>
                  <hr>
                  <div class="btn-group" role="group">
                    <input type="checkbox" class="btn-check" id="btnchecklite1">
                    <label class="btn btn-light-secondary" for="btnchecklite1">Checkbox 1</label>
                    <input type="checkbox" class="btn-check" id="btnchecklite2">
                    <label class="btn btn-light-secondary" for="btnchecklite2">Checkbox 2</label>
                    <input type="checkbox" class="btn-check" id="btnchecklite3">
                    <label class="btn btn-light-secondary" for="btnchecklite3">Checkbox 3</label>
                  </div>
                  <hr>
                  <div class="btn-group" role="group">
                    <input type="checkbox" class="btn-check" id="btnchecklitecol1">
                    <label class="btn btn-light-primary" for="btnchecklitecol1">Checkbox 1</label>
                    <input type="checkbox" class="btn-check" id="btnchecklitecol2">
                    <label class="btn btn-light-success" for="btnchecklitecol2">Checkbox 2</label>
                    <input type="checkbox" class="btn-check" id="btnchecklitecol3">
                    <label class="btn btn-light-danger" for="btnchecklitecol3">Checkbox 3</label>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Checkbox button groups ] end -->
            <!-- [ radio button groups ] start -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Radio button groups</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-group" role="group">
                    <input type="radio" class="btn-check" id="btnrdo1" name="btn_radio1">
                    <label class="btn btn-outline-secondary" for="btnrdo1">Radio 1</label>
                    <input type="radio" class="btn-check" id="btnrdo2" name="btn_radio1">
                    <label class="btn btn-outline-secondary" for="btnrdo2">Radio 2</label>
                    <input type="radio" class="btn-check" id="btnrdo3" name="btn_radio1">
                    <label class="btn btn-outline-secondary" for="btnrdo3">Radio 3</label>
                  </div>
                  <hr>
                  <div class="btn-group" role="group">
                    <input type="radio" class="btn-check" id="btnrdolite1" name="btn_radio2">
                    <label class="btn btn-light-secondary" for="btnrdolite1">Radio 1</label>
                    <input type="radio" class="btn-check" id="btnrdolite2" name="btn_radio2">
                    <label class="btn btn-light-secondary" for="btnrdolite2">Radio 2</label>
                    <input type="radio" class="btn-check" id="btnrdolite3" name="btn_radio2">
                    <label class="btn btn-light-secondary" for="btnrdolite3">Radio 3</label>
                  </div>
                  <hr>
                  <div class="btn-group" role="group">
                    <input type="radio" class="btn-check" id="btnrdolitecol1" name="btn_radio3">
                    <label class="btn btn-light-primary" for="btnrdolitecol1">Radio 1</label>
                    <input type="radio" class="btn-check" id="btnrdolitecol2" name="btn_radio3">
                    <label class="btn btn-light-success" for="btnrdolitecol2">Radio 2</label>
                    <input type="radio" class="btn-check" id="btnrdolitecol3" name="btn_radio3">
                    <label class="btn btn-light-danger" for="btnrdolitecol3">Radio 3</label>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ radio button groups ] end -->
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


<!-- Mirrored from ableproadmin.com/elements/bc_button.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:14 GMT -->
</html>