<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  
<!-- Mirrored from ableproadmin.com/elements/icon-feather.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:10 GMT -->
<head>
    <title>Feather Icon Pack | Able Pro Dashboard Template</title>
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
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="https://ableproadmin.com/navigation/index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Icons</a></li>
                  <li class="breadcrumb-item" aria-current="page">Feather Icon</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Feather Icon</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ feather-icon ] start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Feather Icon</h5>
                <p>Use svg icon with <code>&lt;i data-feather="&lt;&lt; Copied code &gt;&gt;"&gt;</code> in you html code</p>
              </div>
              <div class="card-body text-center">
                <div class="row justify-content-center">
                  <div class="col-sm-6">
                    <input type="text" id="icon-search" class="form-control mb-4" placeholder="search . . " >
                  </div>
                </div>
                <div class="i-main" id="icon-wrapper"></div>
              </div>
            </div>
          </div>
          <!-- [ feather-icon ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
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


    <!-- [Page Specific JS] start -->
    <script src="/js/plugins/clipboard.min.js"></script>
    <script>
      var icon_list = [
        'alert-octagon',
        'alert-circle',
        'activity',
        'alert-triangle',
        'align-center',
        'airplay',
        'align-justify',
        'align-left',
        'align-right',
        'arrow-down-left',
        'arrow-down-right',
        'anchor',
        'aperture',
        'arrow-left',
        'arrow-right',
        'arrow-down',
        'arrow-up-left',
        'arrow-up-right',
        'arrow-up',
        'award',
        'bar-chart',
        'at-sign',
        'bar-chart-2',
        'battery-charging',
        'bell-off',
        'battery',
        'bluetooth',
        'bell',
        'book',
        'briefcase',
        'camera-off',
        'calendar',
        'bookmark',
        'box',
        'camera',
        'check-circle',
        'check',
        'check-square',
        'cast',
        'chevron-down',
        'chevron-left',
        'chevron-right',
        'chevron-up',
        'chevrons-down',
        'chevrons-right',
        'chevrons-up',
        'chevrons-left',
        'circle',
        'clipboard',
        'chrome',
        'clock',
        'cloud-lightning',
        'cloud-drizzle',
        'cloud-rain',
        'cloud-off',
        'codepen',
        'cloud-snow',
        'compass',
        'copy',
        'corner-down-right',
        'corner-down-left',
        'corner-left-down',
        'corner-left-up',
        'corner-up-left',
        'corner-up-right',
        'corner-right-down',
        'corner-right-up',
        'cpu',
        'credit-card',
        'crosshair',
        'disc',
        'delete',
        'download-cloud',
        'download',
        'droplet',
        'edit-2',
        'edit',
        'external-link',
        'eye',
        'feather',
        'facebook',
        'file-minus',
        'eye-off',
        'fast-forward',
        'file-text',
        'film',
        'file',
        'file-plus',
        'folder',
        'filter',
        'flag',
        'globe',
        'grid',
        'heart',
        'home',
        'github',
        'image',
        'inbox',
        'layers',
        'info',
        'instagram',
        'layout',
        'link-2',
        'life-buoy',
        'link',
        'log-in',
        'list',
        'lock',
        'log-out',
        'loader',
        'mail',
        'maximize-2',
        'map',
        'map-pin',
        'menu',
        'message-circle',
        'message-square',
        'minimize-2',
        'mic-off',
        'minus-circle',
        'mic',
        'minus-square',
        'minus',
        'moon',
        'monitor',
        'more-vertical',
        'more-horizontal',
        'move',
        'music',
        'navigation-2',
        'navigation',
        'octagon',
        'package',
        'pause-circle',
        'pause',
        'percent',
        'phone-call',
        'phone-forwarded',
        'phone-missed',
        'phone-off',
        'phone-incoming',
        'phone',
        'phone-outgoing',
        'pie-chart',
        'play-circle',
        'play',
        'plus-square',
        'plus-circle',
        'plus',
        'pocket',
        'printer',
        'power',
        'radio',
        'repeat',
        'refresh-ccw',
        'rewind',
        'rotate-ccw',
        'refresh-cw',
        'rotate-cw',
        'save',
        'search',
        'server',
        'scissors',
        'share-2',
        'share',
        'shield',
        'settings',
        'skip-back',
        'shuffle',
        'sidebar',
        'skip-forward',
        'slack',
        'slash',
        'smartphone',
        'square',
        'speaker',
        'star',
        'stop-circle',
        'sun',
        'sunrise',
        'tablet',
        'tag',
        'sunset',
        'target',
        'thermometer',
        'thumbs-up',
        'thumbs-down',
        'toggle-left',
        'toggle-right',
        'trash-2',
        'trash',
        'trending-up',
        'trending-down',
        'triangle',
        'type',
        'twitter',
        'upload',
        'umbrella',
        'upload-cloud',
        'unlock',
        'user-check',
        'user-minus',
        'user-plus',
        'user-x',
        'user',
        'users',
        'video-off',
        'video',
        'voicemail',
        'volume-x',
        'volume-2',
        'volume-1',
        'volume',
        'watch',
        'wifi',
        'x-square',
        'wind',
        'x',
        'x-circle',
        'zap',
        'zoom-in',
        'zoom-out',
        'command',
        'cloud',
        'hash',
        'headphones',
        'underline',
        'italic',
        'bold',
        'crop',
        'help-circle',
        'paperclip',
        'shopping-cart',
        'tv',
        'wifi-off',
        'minimize',
        'maximize',
        'gitlab',
        'sliders'
      ];
      for (var i = 0, l = icon_list.length; i < l; i++) {
        let icon_block = document.createElement('div');
        icon_block.setAttribute('class', 'i-block');
        icon_block.setAttribute('data-clipboard-text', icon_list[i]);
        icon_block.setAttribute('data-bs-toggle', 'tooltip');
        icon_block.setAttribute('data-filter', icon_list[i]);
        icon_block.setAttribute('title', icon_list[i]);

        let icon_main = document.createElement('i');
        icon_main.setAttribute('data-feather', icon_list[i]);
        icon_block.appendChild(icon_main);
        document.querySelector('#icon-wrapper').append(icon_block);
      }
      feather.replace();
      window.addEventListener('load', (event) => {
        var i_copy = new ClipboardJS('.i-block');
        i_copy.on('success', function (e) {
          var targetElement = e.trigger;
          let icon_badge = document.createElement('span');
          icon_badge.setAttribute('class', 'ic-badge badge bg-success');
          icon_badge.innerHTML = 'copied';
          targetElement.append(icon_badge);
          setTimeout(function () {
            targetElement.children[1].remove();
          }, 3000);
        });

        i_copy.on('error', function (e) {
          var targetElement = e.trigger;
          let icon_badge = document.createElement('span');
          icon_badge.setAttribute('class', 'ic-badge badge bg-danger');
          icon_badge.innerHTML = 'Error';
          targetElement.append(icon_badge);
          setTimeout(function () {
            targetElement.children[1].remove();
          }, 3000);
        });
        document.querySelector('#icon-search').addEventListener('keyup', function () {
          var g = document.querySelector('#icon-search').value.toLowerCase();
          var tc = document.querySelectorAll('.i-main .i-block');
          for (var i = 0; i < tc.length; i++) {
            var c = tc[i];
            var t = c.getAttribute('data-filter');
            if (t) {
              var s = t.toLowerCase();
            }
            if (s) {
              var n = s.indexOf(g);
              if (n !== -1) {
                c.style.display = 'inline-flex';
              } else {
                c.style.display = 'none';
              }
            }
          }
        });
      });
    </script>
    <!-- [Page Specific JS] end -->
  </body>
  <!-- [Body] end -->

<!-- Mirrored from ableproadmin.com/elements/icon-feather.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:10 GMT -->
</html>
