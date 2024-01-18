<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ableproadmin.com/elements/bc_modal.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:19 GMT -->
<head>
  <title>Modal | Able Pro Dashboard Template</title>
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
              <h2>Modal</h2>
              <p class="text-muted">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
              <div>
                <a class="btn btn-sm btn-light-dark" role="button" target="_blank" href="https://getbootstrap.com/docs/5.2/components/modal/">
                  <i class="ti ti-external-link"></i>
                  Reference
                </a>
              </div>
            </div>

          </div>
          <!-- [ Main Content ] start -->
          <div class="row">
            <!-- [ demo-modal ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Demo Modal</h5>
                </div>
                <div class="card-body">
                  <div class="bd-example-modal">
                    <div class="modal" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Modal Title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>Modal body text goes here.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary me-0">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pc-component">
                  <div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLiveLabel">Modal Title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Woohoo, you're reading this text in a modal!</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModalLive">Launch demo modal</button>
                </div>
              </div>
            </div>
            <!-- [ demo-modal ] end -->
            <!-- [ Scrolling-modal ] start -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Scrolling Long Content</h5>
                </div>
                <div class="card-body pc-component">
                  <div id="exampleModalLong" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Modal Title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModalLong">Launch demo modal</button>
                </div>
              </div>
            </div>
            <!-- [ Scrolling-modal ] end -->
            <!-- [ vertically-modal ] start -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Vertically Centered</h5>
                </div>
                <div class="card-body pc-component">
                  <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterTitle">Modal Title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCenter">Launch demo modal</button>
                </div>
              </div>
            </div>
            <!-- [ vertically-modal ] end -->
            <!-- [ tooltip-modal ] start -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Tooltips Modal</h5>
                </div>
                <div class="card-body pc-component">
                  <div id="exampleModalPopovers" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalPopoversLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalPopoversLabel">Modal Title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <h5>Tooltips in a Button</h5>
                          <p>This
                            <a href="#!" role="button" class="btn btn-secondary tooltip-test" data-bs-toggle="tooltip"
                              title="Button Tooltip" data-container="#exampleModalPopovers">button</a>
                            triggers a popover on click.
                          </p>
                          <hr>
                          <h5>Tooltips in a modal</h5>
                          <p><a href="#!" class="tooltip-test" data-bs-toggle="tooltip" title="Tooltip"
                              data-container="#exampleModalPopovers">This link</a>
                            and
                            <a href="#!" class="tooltip-test" data-bs-toggle="tooltip" title="Tooltip"
                              data-container="#exampleModalPopovers">that link</a>
                            have tooltips on hover.
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModalPopovers">Launch demo modal</button>
                </div>
              </div>
            </div>
            <!-- [ tooltip-modal ] end -->
            <!-- [ grid-modal ] start -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Using the Grid</h5>
                </div>
                <div class="card-body pc-component">
                  <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="gridModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="gridModalLabel">Grids in Modals</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="container-fluid bd-example-row">
                            <div class="row">
                              <div class="col-md-4">.col-md-4</div>
                              <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
                            </div>
                            <div class="row">
                              <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
                              <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
                            </div>
                            <div class="row">
                              <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
                            </div>
                            <div class="row">
                              <div class="col-sm-9">
                                Level 1: .col-sm-9
                                <div class="row">
                                  <div class="col-8 col-sm-6"> Level 2: .col-8 .col-sm-6 </div>
                                  <div class="col-4 col-sm-6"> Level 2: .col-4 .col-sm-6 </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#gridSystemModal">Launch demo modal</button>
                </div>
              </div>
            </div>
            <!-- [ grid-modal ] end -->
            <!-- [ optional-modal ] start -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Optional Sizes</h5>
                </div>
                <div class="card-body pc-component">
                  <button type="button" class="btn btn-primary mr-2 mb-2" data-bs-toggle="modal"
                    data-bs-target=".bd-example-modal-lg">Large modal</button>
                  <button type="button" class="btn btn-primary mr-2 mb-2" data-bs-toggle="modal"
                    data-bs-target=".bd-example-modal-sm">Small modal</button>
                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="myLargeModalLabel">Large Modal</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"> ... </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
                    aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="mySmallModalLabel">Small Modal</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"> ... </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ optional-modal ] end -->
            <!-- [ Toggle between modals ] start -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5>Toggle between modals</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalToggleLabel"><span class="badge bg-danger">1</span>
                            First Modal </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"> Show a second modal and hide this one with the button below. </div>
                        <div class="modal-footer">
                          <button class="btn btn-light-primary" data-bs-target="#exampleModalToggle2"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalToggleLabel2"><span class="badge bg-success">2</span>
                            Second Modal</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"> Hide this modal and show the first with the button below. </div>
                        <div class="modal-footer">
                          <button class="btn btn-light-secondary" data-bs-target="#exampleModalToggle"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Openfirst
                    modal</a>
                </div>
              </div>
            </div>
            <!-- [ Toggle between modals ] end -->

            <!-- [ Full screen modal ] start -->
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header">
                  <h5>Full screen modal</h5>
                </div>
                <div class="card-body pc-component">
                  <div class="btn-page">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                      data-bs-target="#exampleModalFullscreen">Full screen</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                      data-bs-target="#exampleModalFullscreenSm">Full screen below sm</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                      data-bs-target="#exampleModalFullscreenMd">Full screen below md</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                      data-bs-target="#exampleModalFullscreenLg">Full screen below lg</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                      data-bs-target="#exampleModalFullscreenXl">Full screen below xl</button>
                  </div>
                  <div class="modal fade" id="exampleModalFullscreen" tabindex="-1"
                    aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Full screen modal </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div class="modal-body">
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                            egestas eget quam. Morbi leo
                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus
                            vel augue laoreet rutrum
                            faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                            scelerisque nisl consectetur et. Donec
                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1"
                    aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-sm-down">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenSmLabel">Full screen below sm</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div class="modal-body"> ... </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1"
                    aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-md-down">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenMdLabel">Full screen below md</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div class="modal-body"> ... </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1"
                    aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-lg-down">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenLgLabel">Full screen below lg</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div class="modal-body"> ... </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1"
                    aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-xl-down">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenXlLabel">Full screen below xl</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div class="modal-body"> ... </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Full screen modal ] end -->
            <!-- [ varying-modal ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Varying Modal Content</h5>
                </div>
                <div class="card-body pc-component btn-page">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    data-bs-whatever="@mdo">Open modal for @mdo</button>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    data-bs-whatever="@fat">Open modal for @fat</button>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    data-bs-whatever="@getbootstrap">Open modal for @bootstrap</button>
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Recipient:</label>
                              <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Message:</label>
                              <textarea class="form-control" id="message-text"></textarea>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ varying-modal ] end -->
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
  <script>
    var exampleModal = document.getElementById('exampleModal');
    exampleModal.addEventListener('show.bs.modal', function (event) {
      // Button that triggered the modal
      var button = event.relatedTarget;
      // Extract info from data-bs-* attributes
      var recipient = button.getAttribute('data-bs-whatever');
      // If necessary, you could initiate an AJAX request here
      // and then do the updating in a callback.
      //
      // Update the modal's content.
      var modalTitle = exampleModal.querySelector('.modal-title');
      var modalBodyInput = exampleModal.querySelector('.modal-body input');

      modalTitle.textContent = 'New message to ' + recipient;
      modalBodyInput.value = recipient;
    });
  </script>
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


<!-- Mirrored from ableproadmin.com/elements/bc_modal.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:19 GMT -->
</html>