<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ableproadmin.com/elements/ac_syntax_highlighter.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:26 GMT -->
<head>
  <title>Syntax Highlighter | Able Pro Dashboard Template</title>
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
  <!-- prism css -->
  <link rel="stylesheet" href="css/plugins/prism-coy.css">
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
              <h2>Syntax Highlighter</h2>
              <p class="text-muted">Prism is a lightweight, extensible syntax highlighter, built with modern web standards in mind. It’s used in millions of websites, including some of those you visit daily.</p>
              <div>
                <a class="btn btn-sm btn-light-dark" role="button" target="_blank" href="https://prismjs.com/">
                  <i class="ti ti-external-link"></i>
                  Reference
                </a>
              </div>
            </div>

          </div>
          <!-- [ Main Content ] start -->
          <div class="row">
            <!-- [ Basic-Usage ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Basic Usage</h5>
                </div>
                <div class="card-body">
                  <p>The recommended way to mark up a code block (both for semantics and for Prism) is a
                    <code>&lt;pre&gt;</code> element with
                    a element <code>&lt;code&gt;</code> inside, like so:</p>
                  <h6 class="m-t-20 f-w-600">Code:</h6>
                  <pre>
                                            <code class="language-markup">
&lt;pre&gt;
    &lt;code class="language-css"&gt;
        p {
            color: #1abc9c
        }
    &lt;/code&gt;
&lt;/pre&gt;
                                            </code>
                                        </pre>
                </div>
              </div>
            </div>
            <!-- [ Basic-Usage ] end -->

            <!-- [ HTms-Markup ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>HTML Markup</h5>
                </div>
                <div class="card-body">
                  <p>Use the following code to use HTML syntax highlighter.</p>
                  <h6 class="m-t-20 f-w-600">Usage:</h6>
                  <pre>
                                                <code class="language-markup">
&lt;pre&gt;
    &lt;code class="language-markup"&gt;
        HTML CODE ...
    &lt;/code&gt;
&lt;/pre&gt;
                                                </code>
                                            </pre>
                  <h6 class="m-t-20 f-w-600">Example:</h6>
                  <pre>
                                                <code class="language-markup">
&lt;div class="card"&gt;
    &lt;div class="card-header"&gt;
        &lt;h5&gt;Hello card&lt;/h5&gt;
        &lt;span&gt; lorem ipsum dolor sit amet, consectetur adipisicing elit&lt;/span&gt;
        &lt;div class="card-header-right"&gt;
            &lt;i class="icofont icofont-rounded-down"&gt;&lt;/i&gt;
            &lt;i class="icofont icofont-refresh"&gt;&lt;/i&gt;
            &lt;i class="icofont icofont-close-circled"&gt;&lt;/i&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="card-body"&gt;
        &lt;p&gt;
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor."
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                </div>
              </div>
            </div>
            <!-- [ HTms-Markup ] end -->

            <!-- [ Css-Markup ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>CSS Markup</h5>
                </div>
                <div class="card-body">
                  <p>Use the following code to use HTML syntax highlighter.</p>
                  <h6 class="m-t-20 f-w-600">Usage:</h6>
                  <pre>
                                            <code class="language-markup">
&lt;pre&gt;
    &lt;code class="language-css"&gt;
        CSS CODE ...
    &lt;/code&gt;
&lt;/pre&gt;
                                            </code>
                                        </pre>
                  <h6 class="m-t-20 f-w-600">Example:</h6>
                  <pre>
                                            <code class="language-css">
a:active{
    color:#1abc9c;
}
p{
    font-size:13px;
}
.btn-primary{
    color: #1abc9c;
    background-color: #fff;
}
.label-primary {
    background-color: #1abc9c;
}
.badge-primary {
    background-color: #1abc9c;
}
.bg-primary {
    background-color: #1abc9c !important;
    color: #fff;
}
.panel-primary {
    border-color: #1abc9c;
}
                                            </code>
                                        </pre>
                </div>
              </div>
            </div>
            <!-- [ Css-Markup ] end -->

            <!-- [ Line-Number ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Line Number</h5>
                </div>
                <div class="card-body">
                  <p>Line number at the beginning of code lines.</p>
                  <p>Obviously, this is supposed to work only for code blocks (<code>&lt;pre&gt;&lt;code&gt;</code>) and
                    not for inline code.
                    Add class line-numbers to your desired <code>&lt;pre&gt;</code> and line-numbers plugin will take
                    care.</p>
                  <p>Optional: You can specify the data-start (Number) attribute on the <code>&lt;pre&gt;</code>
                    element. It will shift the
                    line counter.</p>
                  <h6 class="m-t-20 f-w-600">Usage:</h6>
                  <pre class="line-numbers language-js">
                                            <code class=" language-js">
&lt;pre class="line-numbers"&gt;
    &lt;code class="language-css"&gt;
        p {
            color: red;
        }

    &lt;/code&gt;
&lt;/pre&gt;
                                            </code>
                                        </pre>
                  <h6 class="m-t-20 f-w-600">Example:</h6>
                  <pre class="line-numbers">
                                            <code class="language-js">
(function() {
    if (typeof self==='undefined' || !self.Prism || !self.document) {
        return;
    }
});
                                            </code>
                                        </pre>
                </div>
              </div>
            </div>
            <!-- [ Line-Number ] end -->

            <!-- [ Line-Highlight ] start -->
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Line Highlight</h5>
                </div>
                <div class="card-body">
                  <p>Highlights specific lines and/or line ranges.</p>
                  <p>You specify the lines to be highlighted through the data-line attribute on the
                    <code>&lt;pre&gt;</code> element, in the
                    following simple format:</p>
                  <ol>
                    <li>A single number refers to the line with that number</li>
                    <li>Ranges are denoted by two numbers, separated with a hyphen (-)</li>
                    <li>Multiple line numbers or ranges are separated by commas.</li>
                    <li>Whitespace is allowed anywhere and will be stripped off.</li>
                  </ol>
                  <h6 class="m-t-20 f-w-600">Usage:</h6>
                  <pre>
                                            <code class="language-markup">
&lt;pre data-line="2,4, 8-10"&gt;
    &lt;code class="language-css"&gt;
        p {
            color: red
        }
    &lt;/code&gt;
&lt;/pre&gt;
                                            </code>
                                        </pre>
                  <h6 class="m-t-20 f-w-600">Example:</h6>
                  <pre data-line="2,4,7-9">
											<code class="language-css">
pre.line-numbers {
    position: relative;
    padding-left: 3.8em;
    counter-reset: linenumber;
}

pre.line-numbers > code {
    position: relative;
}

.line-numbers .line-numbers-rows {
    position: absolute;
    pointer-events: none;
    top: 0;
    font-size: 100%;
    left: -3.8em;
    width: 3em;
    /* works for line-numbers below 1000 lines */
    letter-spacing: -1px;
    border-end: 1px solid #999;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
                                            </code>
                                        </pre>
                </div>
              </div>
            </div>
            <!-- [ Line-Highlight ] end -->
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
  <!-- prism Js -->
  <script src="/js/plugins/prism.js"></script>
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


<!-- Mirrored from ableproadmin.com/elements/ac_syntax_highlighter.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:35:27 GMT -->
</html>