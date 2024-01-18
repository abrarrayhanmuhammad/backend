<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ableproadmin.com/elements/bc_extra.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:20 GMT -->
<head>
  <title>Utilities | Able Pro Dashboard Template</title>
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
              <h2>Utilities</h2>
              <p class="text-muted">The utility API is a Sass-based tool to generate utility classes.</p>
              <div>
                <a class="btn btn-sm btn-light-dark" role="button" target="_blank" href="https://getbootstrap.com/docs/5.2/utilities/background/">
                  <i class="ti ti-external-link"></i>
                  Reference
                </a>
              </div>
            </div>

          </div>
          <!-- [ Main Content ] start -->
          <div class="row">
            <!-- [ Colored links ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Colored links <span class="badge bg-danger">NEW</span></h5>
                  <p class="mb-0">You can use the <code>.link-*</code> classes to colorize links. these classes have a
                    <code>:hover</code> and
                    <code>:focus</code> state.
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="me-3 link-primary">Primary link</a>
                  <a href="#" class="me-3 link-secondary">Secondary link</a>
                  <a href="#" class="me-3 link-success">Success link</a>
                  <a href="#" class="me-3 link-danger">Danger link</a>
                  <a href="#" class="me-3 link-warning">Warning link</a>
                  <a href="#" class="me-3 link-info">Info link</a>
                  <a href="#" class="me-3 link-dark">Dark link</a>
                  <div class="bg-dark px-3 py-2 d-inline-block rounded">
                    <a href="#" class="me-0 link-light">Light link</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Colored links ] end -->
            <!-- [ Text selection ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Text selection <span class="badge bg-danger">NEW</span></h5>
                  <p class="mb-0">Change the way in which the content is selected when the user interacts with it. </p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <label class="col-lg-2 col-sm-12 text-lg-end"><b>User select all</b></label>
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <p class="user-select-all">This paragraph will be entirely selected when clicked by the user.</p>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-lg-2 col-sm-12 text-lg-end"><b>User select auto</b></label>
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <p class="user-select-auto">This paragraph has default select behavior.</p>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-lg-2 col-sm-12 text-lg-end"><b>User select none</b></label>
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <p class="user-select-none">This paragraph will not be selectable when clicked by the user.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Text selection ] end -->
            <!-- [ Line height ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Line height <span class="badge bg-danger">NEW</span></h5>
                  <p class="mb-0">Change the line height with <code>.lh-*</code> utilities.</p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <label class="col-lg-2 col-sm-12 text-lg-end"><b>Line height 1</b></label>
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <p class="lh-1">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed
                        odio dui. Cras mattis pannenkoek purus sit
                        amet fermentum.</p>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-lg-2 col-sm-12 text-lg-end"><b>Line height small</b></label>
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <p class="lh-sm">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed
                        odio dui. Cras mattis pannenkoek purus sit
                        amet fermentum.</p>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-lg-2 col-sm-12 text-lg-end"><b>Line height base</b></label>
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <p class="lh-base">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec
                        sed odio dui. Cras mattis pannenkoek purus sit
                        amet fermentum.</p>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-lg-2 col-sm-12 text-lg-end"><b>Line height large</b></label>
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <p class="lh-lg">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed
                        odio dui. Cras mattis pannenkoek purus sit
                        amet fermentum.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Line height ] end -->
            <!-- [ Pointer events ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Pointer events <span class="badge bg-danger">NEW</span></h5>
                  <p class="mb-0">Bootstrap provides <code>pe-none</code> and <code>pe-auto</code> classes to prevent or
                    add element interactions.</p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <label class="col-lg-3 col-sm-12 text-lg-end"><b>Pointer events none</b></label>
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <p><a href="#" class="pe-none">This link</a> can not be clicked.</p>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-lg-3 col-sm-12 text-lg-end"><b>Pointer events auto</b></label>
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <p><a href="#" class="pe-auto">This link</a> can be clicked (this is default behaviour). </p>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-lg-3 col-sm-12 text-lg-end"><b>Pointer events combine</b></label>
                    <div class="col-lg-6 col-md-10 col-sm-12">
                      <p class="pe-none"><a href="#">This link</a> can not be clicked because the
                        <code>pointer-events</code> property is inherited from its parent.
                        However, <a href="#" class="pe-auto">this link</a> has a <code>pe-auto</code> class and can be
                        clicked.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Pointer events ] end -->
            <!-- [ Position values ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Position values <span class="badge bg-danger">NEW</span></h5>
                  <p class="mb-0">Arrange elements easily with the edge positioning utilities, The format is
                    <code>{property}-{position}</code>.</p>
                </div>
                <div class="card-body">
                  <div class="p-3 p-sm-5">
                    <div class="position-relative bg-body" style="height: 250px">
                      <div class="hei-40 wid-40 rounded bg-secondary position-absolute top-0 start-0"
                        data-bs-toggle="tooltip" title="position-absolute top-0 start-0"></div>
                      <div class="hei-40 wid-40 rounded bg-secondary position-absolute top-0 end-0"
                        data-bs-toggle="tooltip" title="position-absolute top-0 end-0"></div>
                      <div class="hei-40 wid-40 rounded bg-secondary position-absolute top-50 start-50"
                        data-bs-toggle="tooltip" title="position-absolute top-50 start-50"></div>
                      <div class="hei-40 wid-40 rounded bg-secondary position-absolute bottom-50 end-50"
                        data-bs-toggle="tooltip" title="position-absolute bottom-50 end-50"></div>
                      <div class="hei-40 wid-40 rounded bg-secondary position-absolute bottom-0 start-0"
                        data-bs-toggle="tooltip" title="position-absolute bottom-0 start-0"></div>
                      <div class="hei-40 wid-40 rounded bg-secondary position-absolute bottom-0 end-0"
                        data-bs-toggle="tooltip" title="position-absolute bottom-0 end-0"></div>
                    </div>
                  </div>
                  <hr>
                  <h5>Center elements</h5>
                  <p class="mb-0">In addition, you can also center the elements with the transform utility class
                    <code>.translate-middle</code>.</p>
                  <div class="p-3 p-sm-5">
                    <div class="position-relative bg-body" style="height: 250px">
                      <div class="hei-40 wid-40 rounded bg-secondary position-absolute top-0 start-0 translate-middle"
                        data-bs-toggle="tooltip" title="position-absolute top-0 start-0 translate-middle">
                      </div>
                      <div class="hei-40 wid-40 rounded bg-secondary position-absolute top-0 start-50 translate-middle"
                        data-bs-toggle="tooltip" title="position-absolute top-0 start-50 translate-middle">
                      </div>
                      <div class="hei-40 wid-40 rounded bg-secondary position-absolute top-0 start-100 translate-middle"
                        data-bs-toggle="tooltip" title="position-absolute top-0 start-100 translate-middle">
                      </div>
                      <div class="hei-40 wid-40 rounded bg-secondary position-absolute top-50 start-0 translate-middle"
                        data-bs-toggle="tooltip" title="position-absolute top-50 start-0 translate-middle">
                      </div>
                      <div class="hei-40 wid-40 rounded bg-secondary position-absolute top-50 start-50 translate-middle"
                        data-bs-toggle="tooltip" title="position-absolute top-50 start-50 translate-middle">
                      </div>
                      <div
                        class="hei-40 wid-40 rounded bg-secondary position-absolute top-50 start-100 translate-middle"
                        data-bs-toggle="tooltip" title="position-absolute top-50 start-100 translate-middle"></div>
                      <div class="hei-40 wid-40 rounded bg-secondary position-absolute top-100 start-0 translate-middle"
                        data-bs-toggle="tooltip" title="position-absolute top-100 start-0 translate-middle">
                      </div>
                      <div
                        class="hei-40 wid-40 rounded bg-secondary position-absolute top-100 start-50 translate-middle"
                        data-bs-toggle="tooltip" title="position-absolute top-100 start-50 translate-middle"></div>
                      <div
                        class="hei-40 wid-40 rounded bg-secondary position-absolute top-100 start-100 translate-middle"
                        data-bs-toggle="tooltip" title="position-absolute top-100 start-100 translate-middle"></div>
                    </div>
                  </div>
                  <hr>
                  <h5>Examples</h5>
                  <p class="mb-0">Here are some real life examples of these classes.</p>
                  <div class="p-3 p-sm-5 d-flex justify-content-around">
                    <button type="button" class="btn btn-primary position-relative">
                      Mails
                      <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+99
                        <span class="visually-hidden">unread messages</span></span>
                    </button>
                    <button type="button" class="btn btn-dark position-relative">
                      Marker
                      <svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill"
                        fill="#343a40" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                      </svg>
                    </button>
                    <button type="button" class="btn btn-primary position-relative">
                      Alerts
                      <span
                        class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span
                          class="visually-hidden">unread messages</span></span>
                    </button>
                  </div>
                  <hr>
                  <p class="mb-0">You can use these classes with existing components to create new ones. Remember that
                    you can extend its functionality by adding
                    entries to the <code>$position-values</code> variable.</p>
                  <div class="p-3 p-sm-5">
                    <div class="position-relative">
                      <div class="progress" style="height: 3px">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <button type="button"
                        class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
                        style="width: 2rem; height: 2rem">1</button>
                      <button type="button"
                        class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill"
                        style="width: 2rem; height: 2rem">2</button>
                      <button type="button"
                        class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"
                        style="width: 2rem; height: 2rem">3</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Position values ] end -->
            <!-- [ border ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Border</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <h5>Border color</h5>
                      <hr>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-primary"
                        data-bs-toggle="tooltip" title="border-primary"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-secondary"
                        data-bs-toggle="tooltip" title="border-secondary"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-success"
                        data-bs-toggle="tooltip" title="border-success"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-danger"
                        data-bs-toggle="tooltip" title="border-danger"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-warning"
                        data-bs-toggle="tooltip" title="border-warning"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-info"
                        data-bs-toggle="tooltip" title="border-info"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-light"
                        data-bs-toggle="tooltip" title="border-light"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-dark"
                        data-bs-toggle="tooltip" title="border-dark"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-white"
                        data-bs-toggle="tooltip" title="border-white"></span>
                    </div>
                    <div class="col-md-6 additive">
                      <h5 class="mt-5">Additive</h5>
                      <hr>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border-dark border"
                        data-bs-toggle="tooltip" title="border"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border-dark border-top"
                        data-bs-toggle="tooltip" title="border-top"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border-dark border-end"
                        data-bs-toggle="tooltip" title="border-end"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border-dark border-bottom"
                        data-bs-toggle="tooltip" title="border-bottom"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border-dark border-start"
                        data-bs-toggle="tooltip" title="border-start"></span>
                    </div>
                    <div class="col-sm-6">
                      <h5 class="mt-5">Subtractive</h5>
                      <hr>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-dark border-0"
                        data-bs-toggle="tooltip" title="border border-0"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-dark border-top-0"
                        data-bs-toggle="tooltip" title="border border-top-0"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-dark border-end-0"
                        data-bs-toggle="tooltip" title="border border-end-0"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-dark border-bottom-0"
                        data-bs-toggle="tooltip" title="border border-bottom-0"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-dark border-start-0"
                        data-bs-toggle="tooltip" title="border border-start-0"></span>
                    </div>
                    <div class="col-sm-6">
                      <h5 class="mt-5">Border width</h5>
                      <hr>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-dark border-1"
                        data-bs-toggle="tooltip" title="border border-1"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-dark border-2"
                        data-bs-toggle="tooltip" title="border border-2"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-dark border-3"
                        data-bs-toggle="tooltip" title="border border-3"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-dark border-4"
                        data-bs-toggle="tooltip" title="border border-4"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-dark border-5"
                        data-bs-toggle="tooltip" title="border border-5"></span>
                    </div>
                    <div class="col-sm-6">
                      <h5 class="mt-5">Border radius Sizes</h5>
                      <hr>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-dark rounded-sm"
                        data-bs-toggle="tooltip" title="rounded-sm"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-dark rounded-lg"
                        data-bs-toggle="tooltip" title="rounded-lg"></span>
                    </div>
                    <div class="col-sm-12">
                      <h5 class="mt-5">Border-radius</h5>
                      <hr>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-secondary rounded"
                        data-bs-toggle="tooltip" title="rounded"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-secondary rounded-top"
                        data-bs-toggle="tooltip" title="rounded-top"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-secondary rounded-right"
                        data-bs-toggle="tooltip" title="rounded-right"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-secondary rounded-bottom"
                        data-bs-toggle="tooltip" title="rounded-bottom"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-secondary rounded-left"
                        data-bs-toggle="tooltip" title="rounded-left"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-secondary rounded-circle"
                        data-bs-toggle="tooltip" title="rounded-circle"></span>
                      <span class="hei-75 wid-120 bg-body d-inline-block me-2 border border-secondary rounded-pill"
                        data-bs-toggle="tooltip" title="rounded-pill"></span>
                      <span class="hei-75 wid-75 bg-body d-inline-block me-2 border border-secondary rounded-0"
                        data-bs-toggle="tooltip" title="rounded-0"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ border ] end -->
            <!-- [ Utility class ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Utility class</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <h6 class="mb-0">Margin </h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1" title="margin-0">.m-0</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1" title="margin-5">.m-5</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-10">.m-10</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-15">.m-15</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-20">.m-20</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-25">.m-25</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-30">.m-30</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-35">.m-35</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-40">.m-40</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-45">.m-45</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-50">.m-50</label>
                      <h6 class="mb-0 mt-3">Margin top</h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-top-0">.m-t-0</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-top-5">.m-t-5</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-top-10">.m-t-10</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-top-15">.m-t-15</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-top-20">.m-t-20</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-top-25">.m-t-25</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-top-30">.m-t-30</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-top-35">.m-t-35</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-top-40">.m-t-40</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-top-45">.m-t-45</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-top-50">.m-t-50</label>
                      <h6 class="mb-0 mt-3">Margin bottom</h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-bottom-0">.m-b-0</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-bottom-5">.m-b-5</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-bottom-10">.m-b-10</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-bottom-15">.m-b-15</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-bottom-20">.m-b-20</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-bottom-25">.m-b-25</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-bottom-30">.m-b-30</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-bottom-35">.m-b-35</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-bottom-40">.m-b-40</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-bottom-45">.m-b-45</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-bottom-50">.m-b-50</label>
                      <h6 class="mb-0 mt-3">Margin left</h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-left-0">.m-l-0</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-left-5">.m-l-5</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-left-10">.m-l-10</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-left-15">.m-l-15</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-left-20">.m-l-20</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-left-25">.m-l-25</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-left-30">.m-l-30</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-left-35">.m-l-35</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-left-40">.m-l-40</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-left-45">.m-l-45</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-left-50">.m-l-50</label>
                      <h6 class="mb-0 mt-3">Margin right</h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-right-0">.m-r-0</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-right-5">.m-r-5</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-right-10">.m-r-10</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-right-15">.m-r-15</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-right-20">.m-r-20</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-right-25">.m-r-25</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-right-30">.m-r-30</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-right-35">.m-r-35</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-right-40">.m-r-40</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-right-45">.m-r-45</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="margin-right-50">.m-r-50</label>
                    </div>
                    <div class="col-md-6">
                      <h6 class="mb-0">Padding</h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-0">.p-0</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-5">.p-5</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-10">.p-10</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-15">.p-15</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-20">.p-20</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-25">.p-25</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-30">.p-30</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-35">.p-35</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-40">.p-40</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-45">.p-45</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-50">.p-50</label>
                      <h6 class="mb-0 mt-3">Padding top</h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-top-0">.p-t-0</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-top-5">.p-t-5</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-top-10">.p-t-10</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-top-15">.p-t-15</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-top-20">.p-t-20</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-top-25">.p-t-25</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-top-30">.p-t-30</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-top-35">.p-t-35</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-top-40">.p-t-40</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-top-45">.p-t-45</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-top-50">.p-t-50</label>
                      <h6 class="mb-0 mt-3">Padding bottom</h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-bottom-0">.p-b-0</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-bottom-5">.p-b-5</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-bottom-10">.p-b-10</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-bottom-15">.p-b-15</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-bottom-20">.p-b-20</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-bottom-25">.p-b-25</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-bottom-30">.p-b-30</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-bottom-35">.p-b-35</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-bottom-40">.p-b-40</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-bottom-45">.p-b-45</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-bottom-50">.p-b-50</label>
                      <h6 class="mb-0 mt-3">Padding left</h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-left-0">.p-l-0</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-left-5">.p-l-5</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-left-10">.p-l-10</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-left-15">.p-l-15</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-left-20">.p-l-20</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-left-25">.p-l-25</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-left-30">.p-l-30</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-left-35">.p-l-35</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-left-40">.p-l-40</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-left-45">.p-l-45</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-left-50">.p-l-50</label>
                      <h6 class="mb-0 mt-3">Padding right</h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-right-0">.p-r-0</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-right-5">.p-r-5</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-right-10">.p-r-10</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-right-15">.p-r-15</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-right-20">.p-r-20</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-right-25">.p-r-25</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-right-30">.p-r-30</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-right-35">.p-r-35</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-right-40">.p-r-40</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-right-45">.p-r-45</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="padding-right-50">.p-r-50</label>
                    </div>
                    <div class="col-md-6">
                      <h6 class="mb-0 mt-3">Width </h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-20">.wid-20</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-25">.wid-25</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-30">.wid-30</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-35">.wid-35</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-40">.wid-40</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-45">.wid-45</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-50">.wid-50</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-55">.wid-55</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-60">.wid-60</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-65">.wid-65</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-70">.wid-70</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-75">.wid-75</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-80">.wid-80</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-85">.wid-85</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-90">.wid-90</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-95">.wid-95</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-100">.wid-100</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-105">.wid-105</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-110">.wid-110</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-115">.wid-115</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-120">.wid-120</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-125">.wid-125</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-130">.wid-130</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-135">.wid-135</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-140">.wid-140</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-145">.wid-145</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="width-150">.wid-150</label>
                    </div>
                    <div class="col-md-6">
                      <h6 class="mb-0 mt-3">Height </h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-20">.hei-20</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-25">.hei-25</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-30">.hei-30</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-35">.hei-35</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-40">.hei-40</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-45">.hei-45</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-50">.hei-50</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-55">.hei-55</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-60">.hei-60</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-65">.hei-65</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-70">.hei-70</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-75">.hei-75</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-80">.hei-80</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-85">.hei-85</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-90">.hei-90</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-95">.hei-95</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-100">.hei-100</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-105">.hei-105</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-110">.hei-110</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-115">.hei-115</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-120">.hei-120</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-125">.hei-125</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-130">.hei-130</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-135">.hei-135</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-140">.hei-140</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-145">.hei-145</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="height-150">.hei-150</label>
                    </div>
                    <div class="col-md-12">
                      <h6 class="mb-0 mt-3">Font-size </h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-10">.f-10</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-12">.f-12</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-14">.f-14</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-16">.f-16</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-18">.f-18</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-20">.f-20</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-22">.f-22</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-24">.f-24</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-26">.f-26</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-28">.f-28</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-30">.f-30</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-32">.f-32</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-34">.f-34</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-36">.f-36</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-38">.f-38</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-40">.f-40</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-42">.f-42</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-44">.f-44</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-46">.f-46</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-48">.f-48</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-50">.f-50</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-52">.f-52</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-54">.f-54</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-56">.f-56</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-58">.f-58</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-60">.f-60</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-62">.f-62</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-64">.f-64</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-66">.f-66</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-68">.f-68</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-70">.f-70</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-72">.f-72</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-74">.f-74</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-76">.f-76</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-78">.f-78</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-size-80">.f-80</label>
                    </div>
                    <div class="col-md-6">
                      <h6 class="mb-0 mt-3">Font weight </h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-weight-100">.f-w-100</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-weight-200">.f-w-200</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-weight-300">.f-w-300</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-weight-400">.f-w-400</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-weight-500">.f-w-500</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-weight-600">.f-w-600</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-weight-700">.f-w-700</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-weight-800">.f-w-800</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="font-weight-900">.f-w-900</label>
                    </div>
                    <div class="col-md-6">
                      <h6 class="mb-0 mt-3">Border width </h6>
                      <hr class="my-2">
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="border-width-1">.b-wid-1</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="border-width-2">.b-wid-2</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="border-width-3">.b-wid-3</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="border-width-4">.b-wid-4</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="border-width-5">.b-wid-5</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="border-width-6">.b-wid-6</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="border-width-7">.b-wid-7</label>
                      <label data-bs-toggle="tooltip" class="badge bg-light-secondary p-1"
                        title="border-width-8">.b-wid-8</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Utility class ] end -->
            <!-- [ shadows ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Shadows</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="shadow-none p-3 mb-5 bg-body rounded">No shadow</div>
                  <div class="shadow-sm p-3 mb-5 rounded">Small shadow</div>
                  <div class="shadow p-3 mb-5 rounded">Regular shadow</div>
                  <div class="shadow-lg p-3 mb-5 rounded">Larger shadow</div>
                </div>
              </div>
            </div>
            <!-- [ shadows ] end -->
            <!-- [ embeds ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Embeds</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="row justify-content-center">
                    <div class="col-md-8">
                      <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1jWCXJfxHQM?rel=0"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ embeds ] end -->
            <!-- [ aspect-ratios ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Aspect Ratios</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="row">
                    <div class="col-md-6">
                      <h5 class="mt-5">Aspect Ratios 21 by 9</h5>
                      <hr>
                      <div class="ratio ratio-21x9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1jWCXJfxHQM?rel=0"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h5 class="mt-5">Aspect Ratios 16 by 9</h5>
                      <hr>
                      <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1jWCXJfxHQM?rel=0"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h5 class="mt-5">Aspect Ratios 4 by 3</h5>
                      <hr>
                      <div class="ratio ratio-4x3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1jWCXJfxHQM?rel=0"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h5 class="mt-5">Aspect Ratios 1 by 1</h5>
                      <hr>
                      <div class="ratio ratio-1x1">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1jWCXJfxHQM?rel=0"
                          allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ aspect-ratios ] end -->
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


<!-- Mirrored from ableproadmin.com/elements/bc_extra.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:20 GMT -->
</html>