<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from ableproadmin.com/elements/bc_color.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:14 GMT -->
<head>
    <title>Color | Able Pro Dashboard Template</title>
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
                <h2>Color</h2>
                <p class="text-muted">Bootstrap is supported by an extensive color system that themes our styles and components. This enables more comprehensive customization and extension for any project.</p>
                <div>
                  <a class="btn btn-sm btn-light-dark" role="button" target="_blank" href="https://getbootstrap.com/docs/5.2/customize/color/">
                    <i class="ti ti-external-link"></i>
                    Reference
                  </a>
                </div>
              </div>

            </div>
            <!-- [ Main Content ] start -->
            <div class="row">
              <!-- [ link-button ] start -->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Background Color</h5>
                  </div>
                  <div class="card-body">
                    <div class="row g-1">
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block bg-blue-100" data-clipboard-text="bg-blue-100">bg-blue-100</div>
                        <div class="p-3 color-block bg-blue-200" data-clipboard-text="bg-blue-200">bg-blue-200</div>
                        <div class="p-3 color-block bg-blue-300" data-clipboard-text="bg-blue-300">bg-blue-300</div>
                        <div class="p-3 color-block bg-blue-400" data-clipboard-text="bg-blue-400">bg-blue-400</div>
                        <div class="p-3 color-block bg-blue-500" data-clipboard-text="bg-blue-500">bg-blue-500</div>
                        <div class="p-3 color-block bg-blue-600" data-clipboard-text="bg-blue-600">bg-blue-600</div>
                        <div class="p-3 color-block bg-blue-700" data-clipboard-text="bg-blue-700">bg-blue-700</div>
                        <div class="p-3 color-block bg-blue-800" data-clipboard-text="bg-blue-800">bg-blue-800</div>
                        <div class="p-3 color-block bg-blue-900" data-clipboard-text="bg-blue-900">bg-blue-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block bg-indigo-100" data-clipboard-text="bg-indigo-100">bg-indigo-100</div>
                        <div class="p-3 color-block bg-indigo-200" data-clipboard-text="bg-indigo-200">bg-indigo-200</div>
                        <div class="p-3 color-block bg-indigo-300" data-clipboard-text="bg-indigo-300">bg-indigo-300</div>
                        <div class="p-3 color-block bg-indigo-400" data-clipboard-text="bg-indigo-400">bg-indigo-400</div>
                        <div class="p-3 color-block bg-indigo-500" data-clipboard-text="bg-indigo-500">bg-indigo-500</div>
                        <div class="p-3 color-block bg-indigo-600" data-clipboard-text="bg-indigo-600">bg-indigo-600</div>
                        <div class="p-3 color-block bg-indigo-700" data-clipboard-text="bg-indigo-700">bg-indigo-700</div>
                        <div class="p-3 color-block bg-indigo-800" data-clipboard-text="bg-indigo-800">bg-indigo-800</div>
                        <div class="p-3 color-block bg-indigo-900" data-clipboard-text="bg-indigo-900">bg-indigo-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block bg-purple-100" data-clipboard-text="bg-purple-100">bg-purple-100</div>
                        <div class="p-3 color-block bg-purple-200" data-clipboard-text="bg-purple-200">bg-purple-200</div>
                        <div class="p-3 color-block bg-purple-300" data-clipboard-text="bg-purple-300">bg-purple-300</div>
                        <div class="p-3 color-block bg-purple-400" data-clipboard-text="bg-purple-400">bg-purple-400</div>
                        <div class="p-3 color-block bg-purple-500" data-clipboard-text="bg-purple-500">bg-purple-500</div>
                        <div class="p-3 color-block bg-purple-600" data-clipboard-text="bg-purple-600">bg-purple-600</div>
                        <div class="p-3 color-block bg-purple-700" data-clipboard-text="bg-purple-700">bg-purple-700</div>
                        <div class="p-3 color-block bg-purple-800" data-clipboard-text="bg-purple-800">bg-purple-800</div>
                        <div class="p-3 color-block bg-purple-900" data-clipboard-text="bg-purple-900">bg-purple-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block bg-pink-100" data-clipboard-text="bg-pink-100">bg-pink-100</div>
                        <div class="p-3 color-block bg-pink-200" data-clipboard-text="bg-pink-200">bg-pink-200</div>
                        <div class="p-3 color-block bg-pink-300" data-clipboard-text="bg-pink-300">bg-pink-300</div>
                        <div class="p-3 color-block bg-pink-400" data-clipboard-text="bg-pink-400">bg-pink-400</div>
                        <div class="p-3 color-block bg-pink-500" data-clipboard-text="bg-pink-500">bg-pink-500</div>
                        <div class="p-3 color-block bg-pink-600" data-clipboard-text="bg-pink-600">bg-pink-600</div>
                        <div class="p-3 color-block bg-pink-700" data-clipboard-text="bg-pink-700">bg-pink-700</div>
                        <div class="p-3 color-block bg-pink-800" data-clipboard-text="bg-pink-800">bg-pink-800</div>
                        <div class="p-3 color-block bg-pink-900" data-clipboard-text="bg-pink-900">bg-pink-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block bg-red-100" data-clipboard-text="bg-red-100">bg-red-100</div>
                        <div class="p-3 color-block bg-red-200" data-clipboard-text="bg-red-200">bg-red-200</div>
                        <div class="p-3 color-block bg-red-300" data-clipboard-text="bg-red-300">bg-red-300</div>
                        <div class="p-3 color-block bg-red-400" data-clipboard-text="bg-red-400">bg-red-400</div>
                        <div class="p-3 color-block bg-red-500" data-clipboard-text="bg-red-500">bg-red-500</div>
                        <div class="p-3 color-block bg-red-600" data-clipboard-text="bg-red-600">bg-red-600</div>
                        <div class="p-3 color-block bg-red-700" data-clipboard-text="bg-red-700">bg-red-700</div>
                        <div class="p-3 color-block bg-red-800" data-clipboard-text="bg-red-800">bg-red-800</div>
                        <div class="p-3 color-block bg-red-900" data-clipboard-text="bg-red-900">bg-red-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block bg-orange-100" data-clipboard-text="bg-orange-100">bg-orange-100</div>
                        <div class="p-3 color-block bg-orange-200" data-clipboard-text="bg-orange-200">bg-orange-200</div>
                        <div class="p-3 color-block bg-orange-300" data-clipboard-text="bg-orange-300">bg-orange-300</div>
                        <div class="p-3 color-block bg-orange-400" data-clipboard-text="bg-orange-400">bg-orange-400</div>
                        <div class="p-3 color-block bg-orange-500" data-clipboard-text="bg-orange-500">bg-orange-500</div>
                        <div class="p-3 color-block bg-orange-600" data-clipboard-text="bg-orange-600">bg-orange-600</div>
                        <div class="p-3 color-block bg-orange-700" data-clipboard-text="bg-orange-700">bg-orange-700</div>
                        <div class="p-3 color-block bg-orange-800" data-clipboard-text="bg-orange-800">bg-orange-800</div>
                        <div class="p-3 color-block bg-orange-900" data-clipboard-text="bg-orange-900">bg-orange-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block bg-yellow-100" data-clipboard-text="bg-yellow-100">bg-yellow-100</div>
                        <div class="p-3 color-block bg-yellow-200" data-clipboard-text="bg-yellow-200">bg-yellow-200</div>
                        <div class="p-3 color-block bg-yellow-300" data-clipboard-text="bg-yellow-300">bg-yellow-300</div>
                        <div class="p-3 color-block bg-yellow-400" data-clipboard-text="bg-yellow-400">bg-yellow-400</div>
                        <div class="p-3 color-block bg-yellow-500" data-clipboard-text="bg-yellow-500">bg-yellow-500</div>
                        <div class="p-3 color-block bg-yellow-600" data-clipboard-text="bg-yellow-600">bg-yellow-600</div>
                        <div class="p-3 color-block bg-yellow-700" data-clipboard-text="bg-yellow-700">bg-yellow-700</div>
                        <div class="p-3 color-block bg-yellow-800" data-clipboard-text="bg-yellow-800">bg-yellow-800</div>
                        <div class="p-3 color-block bg-yellow-900" data-clipboard-text="bg-yellow-900">bg-yellow-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block bg-green-100" data-clipboard-text="bg-green-100">bg-green-100</div>
                        <div class="p-3 color-block bg-green-200" data-clipboard-text="bg-green-200">bg-green-200</div>
                        <div class="p-3 color-block bg-green-300" data-clipboard-text="bg-green-300">bg-green-300</div>
                        <div class="p-3 color-block bg-green-400" data-clipboard-text="bg-green-400">bg-green-400</div>
                        <div class="p-3 color-block bg-green-500" data-clipboard-text="bg-green-500">bg-green-500</div>
                        <div class="p-3 color-block bg-green-600" data-clipboard-text="bg-green-600">bg-green-600</div>
                        <div class="p-3 color-block bg-green-700" data-clipboard-text="bg-green-700">bg-green-700</div>
                        <div class="p-3 color-block bg-green-800" data-clipboard-text="bg-green-800">bg-green-800</div>
                        <div class="p-3 color-block bg-green-900" data-clipboard-text="bg-green-900">bg-green-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block bg-teal-100" data-clipboard-text="bg-teal-100">bg-teal-100</div>
                        <div class="p-3 color-block bg-teal-200" data-clipboard-text="bg-teal-200">bg-teal-200</div>
                        <div class="p-3 color-block bg-teal-300" data-clipboard-text="bg-teal-300">bg-teal-300</div>
                        <div class="p-3 color-block bg-teal-400" data-clipboard-text="bg-teal-400">bg-teal-400</div>
                        <div class="p-3 color-block bg-teal-500" data-clipboard-text="bg-teal-500">bg-teal-500</div>
                        <div class="p-3 color-block bg-teal-600" data-clipboard-text="bg-teal-600">bg-teal-600</div>
                        <div class="p-3 color-block bg-teal-700" data-clipboard-text="bg-teal-700">bg-teal-700</div>
                        <div class="p-3 color-block bg-teal-800" data-clipboard-text="bg-teal-800">bg-teal-800</div>
                        <div class="p-3 color-block bg-teal-900" data-clipboard-text="bg-teal-900">bg-teal-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block bg-cyan-100" data-clipboard-text="bg-cyan-100">bg-cyan-100</div>
                        <div class="p-3 color-block bg-cyan-200" data-clipboard-text="bg-cyan-200">bg-cyan-200</div>
                        <div class="p-3 color-block bg-cyan-300" data-clipboard-text="bg-cyan-300">bg-cyan-300</div>
                        <div class="p-3 color-block bg-cyan-400" data-clipboard-text="bg-cyan-400">bg-cyan-400</div>
                        <div class="p-3 color-block bg-cyan-500" data-clipboard-text="bg-cyan-500">bg-cyan-500</div>
                        <div class="p-3 color-block bg-cyan-600" data-clipboard-text="bg-cyan-600">bg-cyan-600</div>
                        <div class="p-3 color-block bg-cyan-700" data-clipboard-text="bg-cyan-700">bg-cyan-700</div>
                        <div class="p-3 color-block bg-cyan-800" data-clipboard-text="bg-cyan-800">bg-cyan-800</div>
                        <div class="p-3 color-block bg-cyan-900" data-clipboard-text="bg-cyan-900">bg-cyan-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block bg-gray-100" data-clipboard-text="bg-gray-100">bg-gray-100</div>
                        <div class="p-3 color-block bg-gray-200" data-clipboard-text="bg-gray-200">bg-gray-200</div>
                        <div class="p-3 color-block bg-gray-300" data-clipboard-text="bg-gray-300">bg-gray-300</div>
                        <div class="p-3 color-block bg-gray-400" data-clipboard-text="bg-gray-400">bg-gray-400</div>
                        <div class="p-3 color-block bg-gray-500" data-clipboard-text="bg-gray-500">bg-gray-500</div>
                        <div class="p-3 color-block bg-gray-600" data-clipboard-text="bg-gray-600">bg-gray-600</div>
                        <div class="p-3 color-block bg-gray-700" data-clipboard-text="bg-gray-700">bg-gray-700</div>
                        <div class="p-3 color-block bg-gray-800" data-clipboard-text="bg-gray-800">bg-gray-800</div>
                        <div class="p-3 color-block bg-gray-900" data-clipboard-text="bg-gray-900">bg-gray-900</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card color-card">
                  <div class="card-header">
                    <h5>Text Color</h5>
                  </div>
                  <div class="card-body">
                    <div class="row g-1">
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block text-blue-100" data-clipboard-text="text-blue-100">text-blue-100</div>
                        <div class="p-3 color-block text-blue-200" data-clipboard-text="text-blue-200">text-blue-200</div>
                        <div class="p-3 color-block text-blue-300" data-clipboard-text="text-blue-300">text-blue-300</div>
                        <div class="p-3 color-block text-blue-400" data-clipboard-text="text-blue-400">text-blue-400</div>
                        <div class="p-3 color-block text-blue-500" data-clipboard-text="text-blue-500">text-blue-500</div>
                        <div class="p-3 color-block text-blue-600" data-clipboard-text="text-blue-600">text-blue-600</div>
                        <div class="p-3 color-block text-blue-700" data-clipboard-text="text-blue-700">text-blue-700</div>
                        <div class="p-3 color-block text-blue-800" data-clipboard-text="text-blue-800">text-blue-800</div>
                        <div class="p-3 color-block text-blue-900" data-clipboard-text="text-blue-900">text-blue-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block text-indigo-100" data-clipboard-text="text-indigo-100">text-indigo-100 </div>
                        <div class="p-3 color-block text-indigo-200" data-clipboard-text="text-indigo-200">text-indigo-200 </div>
                        <div class="p-3 color-block text-indigo-300" data-clipboard-text="text-indigo-300">text-indigo-300 </div>
                        <div class="p-3 color-block text-indigo-400" data-clipboard-text="text-indigo-400">text-indigo-400 </div>
                        <div class="p-3 color-block text-indigo-500" data-clipboard-text="text-indigo-500">text-indigo-500 </div>
                        <div class="p-3 color-block text-indigo-600" data-clipboard-text="text-indigo-600">text-indigo-600 </div>
                        <div class="p-3 color-block text-indigo-700" data-clipboard-text="text-indigo-700">text-indigo-700 </div>
                        <div class="p-3 color-block text-indigo-800" data-clipboard-text="text-indigo-800">text-indigo-800 </div>
                        <div class="p-3 color-block text-indigo-900" data-clipboard-text="text-indigo-900">text-indigo-900 </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block text-purple-100" data-clipboard-text="text-purple-100">text-purple-100 </div>
                        <div class="p-3 color-block text-purple-200" data-clipboard-text="text-purple-200">text-purple-200 </div>
                        <div class="p-3 color-block text-purple-300" data-clipboard-text="text-purple-300">text-purple-300 </div>
                        <div class="p-3 color-block text-purple-400" data-clipboard-text="text-purple-400">text-purple-400 </div>
                        <div class="p-3 color-block text-purple-500" data-clipboard-text="text-purple-500">text-purple-500 </div>
                        <div class="p-3 color-block text-purple-600" data-clipboard-text="text-purple-600">text-purple-600 </div>
                        <div class="p-3 color-block text-purple-700" data-clipboard-text="text-purple-700">text-purple-700 </div>
                        <div class="p-3 color-block text-purple-800" data-clipboard-text="text-purple-800">text-purple-800 </div>
                        <div class="p-3 color-block text-purple-900" data-clipboard-text="text-purple-900">text-purple-900 </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block text-pink-100" data-clipboard-text="text-pink-100">text-pink-100</div>
                        <div class="p-3 color-block text-pink-200" data-clipboard-text="text-pink-200">text-pink-200</div>
                        <div class="p-3 color-block text-pink-300" data-clipboard-text="text-pink-300">text-pink-300</div>
                        <div class="p-3 color-block text-pink-400" data-clipboard-text="text-pink-400">text-pink-400</div>
                        <div class="p-3 color-block text-pink-500" data-clipboard-text="text-pink-500">text-pink-500</div>
                        <div class="p-3 color-block text-pink-600" data-clipboard-text="text-pink-600">text-pink-600</div>
                        <div class="p-3 color-block text-pink-700" data-clipboard-text="text-pink-700">text-pink-700</div>
                        <div class="p-3 color-block text-pink-800" data-clipboard-text="text-pink-800">text-pink-800</div>
                        <div class="p-3 color-block text-pink-900" data-clipboard-text="text-pink-900">text-pink-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block text-red-100" data-clipboard-text="text-red-100">text-red-100</div>
                        <div class="p-3 color-block text-red-200" data-clipboard-text="text-red-200">text-red-200</div>
                        <div class="p-3 color-block text-red-300" data-clipboard-text="text-red-300">text-red-300</div>
                        <div class="p-3 color-block text-red-400" data-clipboard-text="text-red-400">text-red-400</div>
                        <div class="p-3 color-block text-red-500" data-clipboard-text="text-red-500">text-red-500</div>
                        <div class="p-3 color-block text-red-600" data-clipboard-text="text-red-600">text-red-600</div>
                        <div class="p-3 color-block text-red-700" data-clipboard-text="text-red-700">text-red-700</div>
                        <div class="p-3 color-block text-red-800" data-clipboard-text="text-red-800">text-red-800</div>
                        <div class="p-3 color-block text-red-900" data-clipboard-text="text-red-900">text-red-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block text-orange-100" data-clipboard-text="text-orange-100">text-orange-100 </div>
                        <div class="p-3 color-block text-orange-200" data-clipboard-text="text-orange-200">text-orange-200 </div>
                        <div class="p-3 color-block text-orange-300" data-clipboard-text="text-orange-300">text-orange-300 </div>
                        <div class="p-3 color-block text-orange-400" data-clipboard-text="text-orange-400">text-orange-400 </div>
                        <div class="p-3 color-block text-orange-500" data-clipboard-text="text-orange-500">text-orange-500 </div>
                        <div class="p-3 color-block text-orange-600" data-clipboard-text="text-orange-600">text-orange-600 </div>
                        <div class="p-3 color-block text-orange-700" data-clipboard-text="text-orange-700">text-orange-700 </div>
                        <div class="p-3 color-block text-orange-800" data-clipboard-text="text-orange-800">text-orange-800 </div>
                        <div class="p-3 color-block text-orange-900" data-clipboard-text="text-orange-900">text-orange-900 </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block text-yellow-100" data-clipboard-text="text-yellow-100">text-yellow-100 </div>
                        <div class="p-3 color-block text-yellow-200" data-clipboard-text="text-yellow-200">text-yellow-200 </div>
                        <div class="p-3 color-block text-yellow-300" data-clipboard-text="text-yellow-300">text-yellow-300 </div>
                        <div class="p-3 color-block text-yellow-400" data-clipboard-text="text-yellow-400">text-yellow-400 </div>
                        <div class="p-3 color-block text-yellow-500" data-clipboard-text="text-yellow-500">text-yellow-500 </div>
                        <div class="p-3 color-block text-yellow-600" data-clipboard-text="text-yellow-600">text-yellow-600 </div>
                        <div class="p-3 color-block text-yellow-700" data-clipboard-text="text-yellow-700">text-yellow-700 </div>
                        <div class="p-3 color-block text-yellow-800" data-clipboard-text="text-yellow-800">text-yellow-800 </div>
                        <div class="p-3 color-block text-yellow-900" data-clipboard-text="text-yellow-900">text-yellow-900 </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block text-green-100" data-clipboard-text="text-green-100">text-green-100 </div>
                        <div class="p-3 color-block text-green-200" data-clipboard-text="text-green-200">text-green-200 </div>
                        <div class="p-3 color-block text-green-300" data-clipboard-text="text-green-300">text-green-300 </div>
                        <div class="p-3 color-block text-green-400" data-clipboard-text="text-green-400">text-green-400 </div>
                        <div class="p-3 color-block text-green-500" data-clipboard-text="text-green-500">text-green-500 </div>
                        <div class="p-3 color-block text-green-600" data-clipboard-text="text-green-600">text-green-600 </div>
                        <div class="p-3 color-block text-green-700" data-clipboard-text="text-green-700">text-green-700 </div>
                        <div class="p-3 color-block text-green-800" data-clipboard-text="text-green-800">text-green-800 </div>
                        <div class="p-3 color-block text-green-900" data-clipboard-text="text-green-900">text-green-900 </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block text-teal-100" data-clipboard-text="text-teal-100">text-teal-100</div>
                        <div class="p-3 color-block text-teal-200" data-clipboard-text="text-teal-200">text-teal-200</div>
                        <div class="p-3 color-block text-teal-300" data-clipboard-text="text-teal-300">text-teal-300</div>
                        <div class="p-3 color-block text-teal-400" data-clipboard-text="text-teal-400">text-teal-400</div>
                        <div class="p-3 color-block text-teal-500" data-clipboard-text="text-teal-500">text-teal-500</div>
                        <div class="p-3 color-block text-teal-600" data-clipboard-text="text-teal-600">text-teal-600</div>
                        <div class="p-3 color-block text-teal-700" data-clipboard-text="text-teal-700">text-teal-700</div>
                        <div class="p-3 color-block text-teal-800" data-clipboard-text="text-teal-800">text-teal-800</div>
                        <div class="p-3 color-block text-teal-900" data-clipboard-text="text-teal-900">text-teal-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block text-cyan-100" data-clipboard-text="text-cyan-100">text-cyan-100</div>
                        <div class="p-3 color-block text-cyan-200" data-clipboard-text="text-cyan-200">text-cyan-200</div>
                        <div class="p-3 color-block text-cyan-300" data-clipboard-text="text-cyan-300">text-cyan-300</div>
                        <div class="p-3 color-block text-cyan-400" data-clipboard-text="text-cyan-400">text-cyan-400</div>
                        <div class="p-3 color-block text-cyan-500" data-clipboard-text="text-cyan-500">text-cyan-500</div>
                        <div class="p-3 color-block text-cyan-600" data-clipboard-text="text-cyan-600">text-cyan-600</div>
                        <div class="p-3 color-block text-cyan-700" data-clipboard-text="text-cyan-700">text-cyan-700</div>
                        <div class="p-3 color-block text-cyan-800" data-clipboard-text="text-cyan-800">text-cyan-800</div>
                        <div class="p-3 color-block text-cyan-900" data-clipboard-text="text-cyan-900">text-cyan-900</div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 color-block text-gray-100" data-clipboard-text="text-gray-100">text-gray-100</div>
                        <div class="p-3 color-block text-gray-200" data-clipboard-text="text-gray-200">text-gray-200</div>
                        <div class="p-3 color-block text-gray-300" data-clipboard-text="text-gray-300">text-gray-300</div>
                        <div class="p-3 color-block text-gray-400" data-clipboard-text="text-gray-400">text-gray-400</div>
                        <div class="p-3 color-block text-gray-500" data-clipboard-text="text-gray-500">text-gray-500</div>
                        <div class="p-3 color-block text-gray-600" data-clipboard-text="text-gray-600">text-gray-600</div>
                        <div class="p-3 color-block text-gray-700" data-clipboard-text="text-gray-700">text-gray-700</div>
                        <div class="p-3 color-block text-gray-800" data-clipboard-text="text-gray-800">text-gray-800</div>
                        <div class="p-3 color-block text-gray-900" data-clipboard-text="text-gray-900">text-gray-900</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- [ link-button ] end -->
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

    <script src="/js/plugins/clipboard.min.js"></script>
    <script>
      window.addEventListener('load', (event) => {
        var i_copy = new ClipboardJS('.color-block');
        i_copy.on('success', function (e) {
          var targetElement = e.trigger;
          let icon_badge = document.createElement('span');
          icon_badge.setAttribute('class', 'ic-badge badge bg-success float-end');
          icon_badge.innerHTML = 'copied';
          targetElement.append(icon_badge);
          setTimeout(function () {
            targetElement.children[0].remove();
          }, 3000);
        });

        i_copy.on('error', function (e) {
          var targetElement = e.trigger;
          let icon_badge = document.createElement('span');
          icon_badge.setAttribute('class', 'ic-badge badge bg-danger float-end');
          icon_badge.innerHTML = 'Error';
          targetElement.append(icon_badge);
          setTimeout(function () {
            targetElement.children[0].remove();
          }, 3000);
        });
      });
    </script>
  </body>

<!-- Mirrored from ableproadmin.com/elements/bc_color.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:14 GMT -->
</html>
