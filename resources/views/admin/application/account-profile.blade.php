<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->


<!-- Mirrored from ableproadmin.com/application/account-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:54 GMT -->
<head>
  <title>Account Profile 1 | Able Pro Dashboard Template</title>
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
                <li class="breadcrumb-item"><a href="javascript: void(0)">Users</a></li>
                <li class="breadcrumb-item" aria-current="page">Account Profile</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Account Profile</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body py-0">
              <ul class="nav nav-tabs profile-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="profile-tab-1" data-bs-toggle="tab" href="#profile-1" role="tab"
                    aria-selected="true">
                    <i class="ti ti-user me-2"></i>Profile
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab-2" data-bs-toggle="tab" href="#profile-2" role="tab"
                    aria-selected="true">
                    <i class="ti ti-file-text me-2"></i>Personal Details
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab-3" data-bs-toggle="tab" href="#profile-3" role="tab"
                    aria-selected="true">
                    <i class="ti ti-id me-2"></i>My Account
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab-4" data-bs-toggle="tab" href="#profile-4" role="tab"
                    aria-selected="true">
                    <i class="ti ti-lock me-2"></i>Change Password
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab-5" data-bs-toggle="tab" href="#profile-5" role="tab"
                    aria-selected="true">
                    <i class="ti ti-users me-2"></i>Role
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab-6" data-bs-toggle="tab" href="#profile-6" role="tab"
                    aria-selected="true">
                    <i class="ti ti-settings me-2"></i>Settings
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content">
            <div class="tab-pane show active" id="profile-1" role="tabpanel" aria-labelledby="profile-tab-1">
              <div class="row">
                <div class="col-lg-4 col-xxl-3">
                  <div class="card">
                    <div class="card-body position-relative">
                      <div class="position-absolute end-0 top-0 p-3">
                        <span class="badge bg-primary">Pro</span>
                      </div>
                      <div class="text-center mt-3">
                        <div class="chat-avtar d-inline-flex mx-auto">
                          <img class="rounded-circle img-fluid wid-70" src="/img/user/avatar-5.jpg"
                            alt="User image">
                        </div>
                        <h5 class="mb-0">Anshan H.</h5>
                        <p class="text-muted text-sm">Project Manager</p>
                        <hr class="my-3 border border-secondary-subtle">
                        <div class="row g-3">
                          <div class="col-4">
                            <h5 class="mb-0">86</h5>
                            <small class="text-muted">Post</small>
                          </div>
                          <div class="col-4 border border-top-0 border-bottom-0">
                            <h5 class="mb-0">40</h5>
                            <small class="text-muted">Project</small>
                          </div>
                          <div class="col-4">
                            <h5 class="mb-0">4.5K</h5>
                            <small class="text-muted">Members</small>
                          </div>
                        </div>
                        <hr class="my-3 border border-secondary-subtle">
                        <div class="d-inline-flex align-items-center justify-content-start w-100 mb-3">
                          <i class="ti ti-mail me-2"></i>
                          <p class="mb-0">anshan@gmail.com</p>
                        </div>
                        <div class="d-inline-flex align-items-center justify-content-start w-100 mb-3">
                          <i class="ti ti-phone me-2"></i>
                          <p class="mb-0">(+1-876) 8654 239 581</p>
                        </div>
                        <div class="d-inline-flex align-items-center justify-content-start w-100 mb-3">
                          <i class="ti ti-map-pin me-2"></i>
                          <p class="mb-0">New York</p>
                        </div>
                        <div class="d-inline-flex align-items-center justify-content-start w-100">
                          <i class="ti ti-link me-2"></i>
                          <a href="#" class="link-primary">
                            <p class="mb-0">https://anshan.dh.url</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Skills</h5>
                    </div>
                    <div class="card-body">
                      <div class="row align-items-center mb-3">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <p class="mb-0">Junior</p>
                        </div>
                        <div class="col-sm-6">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-3">
                              <div class="progress progress-primary " style="height: 6px;">
                                <div class="progress-bar" style="width: 30%;"></div>
                              </div>
                            </div>
                            <div class="flex-shrink-0">
                              <p class="mb-0 text-muted">30%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row align-items-center mb-3">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <p class="mb-0">UX Researcher</p>
                        </div>
                        <div class="col-sm-6">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-3">
                              <div class="progress progress-primary " style="height: 6px;">
                                <div class="progress-bar" style="width: 80%;"></div>
                              </div>
                            </div>
                            <div class="flex-shrink-0">
                              <p class="mb-0 text-muted">80%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row align-items-center mb-3">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <p class="mb-0">Wordpress</p>
                        </div>
                        <div class="col-sm-6">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-3">
                              <div class="progress progress-primary " style="height: 6px;">
                                <div class="progress-bar" style="width: 90%;"></div>
                              </div>
                            </div>
                            <div class="flex-shrink-0">
                              <p class="mb-0 text-muted">90%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row align-items-center mb-3">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <p class="mb-0">HTML</p>
                        </div>
                        <div class="col-sm-6">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-3">
                              <div class="progress progress-primary " style="height: 6px;">
                                <div class="progress-bar" style="width: 30%;"></div>
                              </div>
                            </div>
                            <div class="flex-shrink-0">
                              <p class="mb-0 text-muted">30%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row align-items-center mb-3">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <p class="mb-0">Graphic Design</p>
                        </div>
                        <div class="col-sm-6">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-3">
                              <div class="progress progress-primary " style="height: 6px;">
                                <div class="progress-bar" style="width: 95%;"></div>
                              </div>
                            </div>
                            <div class="flex-shrink-0">
                              <p class="mb-0 text-muted">95%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <p class="mb-0">Code Style</p>
                        </div>
                        <div class="col-sm-6">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-3">
                              <div class="progress progress-primary " style="height: 6px;">
                                <div class="progress-bar" style="width: 75%;"></div>
                              </div>
                            </div>
                            <div class="flex-shrink-0">
                              <p class="mb-0 text-muted">75%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 col-xxl-9">
                  <div class="card">
                    <div class="card-header">
                      <h5>About me</h5>
                    </div>
                    <div class="card-body">
                      <p class="mb-0">Hello, I’m Anshan Handgun Creative Graphic Designer & User Experience Designer
                        based in Website, I create digital Products a more Beautiful and usable place. Morbid
                        accusant ipsum. Nam nec tellus at.</p>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Personal Details</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="row">
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Full Name</p>
                              <p class="mb-0">Anshan Handgun</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Father Name</p>
                              <p class="mb-0">Mr. Deepen Handgun</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row">
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Phone</p>
                              <p class="mb-0">(+1-876) 8654 239 581</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Country</p>
                              <p class="mb-0">New York</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row">
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Email</p>
                              <p class="mb-0">anshan.dh81@gmail.com</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Zip Code</p>
                              <p class="mb-0">956 754</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <p class="mb-1 text-muted">Address</p>
                          <p class="mb-0">Street 110-B Kalians Bag, Dewan, M.P. New York</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Education</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="row">
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Master Degree (Year)</p>
                              <p class="mb-0">2014-2017</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Institute</p>
                              <p class="mb-0">-</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row">
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Bachelor (Year)</p>
                              <p class="mb-0">2011-2013</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Institute</p>
                              <p class="mb-0">Imperial College London</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <div class="row">
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">School (Year)</p>
                              <p class="mb-0">2009-2011</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Institute</p>
                              <p class="mb-0">School of London, England</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Employment</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="row">
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Senior</p>
                              <p class="mb-0">Senior UI/UX designer (Year)</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Job Responsibility</p>
                              <p class="mb-0">Perform task related to project manager with the 100+ team under my
                                observation. Team management is key role in this company.</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row">
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Trainee cum Project Manager (Year)</p>
                              <p class="mb-0">2017-2019</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Job Responsibility</p>
                              <p class="mb-0">Team management is key role in this company.</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <div class="row">
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">School (Year)</p>
                              <p class="mb-0">2009-2011</p>
                            </div>
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Institute</p>
                              <p class="mb-0">School of London, England</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
              <div class="row">
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h5>Personal Information</h5>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-12 text-center mb-3">
                          <div class="user-upload wid-75">
                            <img src="/img/user/avatar-4.jpg" alt="img" class="img-fluid">
                            <label for="uplfile" class="img-avtar-upload">
                              <i class="ti ti-camera f-24 mb-1"></i>
                              <span>Upload</span>
                            </label>
                            <input type="file" id="uplfile" class="d-none">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" value="Anshan">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" value="Handgun">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control" value="New York">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Zip code</label>
                            <input type="text" class="form-control" value="956754">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="form-label">Bio</label>
                            <textarea
                              class="form-control">Hello, I’m Anshan Handgun Creative Graphic Designer & User Experience Designer based in Website, I create digital Products a more Beautiful and usable place. Morbid accusant ipsum. Nam nec tellus at.</textarea>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="form-label">Experience</label>
                            <select class="form-control">
                              <option>Startup</option>
                              <option>2 year</option>
                              <option>3 year</option>
                              <option selected>4 year</option>
                              <option>5 year</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h5>Social Network</h5>
                    </div>
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-2">
                        <div class="flex-grow-1 me-3">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <div class="avtar avtar-xs btn-light-twitter">
                                <i class="fab fa-twitter f-16"></i>
                              </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Twitter</h6>
                            </div>
                          </div>
                        </div>
                        <div class="flex-shrink-0">
                          <button class="btn btn-link-primary">Connect</button>
                        </div>
                      </div>
                      <div class="d-flex align-items-center mb-2">
                        <div class="flex-grow-1 me-3">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <div class="avtar avtar-xs btn-light-facebook">
                                <i class="fab fa-facebook-f f-16"></i>
                              </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Facebook <small class="text-muted f-w-400">/Anshan Handgun</small></h6>
                            </div>
                          </div>
                        </div>
                        <div class="flex-shrink-0">
                          <button class="btn btn-link-danger">Remove</button>
                        </div>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="flex-grow-1 me-3">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <div class="avtar avtar-xs btn-light-linkedin">
                                <i class="fab fa-linkedin-in f-16"></i>
                              </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h6 class="mb-0">Linkedin</h6>
                            </div>
                          </div>
                        </div>
                        <div class="flex-shrink-0">
                          <button class="btn btn-link-primary">Connect</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Contact Information</h5>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Contact Phone</label>
                            <input type="text" class="form-control" value="(+99) 9999 999 999">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="demo@sample.com">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="form-label">Portfolio Url</label>
                            <input type="text" class="form-control" value="https://demo.com/">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="form-label">Address</label>
                            <textarea class="form-control">3379  Monroe Avenue, Fort Myers, Florida(33912)</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 text-end btn-page">
                  <div class="btn btn-outline-secondary">Cancel</div>
                  <div class="btn btn-primary">Update Profile</div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="profile-3" role="tabpanel" aria-labelledby="profile-tab-3">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h5>General Settings</h5>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="Ashoka_Tano_16">
                            <small class="form-text text-muted">Your Profile URL:
                              https://pc.com/Ashoka_Tano_16</small>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Account Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="demo@sample.com">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Language</label>
                            <select class="form-control">
                              <option>Washington</option>
                              <option>India</option>
                              <option>Africa</option>
                              <option>New York</option>
                              <option>Malaysia</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Sign in Using</label>
                            <select class="form-control">
                              <option>Password</option>
                              <option>Face Recognition</option>
                              <option>Thumb Impression</option>
                              <option>Key</option>
                              <option>Pin</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h5>Advance Settings</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div>
                              <p class="mb-1">Secure Browsing</p>
                              <p class="text-muted text-sm mb-0">Browsing Securely ( https ) when it's necessary</p>
                            </div>
                            <div class="form-check form-switch p-0">
                              <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch"
                                checked="">
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div>
                              <p class="mb-1">Login Notifications</p>
                              <p class="text-muted text-sm mb-0">Notify when login attempted from other place</p>
                            </div>
                            <div class="form-check form-switch p-0">
                              <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch"
                                checked="">
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div>
                              <p class="mb-1">Login Approvals</p>
                              <p class="text-muted text-sm mb-0">Approvals is not required when login from
                                unrecognized devices.</p>
                            </div>
                            <div class="form-check form-switch p-0">
                              <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch"
                                checked="">
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header">
                      <h5>Recognized Devices</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <p class="mb-2">Celt Desktop</p>
                              <p class="mb-0 text-muted">4351 Deans Lane</p>
                            </div>
                            <div class="">
                              <div class="text-success d-inline-block me-2">
                                <i class="fas fa-circle f-10 me-2"></i>
                                Current Active
                              </div>
                              <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <p class="mb-2">Imco Tablet</p>
                              <p class="mb-0 text-muted">4185 Michigan Avenue</p>
                            </div>
                            <div class="">
                              <div class="text-muted d-inline-block me-2">
                                <i class="fas fa-circle f-10 me-2"></i>
                                Active 5 days ago
                              </div>
                              <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <p class="mb-2">Albs Mobile</p>
                              <p class="mb-0 text-muted">3462 Fairfax Drive</p>
                            </div>
                            <div class="">
                              <div class="text-muted d-inline-block me-2">
                                <i class="fas fa-circle f-10 me-2"></i>
                                Active 1 month ago
                              </div>
                              <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h5>Active Sessions</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <p class="mb-2">Celt Desktop</p>
                              <p class="mb-0 text-muted">4351 Deans Lane</p>
                            </div>
                            <button class="btn btn-link-danger">Logout</button>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="me-2">
                              <p class="mb-2">Moon Tablet</p>
                              <p class="mb-0 text-muted">4185 Michigan Avenue</p>
                            </div>
                            <button class="btn btn-link-danger">Logout</button>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12 text-end">
                  <button class="btn btn-outline-dark ms-2">Clear</button>
                  <button class="btn btn-primary">Update Profile</button>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
              <div class="card">
                <div class="card-header">
                  <h5>Change Password</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label">Old Password</label>
                        <input type="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <h5>New password must contain:</h5>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="ti ti-circle-check text-success f-16 me-2"></i> At least 8
                          characters</li>
                        <li class="list-group-item"><i class="ti ti-circle-check text-success f-16 me-2"></i> At least 1
                          lower letter (a-z)</li>
                        <li class="list-group-item"><i class="ti ti-circle-check text-success f-16 me-2"></i> At least 1
                          uppercase letter(A-Z)</li>
                        <li class="list-group-item"><i class="ti ti-circle-check text-success f-16 me-2"></i> At least 1
                          number (0-9)</li>
                        <li class="list-group-item"><i class="ti ti-circle-check text-success f-16 me-2"></i> At least 1
                          special characters</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-end btn-page">
                  <div class="btn btn-outline-secondary">Cancel</div>
                  <div class="btn btn-primary">Update Profile</div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="profile-5" role="tabpanel" aria-labelledby="profile-tab-5">
              <div class="card">
                <div class="card-header">
                  <h5>Invite Team Members</h5>
                </div>
                <div class="card-body">
                  <h4>5/10 <small>members available in your plan.</small></h4>
                  <hr class="my-3">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <div class="row">
                          <div class="col">
                            <input type="email" class="form-control">
                          </div>
                          <div class="col-auto">
                            <button class="btn btn-primary">Send</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body table-card">
                  <div class="table-responsive">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th>MEMBER</th>
                          <th>ROLE</th>
                          <th class="text-end">STATUS</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="/img/user/avatar-1.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Addie Bass</h5>
                                <p class="text-muted f-12 mb-0">mareva@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-primary">Owner</span></td>
                          <td class="text-end"><span class="badge bg-success">Joined</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="/img/user/avatar-4.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Agnes McGee</h5>
                                <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-info">Manager</span></td>
                          <td class="text-end"><a href="#" class="btn btn-link-danger">Resend</a> <span
                              class="badge bg-light-success">Invited</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="/img/user/avatar-5.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Agnes McGee</h5>
                                <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-warning">Staff</span></td>
                          <td class="text-end"><span class="badge bg-success">Joined</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="/img/user/avatar-1.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Addie Bass</h5>
                                <p class="text-muted f-12 mb-0">mareva@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-primary">Owner</span></td>
                          <td class="text-end"><span class="badge bg-success">Joined</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="/img/user/avatar-4.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Agnes McGee</h5>
                                <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-info">Manager</span></td>
                          <td class="text-end"><a href="#" class="btn btn-link-danger">Resend</a> <span
                              class="badge bg-light-success">Invited</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="/img/user/avatar-5.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Agnes McGee</h5>
                                <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-warning">Staff</span></td>
                          <td class="text-end"><span class="badge bg-success">Joined</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="/img/user/avatar-1.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Addie Bass</h5>
                                <p class="text-muted f-12 mb-0">mareva@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-primary">Owner</span></td>
                          <td class="text-end"><span class="badge bg-success">Joined</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="/img/user/avatar-4.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Agnes McGee</h5>
                                <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-info">Manager</span></td>
                          <td class="text-end"><a href="#" class="btn btn-link-danger">Resend</a> <span
                              class="badge bg-light-success">Invited</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-auto pe-0">
                                <img src="/img/user//avatar-5.jpg" alt="user-image"
                                  class="wid-40 rounded-circle">
                              </div>
                              <div class="col">
                                <h5 class="mb-0">Agnes McGee</h5>
                                <p class="text-muted f-12 mb-0">heba@gmail.com</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-warning">Staff</span></td>
                          <td class="text-end"><span class="badge bg-success">Joined</span></td>
                          <td class="text-end"><a href="#" class="avtar avtar-s btn-link-secondary"><i
                                class="ti ti-dots f-18"></i></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer text-end btn-page">
                  <div class="btn btn-link-danger">Cancel</div>
                  <div class="btn btn-primary">Update Profile</div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="profile-6" role="tabpanel" aria-labelledby="profile-tab-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h5>Email Settings</h5>
                    </div>
                    <div class="card-body">
                      <h6 class="mb-4">Setup Email Notification</h6>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Email Notification</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Send Copy To Personal Email</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Updates from System Notification</h5>
                    </div>
                    <div class="card-body">
                      <h6 class="mb-4">Email you with?</h6>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">News about PCT-themes products and feature updates</p>
                        </div>
                        <div class="form-check p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Tips on getting more out of PCT-themes</p>
                        </div>
                        <div class="form-check p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Things you missed since you last logged into PCT-themes</p>
                        </div>
                        <div class="form-check  p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">News about products and other services</p>
                        </div>
                        <div class="form-check p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Tips and Document business products</p>
                        </div>
                        <div class="form-check p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h5>Activity Related Emails</h5>
                    </div>
                    <div class="card-body">
                      <h6 class="mb-4">When to email?</h6>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Have new notifications</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">You're sent a direct message</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Someone adds you as a connection</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                      <hr class="my-4 border border-secondary-subtle">
                      <h6 class="mb-4">When to escalate emails?</h6>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Upon new order</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">New membership approval</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                        </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <div>
                          <p class="text-muted mb-0">Member registration</p>
                        </div>
                        <div class="form-check form-switch p-0">
                          <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch"
                            checked="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 text-end btn-page">
                  <div class="btn btn-outline-secondary">Cancel</div>
                  <div class="btn btn-primary">Update Profile</div>
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

</body>
<!-- [Body] end -->


<!-- Mirrored from ableproadmin.com/application/account-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:54 GMT -->
</html>