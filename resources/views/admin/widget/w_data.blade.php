<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->

  
<!-- Mirrored from ableproadmin.com/widget/w_data.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:08 GMT -->
<head>
    <title>Data Widget | Able Pro Dashboard Template</title>
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
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Widget</a></li>
                  <li class="breadcrumb-item" aria-current="page">Data</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Data</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <div class="row">
          <div class="col-xl-4 col-md-12">
            <div class="card">
              <div class="card-body pb-0">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">My Task</h5>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots-vertical f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="list-group list-group-flush border-top-0">
                <li class="list-group-item">
                  <div class="d-flex align-items-start">
                    <div class="flex-grow-1 me-2">
                      <h6 class="mb-0">Follow up client for feedback</h6>
                      <p class="my-1"><i class="ti ti-archive"></i> Sending report</p>
                      <span class="badge bg-danger rounded-pill">00 : 15</span>
                    </div>
                    <div class="flex-shrink-0">
                      <a href="#" class="avtar avtar-s btn-link-secondary">
                        <i class="ti ti-circle-check text-success f-18"></i>
                      </a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="d-flex align-items-start">
                    <div class="flex-grow-1 me-2">
                      <h6 class="mb-0">Follow up client for feedback</h6>
                      <p class="my-1"><i class="ti ti-folder"></i> Received report</p>
                      <span class="badge bg-success rounded-pill">00 : 30</span>
                    </div>
                    <div class="flex-shrink-0">
                      <a href="#" class="avtar avtar-s btn-link-secondary">
                        <i class="ti ti-circle-check f-18"></i>
                      </a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="d-flex align-items-start">
                    <div class="flex-grow-1 me-2">
                      <h6 class="mb-0">Follow up client for feedback</h6>
                      <p class="my-1"><i class="ti ti-archive"></i> Sending report</p>
                      <span class="badge bg-danger rounded-pill">00 : 15</span>
                    </div>
                    <div class="flex-shrink-0">
                      <a href="#" class="avtar avtar-s btn-link-secondary">
                        <i class="ti ti-circle-check f-18"></i>
                      </a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-start">
                  <div class="flex-shrink-0">
                    <div class="avtar avtar-s bg-light-danger">
                      <i class="ti ti-brand-google f-18"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 mx-3">
                    <p class="mb-0">Google LLC</p>
                    <h6 class="mb-0">Sr. UI designer</h6>
                  </div>
                  <div class="flex-shrink-0">
                    <a href="#" class="avtar avtar-s btn-link-secondary">
                      <i class="ti ti-bookmarks f-18"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6>Description</h6>
                <p
                  >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                  dummy text ever since the 1500s, when an unknown printer took a galley.</p
                >
                <ul class="list-inline pt-2">
                  <li class="list-inline-item"><span class="bg-body rounded fs-6 p-2 border text-body">Fulltime</span></li>
                  <li class="list-inline-item"><span class="bg-body rounded fs-6 p-2 border text-body">Remote</span></li>
                  <li class="list-inline-item"><span class="bg-body rounded fs-6 p-2 border text-body">Hourly</span></li>
                </ul>
                <div class="d-flex align-items-center justify-content-between mt-4">
                  <ul class="list-inline mb-0 me-2">
                    <li class="list-inline-item"><i class="text-muted ti ti-map-pin"></i> Pennsylvania,USA</li>
                    <li class="list-inline-item"><i class="text-muted ti ti-clock"></i> 2 days ago</li>
                  </ul>
                  <button class="btn btn-primary">Apply</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card">
              <div class="card-body pb-0">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Team members</h5>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots-vertical f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="list-group list-group-flush border-top-0">
                <li class="list-group-item">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img src="/img/user/avatar-1.jpg" alt="user-image" class="user-avtar rounded wid-50 hie-50" />
                    </div>
                    <div class="flex-grow-1 mx-2">
                      <h6 class="mb-1">David Jones</h6>
                      <p class="mb-0">Project Leader</p>
                    </div>
                    <div class="flex-shrink-0">
                      <p class="text-muted mb-0">5 min ago</p>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img src="/img/user/avatar-3.jpg" alt="user-image" class="user-avtar rounded wid-50 hie-50" />
                    </div>
                    <div class="flex-grow-1 mx-2">
                      <h6 class="mb-1">Robert Smith</h6>
                      <p class="mb-0">HR Manager</p>
                    </div>
                    <div class="flex-shrink-0">
                      <p class="text-muted mb-0">Yesterday</p>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img src="/img/user/avatar-5.jpg" alt="user-image" class="user-avtar rounded wid-50 hie-50" />
                    </div>
                    <div class="flex-grow-1 mx-2">
                      <h6 class="mb-1">John larry</h6>
                      <p class="mb-0">Developer</p>
                    </div>
                    <div class="flex-shrink-0">
                      <p class="text-muted mb-0">1 hour ago</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-8 col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="mb-0">Products</h5>
                  <select class="form-select w-auto">
                    <option>Today</option>
                    <option>Weekly</option>
                    <option selected="">Monthly</option>
                  </select>
                </div>
                <div class="table-responsive">
                  <table class="table table-hover" id="pc-dt-simple">
                    <thead>
                      <tr>
                        <th>Product</th>
                        <th>Status</th>
                        <th class="text-end">Price</th>
                        <th>Sales</th>
                        <th>Rating</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="row align-items-center">
                            <div class="col-auto pe-0">
                              <img src="images/widget/img-prod-1.jpg" alt="user-image" class="wid-55 hei-55 rounded" />
                            </div>
                            <div class="col">
                              <h6 class="mb-2"><span class="text-truncate w-100">Foundations Matte Flip Flop</span></h6>
                              <p class="text-muted f-12 mb-0"
                                ><span class="text-truncate w-100">Leather panels. Laces. Rounded toe. </span></p
                              >
                            </div>
                          </div>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td class="text-end f-w-600">$98</td>
                        <td class="f-w-600"
                          >$500 <small class="text-success f-w-400">+20.6 <i class="ti ti-arrow-up"></i></small
                        ></td>
                        <td class="f-w-600"><i class="fas fa-star text-warning"></i> 4.5 <span class="f-w-400 text-muted">(65)</span></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="row align-items-center">
                            <div class="col-auto pe-0">
                              <img src="images/widget/img-prod-2.jpg" alt="user-image" class="wid-55 hei-55 rounded" />
                            </div>
                            <div class="col">
                              <h6 class="mb-2"><span class="text-truncate w-100">Foundations Matte Flip Flop</span></h6>
                              <p class="text-muted f-12 mb-0"
                                ><span class="text-truncate w-100">Leather panels. Laces. Rounded toe. </span></p
                              >
                            </div>
                          </div>
                        </td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td class="text-end f-w-600">$98</td>
                        <td class="f-w-600"
                          >$500 <small class="text-danger f-w-400">-10.6 <i class="ti ti-arrow-down"></i></small
                        ></td>
                        <td class="f-w-600"><i class="fas fa-star text-warning"></i> 2.5 <span class="f-w-400 text-muted">(65)</span></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="row align-items-center">
                            <div class="col-auto pe-0">
                              <img src="images/widget/img-prod-3.jpg" alt="user-image" class="wid-55 hei-55 rounded" />
                            </div>
                            <div class="col">
                              <h6 class="mb-2"><span class="text-truncate w-100">Foundations Matte Flip Flop</span></h6>
                              <p class="text-muted f-12 mb-0"
                                ><span class="text-truncate w-100">Leather panels. Laces. Rounded toe. </span></p
                              >
                            </div>
                          </div>
                        </td>
                        <td><span class="badge bg-danger">Close</span></td>
                        <td class="text-end f-w-600">$98</td>
                        <td class="f-w-600"
                          >$500 <small class="text-danger f-w-400">20.6 <i class="ti ti-arrow-down"></i></small
                        ></td>
                        <td class="f-w-600"><i class="fas fa-star text-warning"></i> 4.5 <span class="f-w-400 text-muted">(65)</span></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="row align-items-center">
                            <div class="col-auto pe-0">
                              <img src="images/widget/img-prod-4.jpg" alt="user-image" class="wid-55 hei-55 rounded" />
                            </div>
                            <div class="col">
                              <h6 class="mb-2"><span class="text-truncate w-100">Foundations Matte Flip Flop</span></h6>
                              <p class="text-muted f-12 mb-0"
                                ><span class="text-truncate w-100">Leather panels. Laces. Rounded toe. </span></p
                              >
                            </div>
                          </div>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td class="text-end f-w-600">$98</td>
                        <td class="f-w-600"
                          >$500 <small class="text-success f-w-400">-15.4 <i class="ti ti-arrow-up"></i></small
                        ></td>
                        <td class="f-w-600"><i class="fas fa-star text-warning"></i> 3.5 <span class="f-w-400 text-muted">(65)</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="mb-0">Monthly Revenue</h5>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots-vertical f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                </div>
                <h5 class="mb-1"
                  >$746.5k <small class="text-success f-w-400">+20.6 <i class="ti ti-arrow-up"></i></small
                ></h5>
                <p class="text-muted mb-0">Past 30 days</p>
              </div>
              <div class="table-body card-body pt-0">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Customer</th>
                        <th class="text-end">Plan</th>
                        <th class="text-end">MRR</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center text-muted">
                            <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                              <i class="ti ti-arrow-down f-16"></i>
                            </div>
                            <span class="text-truncate w-100">Logicoma</span>
                          </div>
                        </td>
                        <td class="text-end"><span class="badge bg-light-success">Team</span></td>
                        <td class="text-end f-w-600"><span class="text-danger">-$72</span></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center text-muted">
                            <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                              <i class="ti ti-star f-16"></i>
                            </div>
                            <span class="text-truncate w-100">UAC</span>
                          </div>
                        </td>
                        <td class="text-end"><span class="badge bg-light-success">Team</span></td>
                        <td class="text-end f-w-600"><span>$199</span></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center text-muted">
                            <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                              <i class="ti ti-wallet f-16"></i>
                            </div>
                            <span class="text-truncate w-100">Biffco</span>
                          </div>
                        </td>
                        <td class="text-end"><span class="badge bg-light-success">Team</span></td>
                        <td class="text-end f-w-600"><span class="text-danger">-$72</span></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center text-muted">
                            <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                              <i class="ti ti-arrow-down f-16"></i>
                            </div>
                            <span class="text-truncate w-100">Matsumura shworks</span>
                          </div>
                        </td>
                        <td class="text-end"><span class="badge bg-light-success">Team</span></td>
                        <td class="text-end f-w-600"><span class="text-danger">-$72</span></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center text-muted">
                            <div class="avtar avtar-xs bg-light-secondary flex-shrink-0 me-2">
                              <i class="ti ti-wallet f-16"></i>
                            </div>
                            <span class="text-truncate w-100">Biffco</span>
                          </div>
                        </td>
                        <td class="text-end"><span class="badge bg-light-success">Team</span></td>
                        <td class="text-end f-w-600"><span class="text-danger">-$72</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="card new-cust-card">
              <div class="card-header">
                <h5>New Customers</h5>
              </div>
              <div class="customer-scroll" style="height: 415px; position: relative">
                <div class="card-body p-b-0">
                  <div class="align-middle m-b-25">
                    <img src="/img/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" />
                    <div class="d-inline-block">
                      <a href="#!">
                        <h6>Alex Thompson</h6>
                      </a>
                      <p class="m-b-0">Cheers!</p>
                      <span class="status active"></span>
                    </div>
                  </div>
                  <div class="align-middle m-b-25">
                    <img src="/img/user/avatar-2.jpg" alt="user image" class="img-radius align-top m-r-15" />
                    <div class="d-inline-block">
                      <a href="#!">
                        <h6>John Doue</h6>
                      </a>
                      <p class="m-b-0">stay hungry stay foolish!</p>
                      <span class="status active"></span>
                    </div>
                  </div>
                  <div class="align-middle m-b-25">
                    <img src="/img/user/avatar-3.jpg" alt="user image" class="img-radius align-top m-r-15" />
                    <div class="d-inline-block">
                      <a href="#!">
                        <h6>Alex Thompson</h6>
                      </a>
                      <p class="m-b-0">Cheers!</p>
                      <span class="status deactive"><i class="far fa-clock m-r-10"></i>30 min ago</span>
                    </div>
                  </div>
                  <div class="align-middle m-b-25">
                    <img src="/img/user/avatar-4.jpg" alt="user image" class="img-radius align-top m-r-15" />
                    <div class="d-inline-block">
                      <a href="#!">
                        <h6>John Doue</h6>
                      </a>
                      <p class="m-b-0">Cheers!</p>
                      <span class="status deactive"><i class="far fa-clock m-r-10"></i>10 min ago</span>
                    </div>
                  </div>
                  <div class="align-middle m-b-25">
                    <img src="/img/user/avatar-5.jpg" alt="user image" class="img-radius align-top m-r-15" />
                    <div class="d-inline-block">
                      <a href="#!">
                        <h6>Shirley Hoe</h6>
                      </a>
                      <p class="m-b-0">stay hungry stay foolish!</p>
                      <span class="status active"></span>
                    </div>
                  </div>
                  <div class="align-middle m-b-25">
                    <img src="/img/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15" />
                    <div class="d-inline-block">
                      <a href="#!">
                        <h6>John Doue</h6>
                      </a>
                      <p class="m-b-0">Cheers!</p>
                      <span class="status active"></span>
                    </div>
                  </div>
                  <div class="align-middle m-b-25">
                    <img src="/img/user/avatar-2.jpg" alt="user image" class="img-radius align-top m-r-15" />
                    <div class="d-inline-block">
                      <a href="#!">
                        <h6>James Alexander</h6>
                      </a>
                      <p class="m-b-0">stay hungry stay foolish!</p>
                      <span class="status active"></span>
                    </div>
                  </div>
                  <div class="align-middle m-b-0">
                    <img src="/img/user/avatar-3.jpg" alt="user image" class="img-radius align-top m-r-15" />
                    <div class="d-inline-block">
                      <a href="#!">
                        <h6>John Doue</h6>
                      </a>
                      <p class="m-b-0">Cheers!</p>
                      <span class="status deactive"><i class="far fa-clock m-r-10"></i>10 min ago</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="card table-card">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Recent Tickets</h5>
                <a href="#" class="link-primary">View all</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover table-borderless mb-0">
                    <thead>
                      <tr>
                        <th>Subject</th>
                        <th>Department</th>
                        <th>Date</th>
                        <th class="text-end">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Website down for one week</td>
                        <td>Support</td>
                        <td>Today 2:00</td>
                        <td class="text-end"><label class="badge bg-light-success">open</label></td>
                      </tr>
                      <tr>
                        <td>Loosing control on server</td>
                        <td>Support</td>
                        <td>Yesterday</td>
                        <td class="text-end"><label class="badge bg-light-primary">progress</label></td>
                      </tr>
                      <tr>
                        <td>Authorizations keys</td>
                        <td>Support</td>
                        <td>27, Aug</td>
                        <td class="text-end"><label class="badge bg-light-danger">closed</label></td>
                      </tr>
                      <tr>
                        <td>Restoring default settings</td>
                        <td>Support</td>
                        <td>Today 9:00</td>
                        <td class="text-end"><label class="badge bg-light-success">open</label></td>
                      </tr>
                      <tr>
                        <td>Loosing control on server</td>
                        <td>Support</td>
                        <td>Yesterday</td>
                        <td class="text-end"><label class="badge bg-light-primary">progress</label></td>
                      </tr>
                      <tr>
                        <td>Restoring default settings</td>
                        <td>Support</td>
                        <td>Today 9:00</td>
                        <td class="text-end"><label class="badge bg-light-success">open</label></td>
                      </tr>
                      <tr>
                        <td>Loosing control on server</td>
                        <td>Support</td>
                        <td>Yesterday</td>
                        <td class="text-end"><label class="badge bg-light-primary">progress</label></td>
                      </tr>
                      <tr>
                        <td>Authorizations keys</td>
                        <td>Support</td>
                        <td>27, Aug</td>
                        <td class="text-end"><label class="badge bg-light-danger">closed</label></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="card">
              <div class="card-body border-bottom pb-0">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Transactions</h5>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots-vertical f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                </div>
                <ul class="nav nav-tabs analytics-tab" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="analytics-tab-1"
                      data-bs-toggle="tab"
                      data-bs-target="#analytics-tab-1-pane"
                      type="button"
                      role="tab"
                      aria-controls="analytics-tab-1-pane"
                      aria-selected="true"
                      >All Transaction</button
                    >
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="analytics-tab-2"
                      data-bs-toggle="tab"
                      data-bs-target="#analytics-tab-2-pane"
                      type="button"
                      role="tab"
                      aria-controls="analytics-tab-2-pane"
                      aria-selected="false"
                      >Success</button
                    >
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="analytics-tab-3"
                      data-bs-toggle="tab"
                      data-bs-target="#analytics-tab-3-pane"
                      type="button"
                      role="tab"
                      aria-controls="analytics-tab-3-pane"
                      aria-selected="false"
                      >Pending</button
                    >
                  </li>
                </ul>
              </div>
              <div class="tab-content" id="myTabContent">
                <div
                  class="tab-pane fade show active"
                  id="analytics-tab-1-pane"
                  role="tabpanel"
                  aria-labelledby="analytics-tab-1"
                  tabindex="0"
                >
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border"> AI </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Apple Inc.</h6>
                              <p class="text-muted mb-0"><small>#ABLE-PRO-T00232</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">$210,000</h6>
                              <p class="text-danger mb-0"><i class="ti ti-arrow-down-left"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="10,000 Tracks"><span>SM</span></div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Spotify Music</h6>
                              <p class="text-muted mb-0"><small>#ABLE-PRO-T10232</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">- 10,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border bg-light-primary" data-bs-toggle="tooltip" data-bs-title="143 Posts"
                            ><span>MD</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Medium</h6>
                              <p class="text-muted mb-0"><small>06:30 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">-26</h6>
                              <p class="text-warning mb-0"><i class="ti ti-arrows-left-right"></i> 5%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>U</span> </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Uber</h6>
                              <p class="text-muted mb-0"><small>08:40 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">+210,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border bg-light-warning" data-bs-toggle="tooltip" data-bs-title="143 Posts"
                            ><span>OC</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Ola Cabs</h6>
                              <p class="text-muted mb-0"><small>07:40 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">+210,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="analytics-tab-2-pane" role="tabpanel" aria-labelledby="analytics-tab-2" tabindex="0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>U</span> </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Uber</h6>
                              <p class="text-muted mb-0"><small>08:40 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">+210,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border bg-light-warning" data-bs-toggle="tooltip" data-bs-title="143 Posts"
                            ><span>OC</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Ola Cabs</h6>
                              <p class="text-muted mb-0"><small>07:40 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">+210,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border"> AI </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Apple Inc.</h6>
                              <p class="text-muted mb-0"><small>#ABLE-PRO-T00232</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">$210,000</h6>
                              <p class="text-danger mb-0"><i class="ti ti-arrow-down-left"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="10,000 Tracks"><span>SM</span></div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Spotify Music</h6>
                              <p class="text-muted mb-0"><small>#ABLE-PRO-T10232</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">- 10,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border bg-light-primary" data-bs-toggle="tooltip" data-bs-title="143 Posts"
                            ><span>MD</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Medium</h6>
                              <p class="text-muted mb-0"><small>06:30 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">-26</h6>
                              <p class="text-warning mb-0"><i class="ti ti-arrows-left-right"></i> 5%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="analytics-tab-3-pane" role="tabpanel" aria-labelledby="analytics-tab-3" tabindex="0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="10,000 Tracks"><span>SM</span></div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Spotify Music</h6>
                              <p class="text-muted mb-0"><small>#ABLE-PRO-T10232</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">- 10,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border bg-light-primary" data-bs-toggle="tooltip" data-bs-title="143 Posts"
                            ><span>MD</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Medium</h6>
                              <p class="text-muted mb-0"><small>06:30 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">-26</h6>
                              <p class="text-warning mb-0"><i class="ti ti-arrows-left-right"></i> 5%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>U</span> </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Uber</h6>
                              <p class="text-muted mb-0"><small>08:40 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">+210,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border"> AI </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Apple Inc.</h6>
                              <p class="text-muted mb-0"><small>#ABLE-PRO-T00232</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">$210,000</h6>
                              <p class="text-danger mb-0"><i class="ti ti-arrow-down-left"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avtar avtar-s border bg-light-warning" data-bs-toggle="tooltip" data-bs-title="143 Posts"
                            ><span>OC</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <div class="row g-1">
                            <div class="col-6">
                              <h6 class="mb-0">Ola Cabs</h6>
                              <p class="text-muted mb-0"><small>07:40 pm</small></p>
                            </div>
                            <div class="col-6 text-end">
                              <h6 class="mb-1">+210,000</h6>
                              <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-footer">
                <div class="row g-2">
                  <div class="col-md-6">
                    <div class="d-grid">
                      <button class="btn btn-outline-secondary d-grid"
                        ><span class="text-truncate w-100">View all Transaction History</span></button
                      >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="d-grid">
                      <button class="btn btn-primary d-grid"><span class="text-truncate w-100">Create new Transaction</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card">
              <div class="card-body pb-0">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="mb-0">Payment History</h5>
                  <a class="avtar avtar-s btn-link-secondary">
                    <i class="ti ti-plus f-18"></i>
                  </a>
                </div>
              </div>
              <ul class="list-group list-group-flush border-top-0">
                <li class="list-group-item">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avtar avtar-s bg-light-secondary">
                        <img src="images/widget/img-paypal.png" alt="img" class="img-fluid" />
                      </div>
                    </div>
                    <div class="flex-grow-1 mx-2">
                      <p class="mb-1">Paypal</p>
                      <h6 class="mb-0">+210,000 <small class="text-success">+ 30.6%</small></h6>
                    </div>
                    <div class="flex-shrink-0">
                      <div class="dropdown">
                        <a
                          class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                          href="#"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="ti ti-dots-vertical f-18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Name</a>
                          <a class="dropdown-item" href="#">Date</a>
                          <a class="dropdown-item" href="#">Ratting</a>
                          <a class="dropdown-item" href="#">Unread</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avtar avtar-s bg-light-secondary">
                        <img src="images/widget/img-gpay.png" alt="img" class="img-fluid" />
                      </div>
                    </div>
                    <div class="flex-grow-1 mx-2">
                      <p class="mb-1">Gpay</p>
                      <h6 class="mb-0">-$2,000 <small class="text-danger">- 30.6%</small></h6>
                    </div>
                    <div class="flex-shrink-0">
                      <div class="dropdown">
                        <a
                          class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                          href="#"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="ti ti-dots-vertical f-18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Name</a>
                          <a class="dropdown-item" href="#">Date</a>
                          <a class="dropdown-item" href="#">Ratting</a>
                          <a class="dropdown-item" href="#">Unread</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avtar avtar-s bg-light-secondary">
                        <img src="images/widget/img-phonepay.png" alt="img" class="img-fluid" />
                      </div>
                    </div>
                    <div class="flex-grow-1 mx-2">
                      <p class="mb-1">Phone Pay</p>
                      <h6 class="mb-0">-$2,000 <small class="text-danger">- 30.6%</small></h6>
                    </div>
                    <div class="flex-shrink-0">
                      <div class="dropdown">
                        <a
                          class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                          href="#"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="ti ti-dots-vertical f-18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Name</a>
                          <a class="dropdown-item" href="#">Date</a>
                          <a class="dropdown-item" href="#">Ratting</a>
                          <a class="dropdown-item" href="#">Unread</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="card-footer">
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">View all</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Add new task</h5>
                  <div class="dropdown">
                    <a
                      class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                      href="#"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="ti ti-dots-vertical f-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Weekly</a>
                      <a class="dropdown-item" href="#">Monthly</a>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center my-3">
                  <div class="flex-shrink-0">
                    <div class="avtar avtar-s bg-light-success">
                      <i class="ti ti-list-check f-20"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h5 class="mb-0">New Tasks <span class="badge bg-light-secondary rounded-pill">20</span></h5>
                  </div>
                </div>
                <div class="my-3">
                  <p class="mb-2">Tasks done <span class="float-end">30%</span></p>
                  <div class="progress progress-primary" style="height: 8px">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
                </div>
                <div class="d-grid gap-3">
                  <a href="#" class="btn btn-link-secondary">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <span class="p-1 d-block bg-warning rounded-circle">
                          <span class="visually-hidden">New alerts</span>
                        </span>
                      </div>
                      <div class="flex-grow-1 mx-2">
                        <p class="mb-0 d-grid text-start">
                          <span class="text-truncate w-100">Introducation for client</span>
                        </p>
                      </div>
                      <div class="badge bg-light-secondary f-12"><i class="ti ti-paperclip text-sm"></i> 2</div>
                    </div>
                  </a>
                  <a href="#" class="btn btn-link-secondary">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <span class="p-1 d-block bg-primary rounded-circle">
                          <span class="visually-hidden">New alerts</span>
                        </span>
                      </div>
                      <div class="flex-grow-1 mx-2">
                        <p class="mb-0 d-grid text-start">
                          <span class="text-truncate w-100">Creating Wireframes </span>
                        </p>
                      </div>
                      <div class="badge bg-light-secondary f-12"><i class="ti ti-paperclip text-sm"></i> 8</div>
                    </div>
                  </a>
                </div>
                <div class="d-grid mt-3">
                  <button class="btn btn-primary d-flex align-items-center justify-content-center"
                    ><i class="ti ti-plus"></i> Add task</button
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Incoming Requests</h5>
                <a href="#" class="link-primary">View all</a>
              </div>
              <div class="card-body p-0 income-scroll" style="height: 265px; position: relative">
                <div class="mt-3 mb-3">
                  <span class="px-4 d-block"><i class="fas fa-circle text-primary f-10 m-r-5"></i>Incoming requests</span>
                  <hr class="border border-primary-subtle" />
                  <span class="px-4 d-block"><i class="fas fa-circle text-success f-10 m-r-5"></i>You have 2 pending requests..</span>
                  <hr class="border border-primary-subtle" />
                  <span class="px-4 d-block"><i class="fas fa-circle text-danger f-10 m-r-5"></i>You have 3 pending tasks</span>
                  <hr class="border border-primary-subtle" />
                  <span class="px-4 d-block"><i class="fas fa-circle text-warning f-10 m-r-5"></i>New order received</span>
                  <hr class="border border-primary-subtle" />
                  <span class="px-4 d-block"><i class="fas fa-circle text-info f-10 m-r-5"></i>Incoming requests</span>
                  <hr class="border border-primary-subtle" />
                  <span class="px-4 d-block"
                    ><i class="fas fa-circle text-success f-10 m-r-5"></i>The 3 Golden Rules Professional Design..</span
                  >
                  <hr class="border border-primary-subtle" />
                  <span class="px-4 d-block"><i class="fas fa-circle text-danger f-10 m-r-5"></i>You have 4 pending tasks</span>
                  <hr class="border border-primary-subtle" />
                  <span class="px-4 d-block"><i class="fas fa-circle text-warning f-10 m-r-5"></i>New order received</span>
                </div>
              </div>
              <div class="card-footer">
                <h6 class="text-center m-0"><a href="#!">Show more</a></h6>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card table-card">
              <div class="card-header borderless">
                <h5>Total Revenue</h5>
              </div>
              <div class="card-body px-0 py-0">
                <div class="table-responsive">
                  <div class="revenue-scroll" style="height: 310px; position: relative">
                    <table class="table table-hover mb-0">
                      <tbody>
                        <tr>
                          <td><i class="fas fa-caret-up text-success f-24"></i></td>
                          <td>Bitcoin</td>
                          <td>
                            <h6 class="text-success">+ $145.85</h6>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                          <td>Ethereum</td>
                          <td>
                            <h6 class="text-danger">- $6.368</h6>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-caret-up text-success f-24"></i></td>
                          <td>Ripple</td>
                          <td>
                            <h6 class="text-success">+ $458.63</h6>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                          <td>Neo</td>
                          <td>
                            <h6 class="text-danger">- $5.631</h6>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                          <td>Bitcoin</td>
                          <td>
                            <h6 class="text-danger">- $75.86</h6>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-caret-up text-success f-24"></i></td>
                          <td>Ethereum</td>
                          <td>
                            <h6 class="text-success">+ $453.63</h6>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                          <td>Ripple</td>
                          <td>
                            <h6 class="text-danger">+ $786.63</h6>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-caret-up text-success f-24"></i></td>
                          <td>Neo</td>
                          <td>
                            <h6 class="text-success">+ $145.85</h6>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                          <td>Bitcoin</td>
                          <td>
                            <h6 class="text-danger">- $6.368</h6>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-caret-up text-success f-24"></i></td>
                          <td>Ethereum</td>
                          <td>
                            <h6 class="text-success">+ $458.63</h6>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                          <td>Neo</td>
                          <td>
                            <h6 class="text-danger">- $5.631</h6>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                          <td>Ripple</td>
                          <td>
                            <h6 class="text-danger">- $75.86</h6>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-caret-up text-success f-24"></i></td>
                          <td>Bitcoin</td>
                          <td>
                            <h6 class="text-success">+ $453.63</h6>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                          <td>Ethereum</td>
                          <td>
                            <h6 class="text-danger">+ $786.63</h6>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-12">
            <div class="card task-card">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tasks</h5>
                <a href="#" class="link-primary">View all</a>
              </div>
              <div class="card-body">
                <ul class="list-unstyled task-list">
                  <li>
                    <i class="feather icon-check f-w-600 task-icon bg-success"></i>
                    <p class="m-b-5">8:50</p>
                    <h5 class="text-muted"
                      >Call to customer <span class="text-primary"> <a href="#!" class="text-primary">Jacob</a> </span> and discuss the</h5
                    >
                  </li>
                  <li>
                    <i class="task-icon bg-primary"></i>
                    <p class="m-b-5">Sat, 5 Mar</p>
                    <h5 class="text-muted">Design mobile Application</h5>
                  </li>
                  <li>
                    <i class="task-icon bg-danger"></i>
                    <p class="m-b-5">Sun, 17 Feb</p>
                    <h5 class="text-muted"
                      ><span class="text-primary"><a href="#!" class="text-primary">Jeny</a></span>
                      assign you a task
                      <span class="text-primary"><a href="#!" class="text-primary">Mockup Design.</a></span>
                    </h5>
                  </li>
                  <li>
                    <i class="task-icon bg-warning"></i>
                    <p class="m-b-5">Sat, 18 Mar</p>
                    <h5 class="text-muted">Design logo</h5>
                  </li>
                  <li class="p-b-15 m-b-10">
                    <i class="task-icon bg-success"></i>
                    <p class="m-b-5">Sat, 22 Mar</p>
                    <h5 class="text-muted">Design mobile Application</h5>
                  </li>
                </ul>
                <div class="text-end">
                  <a href="#!" class="b-b-primary text-primary">View Friend List</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ Main Content ] end -->
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
    <script src="/js/plugins/simple-datatables.js"></script>
    <script>
      const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
        sortable: false,
        perPage: 5
      });
      // new SimpleBar(document.querySelector('.sale-scroll'));
      // new SimpleBar(document.querySelector('.feed-scroll'));
      new SimpleBar(document.querySelector('.revenue-scroll'));
      new SimpleBar(document.querySelector('.income-scroll'));
      new SimpleBar(document.querySelector('.customer-scroll'));
    </script>
    <!-- [Page Specific JS] end -->
  </body>
  <!-- [Body] end -->

<!-- Mirrored from ableproadmin.com/widget/w_data.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:09 GMT -->
</html>
