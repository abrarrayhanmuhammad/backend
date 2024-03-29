<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->


<!-- Mirrored from ableproadmin.com/application/mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:53 GMT -->
<head>
  <title>Account Profile 1 | Able Pro Dashboard Template</title>
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
  <!-- dragula css -->
  <link rel="stylesheet" href="/css/plugins/dragula.min.css">
  <!-- quill css -->
  <link rel="stylesheet" href="/css/plugins/quill.core.css">
  <link rel="stylesheet" href="/css/plugins/quill.snow.css">
  <link rel="stylesheet" href="/css/plugins/quill.bubble.css">
  <!-- [Page specific CSS] end -->
  <!-- [Font] Family -->
  <link rel="stylesheet" href="/fonts/inter/inter.css" id="main-font-link" />

  <!-- [Tabler Icons] https://tablericons.com -->
  <link rel="stylesheet" href="/fonts/tabler-icons.min.css" />
  <!-- [Feather Icons] https://feathericons.com -->
  <link rel="stylesheet" href="/fonts/feather.css" />
  <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
  <link rel="stylesheet" href="/fonts/fontawesome.css" />
  <!-- [Material Icons] https://fonts.google.com/icons -->
  <link rel="stylesheet" href="/fonts/material.css" />
  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="/css/style.css" id="main-style-link" />
  <link rel="stylesheet" href="/css/style-preset.css" />
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
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="mail-wrapper">
            <div class="offcanvas-xxl offcanvas-start mail-offcanvas" tabindex="-1" id="offcanvas_mail">
              <div class="offcanvas-header">
                <button  class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvas_mail"
                  aria-label="Close"></button>
              </div>
              <div class="offcanvas-body p-0">
                <div id="mail-menulist" class="show collapse collapse-horizontal">
                  <div class="mail-menulist">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-grid">
                          <button class="btn btn-primary d-flex align-items-center justify-content-center"
                            data-bs-toggle="modal" data-bs-target="#compose_mail_modal">
                            <i class="ti ti-circle-plus me-2"></i> Compose
                          </button>
                        </div>
                      </div>
                      <div class="scroll-block">
                        <div class="card-body pt-0">
                          <div class="list-group list-group-flush" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-mailtab-1" data-bs-toggle="list"
                              href="#list-mail-1" role="tab">
                              <span>
                                <i class="ti ti-inbox"></i>
                                Inbox
                              </span>
                              <span class="avtar avtar-xs">4</span>
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-mailtab-3" data-bs-toggle="list"
                              href="#list-mail-3" role="tab">
                              <span>
                                <i class="ti ti-send"></i>
                                Sent
                              </span>
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-mailtab-4" data-bs-toggle="list"
                              href="#list-mail-4" role="tab">
                              <span>
                                <i class="ti ti-file-text"></i>
                                Draft
                              </span>
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-mailtab-5" data-bs-toggle="list"
                              href="#list-mail-5" role="tab">
                              <span>
                                <i class="ti ti-alert-triangle"></i>
                                Spam
                              </span>
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-mailtab-6" data-bs-toggle="list"
                              href="#list-mail-6" role="tab">
                              <span>
                                <i class="ti ti-trash"></i>
                                Trash
                              </span>
                              <span class="avtar avtar-xs">2</span>
                            </a>
                            <hr class="my-3 border border-secondary-subtle">
                            <a data-bs-toggle="collapse" href="#mailCollapselist1" role="button" aria-expanded="false"
                              aria-controls="mailCollapselist1">
                              <p class="text-muted ps-3 mb-0">Filters</p>
                            </a>
                            <div class="collapse show multi-collapse" id="mailCollapselist1">
                              <a class="list-group-item list-group-item-action mt-3" id="list-mailtab-7"
                                data-bs-toggle="list" href="#list-mail-7" role="tab">
                                <span> <i class="ti ti-star"></i> Starred </span>
                              </a>
                              <a class="list-group-item list-group-item-action" id="list-mailtab-8"
                                data-bs-toggle="list" href="#list-mail-8" role="tab">
                                <span>
                                  <i class="ti ti-flag-3"></i>
                                  Important
                                </span>
                                <span class="avtar avtar-xs">2</span>
                              </a>
                            </div>
                            <hr class="my-3 border border-secondary-subtle">
                            <a data-bs-toggle="collapse" href="#mailCollapselist2" role="button" aria-expanded="false"
                              aria-controls="mailCollapselist2">
                              <p class="text-muted ps-3 mb-0">Label</p>
                            </a>
                            <div class="collapse show multi-collapse" id="mailCollapselist2">
                              <a class="list-group-item list-group-item-action mt-3" id="list-mailtab-71"
                                data-bs-toggle="list" href="#list-mail-7" role="tab">
                                <span>
                                  <i class="ti ti-flag-3 text-primary"></i>
                                  Promotions
                                </span>
                                <span class="avtar avtar-xs">3</span>
                              </a>
                              <a class="list-group-item list-group-item-action" id="list-mailtab-81"
                                data-bs-toggle="list" href="#list-mail-8" role="tab">
                                <span>
                                  <i class="ti ti-flag-3 text-warning"></i>
                                  Forums
                                </span>
                                <span class="avtar avtar-xs">1</span>
                              </a>
                              <a class="list-group-item list-group-item-action d-none" id="list-mailtab-details"
                                data-bs-toggle="list" href="#list-mail-9" role="tab">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mail-content">
              <div class="d-sm-flex align-items-center">
                <ul class="list-inline me-auto mb-3">
                  <li class="list-inline-item align-bottom">
                    <a href="#" class="d-xxl-none avtar avtar-s btn-link-secondary" data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvas_mail">
                      <i class="ti ti-menu-2 f-18"></i>
                    </a>
                    <a href="#" class="d-none d-xxl-inline-flex avtar avtar-s btn-link-secondary"
                      data-bs-toggle="collapse" data-bs-target="#mail-menulist">
                      <i class="ti ti-menu-2 f-18"></i>
                    </a>
                  </li>
                  <li class="list-inline-item align-bottom">
                    <a href="#" class="avtar avtar-s btn-link-secondary" id="toggle-mail-list-height">
                      <i class="ti ti-arrows-vertical f-18"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <div class="dropdown">
                      <a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ti ti-dots f-18"></i>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Name</a>
                        <a class="dropdown-item" href="#">Date</a>
                        <a class="dropdown-item" href="#">Ratting</a>
                        <a class="dropdown-item" href="#">Unread</a>
                      </div>
                    </div>
                  </li>
                </ul>
                <ul class="list-inline ms-auto mb-3">
                  <li class="list-inline-item">
                    <div class="form-search">
                      <i class="ti ti-search"></i>
                      <input type="search" class="form-control" placeholder="Search Followers">
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="avtar avtar-s btn-link-secondary">
                      <i class="ti ti-chevron-left f-18"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">1–10 of 12</li>
                  <li class="list-inline-item">
                    <a href="#" class="avtar avtar-s btn-link-secondary">
                      <i class="ti ti-chevron-right f-18"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-mail-1" role="tabpanel"
                      aria-labelledby="list-mailtab-1">
                      <div class="card table-card">
                        <div class="card-body scroll-block ">
                          <table class="table table-borderless mb-0 mail-table">
                            <tbody>
                              <tr class="unread">
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-1.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Barney Thea</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">12 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr class="unread">
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-2.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">13 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr class="unread">
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-3.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Mattie Reid </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">simply dummy text the industry's standard
                                        dummy text ever since the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">14 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr class="unread">
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-4.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Nathaniel Vasquez </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">15 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-5.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">16 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr class="unread">
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-1.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Barney Thea</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">12 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-2.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">13 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr class="unread">
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-3.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Mattie Reid </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">simply dummy text the industry's standard
                                        dummy text ever since the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">14 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr class="unread">
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-4.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Nathaniel Vasquez </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">15 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-5.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">16 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-1.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Barney Thea</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">12 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-2.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">13 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr class="unread">
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-3.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Mattie Reid </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">simply dummy text the industry's standard
                                        dummy text ever since the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">14 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-4.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Nathaniel Vasquez </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">15 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-5.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">16 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="list-mail-2" role="tabpanel" aria-labelledby="list-mailtab-2">
                      <div class="card table-card">
                        <div class="card-body scroll-block ">
                          <table class="table table-borderless mb-0 mail-table">
                            <tbody>
                              <tr class="unread">
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-3.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Mattie Reid </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">simply dummy text the industry's standard
                                        dummy text ever since the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">14 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr class="unread">
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-4.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Nathaniel Vasquez </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">15 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-5.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">16 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-1.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Barney Thea</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">12 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-2.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">13 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-3.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Mattie Reid </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">simply dummy text the industry's standard
                                        dummy text ever since the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">14 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-4.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Nathaniel Vasquez </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">15 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-5.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">16 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-1.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Barney Thea</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">12 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-2.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">13 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="list-mail-3" role="tabpanel" aria-labelledby="list-mailtab-3">
                      <div class="card table-card">
                        <div class="card-body scroll-block ">
                          <table class="table table-borderless mb-0 mail-table">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-5.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">16 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-1.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Barney Thea</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">12 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-2.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">13 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-3.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Mattie Reid </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">simply dummy text the industry's standard
                                        dummy text ever since the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">14 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-4.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Nathaniel Vasquez </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">15 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-3.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Mattie Reid </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">simply dummy text the industry's standard
                                        dummy text ever since the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">14 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-4.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Nathaniel Vasquez </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">15 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-5.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">16 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-1.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Barney Thea</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">12 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-2.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">13 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="list-mail-4" role="tabpanel" aria-labelledby="list-mailtab-4">
                      <div class="card table-card">
                        <div class="card-body scroll-block ">
                          <table class="table table-borderless mb-0 mail-table">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-3.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Mattie Reid </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">simply dummy text the industry's standard
                                        dummy text ever since the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">14 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-4.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Nathaniel Vasquez </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">15 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-5.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">16 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-1.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Barney Thea</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">12 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-2.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">13 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-3.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Mattie Reid </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">simply dummy text the industry's standard
                                        dummy text ever since the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">14 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-4.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Nathaniel Vasquez </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">15 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-5.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">16 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-1.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Barney Thea</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">12 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-2.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">13 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="list-mail-5" role="tabpanel" aria-labelledby="list-mailtab-5">
                      <div class="card bg-transparent empty-mail">
                        <div class="card-body scroll-block">
                          <div class="row g-0 justify-content-center align-items-center h-100">
                            <div class="col-md-8 col-sm-10 text-center">
                              <img src="/img/application/img-empty-mail.png" alt="img"
                                class="img-fluid mb-4">
                              <h2><b>There is No Mail</b></h2>
                              <p class="mb-0 text-muted">When You have message that will Display here</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="list-mail-6" role="tabpanel" aria-labelledby="list-mailtab-6">
                      <div class="card table-card">
                        <div class="card-body scroll-block ">
                          <table class="table table-borderless mb-0 mail-table">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-1.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Barney Thea</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">12 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-2.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">13 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-3.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Mattie Reid </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">simply dummy text the industry's standard
                                        dummy text ever since the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">14 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-4.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Nathaniel Vasquez </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">15 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-5.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">16 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-1.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Barney Thea</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">12 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-2.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">13 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="list-mail-7" role="tabpanel" aria-labelledby="list-mailtab-7">
                      <div class="card table-card">
                        <div class="card-body scroll-block ">
                          <table class="table table-borderless mb-0 mail-table">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-4.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Nathaniel Vasquez </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">15 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-5.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">16 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-1.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Barney Thea</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">12 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-2.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">13 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="list-mail-8" role="tabpanel" aria-labelledby="list-mailtab-8">
                      <div class="card table-card">
                        <div class="card-body scroll-block ">
                          <table class="table table-borderless mb-0 mail-table">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-1.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Barney Thea</h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">12 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-2.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Zachary Chambers </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">
                                        of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is
                                        simply
                                        dummy text the
                                        industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-primary py-1 px-2">Promotions</a>
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">13 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-3.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Mattie Reid </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">simply dummy text the industry's standard
                                        dummy text ever since the 1500s.</p>
                                    </div>
                                  </div>
                                </td>
                                <td> </td>
                                <td class="mail-option">14 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                                      <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                                    </div>
                                    <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                      <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                    </div>
                                    <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                      <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img src="/img/user/avatar-4.jpg" alt="user-image"
                                      class="img-user rounded-circle">
                                    <h6 class="mb-0 ms-2 text-truncate">Nathaniel Vasquez </h6>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex w-100 align-items-center">
                                    <div class="flex-grow-1 position-relative">
                                      <p class="mb-0 mail-text text-truncate">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.been the industry's standard
                                        dummy text ever since
                                        the 1500s.</p>
                                    </div>
                                    <div class="mail-content-badge">
                                      <a href="#" class="badge rounded-pill btn-light-warning py-1 px-2">Forums</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="avtar avtar-s btn-link-secondary">
                                    <i class="ti ti-paperclip f-18"></i>
                                  </a>
                                </td>
                                <td class="mail-option">15 Jul 22 08:23 AM
                                  <div class="mail-buttons">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-archive f-18"></i></a></li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-mail f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i class="ti ti-trash f-18"></i></a>
                                      </li>
                                      <li class="list-inline-item"><a href="#"
                                          class="avtar avtar-s btn-link-secondary"><i
                                            class="ti ti-eye-off f-18"></i></a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="list-mail-9" role="tabpanel" aria-labelledby="list-mailtab-details">
                      <div class="card">
                        <div class="card-body scroll-block">
                          <div class="card border mb-3">
                            <div class="card-body p-1">
                              <div class="d-sm-flex align-items-center">
                                <ul class="list-inline me-auto my-2">
                                  <li class="list-inline-item align-bottom">
                                    <a href="#" class="avtar avtar-s btn-link-secondary" id="mail-back_inbox">
                                      <i class="ti ti-chevron-left f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom">
                                    <div class="d-flex align-items-center">
                                      <img src="/img/user/avatar-1.jpg" alt="user-image"
                                        class="img-user rounded-circle">
                                      <div class="flex-grow-1 ms-2">
                                        <h5 class="mb-0 text-truncate">Matthew Hawkins</h5>
                                        <p class="mb-0 text-muted text-sm"> From: &lt;tazeanu@company.com&gt;</p>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                                <ul class="list-inline ms-auto my-2">
                                  <li class="list-inline-item text-muted">12 Jul 22 08:23 AM</li>
                                  <li class="list-inline-item">
                                    <div class="d-flex align-items-center">
                                      <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                        <input class="form-check-input" type="checkbox">
                                        <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                        <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                                      </div>
                                      <div class="form-check form-check-inline m-0 mx-3 pc-icon-checkbox">
                                        <input class="form-check-input" type="checkbox" checked>
                                        <i class="material-icons-two-tone pc-icon-uncheck">label</i>
                                        <i class="material-icons-two-tone text-secondary pc-icon-check">label</i>
                                      </div>
                                      <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                                        <input class="form-check-input" type="checkbox">
                                        <i class="material-icons-two-tone pc-icon-uncheck">new_releases</i>
                                        <i class="material-icons-two-tone text-danger pc-icon-check">new_releases</i>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="list-inline-item">
                                    <div class="dropdown">
                                      <a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#"
                                         data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="ti ti-dots f-18"></i>
                                      </a>
                                      <div class="dropdown-menu dropdown-end">
                                        <a class="dropdown-item" href="#">Name</a>
                                        <a class="dropdown-item" href="#">Date</a>
                                        <a class="dropdown-item" href="#">Ratting</a>
                                        <a class="dropdown-item" href="#">Unread</a>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="mail-details">
                            <h4><b>Lorem Ipsum is simply dummy text</b></h4>
                            <h5 class="mt-4 mb-3">Dear Martha Jenkins,</h5>
                            <p class="text-muted indent-text">Lorem Ipsum is simply dummy text of the printing and
                              <b>typesetting industry</b>. Lorem Ipsum has been the
                              industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                              of
                              type and scrambled
                              it to make a type <b>specimen book</b>. It has survived not only five centuries, but also
                              the
                              leap into
                              electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                              with
                              the release of
                              Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                              software like
                              <abbr title="Aldus PageMaker" class="initialism">Aldus PageMaker</abbr> including versions
                              of
                              Lorem Ipsum.
                            </p>
                            <p class="text-muted indent-text">It is a long established fact that a reader will be
                              distracted
                              by the readable content of a page when looking
                              at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                              distribution of letters, as
                              opposed to using 'Content here, content here', making it look like readable English. Many
                              desktop publishing
                              packages and web page editors now use Lorem Ipsum as their default model text, and a
                              search
                              for 'lorem ipsum'
                              will uncover many web sites still in their infancy. Various versions have evolved over the
                              years, sometimes by
                              accident, sometimes on purpose</p>
                            <p class="mt-5 mb-0">Kind Regards,</p>
                            <h5 class="mb-4">Jean Anderson</h5>
                            <hr class="my-3">
                            <h5 class="mb-3"><b><i class="ti ti-paperclip me-2"></i> 3 Attachments</b></h5>
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                <div class="card bg-body border">
                                  <div class="card-body p-3">
                                    <div class="media align-items-center">
                                      <div class="media-body me-2">
                                        <h5 class="mb-0 text-truncate">table_denar.pdf </h5>
                                      </div>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary text-secondary">
                                        <i class="ti ti-download f-16"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="list-inline-item">
                                <div class="card bg-body border">
                                  <div class="card-body p-3">
                                    <div class="media align-items-center">
                                      <div class="media-body me-2">
                                        <h5 class="mb-0 text-truncate">handmade.mp2</h5>
                                      </div>
                                      <a href="#" class="avtar avtar-xs btn-link-secondary text-secondary">
                                        <i class="ti ti-download f-16"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                            <hr class="mb-3 mt-0">
                            <div class="bg-light rounded p-3 my-3">
                              <div class="media align-items-start mb-3">
                                <img class="rounded-circle img-fluid wid-30" src="/img/user/avatar-4.jpg"
                                  alt="User image">
                                <div class="media-body ms-3">
                                  <div class="d-flex align-items-center mb-3">
                                    <h5 class="mb-0 me-3">Barney Thea</h5>
                                      <p class="mb-0 text-muted text-sm"> &lt;tazeanu@company.com&gt;</p>
                                  </div>
                                  <p class="text-primary">On Tue, Nov 1, 2022 at 12:05 AM Sreekumar Ks &lt;tazeanu@company.com&gt; wrote:</p>
                                  <p class="text-header mb-1">It is a long established fact that a reader will be distracted</p>
                                  <p class="text-header mb-1">by the readable content</p>
                                  <p class="text-header mb-1">of a page when</p>
                                  <p class="text-header mb-1">looking at</p>
                                  <p class="text-header mb-1">its layout.</p>
                                </div>
                              </div>
                            </div>
                            <button class="btn btn-light-primary" data-bs-toggle="collapse"
                              data-bs-target="#mailreplay"><i class="align-text-bottom me-1 ti ti-arrow-back-up"></i>
                              Reply</button>
                            <button class="btn btn-light-primary" data-bs-toggle="collapse"
                              data-bs-target="#mailreplay"><i class="align-text-bottom me-1 ti ti-arrow-big-right"></i>
                              Forward</button>
                            <div class="collapse" id="mailreplay">
                              <div class="my-3">
                                <div id="pc-quil-2" style="height: 125px">
                                  <p>Put your things hear...</p>
                                </div>
                              </div>
                              <div class="d-flex">
                                <ul class="list-inline me-auto mb-0">
                                  <li class="list-inline-item align-bottom">
                                    <a href="#" class="avtar avtar-s btn-link-secondary">
                                      <i class="ti ti-file-upload f-18"></i>
                                    </a>
                                  </li>
                                  <li class="list-inline-item align-bottom">
                                    <a href="#" class="avtar avtar-s btn-link-secondary">
                                      <i class="ti ti-paperclip f-18"></i>
                                    </a>
                                  </li>
                                </ul>
                                <div class="flex-grow-1 text-end">
                                  <button  class="btn btn-link-dark" data-bs-toggle="collapse"
                                    data-bs-target="#mailreplay">Cancel</button>
                                  <button  class="btn btn-primary" data-bs-toggle="collapse"
                                    data-bs-target="#mailreplay">Reply</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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
  <div id="compose_mail_modal" class="modal fade compose_mail_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="flex-grow-1">
            <h5 class="modal-title">New Message</h5>
          </div>
          <ul class="list-inline me-auto mb-0">
            <li class="list-inline-item align-bottom">
              <a href="#" class="avtar avtar-s btn-link-secondary" id="toggle_mail_dialog">
                <i class="ti ti-arrows-diagonal-2 f-18"></i>
              </a>
            </li>
            <li class="list-inline-item align-bottom">
              <a href="#" class="avtar avtar-s btn-link-danger" data-bs-dismiss="modal">
                <i class="ti ti-circle-x f-18"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="modal-body">
          <div class="text-end">
            <a data-bs-toggle="collapse" href="#collapseccbcc" role="button" aria-expanded="false">Cc & Bcc</a>
          </div>
          <div class="form-group">
            <label class="form-label" for="exampleInputEmail1">To</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Recipients">
          </div>
          <div class="form-group">
            <label class="form-label" for="exampleInputEmail4">Subject</label>
            <input type="email" class="form-control" id="exampleInputEmail4" placeholder="Subject">
          </div>
          <div class="collapse" id="collapseccbcc">
            <div class="form-group">
              <label class="form-label">Cc</label>
              <input type="email" class="form-control mb-3" placeholder="Enter Cc email">
            </div>
            <div class="form-group">
              <label class="form-label">Bcc</label>
              <input type="email" class="form-control mb-3" placeholder="Enter Bcc email">
            </div>
          </div>
          <div id="pc-quil-1" style="height: 125px">
            <p>Put your things hear...</p>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <ul class="list-inline me-auto mb-0">
            <li class="list-inline-item align-bottom">
              <a href="#" class="avtar avtar-s btn-link-secondary">
                <i class="ti ti-file-upload f-18"></i>
              </a>
            </li>
            <li class="list-inline-item align-bottom">
              <a href="#" class="avtar avtar-s btn-link-secondary">
                <i class="ti ti-paperclip f-18"></i>
              </a>
            </li>
          </ul>
          <div class="flex-grow-1 text-end">
            <button  class="btn btn-primary" data-bs-dismiss="modal">Reply</button>
          </div>
        </div>
      </div>
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

  <!-- [Page Specific JS] start -->
  <!-- quill js -->
  <script src="/js/plugins/quill.min.js"></script>
  <script>
    (function () {
      var quill = new Quill('#pc-quil-1', {
        modules: {
          toolbar: [
            [
              {
                header: [1, 2, false]
              }
            ],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
          ]
        },
        placeholder: 'Type your text here...',
        theme: 'snow'
      });
      var quill = new Quill('#pc-quil-2', {
        modules: {
          toolbar: [
            [
              {
                header: [1, 2, false]
              }
            ],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
          ]
        },
        placeholder: 'Type your text here...',
        theme: 'snow'
      });
    })();
    // scroll-block
    var tc = document.querySelectorAll('.scroll-block');
    for (var t = 0; t < tc.length; t++) {
      new SimpleBar(tc[t]);
    }
    var toggle_mail_list = document.querySelector('#toggle-mail-list-height');
    var toggle_mail_wrapper = document.querySelector('.mail-wrapper');
    if (toggle_mail_list) {
      toggle_mail_list.addEventListener('click', function () {
        if (toggle_mail_wrapper.classList.contains('mini-mail-list')) {
          toggle_mail_wrapper.classList.remove('mini-mail-list');
        } else {
          toggle_mail_wrapper.classList.add('mini-mail-list');
        }
      });
    }

    var toggle_mail_dialog = document.querySelector('#toggle_mail_dialog');
    var toggle_mail_modal = document.querySelector('.compose_mail_modal');
    if (toggle_mail_dialog) {
      toggle_mail_dialog.addEventListener('click', function () {
        if (toggle_mail_modal.classList.contains('modal-pos-down')) {
          toggle_mail_modal.classList.remove('modal-pos-down');
        } else {
          toggle_mail_modal.classList.add('modal-pos-down');
        }
      });
    }

    var tc = document.querySelectorAll('.mail-table tr td:nth-child(2), .mail-table tr td:nth-child(3)');
    for (var t = 0; t < tc.length; t++) {
      tc[t].addEventListener('click', function () {
        active_details('a[id="list-mailtab-details"]');
      });
    }

    document.querySelector('#mail-back_inbox').addEventListener('click', function () {
      active_details('a[id="list-mailtab-1"]');
    });
    function active_details(tab_name) {
      var someTabTriggerEl = document.querySelector(tab_name);
      var actTab = new bootstrap.Tab(someTabTriggerEl);
      actTab.show();
    }
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
<!-- [Body] end -->


<!-- Mirrored from ableproadmin.com/application/mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:54 GMT -->
</html>