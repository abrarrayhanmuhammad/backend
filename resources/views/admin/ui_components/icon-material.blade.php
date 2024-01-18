<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  
<!-- Mirrored from ableproadmin.com/elements/icon-material.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:10 GMT -->
<head>
    <title>Material Icons Set | Able Pro Dashboard Template</title>
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
                  <li class="breadcrumb-item" aria-current="page">Material Icons</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Material Icons</h2>
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
                <h5>Material Icon</h5>
                <p
                  >Use material two tone icon with
                  <code>&lt;i class="material-icons-two-tone"&gt; &lt;&lt; Copied code &gt;&gt;&lt;/i&gt;</code> in you html code</p
                >
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
        '3d_rotation',
        'accessibility',
        'accessibility_new',
        'accessible',
        'account_balance',
        'account_balance_wallet',
        'account_box',
        'account_circle',
        'add_shopping_cart',
        'add_task',
        'addchart',
        'admin_panel_settings',
        'alarm',
        'alarm_add',
        'alarm_off',
        'alarm_on',
        'all_inbox',
        'all_out',
        'analytics',
        'anchor',
        'android',
        'announcement',
        'api',
        'app_blocking',
        'arrow_circle_down',
        'arrow_circle_up',
        'arrow_right_alt',
        'article',
        'aspect_ratio',
        'assessment',
        'assignment',
        'assignment_ind',
        'assignment_late',
        'assignment_return',
        'assignment_returned',
        'assignment_turned_in',
        'autorenew',
        'backup',
        'backup_table',
        'batch_prediction',
        'book',
        'book_online',
        'bookmark',
        'bookmark_border',
        'bookmarks',
        'bug_report',
        'build',
        'build_circle',
        'cached',
        'calendar_today',
        'calendar_view_day',
        'camera_enhance',
        'cancel_schedule_send',
        'card_giftcard',
        'card_membership',
        'card_travel',
        'change_history',
        'check_circle',
        'check_circle_outline',
        'chrome_reader_mode',
        'class',
        'close_fullscreen',
        'code',
        'comment_bank',
        'commute',
        'compare_arrows',
        'contact_page',
        'contact_support',
        'contactless',
        'copyright',
        'credit_card',
        'dashboard',
        'date_range',
        'delete',
        'delete_forever',
        'delete_outline',
        'description',
        'disabled_by_default',
        'dns',
        'done',
        'done_all',
        'done_outline',
        'donut_large',
        'donut_small',
        'drag_indicator',
        'dynamic_form',
        'eco',
        'eject',
        'euro_symbol',
        'event',
        'event_seat',
        'exit_to_app',
        'explore',
        'explore_off',
        'extension',
        'face',
        'fact_check',
        'favorite',
        'favorite_border',
        'feedback',
        'filter_alt',
        'find_in_page',
        'find_replace',
        'fingerprint',
        'flaky',
        'flight_land',
        'flight_takeoff',
        'flip_to_back',
        'flip_to_front',
        'g_translate',
        'gavel',
        'get_app',
        'gif',
        'grade',
        'grading',
        'group_work',
        'help',
        'help_center',
        'help_outline',
        'highlight_alt',
        'highlight_off',
        'history',
        'history_toggle_off',
        'home',
        'horizontal_split',
        'hourglass_disabled',
        'hourglass_empty',
        'hourglass_full',
        'http',
        'https',
        'important_devices',
        'info',
        'input',
        'integration_instructions',
        'invert_colors',
        'label',
        'label_important',
        'label_off',
        'language',
        'launch',
        'leaderboard',
        'line_style',
        'line_weight',
        'list',
        'lock',
        'lock_open',
        'login',
        'loyalty',
        'markunread_mailbox',
        'maximize',
        'mediation',
        'minimize',
        'model_training',
        'next_plan',
        'not_accessible',
        'not_started',
        'note_add',
        'offline_bolt',
        'offline_pin',
        'online_prediction',
        'opacity',
        'open_in_browser',
        'open_in_full',
        'open_in_new',
        'open_with',
        'outbond',
        'outlet',
        'pageview',
        'pan_tool',
        'payment',
        'pending',
        'pending_actions',
        'perm_camera_mic',
        'perm_contact_calendar',
        'perm_data_setting',
        'perm_device_information',
        'perm_identity',
        'perm_media',
        'perm_phone_msg',
        'perm_scan_wifi',
        'pets',
        'picture_in_picture',
        'picture_in_picture_alt',
        'plagiarism',
        'play_for_work',
        'polymer',
        'power_settings_new',
        'pregnant_woman',
        'preview',
        'print',
        'privacy_tip',
        'published_with_changes',
        'query_builder',
        'question_answer',
        'quickreply',
        'receipt',
        'record_voice_over',
        'redeem',
        'remove_shopping_cart',
        'reorder',
        'report_problem',
        'request_page',
        'restore',
        'restore_from_trash',
        'restore_page',
        'room',
        'rounded_corner',
        'rowing',
        'rule',
        'schedule',
        'search',
        'search_off',
        'settings',
        'settings_applications',
        'settings_backup_restore',
        'settings_bluetooth',
        'settings_brightness',
        'settings_cell',
        'settings_ethernet',
        'settings_input_antenna',
        'settings_input_component',
        'settings_input_composite',
        'settings_input_hdmi',
        'settings_input_svideo',
        'settings_overscan',
        'settings_phone',
        'settings_power',
        'settings_remote',
        'settings_voice',
        'shop',
        'shop_two',
        'shopping_bag',
        'shopping_basket',
        'shopping_cart',
        'smart_button',
        'source',
        'speaker_notes',
        'speaker_notes_off',
        'spellcheck',
        'star_rate',
        'stars',
        'sticky_note_2',
        'store',
        'subject',
        'subtitles_off',
        'supervised_user_circle',
        'supervisor_account',
        'support',
        'swap_horiz',
        'swap_horizontal_circle',
        'swap_vert',
        'swap_vertical_circle',
        'sync_alt',
        'system_update_alt',
        'tab',
        'tab_unselected',
        'table_view',
        'text_rotate_up',
        'text_rotate_vertical',
        'text_rotation_angledown',
        'text_rotation_angleup',
        'text_rotation_down',
        'text_rotation_none',
        'theaters',
        'thumb_down',
        'thumb_up',
        'thumbs_up_down',
        'timeline',
        'toc',
        'today',
        'toll',
        'touch_app',
        'tour',
        'track_changes',
        'translate',
        'trending_down',
        'trending_flat',
        'trending_up',
        'turned_in',
        'turned_in_not',
        'unpublished',
        'update',
        'update_disabled',
        'upgrade',
        'verified',
        'verified_user',
        'vertical_split',
        'view_agenda',
        'view_array',
        'view_carousel',
        'view_column',
        'view_day',
        'view_headline',
        'view_list',
        'view_module',
        'view_quilt',
        'view_sidebar',
        'view_stream',
        'view_week',
        'visibility',
        'visibility_off',
        'voice_over_off',
        'watch_later',
        'wifi_protected_setup',
        'work',
        'work_off',
        'work_outline',
        'wysiwyg',
        'youtube_searched_for',
        'zoom_in',
        'zoom_out',
        'add_alert',
        'auto_delete',
        'error',
        'error_outline',
        'notification_important',
        'warning',
        '4k',
        '5g',
        'add_to_queue',
        'airplay',
        'album',
        'art_track',
        'av_timer',
        'branding_watermark',
        'call_to_action',
        'closed_caption',
        'closed_caption_disabled',
        'control_camera',
        'equalizer',
        'explicit',
        'fast_forward',
        'fast_rewind',
        'featured_play_list',
        'featured_video',
        'fiber_dvr',
        'fiber_manual_record',
        'fiber_new',
        'fiber_pin',
        'fiber_smart_record',
        'forward_10',
        'forward_30',
        'forward_5',
        'games',
        'hd',
        'hearing',
        'hearing_disabled',
        'high_quality',
        'library_add',
        'library_add_check',
        'library_books',
        'library_music',
        'loop',
        'mic',
        'mic_none',
        'mic_off',
        'missed_video_call',
        'movie',
        'music_video',
        'new_releases',
        'not_interested',
        'note',
        'pause',
        'pause_circle_filled',
        'pause_circle_outline',
        'play_arrow',
        'play_circle_filled',
        'play_circle_outline',
        'playlist_add',
        'playlist_add_check',
        'playlist_play',
        'queue',
        'queue_music',
        'queue_play_next',
        'radio',
        'recent_actors',
        'remove_from_queue',
        'repeat',
        'repeat_one',
        'replay',
        'replay_10',
        'replay_30',
        'replay_5',
        'shuffle',
        'skip_next',
        'skip_previous',
        'slow_motion_video',
        'snooze',
        'sort_by_alpha',
        'speed',
        'stop',
        'stop_circle',
        'subscriptions',
        'subtitles',
        'surround_sound',
        'video_call',
        'video_label',
        'video_library',
        'video_settings',
        'videocam',
        'videocam_off',
        'volume_down',
        'volume_mute',
        'volume_off',
        'volume_up',
        'web',
        'web_asset',
        'add_ic_call',
        'alternate_email',
        'business',
        'call',
        'call_end',
        'call_made',
        'call_merge',
        'call_missed',
        'call_missed_outgoing',
        'call_received',
        'call_split',
        'cancel_presentation',
        'chat',
        'chat_bubble',
        'chat_bubble_outline',
        'clear_all',
        'comment',
        'contact_mail',
        'contact_phone',
        'contacts',
        'desktop_access_disabled',
        'dialer_sip',
        'dialpad',
        'domain_disabled',
        'domain_verification',
        'duo',
        'email',
        'forum',
        'forward_to_inbox',
        'hourglass_bottom',
        'hourglass_top',
        'import_contacts',
        'import_export',
        'invert_colors_off',
        'list_alt',
        'live_help',
        'location_off',
        'location_on',
        'mail_outline',
        'mark_chat_read',
        'mark_chat_unread',
        'mark_email_read',
        'mark_email_unread',
        'message',
        'mobile_screen_share',
        'more_time',
        'nat',
        'no_sim',
        'pause_presentation',
        'person_add_disabled',
        'person_search',
        'phone',
        'phone_disabled',
        'phone_enabled',
        'phonelink_erase',
        'phonelink_lock',
        'phonelink_ring',
        'phonelink_setup',
        'portable_wifi_off',
        'present_to_all',
        'print_disabled',
        'qr_code',
        'qr_code_2',
        'qr_code_scanner',
        'read_more',
        'ring_volume',
        'rss_feed',
        'screen_share',
        'sentiment_satisfied_alt',
        'speaker_phone',
        'stay_current_landscape',
        'stay_current_portrait',
        'stay_primary_landscape',
        'stay_primary_portrait',
        'stop_screen_share',
        'swap_calls',
        'textsms',
        'unsubscribe',
        'voicemail',
        'vpn_key',
        'wifi_calling',
        'add',
        'add_box',
        'add_circle',
        'add_circle_outline',
        'amp_stories',
        'archive',
        'backspace',
        'ballot',
        'biotech',
        'block',
        'calculate',
        'clear',
        'content_copy',
        'content_cut',
        'content_paste',
        'create',
        'delete_sweep',
        'drafts',
        'dynamic_feed',
        'file_copy',
        'filter_list',
        'flag',
        'font_download',
        'forward',
        'gesture',
        'how_to_reg',
        'how_to_vote',
        'inbox',
        'insights',
        'link',
        'link_off',
        'low_priority',
        'mail',
        'markunread',
        'move_to_inbox',
        'next_week',
        'outlined_flag',
        'policy',
        'push_pin',
        'redo',
        'remove',
        'remove_circle',
        'remove_circle_outline',
        'reply',
        'reply_all',
        'report',
        'report_off',
        'save',
        'save_alt',
        'select_all',
        'send',
        'sort',
        'square_foot',
        'text_format',
        'unarchive',
        'undo',
        'waves',
        'weekend',
        'where_to_vote',
        'access_alarm',
        'access_alarms',
        'access_time',
        'ad_units',
        'add_alarm',
        'add_to_home_screen',
        'airplanemode_active',
        'airplanemode_inactive',
        'battery_alert',
        'battery_charging_full',
        'battery_full',
        'battery_std',
        'battery_unknown',
        'bluetooth',
        'bluetooth_connected',
        'bluetooth_disabled',
        'bluetooth_searching',
        'brightness_auto',
        'brightness_high',
        'brightness_low',
        'brightness_medium',
        'data_usage',
        'developer_mode',
        'devices',
        'dvr',
        'gps_fixed',
        'gps_not_fixed',
        'gps_off',
        'graphic_eq',
        'location_disabled',
        'location_searching',
        'mobile_friendly',
        'mobile_off',
        'nfc',
        'screen_lock_landscape',
        'screen_lock_portrait',
        'screen_lock_rotation',
        'screen_rotation',
        'sd_storage',
        'settings_system_daydream',
        'signal_cellular_4_bar',
        'signal_cellular_alt',
        'signal_cellular_connected_no_internet_4_bar',
        'signal_cellular_no_sim',
        'signal_cellular_null',
        'signal_cellular_off',
        'signal_wifi_4_bar',
        'signal_wifi_4_bar_lock',
        'signal_wifi_off',
        'storage',
        'usb',
        'wallpaper',
        'widgets',
        'wifi_lock',
        'wifi_tethering',
        'add_comment',
        'align_horizontal_center',
        'align_horizontal_left',
        'align_horizontal_right',
        'align_vertical_bottom',
        'align_vertical_center',
        'align_vertical_top',
        'attach_file',
        'attach_money',
        'bar_chart',
        'border_all',
        'border_bottom',
        'border_clear',
        'border_horizontal',
        'border_inner',
        'border_left',
        'border_outer',
        'border_right',
        'border_style',
        'border_top',
        'border_vertical',
        'bubble_chart',
        'drag_handle',
        'format_align_center',
        'format_align_justify',
        'format_align_left',
        'format_align_right',
        'format_bold',
        'format_clear',
        'format_color_reset',
        'format_indent_decrease',
        'format_indent_increase',
        'format_italic',
        'format_line_spacing',
        'format_list_bulleted',
        'format_list_numbered',
        'format_list_numbered_rtl',
        'format_paint',
        'format_quote',
        'format_shapes',
        'format_size',
        'format_strikethrough',
        'format_textdirection_l_to_r',
        'format_textdirection_r_to_l',
        'format_underlined',
        'functions',
        'height',
        'highlight',
        'horizontal_distribute',
        'horizontal_rule',
        'insert_chart',
        'insert_chart_outlined',
        'insert_comment',
        'insert_drive_file',
        'insert_emoticon',
        'insert_invitation',
        'insert_link',
        'insert_photo',
        'linear_scale',
        'merge_type',
        'mode_comment',
        'monetization_on',
        'money_off',
        'multiline_chart',
        'notes',
        'pie_chart',
        'post_add',
        'publish',
        'scatter_plot',
        'score',
        'short_text',
        'show_chart',
        'space_bar',
        'stacked_line_chart',
        'strikethrough_s',
        'subscript',
        'superscript',
        'table_chart',
        'table_rows',
        'text_fields',
        'title',
        'vertical_align_bottom',
        'vertical_align_center',
        'vertical_align_top',
        'vertical_distribute',
        'wrap_text',
        'attach_email',
        'attachment',
        'cloud',
        'cloud_circle',
        'cloud_done',
        'cloud_download',
        'cloud_off',
        'cloud_queue',
        'cloud_upload',
        'create_new_folder',
        'folder',
        'folder_open',
        'folder_shared',
        'request_quote',
        'rule_folder',
        'snippet_folder',
        'text_snippet',
        'topic',
        'browser_not_supported',
        'cast',
        'cast_connected',
        'cast_for_education',
        'computer',
        'desktop_mac',
        'desktop_windows',
        'developer_board',
        'device_hub',
        'device_unknown',
        'devices_other',
        'dock',
        'gamepad',
        'headset',
        'headset_mic',
        'keyboard',
        'keyboard_arrow_down',
        'keyboard_arrow_left',
        'keyboard_arrow_right',
        'keyboard_arrow_up',
        'keyboard_backspace',
        'keyboard_capslock',
        'keyboard_hide',
        'keyboard_return',
        'keyboard_tab',
        'keyboard_voice',
        'laptop',
        'laptop_chromebook',
        'laptop_mac',
        'laptop_windows',
        'memory',
        'mouse',
        'phone_android',
        'phone_iphone',
        'phonelink',
        'phonelink_off',
        'point_of_sale',
        'power_input',
        'router',
        'scanner',
        'security',
        'sim_card',
        'smartphone',
        'speaker',
        'speaker_group',
        'tablet',
        'tablet_android',
        'tablet_mac',
        'toys',
        'tv',
        'videogame_asset',
        'watch',
        'sensor_door',
        'sensor_window',
        'add_a_photo',
        'add_photo_alternate',
        'add_to_photos',
        'adjust',
        'assistant',
        'assistant_photo',
        'audiotrack',
        'bedtime',
        'blur_circular',
        'blur_linear',
        'blur_off',
        'blur_on',
        'brightness_1',
        'brightness_2',
        'brightness_3',
        'brightness_4',
        'brightness_5',
        'brightness_6',
        'brightness_7',
        'broken_image',
        'brush',
        'burst_mode',
        'camera',
        'camera_alt',
        'camera_front',
        'camera_rear',
        'camera_roll',
        'center_focus_strong',
        'center_focus_weak',
        'collections',
        'collections_bookmark',
        'color_lens',
        'colorize',
        'compare',
        'control_point',
        'control_point_duplicate',
        'crop',
        'crop_16_9',
        'crop_3_2',
        'crop_5_4',
        'crop_7_5',
        'crop_din',
        'crop_free',
        'crop_landscape',
        'crop_original',
        'crop_portrait',
        'crop_rotate',
        'crop_square',
        'dehaze',
        'details',
        'edit',
        'euro',
        'exposure',
        'exposure_neg_1',
        'exposure_neg_2',
        'exposure_plus_1',
        'exposure_plus_2',
        'exposure_zero',
        'filter',
        'filter_1',
        'filter_2',
        'filter_3',
        'filter_4',
        'filter_5',
        'filter_6',
        'filter_7',
        'filter_8',
        'filter_9',
        'filter_9_plus',
        'filter_b_and_w',
        'filter_center_focus',
        'filter_drama',
        'filter_frames',
        'filter_hdr',
        'filter_none',
        'filter_tilt_shift',
        'filter_vintage',
        'flare',
        'flash_auto',
        'flash_off',
        'flash_on',
        'flip',
        'flip_camera_android',
        'flip_camera_ios',
        'gradient',
        'grain',
        'grid_off',
        'grid_on',
        'hdr_off',
        'hdr_on',
        'hdr_strong',
        'hdr_weak',
        'healing',
        'image',
        'image_aspect_ratio',
        'image_not_supported',
        'image_search',
        'iso',
        'landscape',
        'leak_add',
        'leak_remove',
        'lens',
        'linked_camera',
        'looks',
        'looks_3',
        'looks_4',
        'looks_5',
        'looks_6',
        'looks_one',
        'looks_two',
        'loupe',
        'monochrome_photos',
        'motion_photos_on',
        'motion_photos_pause',
        'motion_photos_paused',
        'movie_creation',
        'movie_filter',
        'music_note',
        'music_off',
        'nature',
        'nature_people',
        'navigate_before',
        'navigate_next',
        'palette',
        'panorama',
        'panorama_fish_eye',
        'panorama_horizontal',
        'panorama_vertical',
        'panorama_wide_angle',
        'photo',
        'photo_album',
        'photo_camera',
        'photo_filter',
        'photo_library',
        'photo_size_select_actual',
        'photo_size_select_large',
        'photo_size_select_small',
        'picture_as_pdf',
        'portrait',
        'receipt_long',
        'remove_red_eye',
        'rotate_90_degrees_ccw',
        'rotate_left',
        'rotate_right',
        'shutter_speed',
        'slideshow',
        'straighten',
        'style',
        'switch_camera',
        'switch_video',
        'tag_faces',
        'texture',
        'timelapse',
        'timer',
        'timer_10',
        'timer_3',
        'timer_off',
        'tonality',
        'transform',
        'tune',
        'view_comfy',
        'view_compact',
        'vignette',
        'wb_auto',
        'wb_cloudy',
        'wb_incandescent',
        'wb_iridescent',
        'wb_sunny',
        '360',
        'add_business',
        'add_location',
        'add_location_alt',
        'add_road',
        'agriculture',
        'alt_route',
        'atm',
        'beenhere',
        'bike_scooter',
        'category',
        'cleaning_services',
        'compass_calibration',
        'departure_board',
        'design_services',
        'directions',
        'directions_bike',
        'directions_boat',
        'directions_bus',
        'directions_car',
        'directions_railway',
        'directions_run',
        'directions_subway',
        'directions_transit',
        'directions_walk',
        'edit_attributes',
        'edit_location',
        'edit_road',
        'electric_bike',
        'electric_car',
        'electric_moped',
        'electric_scooter',
        'electrical_services',
        'ev_station',
        'fastfood',
        'flight',
        'handyman',
        'home_repair_service',
        'hotel',
        'hvac',
        'layers',
        'layers_clear',
        'local_activity',
        'local_airport',
        'local_atm',
        'local_bar',
        'local_cafe',
        'local_car_wash',
        'local_convenience_store',
        'local_dining',
        'local_drink',
        'local_fire_department',
        'local_florist',
        'local_gas_station',
        'local_grocery_store',
        'local_hospital',
        'local_hotel',
        'local_laundry_service',
        'local_library',
        'local_mall',
        'local_movies',
        'local_offer',
        'local_parking',
        'local_pharmacy',
        'local_phone',
        'local_pizza',
        'local_play',
        'local_police',
        'local_post_office',
        'local_printshop',
        'local_see',
        'local_shipping',
        'local_taxi',
        'map',
        'maps_ugc',
        'medical_services',
        'menu_book',
        'miscellaneous_services',
        'money',
        'moped',
        'multiple_stop',
        'museum',
        'my_location',
        'navigation',
        'near_me',
        'near_me_disabled',
        'no_meals',
        'no_transfer',
        'not_listed_location',
        'pedal_bike',
        'person_pin',
        'person_pin_circle',
        'pest_control',
        'pest_control_rodent',
        'pin_drop',
        'place',
        'plumbing',
        'rate_review',
        'restaurant',
        'restaurant_menu',
        'run_circle',
        'satellite',
        'set_meal',
        'store_mall_directory',
        'streetview',
        'subway',
        'terrain',
        'traffic',
        'train',
        'tram',
        'transfer_within_a_station',
        'transit_enterexit',
        'trip_origin',
        'two_wheeler',
        'wine_bar',
        'wrong_location',
        'zoom_out_map',
        'app_settings_alt',
        'apps',
        'arrow_back',
        'arrow_back_ios',
        'arrow_downward',
        'arrow_drop_down',
        'arrow_drop_down_circle',
        'arrow_drop_up',
        'arrow_forward',
        'arrow_forward_ios',
        'arrow_left',
        'arrow_right',
        'arrow_upward',
        'campaign',
        'cancel',
        'check',
        'chevron_left',
        'chevron_right',
        'close',
        'double_arrow',
        'east',
        'expand_less',
        'expand_more',
        'first_page',
        'fullscreen',
        'fullscreen_exit',
        'home_work',
        'last_page',
        'legend_toggle',
        'menu',
        'menu_open',
        'more_horiz',
        'more_vert',
        'north',
        'north_east',
        'north_west',
        'payments',
        'refresh',
        'south',
        'south_east',
        'south_west',
        'subdirectory_arrow_left',
        'subdirectory_arrow_right',
        'switch_left',
        'switch_right',
        'unfold_less',
        'unfold_more',
        'west',
        'account_tree',
        'adb',
        'airline_seat_flat',
        'airline_seat_flat_angled',
        'airline_seat_individual_suite',
        'airline_seat_legroom_extra',
        'airline_seat_legroom_normal',
        'airline_seat_legroom_reduced',
        'airline_seat_recline_extra',
        'airline_seat_recline_normal',
        'bluetooth_audio',
        'confirmation_number',
        'directions_off',
        'disc_full',
        'drive_eta',
        'enhanced_encryption',
        'event_available',
        'event_busy',
        'event_note',
        'folder_special',
        'live_tv',
        'mms',
        'more',
        'network_check',
        'network_locked',
        'no_encryption',
        'ondemand_video',
        'personal_video',
        'phone_bluetooth_speaker',
        'phone_callback',
        'phone_forwarded',
        'phone_in_talk',
        'phone_locked',
        'phone_missed',
        'phone_paused',
        'power',
        'power_off',
        'priority_high',
        'sd_card',
        'sms',
        'sms_failed',
        'support_agent',
        'sync',
        'sync_disabled',
        'sync_problem',
        'system_update',
        'tap_and_play',
        'time_to_leave',
        'tv_off',
        'vibration',
        'voice_chat',
        'vpn_lock',
        'wc',
        'wifi',
        'wifi_off',
        'ac_unit',
        'airport_shuttle',
        'all_inclusive',
        'apartment',
        'baby_changing_station',
        'backpack',
        'bathtub',
        'beach_access',
        'bento',
        'business_center',
        'carpenter',
        'casino',
        'charging_station',
        'checkroom',
        'child_care',
        'child_friendly',
        'corporate_fare',
        'countertops',
        'do_not_step',
        'do_not_touch',
        'dry',
        'elevator',
        'escalator',
        'escalator_warning',
        'family_restroom',
        'fence',
        'fire_extinguisher',
        'fitness_center',
        'food_bank',
        'foundation',
        'free_breakfast',
        'golf_course',
        'grass',
        'hot_tub',
        'house',
        'house_siding',
        'kitchen',
        'meeting_room',
        'microwave',
        'night_shelter',
        'no_backpack',
        'no_cell',
        'no_drinks',
        'no_flash',
        'no_food',
        'no_meeting_room',
        'no_photography',
        'no_stroller',
        'pool',
        'rice_bowl',
        'roofing',
        'room_preferences',
        'room_service',
        'rv_hookup',
        'smoke_free',
        'smoking_rooms',
        'soap',
        'spa',
        'sports_bar',
        'stairs',
        'storefront',
        'stroller',
        'tapas',
        'tty',
        'umbrella',
        'wash',
        'water_damage',
        'wheelchair_pickup',
        '6_ft_apart',
        'architecture',
        'cake',
        'clean_hands',
        'connect_without_contact',
        'construction',
        'coronavirus',
        'deck',
        'domain',
        'elderly',
        'emoji_emotions',
        'emoji_events',
        'emoji_flags',
        'emoji_food_beverage',
        'emoji_nature',
        'emoji_objects',
        'emoji_people',
        'emoji_symbols',
        'emoji_transportation',
        'engineering',
        'facebook',
        'fireplace',
        'follow_the_signs',
        'group',
        'group_add',
        'groups',
        'history_edu',
        'king_bed',
        'location_city',
        'luggage',
        'masks',
        'military_tech',
        'mood',
        'mood_bad',
        'nights_stay',
        'no_luggage',
        'notifications',
        'notifications_active',
        'notifications_none',
        'notifications_off',
        'notifications_paused',
        'outdoor_grill',
        'pages',
        'party_mode',
        'people',
        'people_alt',
        'people_outline',
        'person',
        'person_add',
        'person_add_alt_1',
        'person_outline',
        'person_remove',
        'person_remove_alt_1',
        'plus_one',
        'poll',
        'psychology',
        'public',
        'public_off',
        'reduce_capacity',
        'sanitizer',
        'school',
        'science',
        'self_improvement',
        'sentiment_dissatisfied',
        'sentiment_satisfied',
        'sentiment_very_dissatisfied',
        'sentiment_very_satisfied',
        'share',
        'sick',
        'single_bed',
        'sports',
        'sports_baseball',
        'sports_basketball',
        'sports_cricket',
        'sports_esports',
        'sports_football',
        'sports_golf',
        'sports_handball',
        'sports_hockey',
        'sports_kabaddi',
        'sports_mma',
        'sports_motorsports',
        'sports_rugby',
        'sports_soccer',
        'sports_tennis',
        'sports_volleyball',
        'thumb_down_alt',
        'thumb_up_alt',
        'whatshot',
        'check_box',
        'check_box_outline_blank',
        'indeterminate_check_box',
        'radio_button_checked',
        'radio_button_unchecked',
        'star',
        'star_border',
        'star_half',
        'star_outline',
        'toggle_off',
        'toggle_on'
      ];
      for (var i = 0, l = icon_list.length; i < l; i++) {
        let icon_block = document.createElement('div');
        icon_block.setAttribute('class', 'i-block');
        icon_block.setAttribute('data-clipboard-text', icon_list[i]);
        icon_block.setAttribute('data-bs-toggle', 'tooltip');
        icon_block.setAttribute('data-filter', icon_list[i]);
        icon_block.setAttribute('title', icon_list[i]);

        let icon_main = document.createElement('i');
        icon_main.setAttribute('class', 'material-icons-two-tone');
        icon_main.innerHTML = icon_list[i];
        icon_block.appendChild(icon_main);
        document.querySelector('#icon-wrapper').append(icon_block);
      }
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

    <!-- [Page Specific JS] start -->
  </body>
  <!-- [Body] end -->

<!-- Mirrored from ableproadmin.com/elements/icon-material.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:10 GMT -->
</html>
