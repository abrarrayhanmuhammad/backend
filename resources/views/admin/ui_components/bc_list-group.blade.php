<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from ableproadmin.com/elements/bc_list-group.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:19 GMT -->
<head>
    <title>List group | Able Pro Dashboard Template</title>
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
    <link href="css/plugins/animate.min.css" rel="stylesheet" type="text/css" />
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

    <link rel="stylesheet" href="css/uikit.css" />
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
              <!-- prettier-ignore -->
              <div class="col-md-10 col-xxl-9 mb-4">
                <a href="#" class="d-xl-none btn btn-dark mb-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_component"
                  ><i class="ti ti-menu-2"></i> Explore Components
                </a>
                <h2>List group</h2>
                <p class="text-muted">List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within.</p>
                <div>
                  <a class="btn btn-sm btn-light-dark" role="button" target="_blank" href="https://getbootstrap.com/docs/5.2/components/list-group/">
                    <i class="ti ti-external-link"></i>
                    Reference
                  </a>
                </div>
              </div>

            </div>
            <!-- [ Main Content ] start -->
            <div class="row">
              <!-- [ sample-page ] start -->
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Basic example</h5>
                    <small class="m-0">The most basic list group is an unordered list with list items and the proper classes</small>
                  </div>
                  <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Morbi leo risus</li>
                      <li class="list-group-item">Porta ac consectetur ac</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Active items</h5>
                    <small class="m-0"
                      >Add <code>.active</code> to a <code>.list-group-item</code> to indicate the current active selection.</small
                    >
                  </div>
                  <div class="card-body pc-component">
                    <ul class="list-group">
                      <li class="list-group-item active" aria-current="true">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Morbi leo risus</li>
                      <li class="list-group-item">Porta ac consectetur ac</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Disabled items</h5>
                    <small class="m-0"
                      >Add <code>.disabled</code> to a <code>.list-group-item</code> to make it <em>appear</em> disabled. Note that some
                      elements with <code>.disabled</code> will also require custom JavaScript to fully disable their click events (e.g.,
                      links).</small
                    >
                  </div>
                  <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item disabled" aria-disabled="true">Cras justo odio ( disabled )</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item disabled" aria-disabled="true">Morbi leo risus ( disabled )</li>
                      <li class="list-group-item">Porta ac consectetur ac</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>List groups [ Links ]</h5>
                    <small class="m-0"
                      >Use <code>&lt;a&gt;</code>s or <code>&lt;button&gt;</code>s to create <em>actionable</em> list group items with
                      hover, disabled, and active states by adding <code>.list-group-item-action</code>. We separate these pseudo-classes to
                      ensure list groups made of non-interactive elements (like <code>&lt;li&gt;</code>s or <code>&lt;div&gt;</code>s) don’t
                      provide a click or tap affordance.</small
                    >
                  </div>
                  <div class="card-body">
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action active" aria-current="true"> Cras justo odio </a>
                      <a href="#!" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                      <a href="#!" class="list-group-item list-group-item-action">Morbi leo risus</a>
                      <a href="#!" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                      <a href="#!" class="list-group-item list-group-item-action disabled" tabindex="-1">Vestibulum at eros ( disabled )</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>List groups [ Buttons ] </h5>
                    <small class="m-0"
                      >With <code>&lt;button&gt;</code>s, you can also make use of the
                      <code>disabled</code>
                      attribute instead of the
                      <code>.disabled</code> class. Sadly, <code>&lt;a&gt;</code>s don’t support the disabled attribute.</small
                    >
                  </div>
                  <div class="card-body">
                    <div class="list-group">
                      <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                        Cras justo odio
                      </button>
                      <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                      <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                      <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                      <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Flush</h5>
                    <small class="m-0"
                      >Add <code>.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge
                      in a parent container (e.g., cards).</small
                    >
                  </div>
                  <div class="card-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Morbi leo risus</li>
                      <li class="list-group-item">Porta ac consectetur ac</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Numbered</h5>
                    <small class="m-0"
                      >Add the <code>.list-group-numbered</code> modifier class (and optionally use an <code>&lt;ol&gt;</code> element) to
                      opt into numbered list group items.</small
                    >
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <ol class="list-group list-group-numbered">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Cras justo odio</li>
                        </ol>
                      </div>
                      <div class="col-md-6">
                        <ol class="list-group list-group-numbered">
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Subheading</div>
                              Cras justo odio
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Subheading</div>
                              Cras justo odio
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                              <div class="fw-bold">Subheading</div>
                              Cras justo odio
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Horizontal</h5>
                    <small class="m-0"
                      >Add <code>.list-group-horizontal</code> to change the layout of list group items from vertical to horizontal across
                      all breakpoints. Alternatively, choose a responsive variant <code>.list-group-horizontal-{sm|md|lg|xl|xxl}</code> to
                      make a list group horizontal starting at that breakpoint’s <code>min-width</code>. Currently
                      <strong>horizontal list groups cannot be combined with flush list groups.</strong></small
                    >
                  </div>
                  <div class="card-body">
                    <h6 class="mt-4">list group horizontal</h6>
                    <hr />
                    <ul class="list-group list-group-horizontal">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Morbi leo risus</li>
                    </ul>
                    <h6 class="mt-4">list group horizontal small(sm)</h6>
                    <hr />
                    <ul class="list-group list-group-horizontal-sm">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Morbi leo risus</li>
                    </ul>
                    <h6 class="mt-4">list group horizontal medium(md)</h6>
                    <hr />
                    <ul class="list-group list-group-horizontal-md">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Morbi leo risus</li>
                    </ul>
                    <h6 class="mt-4">list group horizontal large(lg)</h6>
                    <hr />
                    <ul class="list-group list-group-horizontal-lg">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Morbi leo risus</li>
                    </ul>
                    <h6 class="mt-4">list group horizontal extra large(xl)</h6>
                    <hr />
                    <ul class="list-group list-group-horizontal-xl">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Morbi leo risus</li>
                    </ul>
                    <h6 class="mt-4">list group horizontal double extra large(xxl)</h6>
                    <hr />
                    <ul class="list-group list-group-horizontal-xxl">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Morbi leo risus</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Contextual classes</h5>
                    <small class="m-0">Use contextual classes to style list items with a stateful background and color.</small>
                  </div>
                  <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                      <li class="list-group-item list-group-item-secondary">A simple secondary list group item </li>
                      <li class="list-group-item list-group-item-success">A simple success list group item</li>
                      <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                      <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                      <li class="list-group-item list-group-item-info">A simple info list group item</li>
                      <li class="list-group-item list-group-item-light">A simple light list group item</li>
                      <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Contextual classes [ links ]</h5>
                    <small class="m-0"
                      >Contextual classes also work with <code>.list-group-item-action</code>. Note the addition of the hover styles here
                      not present in the previous example. Also supported is the <code>.active</code> state; apply it to indicate an active
                      selection on a contextual list group item.</small
                    >
                  </div>
                  <div class="card-body">
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-primary"
                        >A simple primary list group item</a
                      >
                      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"
                        >A simple secondary list group item</a
                      >
                      <a href="#" class="list-group-item list-group-item-action list-group-item-success"
                        >A simple success list group item</a
                      >
                      <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-warning"
                        >A simple warning list group item</a
                      >
                      <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>With badges</h5>
                    <small class="m-0">Add badges to any list group item to show unread counts, activity, and more</small>
                  </div>
                  <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cras justo odio
                        <span class="badge bg-primary rounded-pill">14</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Dapibus ac facilisis in
                        <span class="badge bg-primary rounded-pill">2</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Morbi leo risus
                        <span class="badge bg-primary rounded-pill">1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Custom content</h5>
                    <small class="m-0">Add nearly any HTML within, even for linked list groups like the one below</small>
                  </div>
                  <div class="card-body">
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1 text-white">List group item heading</h5>
                          <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small>Donec id elit non mi porta.</small>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">List group item heading</h5>
                          <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">Donec id elit non mi porta.</small>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">List group item heading</h5>
                          <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">Donec id elit non mi porta.</small>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>List group Checkboxes</h5>
                    <small class="m-0">Place Bootstrap’s checkboxes and radios within list group items and customize as needed</small>
                  </div>
                  <div class="card-body">
                    <div class="list-group">
                      <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" />
                        Cras justo odio
                      </label>
                      <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" />
                        Dapibus ac facilisis in
                      </label>
                      <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" />
                        Morbi leo risus
                      </label>
                      <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" />
                        Porta ac consectetur ac
                      </label>
                      <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" />
                        Vestibulum at eros
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>List group radios</h5>
                    <small class="m-0">Place Bootstrap’s checkboxes and radios within list group items and customize as needed</small>
                  </div>
                  <div class="card-body">
                    <div class="list-group">
                      <label class="list-group-item">
                        <input class="form-check-input me-1" type="radio" value="" name="list_radio" />
                        Cras justo odio
                      </label>
                      <label class="list-group-item">
                        <input class="form-check-input me-1" type="radio" value="" name="list_radio" />
                        Dapibus ac facilisis in
                      </label>
                      <label class="list-group-item">
                        <input class="form-check-input me-1" type="radio" value="" name="list_radio" />
                        Morbi leo risus
                      </label>
                      <label class="list-group-item">
                        <input class="form-check-input me-1" type="radio" value="" name="list_radio" />
                        Porta ac consectetur ac
                      </label>
                      <label class="list-group-item">
                        <input class="form-check-input me-1" type="radio" value="" name="list_radio" />
                        Vestibulum at eros
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h5>JavaScript behavior</h5>
                    <small class="m-0"
                      >Use the tab JavaScript plugin—include it individually or through the compiled <code>bootstrap.js</code> file—to
                      extend our list group to create tabbable panes of local content.</small
                    >
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <div class="list-group" id="list-tab" role="tablist">
                          <a
                            class="list-group-item list-group-item-action active"
                            id="list-home-list"
                            data-bs-toggle="tab"
                            href="#list-home"
                            role="tab"
                            aria-controls="list-home"
                            >Home</a
                          >
                          <a
                            class="list-group-item list-group-item-action"
                            id="list-profile-list"
                            data-bs-toggle="tab"
                            href="#list-profile"
                            role="tab"
                            aria-controls="list-profile"
                            >Profile</a
                          >
                          <a
                            class="list-group-item list-group-item-action"
                            id="list-messages-list"
                            data-bs-toggle="tab"
                            href="#list-messages"
                            role="tab"
                            aria-controls="list-messages"
                            >Messages</a
                          >
                          <a
                            class="list-group-item list-group-item-action"
                            id="list-settings-list"
                            data-bs-toggle="tab"
                            href="#list-settings"
                            role="tab"
                            aria-controls="list-settings"
                            >Settings</a
                          >
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            <p
                              >Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor.
                              Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat nisi ad
                              non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt
                              incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi enim eu nostrud do
                              aliquip veniam minim.</p
                            >
                          </div>
                          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <p
                              >Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad
                              laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt
                              laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure
                              in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt
                              veniam ad.</p
                            >
                          </div>
                          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                            <p
                              >Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate.
                              Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat enim tempor.
                              Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint
                              voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt. Consectetur et fugiat anim do
                              eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.</p
                            >
                          </div>
                          <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                            <p
                              >Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut
                              dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est cupidatat
                              aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet
                              consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore dolor quis ex labore id
                              nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</p
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- [ sample-page ] end -->
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

<!-- Mirrored from ableproadmin.com/elements/bc_list-group.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:19 GMT -->
</html>
