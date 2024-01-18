<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->

  
<!-- Mirrored from ableproadmin.com/dashboard/analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:06 GMT -->
<head>
    <title>Analytics Dashboard | Able Pro Dashboard Template</title>
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
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page">Analytics</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Analytics</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
          <div class="col-md-6 col-xxl-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">New Orders</h5>
                  <select class="form-select rounded-3 form-select-sm w-auto">
                    <option>Today</option>
                    <option>Weekly</option>
                    <option selected>Monthly</option>
                  </select>
                </div>
                <div class="my-3">
                  <div id="new-orders-graph"></div>
                  <h5 class="text-center mt-3"
                    >$30200 <small class="text-primary"><i class="ti ti-arrow-up-right"></i> 30.6%</small></h5
                  >
                </div>
                <div class="d-grid">
                  <a class="btn btn-link-primary" role="button" href="#">View More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">New Users</h5>
                  <select class="form-select rounded-3 form-select-sm w-auto">
                    <option>Today</option>
                    <option>Weekly</option>
                    <option selected>Monthly</option>
                  </select>
                </div>
                <div class="my-3">
                  <div id="new-users-graph"></div>
                  <h5 class="text-center mt-3"
                    >$30200 <small class="text-success"><i class="ti ti-arrow-up-right"></i> 30.6%</small></h5
                  >
                </div>
                <div class="d-grid">
                  <a class="btn btn-link-primary" role="button" href="#">View More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Visitors</h5>
                  <select class="form-select rounded-3 form-select-sm w-auto">
                    <option>Today</option>
                    <option>Weekly</option>
                    <option selected>Monthly</option>
                  </select>
                </div>
                <div class="my-3">
                  <div id="visitors-graph"></div>
                  <h5 class="text-center mt-3"
                    >$30200 <small class="text-danger"><i class="ti ti-arrow-down-right"></i> 30.6%</small></h5
                  >
                </div>
                <div class="d-grid">
                  <a class="btn btn-link-primary" role="button" href="#">View More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xxl-3">
            <div class="card bg-gray-800 dropbox-card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <h5 class="text-white">Dropbox Storage</h5>
                  <h4 class="text-white">150GB</h4>
                </div>
                <div class="mb-3">
                  <div class="avtar avtar-s">
                    <i class="ti ti-cloud f-18"></i>
                  </div>
                </div>
                <small class="text-white">134,2GB of 150GB Users</small>
                <div class="progress mt-2 bg-transparent" style="height: 8px">
                  <div
                    class="progress-bar bg-danger"
                    role="progressbar"
                    style="width: 15%"
                    aria-valuenow="15"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <div
                    class="progress-bar bg-warning"
                    role="progressbar"
                    style="width: 20%"
                    aria-valuenow="30"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <div
                    class="progress-bar bg-light-primary"
                    role="progressbar"
                    style="width: 20%"
                    aria-valuenow="30"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                  <div
                    class="progress-bar bg-success"
                    role="progressbar"
                    style="width: 25%"
                    aria-valuenow="20"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
            <div class="card bg-primary available-balance-card">
              <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <p class="mb-0 text-white text-opacity-75">Available Balance</p>
                    <h4 class="mb-0 text-white">$1,234.90</h4>
                  </div>
                  <div class="avtar">
                    <i class="ti ti-arrows-left-right f-18"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-header pb-0 pt-2">
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
                      >Overview</button
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
                      >Marketing</button
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
                      >Project</button
                    >
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="analytics-tab-4"
                      data-bs-toggle="tab"
                      data-bs-target="#analytics-tab-4-pane"
                      type="button"
                      role="tab"
                      aria-controls="analytics-tab-4-pane"
                      aria-selected="false"
                      >Order</button
                    >
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-7 col-xl-8">
                    <ul class="list-inline mb-3 d-flex align-items-center justify-content-end">
                      <li class="list-inline-item">
                        <button type="button" class="btn btn-sm btn-secondary">This week</button>
                        <button type="button" class="btn btn-sm btn-light">Last week</button>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s btn-link-secondary border border-secondary">
                          <i class="ti ti-external-link f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s btn-link-secondary border border-secondary">
                          <i class="ti ti-arrows-diagonal f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <div class="dropdown">
                          <a
                            href="#"
                            class="avtar avtar-s btn-link-secondary border border-secondary dropdown-toggle arrow-none"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="ti ti-dots f-18"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Name</a>
                            <a class="dropdown-item" href="#">Date</a>
                            <a class="dropdown-item" href="#">Ratting</a>
                            <a class="dropdown-item" href="#">Unread</a>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div
                        class="tab-pane fade show active"
                        id="analytics-tab-1-pane"
                        role="tabpanel"
                        aria-labelledby="analytics-tab-1"
                        tabindex="0"
                      >
                        <div id="overview-chart-1"></div>
                      </div>
                      <div class="tab-pane fade" id="analytics-tab-2-pane" role="tabpanel" aria-labelledby="analytics-tab-2" tabindex="0">
                        <div id="overview-chart-2"></div>
                      </div>
                      <div class="tab-pane fade" id="analytics-tab-3-pane" role="tabpanel" aria-labelledby="analytics-tab-3" tabindex="0">
                        <div id="overview-chart-3"></div>
                      </div>
                      <div class="tab-pane fade" id="analytics-tab-4-pane" role="tabpanel" aria-labelledby="analytics-tab-4" tabindex="0">
                        <div id="overview-chart-4"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-xl-4">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-secondary">
                              <i class="ti ti-chart-bar f-20"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                              <div class="col-6">
                                <p class="text-muted mb-1">Total Sales</p>
                                <h6 class="mb-0">1,800</h6>
                              </div>
                              <div class="col-6 text-end">
                                <h6 class="mb-1">- 245</h6>
                                <p class="text-danger mb-0"><i class="ti ti-arrow-down-left"></i> 30.6%</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-secondary">
                              <i class="ti ti-chart-arrows-vertical f-20"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                              <div class="col-6">
                                <p class="text-muted mb-1">Revenue</p>
                                <h6 class="mb-0">$5667</h6>
                              </div>
                              <div class="col-6 text-end">
                                <h6 class="mb-1">+$2100</h6>
                                <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <div class="avtar avtar-s bg-light-secondary">
                              <i class="ti ti-shopping-cart f-20"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                              <div class="col-6">
                                <p class="text-muted mb-1">Abandon Cart</p>
                                <h6 class="mb-0">128</h6>
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
                            <div class="avtar avtar-s bg-light-secondary">
                              <i class="ti ti-ad f-20"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <div class="row g-1">
                              <div class="col-6">
                                <p class="text-muted mb-1">Ads Spent</p>
                                <h6 class="mb-0">$2500</h6>
                              </div>
                              <div class="col-6 text-end">
                                <h6 class="mb-1">$200</h6>
                                <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-md-12">
            <div class="row">
              <div class="col-md-6 col-xxl-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <div class="avtar avtar-s bg-light-secondary">
                        <i class="ti ti-currency-dollar f-20"></i>
                      </div>
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
                    <h5 class="mb-0">$30,200.00</h5>
                    <p class="text-muted mb-0">Income</p>
                    <div class="mt-2">
                      <div id="income-graph"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xxl-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h5 class="mb-0">Languages support</h5>
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
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <div class="avtar avtar-xs bg-light-secondary">
                          <i class="ti ti-arrow-big-right f-18"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="mb-0">Update version <span class="badge bg-light-success">V1.1.0</span></h6>
                      </div>
                    </div>
                    <div class="mt-2 mb-3">
                      <div id="languages-graph"></div>
                    </div>
                    <div class="row g-2">
                      <div class="col-6">
                        <div class="d-grid"><button class="btn btn-outline-secondary">React</button></div>
                      </div>
                      <div class="col-6">
                        <div class="d-grid"><button class="btn btn-outline-secondary">Angular</button></div>
                      </div>
                      <div class="col-6">
                        <div class="d-grid"><button class="btn btn-outline-secondary">Bootstrap</button></div>
                      </div>
                      <div class="col-6">
                        <div class="d-grid"><button class="btn btn-outline-secondary">MUI</button></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-6 col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="mb-0">Overview Product</h5>
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
                <div class="my-3">
                  <div id="overview-product-graph"></div>
                </div>
                <div class="row g-3 text-center">
                  <div class="col-6 col-lg-4 col-xxl-4">
                    <div class="overview-product-legends">
                      <p class="text-dark mb-1"><span>Apps</span></p>
                      <h6 class="mb-0">10+</h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xxl-4">
                    <div class="overview-product-legends">
                      <p class="text-dark mb-1"><span>Other</span></p>
                      <h6 class="mb-0">5+</h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xxl-4">
                    <div class="overview-product-legends">
                      <p class="text-secondary mb-1"><span>Widgets</span></p>
                      <h6 class="mb-0">150+</h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xxl-4">
                    <div class="overview-product-legends">
                      <p class="text-secondary mb-1"><span>Forms</span></p>
                      <h6 class="mb-0">50+</h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xxl-4">
                    <div class="overview-product-legends">
                      <p class="text-primary mb-1"><span>Components</span></p>
                      <h6 class="mb-0">200+</h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xxl-4">
                    <div class="overview-product-legends">
                      <p class="text-primary mb-1"><span>Pages</span></p>
                      <h6 class="mb-0">150+</h6>
                    </div>
                  </div>
                </div>
                <div class="row g-2 text-center mt-4">
                  <div class="col-sm-6">
                    <div class="d-grid">
                      <button class="btn btn-outline-secondary">View All</button>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="d-grid">
                      <button class="btn btn-primary">Create new Page</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-md-12">
            <div class="row">
              <div class="col-md-6 col-xxl-12">
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
                            <img src="/img/widget/img-paypal.png" alt="img" class="img-fluid" />
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
                            <img src="/img/widget/img-gpay.png" alt="img" class="img-fluid" />
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
                            <img src="/img/widget/img-phonepay.png" alt="img" class="img-fluid" />
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
              <div class="col-md-6 col-xxl-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <div class="my-n4" style="width: 130px">
                          <div id="total-earning-graph-1"></div>
                        </div>
                      </div>
                      <div class="flex-grow-1 mx-2">
                        <p class="mb-1">Total Earning</p>
                        <h6 class="mb-0">$45,890</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <div class="my-n4" style="width: 130px">
                          <div id="total-earning-graph-2"></div>
                        </div>
                      </div>
                      <div class="flex-grow-1 mx-2">
                        <p class="mb-1">Total Earning</p>
                        <h6 class="mb-0">$45,890</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
                  <img src="https://ableproadmin.com/assets/img/customizer/img-caption-1.svg" alt="img" class="img-fluid" width="70%" />
                </button>
              </div>
            </div>
            <div class="col-6">
              <div class="d-grid">
                <button class="preset-btn btn" data-value="false" onclick="layout_caption_change('false');">
                  <img src="https://ableproadmin.com/assets/img/customizer/img-caption-2.svg" alt="img" class="img-fluid" width="70%" />
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
                    <img src="https://ableproadmin.com/assets/img/customizer/img-layout-1.svg" alt="img" class="img-fluid" width="70%" />
                  </button>
                </div>
              </div>
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn" data-value="true" onclick="layout_rtl_change('true');">
                    <img src="https://ableproadmin.com/assets/img/customizer/img-layout-2.svg" alt="img" class="img-fluid" width="70%" />
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
                    <img src="https://ableproadmin.com/assets/img/customizer/img-container-1.svg" alt="img" class="img-fluid" width="70%" />
                  </button>
                </div>
              </div>
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn" data-value="true" onclick="change_box_container('true')">
                    <img src="https://ableproadmin.com/assets/img/customizer/img-container-2.svg" alt="img" class="img-fluid" width="70%" />
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
    <script src="/js/plugins/apexcharts.min.js"></script>
    <script src="/js/pages/dashboard-analytics.js"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="/js/plugins/popper.min.js"></script>
    <script src="/js/plugins/simplebar.min.js"></script>
    <script src="/js/plugins/bootstrap.min.js"></script>
    <script src="/js/fonts/custom-font.js"></script>
    <script src="/js/config.js"></script>
    <script src="/js/pcoded.js"></script>
    <script src="/js/plugins/feather.min.js"></script>

  </body>
  <!-- [Body] end -->

<!-- Mirrored from ableproadmin.com/dashboard/analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:08 GMT -->
</html>
