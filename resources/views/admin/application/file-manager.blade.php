<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->

  
<!-- Mirrored from ableproadmin.com/application/file-manager.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:53 GMT -->
<head>
    <title>File Manger | Able Pro Dashboard Template</title>
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
    <link rel="stylesheet" href="css/plugins/uppy.min.css" />
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
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Application</a></li>
                  <li class="breadcrumb-item" aria-current="page">File Manager</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">File Manager</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ sample-page ] start -->
          <div class="col-12 file-manger-wrapper">
            <a
              class="h5 text-hover-primary my-3 d-block"
              data-bs-toggle="collapse"
              href="#collapseFilefilter"
              role="button"
              aria-expanded="false"
            >
              Quick Filter
            </a>
            <div class="collapse show" id="collapseFilefilter">
              <div class="row">
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="avtar bg-light-primary">
                        <svg class="pc-icon wid-30 hei-30">
                          <use xlink:href="#custom-note-1"></use>
                        </svg>
                      </div>
                      <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                          <h6 class="mb-1">Documents</h6>
                          <p class="mb-0">100 files</p>
                        </div>
                        <span class="badge bg-primary f-12">15 GB</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="avtar bg-light-danger">
                        <svg class="pc-icon wid-30 hei-30">
                          <use xlink:href="#custom-video-play"></use>
                        </svg>
                      </div>
                      <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                          <h6 class="mb-1">Videos</h6>
                          <p class="mb-0">100 files</p>
                        </div>
                        <span class="badge bg-danger f-12">2.4 GB</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="avtar bg-light-success">
                        <svg class="pc-icon wid-30 hei-30">
                          <use xlink:href="#custom-image"></use>
                        </svg>
                      </div>
                      <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                          <h6 class="mb-1">Images</h6>
                          <p class="mb-0">100 files</p>
                        </div>
                        <span class="badge bg-success f-12">2.4 GB</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div
                    class="card border-0 shadow-none drp-upgrade-card"
                    style="background-image: url(images/layout/img-profile-card.jpg)"
                  >
                    <div class="card-body">
                      <h5 class="mb-0">20.5GB of 50GB</h5>
                      <div class="row align-items-center my-2">
                        <div class="col">
                          <div class="progress" style="height: 6px">
                            <div class="progress-bar bg-primary" style="width: 70%"></div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <p class="mb-0 text-muted">70%</p>
                        </div>
                      </div>
                      <button class="btn btn-warning mt-3">Want More Storage?</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-3 border border-secondary-subtle">
            <a
              class="h5 text-hover-primary my-3 d-block"
              data-bs-toggle="collapse"
              href="#collapseRecentFile"
              role="button"
              aria-expanded="false"
            >
              Recent file
            </a>
            <div class="collapse show" id="collapseRecentFile">
              <div class="row">
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <svg class="pc-icon wid-40 hei-40 text-warning">
                            <use xlink:href="#custom-folder-open"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <h5 class="mb-1 d-grid"><span class="text-truncate w-100">Documents</span></h5>
                          <p class="mb-0"><small>24 files</small></p>
                        </div>
                        <div class="dropdown">
                          <a
                            class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                            href="#"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            ><i class="material-icons-two-tone f-18">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <svg class="pc-icon wid-40 hei-40 text-warning">
                            <use xlink:href="#custom-folder-open"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <h5 class="mb-1 d-grid"><span class="text-truncate w-100">Root</span></h5>
                          <p class="mb-0"><small>50 files</small></p>
                        </div>
                        <div class="dropdown">
                          <a
                            class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                            href="#"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            ><i class="material-icons-two-tone f-18">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <svg class="pc-icon wid-40 hei-40 text-warning">
                            <use xlink:href="#custom-folder-open"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <h5 class="mb-1 d-grid"><span class="text-truncate w-100">Images</span></h5>
                          <p class="mb-0"><small>100 files</small></p>
                        </div>
                        <div class="dropdown">
                          <a
                            class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                            href="#"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            ><i class="material-icons-two-tone f-18">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <svg class="pc-icon wid-40 hei-40 text-warning">
                            <use xlink:href="#custom-folder-open"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <h5 class="mb-1 d-grid"><span class="text-truncate w-100">Music and video</span></h5>
                          <p class="mb-0"><small>100 files</small></p>
                        </div>
                        <div class="dropdown">
                          <a
                            class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                            href="#"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            ><i class="material-icons-two-tone f-18">more_vert</i></a
                          >
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-3 border border-secondary-subtle">
            <div class="row my-2">
              <div class="col">
                <ul class="list-inline ms-auto mb-3">
                  <li class="list-inline-item">
                    <div class="form-search">
                      <i class="ti ti-search"></i>
                      <input type="search" class="form-control" placeholder="Search Followers" />
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <select class="form-select">
                      <option>All Type</option>
                      <option>Documents</option>
                      <option>Videos</option>
                      <option>Images</option>
                    </select>
                  </li>
                  <li class="list-inline-item">
                    <input type="date" class="form-control" id="example-datemax" max="1979-12-31" />
                  </li>
                </ul>
              </div>
              <div class="col-auto">
                <ul class="nav nav-pills nav-files" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="pills-home-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-home"
                      role="tab"
                      aria-controls="pills-home"
                      aria-selected="true"
                    >
                      <i class="ti ti-layout-grid"></i>
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="pills-profile-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-profile"
                      role="tab"
                      aria-controls="pills-profile"
                      aria-selected="false"
                    >
                      <i class="ti ti-layout-list"></i>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row my-3">
              <div class="col">
                <div class="d-flex align-items-center">
                  <h5 class="mb-0 me-2">File</h5>
                  <a href="#" class="avtar avtar-xs btn btn-primary rounded-circle p-0" data-bs-toggle="modal" data-bs-target="#uploadFile">
                    <i class="ti ti-plus f-16"></i>
                  </a>
                </div>
              </div>
              <div class="col-auto">
                <button class="btn btn-outline-secondary btn-sm">View All <i class="ti ti-chevron-right ms-2"></i></button>
              </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" tabindex="0">
                <div class="row">
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-1" />
                            <label class="form-check-label d-block" for="file-check-1"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-doc.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-2" />
                            <label class="form-check-label d-block" for="file-check-2"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-xls.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-3" />
                            <label class="form-check-label d-block" for="file-check-3"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-pdf.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a href="#" class="user-popup" data-bs-toggle="modal" data-bs-target="#assignFile">
                            <div class="user-group p-1">
                              <img src="/img/user/avatar-1.jpg" alt="user-image" class="avtar" />
                              <img src="/img/user/avatar-2.jpg" alt="user-image" class="avtar" />
                              <img src="/img/user/avatar-3.jpg" alt="user-image" class="avtar" />
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-4" />
                            <label class="form-check-label d-block" for="file-check-4"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-xls.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-5" />
                            <label class="form-check-label d-block" for="file-check-5"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-rar.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-6" />
                            <label class="form-check-label d-block" for="file-check-6"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-2 text-center">
                          <img src="/img/application/img-file-imgview.jpg" alt="img" class="img-fluid rounded" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-7" />
                            <label class="form-check-label d-block" for="file-check-7"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-ppt.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-8" />
                            <label class="form-check-label d-block" for="file-check-8"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-ai.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-9" />
                            <label class="form-check-label d-block" for="file-check-9"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-ppt.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-10" />
                            <label class="form-check-label d-block" for="file-check-10"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-txt.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-11" />
                            <label class="form-check-label d-block" for="file-check-11"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-img.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-12" />
                            <label class="form-check-label d-block" for="file-check-12"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-doc.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-13" />
                            <label class="form-check-label d-block" for="file-check-13"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-rar.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-14" />
                            <label class="form-check-label d-block" for="file-check-14"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-doc.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-15" />
                            <label class="form-check-label d-block" for="file-check-15"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-ppt.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card file-card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="form-check">
                            <input type="radio" name="file-radio" class="form-check-input input-primary" id="file-check-16" />
                            <label class="form-check-label d-block" for="file-check-16"> </label>
                          </div>
                          <div class="dropdown">
                            <a
                              class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                              href="#"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                              ><i class="material-icons-two-tone f-18">more_vert</i></a
                            >
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                        </div>
                        <div class="my-3 text-center">
                          <img src="https://ableproadmin.com/assets/images/application/img-file-ai.svg" alt="img" class="img-fluid" />
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                          <div>
                            <h6 class="mb-0"><span class="text-truncate w-100">Document-final.docx</span></h6>
                            <p class="mb-0 text-muted"><small>16 Nov 2022</small></p>
                          </div>
                          <a
                            href="#"
                            class="avtar avtar-s btn-light-secondary user-popup"
                            data-bs-toggle="modal"
                            data-bs-target="#assignFile"
                          >
                            <svg class="pc-icon">
                              <use xlink:href="#custom-user-add"></use>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" tabindex="0">
                <div class="table-responsive card bg-transparent border-0 shadow-none">
                  <table class="table table-borderless file-card">
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="https://ableproadmin.com/assets/images/application/img-file-doc.svg" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">Document-final.docx</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="/img/user/avatar-1.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-2.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-3.jpg" alt="user-image" class="avtar" />
                            <span class="avtar avtar-xs bg-light-primary text-primary">+2</span>
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" checked />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="https://ableproadmin.com/assets/images/application/img-file-xls.svg" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">ablepro-design.sketch</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="/img/user/avatar-1.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-2.jpg" alt="user-image" class="avtar" />
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="https://ableproadmin.com/assets/images/application/img-file-pdf.svg" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">Document-final.docx</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="/img/user/avatar-1.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-2.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-5.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-3.jpg" alt="user-image" class="avtar" />
                            <span class="avtar avtar-xs bg-light-primary text-primary">+2</span>
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="https://ableproadmin.com/assets/images/application/img-file-ai.svg" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">Document-final.docx</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="/img/user/avatar-1.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-2.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-3.jpg" alt="user-image" class="avtar" />
                            <span class="avtar avtar-xs bg-light-primary text-primary">+2</span>
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" checked />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="https://ableproadmin.com/assets/images/application/img-file-img.svg" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">ablepro-design.sketch</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="/img/user/avatar-1.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-2.jpg" alt="user-image" class="avtar" />
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="https://ableproadmin.com/assets/images/application/img-file-ppt.svg" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">Document-final.docx</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="/img/user/avatar-1.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-2.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-5.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-3.jpg" alt="user-image" class="avtar" />
                            <span class="avtar avtar-xs bg-light-primary text-primary">+2</span>
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="https://ableproadmin.com/assets/images/application/img-file-txt.svg" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">ablepro-design.sketch</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="/img/user/avatar-1.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-2.jpg" alt="user-image" class="avtar" />
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="form-check form-check-inline m-0 pc-icon-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="material-icons-two-tone pc-icon-uncheck">check_box_outline_blank</i>
                              <i class="material-icons-two-tone text-primary pc-icon-check">check_box</i>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="https://ableproadmin.com/assets/images/application/img-file-rar.svg" alt="user-image" class="wid-35" />
                            <h6 class="mb-0 ms-2 text-truncate">Document-final.docx</h6>
                          </div>
                        </td>
                        <td>16.3 MB</td>
                        <td>16 Nov 2022</td>
                        <td>
                          <div class="user-group p-1">
                            <img src="/img/user/avatar-1.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-2.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-5.jpg" alt="user-image" class="avtar" />
                            <img src="/img/user/avatar-3.jpg" alt="user-image" class="avtar" />
                            <span class="avtar avtar-xs bg-light-primary text-primary">+2</span>
                          </div>
                        </td>
                        <td>
                          <ul class="list-inline text-end">
                            <li class="list-inline-item">
                              <div class="form-check form-check-inline my-0 mx-3 pc-icon-checkbox">
                                <input class="form-check-input" type="checkbox" />
                                <i class="material-icons-two-tone pc-icon-uncheck">star_outline</i>
                                <i class="material-icons-two-tone text-warning pc-icon-check">star</i>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a
                                  class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none"
                                  href="#"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                  ><i class="material-icons-two-tone f-18">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <div class="modal fade" id="uploadFile" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="uploadFileLabel">Upload Files</h1>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="pc-uppy-3">
              <div class="for-DragDrop"></div>
              <div class="for-ProgressBar"></div>
              <div class="uploaded-files mt-3">
                <h5>Uploaded files:</h5>
                <ol></ol>
              </div>
            </div>
            <hr class="my-3 border border-secondary-subtle">
            <div class="input-group">
              <button class="btn btn-outline-secondary">Copy link</button>
              <input type="text" class="form-control" placeholder="Enter URL" value="https://www.figma.com/file/" />
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" data-bs-dismiss="modal">Add Files</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="assignFile" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="assignFileLabel">Share</h1>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="input-group mb-3">
              <label class="input-group-text">Invite People</label>
              <input type="text" class="form-control w-auto" placeholder="Email" />
              <select class="form-select">
                <option>Can view</option>
                <option>Can Edit</option>
              </select>
            </div>
            <div class="media align-items-center my-3">
              <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-2.jpg" alt="User image" />
              <div class="media-body mx-2">
                <p class="mb-0">Addie Bass</p>
              </div>
              <div class="text-primary">Owner</div>
            </div>
            <div class="media align-items-center my-3">
              <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-5.jpg" alt="User image" />
              <div class="media-body mx-2">
                <p class="mb-0">Mark E. Kinder</p>
              </div>
              <select class="form-select w-auto" disabled>
                <option>Can view</option>
                <option>Can Edit</option>
              </select>
            </div>
            <div class="media align-items-center my-3">
              <div class="avtar avtar-s bg-light-primary rounded-circle">
                <span class="f-18">Q</span>
              </div>
              <div class="media-body mx-2">
                <p class="mb-0">Quentin</p>
              </div>
              <select class="form-select w-auto">
                <option>Can view</option>
                <option>Can Edit</option>
              </select>
            </div>
            <div class="media align-items-center my-3">
              <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-3.jpg" alt="User image" />
              <div class="media-body mx-2">
                <p class="mb-0">Richard J. Doran</p>
              </div>
              <select class="form-select w-auto">
                <option>Can view</option>
                <option>Can Edit</option>
              </select>
            </div>
            <hr class="my-3 border border-secondary-subtle">
            <div class="input-group">
              <button class="btn btn-outline-secondary">Copy link</button>
              <input type="text" class="form-control" placeholder="Enter URL" value="https://www.figma.com/file/" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasFileDesc">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title">File Preview</h5>
        <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="offcanvas">
          <i class="ti ti-circle-x f-18"></i>
        </a>
      </div>
      <div class="offcanvas-body">
        <div class="my-3 text-center">
          <img src="https://ableproadmin.com/assets/images/application/img-file-doc.svg" alt="img" class="img-fluid wid-100" />
          <h5 class="mb-1 mt-4">Document-final.docx</h5>
          <p class="mb-0 text-muted">16 Nov 2022</p>
        </div>
        <hr class="my-4 border border-secondary-subtle" />
        <h5>File share with</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="media align-items-center">
              <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-1.jpg" alt="User image" />
              <div class="media-body ms-2">
                <h6 class="mb-0">John Doe</h6>
                <p class="mb-0 text-sm"><a class="link-secondary" href="mailto:John_Doe@ablepro.io">John_Doe@ablepro.io</a></p>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="media align-items-center">
              <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-5.jpg" alt="User image" />
              <div class="media-body ms-2">
                <h6 class="mb-0">Addie Bass</h6>
                <p class="mb-0 text-sm"><a class="link-secondary" href="mailto:Addie_B@ablepro.io">Addie_B@ablepro.io</a></p>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="media align-items-center">
              <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-3.jpg" alt="User image" />
              <div class="media-body ms-2">
                <h6 class="mb-0">Alberta Robbins</h6>
                <p class="mb-0 text-sm"><a class="link-secondary" href="mailto:Alberta@ablepro.io">Alberta@ablepro.io</a></p>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="media align-items-center">
              <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-4.jpg" alt="User image" />
              <div class="media-body ms-2">
                <h6 class="mb-0">Agnes McGee</h6>
                <p class="mb-0 text-sm"><a class="link-secondary" href="mailto:Agnes.Gee@ablepro.io">Agnes.Gee@ablepro.io</a></p>
              </div>
            </div>
          </li>
        </ul>
        <hr class="my-4 border border-secondary-subtle" />
        <div class="row g-2">
          <div class="col-12">
            <div class="d-grid">
              <button class="btn btn-primary">Share</button>
            </div>
          </div>
          <div class="col-6">
            <div class="d-grid">
              <button class="btn btn-light-secondary">Edit</button>
            </div>
          </div>
          <div class="col-6">
            <div class="d-grid">
              <button class="btn btn-light-danger">Delete</button>
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
    <script src="/js/plugins/uppy.min.js"></script>
    <script>
      const Tus = Uppy.Tus;
      const DragDrop = Uppy.DragDrop;
      const ProgressBar = Uppy.ProgressBar;

      const onUploadSuccess = (elForUploadedFiles) => (file, response) => {
        const url = response.uploadURL;
        const fileName = file.name;

        const li = document.createElement('li');
        const a = document.createElement('a');
        a.href = url;
        a.target = '_blank';
        a.appendChild(document.createTextNode(fileName));
        li.appendChild(a);

        document.querySelector(elForUploadedFiles).appendChild(li);
      };
      (function () {
        const pc_uppy_3 = new Uppy.Core({ debug: true, autoProceed: true });
        pc_uppy_3
          .use(DragDrop, { target: '.pc-uppy-3 .for-DragDrop' })
          .use(Tus, { endpoint: 'https://tusd.tusdemo.net/files/' })
          .use(ProgressBar, { target: '.pc-uppy-3 .for-ProgressBar', hideAfterFinish: false })
          .on('upload-success', onUploadSuccess('.pc-uppy-3 .uploaded-files ol'));
      })();
      const offcanvasFileDesc = new bootstrap.Offcanvas('#offcanvasFileDesc');
      var FileDescAction = document.querySelectorAll('.file-card .form-check-label, .file-card td:nth-child(2)');
      for (var i = 0; i < FileDescAction.length; i++) {
        FileDescAction[i].addEventListener('click', function (event) {
          var targetElement = event.target;
          if (targetElement.tagName == 'LABEL') {
            // if (targetElement.parentNode.children[0].checked == true) {
              offcanvasFileDesc.show();
            // }
          } else {
            offcanvasFileDesc.show();
          }
        });
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

<!-- Mirrored from ableproadmin.com/application/file-manager.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:53 GMT -->
</html>
