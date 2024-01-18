<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->


<!-- Mirrored from ableproadmin.com/application/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:46 GMT -->
<head>
  <title>Chat | Able Pro Dashboard Template</title>
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
      
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="chat-wrapper">
            <div class="offcanvas-md offcanvas-start chat-offcanvas" tabindex="-1" id="offcanvas_User_list">
              <div class="offcanvas-header">
                <button  class="btn-close" data-bs-dismiss="offcanvas"
                  data-bs-target="#offcanvas_User_list" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body p-0">
                <div id="chat-user_list" class="show collapse collapse-horizontal">
                  <div class="chat-user_list">
                    <div class="card overflow-hidden">
                      <div class="card-body">
                        <h5 class="mb-4">Messages <span class="badge bg-secondary rounded-circle">9</span></h5>
                        <div class="form-search">
                          <i class="ti ti-search"></i>
                          <input type="search" class="form-control" placeholder="Search Followers">
                        </div>
                      </div>
                      <div class="scroll-block">
                        <div class="card-body p-0">
                          <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="media align-items-center">
                                <div class="chat-avtar">
                                  <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-1.jpg"
                                    alt="User image">
                                  <div class="bg-success chat-badge"></div>
                                </div>
                                <div class="media-body mx-2">
                                  <h5 class="mb-0">John Doe <span class="float-end text-sm text-muted f-w-400">2h
                                      ago</span></h5>
                                  <span class="text-sm text-muted">Technical Department
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-danger text-white">9</span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="media align-items-center">
                                <div class="chat-avtar">
                                  <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-2.jpg"
                                    alt="User image">
                                    <div class="bg-success bg-opacity-50 chat-badge"></div>
                                </div>
                                <div class="media-body mx-2">
                                  <h5 class="mb-0">Keefs <span class="float-end text-sm text-muted f-w-400">3h
                                      ago</span></h5>
                                  <span class="text-sm text-muted">Support Executive
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-success text-white"><i class="ti ti-check"></i></span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="media align-items-center">
                                <div class="chat-avtar">
                                  <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-3.jpg"
                                    alt="User image">
                                    <div class="bg-secondary bg-opacity-50 chat-badge"></div>
                                </div>
                                <div class="media-body mx-2">
                                  <h5 class="mb-0">Lazaro
                                    <span class="float-end text-sm text-muted f-w-400">Yesterday</span>
                                  </h5>
                                  <span class="text-sm text-muted">Teamworks
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-secondary text-white bg-opacity-50"><i class="ti ti-check"></i></span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="media align-items-center">
                                <div class="chat-avtar">
                                  <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-3.jpg"
                                    alt="User image">
                                    <div class="bg-secondary bg-opacity-50 chat-badge"></div>
                                </div>
                                <div class="media-body mx-2">
                                  <h5 class="mb-0">Adeline
                                    <span class="float-end text-sm text-muted f-w-400">4/25/2021</span>
                                  </h5>
                                  <span class="text-sm text-muted">Teamworks
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-secondary text-white bg-opacity-50"><i class="ti ti-check"></i></span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="media align-items-center">
                                <div class="chat-avtar">
                                  <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-1.jpg"
                                    alt="User image">
                                  <div class="bg-success chat-badge"></div>
                                </div>
                                <div class="media-body mx-2">
                                  <h5 class="mb-0">John Doe <span class="float-end text-sm text-muted f-w-400">2h
                                      ago</span></h5>
                                  <span class="text-sm text-muted">Technical Department
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-danger text-white">9</span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="media align-items-center">
                                <div class="chat-avtar">
                                  <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-2.jpg"
                                    alt="User image">
                                    <div class="bg-secondary bg-opacity-50 chat-badge"></div>
                                </div>
                                <div class="media-body mx-2">
                                  <h5 class="mb-0">Keefs <span class="float-end text-sm text-muted f-w-400">3h
                                      ago</span></h5>
                                  <span class="text-sm text-muted">Support Executive
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-success text-white"><i class="ti ti-check"></i></span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="media align-items-center">
                                <div class="chat-avtar">
                                  <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-3.jpg"
                                    alt="User image">
                                    <div class="bg-secondary bg-opacity-50 chat-badge"></div>
                                </div>
                                <div class="media-body mx-2">
                                  <h5 class="mb-0">Lazaro
                                    <span class="float-end text-sm text-muted f-w-400">Yesterday</span>
                                  </h5>
                                  <span class="text-sm text-muted">Teamworks
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-secondary text-white bg-opacity-50"><i class="ti ti-check"></i></span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action p-3">
                              <div class="media align-items-center">
                                <div class="chat-avtar">
                                  <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-3.jpg"
                                    alt="User image">
                                    <div class="bg-secondary bg-opacity-50 chat-badge"></div>
                                </div>
                                <div class="media-body mx-2">
                                  <h5 class="mb-0">Adeline
                                    <span class="float-end text-sm text-muted f-w-400">4/25/2021</span>
                                  </h5>
                                  <span class="text-sm text-muted">Teamworks
                                    <span class="float-end">
                                      <span class="chat-badge-status bg-secondary text-white bg-opacity-50"><i class="ti ti-check"></i></span>
                                    </span></span>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                          <a href="#" class="list-group-item list-group-item-action">
                            <i class="ti ti-power"></i>
                            <span>Logout</span>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action">
                            <i class="ti ti-settings"></i>
                            <span>Setting</span>
                          </a>
                          <div class="list-group-item">
                            <div class="media align-items-center">
                              <div class="chat-avtar">
                                <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-5.jpg"
                                  alt="User image">
                                <i class="chat-badge bg-success"></i>
                              </div>
                              <div class="media-body mx-3">
                                <h5 class="mb-0">John Doe</h5>
                              </div>
                              <div class="dropdown">
                                <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="ti ti-chevron-right f-16"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#"><i
                                      class="chat-badge bg-success"></i> Active</a>
                                  <a class="dropdown-item" href="#"><i class="chat-badge bg-warning"></i>
                                    Away</a>
                                  <a class="dropdown-item" href="#"><i
                                      class="chat-badge bg-secondary"></i> Edit Do not
                                    disturb</a>
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
            <div class="chat-content">
              <div class="card mb-0">              
                <div class="card-header p-3">
                  <div class="d-sm-flex align-items-center">
                    <ul class="list-inline me-auto mb-0">
                      <li class="list-inline-item align-bottom">
                        <a href="#" class="d-md-none avtar avtar-s btn-link-secondary" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvas_User_list">
                          <i class="ti ti-menu-2 f-18"></i>
                        </a>
                        <a href="#" class="d-none d-md-inline-flex avtar avtar-s btn-link-secondary"
                          data-bs-toggle="collapse" data-bs-target="#chat-user_list">
                          <i class="ti ti-menu-2 f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <div class="media align-items-center">
                          <div class="chat-avtar">
                            <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-5.jpg"
                              alt="User image">
                            <i class="chat-badge bg-success"></i>
                          </div>
                          <div class="media-body mx-3">
                            <h5 class="mb-0">Alene</h5>
                            <span class="text-sm text-muted">Active 2 hours ago</span>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-inline ms-auto mb-0">
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s btn-link-secondary">
                          <i class="ti ti-phone-call f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s btn-link-secondary">
                          <i class="ti ti-video f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="d-md-none avtar avtar-s btn-link-secondary" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvas_User_info">
                          <i class="ti ti-info-circle f-18"></i>
                        </a>
                        <a href="#" class="d-none d-md-inline-flex avtar avtar-s btn-link-secondary"
                          data-bs-toggle="collapse" data-bs-target="#chat-user_info">
                          <i class="ti ti-info-circle f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <div class="dropdown">
                          <a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                  </div>
                </div>
                <div class="scroll-block chat-message">
                  <div class="card-body">
                    <div class="message-out">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <ul class="list-inline ms-auto mb-0">
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="ti ti-dots-vertical f-18"></i>
                                </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#"><i class="ti ti-arrow-back-up"></i> Reply</a>
                                  <a class="dropdown-item" href="#"><i class="ti ti-arrow-forward-up"></i> Forward</a>
                                  <a class="dropdown-item" href="#"><i class="ti ti-copy"></i> Copy</a>
                                  <a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a>
                                </div>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" class="avtar avtar-xs btn-link-secondary">
                                <i class="ti ti-edit-circle f-18"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <div class="msg-content bg-primary">
                            <p class="mb-0">Hi Good Morning!</p>
                          </div>
                          <p class="mb-0 text-muted text-sm">11:23 AM</p>
                        </div>
                        <div class="flex-shrink-0">
                          <div class="chat-avtar">
                            <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-5.jpg"
                              alt="User image">
                            <i class="chat-badge bg-success"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="message-in">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <div class="chat-avtar">
                            <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-3.jpg"
                              alt="User image">
                            <i class="chat-badge bg-success"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <div class="msg-content">
                            <p class="mb-0">Hey. Very Good morning. How are you?</p>
                          </div>
                          <p class="mb-0 text-muted text-sm">11:23 AM</p>
                        </div>
                      </div>
                    </div>
                    <div class="message-out">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <ul class="list-inline ms-auto mb-0">
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="ti ti-dots-vertical f-18"></i>
                                </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#"><i class="ti ti-arrow-back-up"></i> Reply</a>
                                  <a class="dropdown-item" href="#"><i class="ti ti-arrow-forward-up"></i> Forward</a>
                                  <a class="dropdown-item" href="#"><i class="ti ti-copy"></i> Copy</a>
                                  <a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a>
                                </div>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" class="avtar avtar-xs btn-link-secondary">
                                <i class="ti ti-edit-circle f-18"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <div class="msg-content bg-primary">
                            <p class="mb-0">Good. Thank you</p>
                          </div>
                          <p class="mb-0 text-muted text-sm">11:23 AM</p>
                        </div>
                        <div class="flex-shrink-0">
                          <div class="chat-avtar">
                            <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-5.jpg"
                              alt="User image">
                            <i class="chat-badge bg-success"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="message-in">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <div class="chat-avtar">
                            <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-3.jpg"
                              alt="User image">
                            <i class="chat-badge bg-success"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <div class="msg-content">
                            <p class="mb-0">I need your minute, are you available?</p>
                          </div>
                          <p class="mb-0 text-muted text-sm">11:23 AM</p>
                        </div>
                      </div>
                    </div>
                    <div class="message-out">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <ul class="list-inline ms-auto mb-0">
                            <li class="list-inline-item">
                              <div class="dropdown">
                                <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="ti ti-dots-vertical f-18"></i>
                                </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#"><i class="ti ti-arrow-back-up"></i> Reply</a>
                                  <a class="dropdown-item" href="#"><i class="ti ti-arrow-forward-up"></i> Forward</a>
                                  <a class="dropdown-item" href="#"><i class="ti ti-copy"></i> Copy</a>
                                  <a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a>
                                </div>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" class="avtar avtar-xs btn-link-secondary">
                                <i class="ti ti-edit-circle f-18"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <div class="msg-content bg-primary">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                          </div>
                          <p class="mb-0 text-muted text-sm">11:23 AM</p>
                        </div>
                        <div class="flex-shrink-0">
                          <div class="chat-avtar">
                            <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-5.jpg"
                              alt="User image">
                            <i class="chat-badge bg-success"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="message-in">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <div class="chat-avtar">
                            <img class="rounded-circle img-fluid wid-40" src="/img/user/avatar-3.jpg"
                              alt="User image">
                            <i class="chat-badge bg-success"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <div class="msg-content">
                            <p class="mb-0">when an unknown printer took a galley of type and scrambled it to make a
                              type specimen book. It has survived not only five centuries.</p>
                          </div>
                          <p class="mb-0 text-muted text-sm">11:23 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer py-2 px-3">
                  <textarea class="form-control border-0 shadow-none px-0" placeholder="Type a Message"
                    rows="2"></textarea>
                  <hr class="my-2">
                  <div class="d-sm-flex align-items-center">
                    <ul class="list-inline me-auto mb-0">
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                          <i class="ti ti-paperclip f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                          <i class="ti ti-photo f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                          <i class="ti ti-mood-smile f-18"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-xs btn-link-secondary">
                          <i class="ti ti-volume f-18"></i>
                        </a>
                      </li>
                    </ul>
                    <ul class="list-inline ms-auto mb-0">
                      <li class="list-inline-item">
                        <a href="#" class="avtar avtar-s btn-link-primary">
                          <i class="ti ti-send f-18"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="offcanvas-md offcanvas-end chat-offcanvas" tabindex="-1" id="offcanvas_User_info">
              <div class="offcanvas-header">
                <button  class="btn-close" data-bs-dismiss="offcanvas"
                  data-bs-target="#offcanvas_User_info" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body p-0">
                <div id="chat-user_info" class="collapse collapse-horizontal">
                  <div class="chat-user_info">
                    <div class="card">
                      <div class="text-center card-body position-relative pb-0">
                        <div class="position-absolute end-0 top-0 p-3 d-none d-md-inline-flex">
                          <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default" data-bs-toggle="collapse"
                            data-bs-target="#chat-user_info">
                            <i class="ti ti-x f-16"></i>
                          </a>
                        </div>
                        <div class="chat-avtar d-inline-flex mx-auto">
                          <img class="rounded-circle img-fluid wid-100" src="/img/user/avatar-5.jpg"
                            alt="User image">
                        </div>
                        <h5 class="mb-0">Alene</h5>
                        <p class="text-muted text-sm">Sr. Customer Manager</p>
                        <div class="d-flex align-items-center justify-content-center mb-4">
                          <i class="chat-badge bg-success me-2"></i>
                          <span class="badge bg-light-success">Available</span>
                        </div>
                        <ul class="list-inline ms-auto mb-0">
                          <li class="list-inline-item">
                            <a href="#" class="avtar avtar-s btn-link-secondary">
                              <i class="ti ti-phone-call f-18"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="avtar avtar-s btn-link-secondary">
                              <i class="ti ti-message-circle f-18"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="avtar avtar-s btn-link-secondary">
                              <i class="ti ti-video f-18"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="scroll-block">
                        <div class="card-body">
                          <div class="row mb-3">
                            <div class="col-6">
                              <div class="p-3 rounded bg-light-primary">
                                <p class="mb-1">All File</p>
                                <div class="d-flex align-items-center">
                                  <i class="ti ti-folder f-22 text-primary"></i>
                                  <h4 class="mb-0 ms-2">231</h4>
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="p-3 rounded bg-light-secondary">
                                <p class="mb-1">All Link</p>
                                <div class="d-flex align-items-center">
                                  <i class="ti ti-link f-22 text-secondary"></i>
                                  <h4 class="mb-0 ms-2">231</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-check form-switch d-flex align-items-center justify-content-between p-0">
                            <label class="form-check-label h5 mb-0" for="customSwitchemlnot1">Notification</label>
                            <input class="form-check-input h5 mb-0 position-relative" type="checkbox"
                              id="customSwitchemlnot1" checked="">
                          </div>
                          <hr class="my-3 border border-secondary-subtle">
                          <a class="btn border-0 p-0 text-start w-100" data-bs-toggle="collapse"
                            href="#filtercollapse1">
                            <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                            <h5 class="mb-0">Information</h5>
                          </a>
                          <div class="collapse show" id="filtercollapse1">
                            <div class="py-3">
                              <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0">Address</p>
                                <p class="mb-0 text-muted">Port Narcos</p>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0">Email</p>
                                <p class="mb-0 text-muted">alene@company.com</p>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0">Phone</p>
                                <p class="mb-0 text-muted">380-293-0177</p>
                              </div>
                              <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">Last visited</p>
                                <p class="mb-0 text-muted">2 hours</p>
                              </div>
                            </div>
                          </div>
                          <hr class="my-3 border border-secondary-subtle">
                          <a class="btn border-0 p-0 text-start w-100" data-bs-toggle="collapse"
                            href="#filtercollapse2">
                            <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                            <h5 class="mb-0">File type</h5>
                          </a>
                          <div class="collapse show" id="filtercollapse2">
                            <div class="py-3">
                              <div class="media align-items-center mb-2">
                                <a href="#" class="avtar avtar-s btn-light-success">
                                  <i class="ti ti-file-text f-20"></i>
                                </a>
                                <div class="media-body ms-3">
                                  <h6 class="mb-0">Document</h6>
                                  <span class="text-muted text-sm">123 files, 193MB</span>
                                </div>
                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                  <i class="ti ti-chevron-right f-16"></i>
                                </a>
                              </div>
                              <div class="media align-items-center mb-2">
                                <a href="#" class="avtar avtar-s btn-light-warning">
                                  <i class="ti ti-photo f-20"></i>
                                </a>
                                <div class="media-body ms-3">
                                  <h6 class="mb-0">Photos</h6>
                                  <span class="text-muted text-sm">53 files, 321MB</span>
                                </div>
                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                  <i class="ti ti-chevron-right f-16"></i>
                                </a>
                              </div>
                              <div class="media align-items-center mb-2">
                                <a href="#" class="avtar avtar-s btn-light-primary">
                                  <i class="ti ti-id f-20"></i>
                                </a>
                                <div class="media-body ms-3">
                                  <h6 class="mb-0">Other</h6>
                                  <span class="text-muted text-sm">49 files, 193MB</span>
                                </div>
                                <a href="#" class="avtar avtar-xs btn-link-secondary">
                                  <i class="ti ti-chevron-right f-16"></i>
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

  <!-- [Page Specific JS] start -->
  <script>
    // scroll-block
    var tc = document.querySelectorAll('.scroll-block');
    for (var t = 0; t < tc.length; t++) {
      new SimpleBar(tc[t]);
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


<!-- Mirrored from ableproadmin.com/application/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:46 GMT -->
</html>