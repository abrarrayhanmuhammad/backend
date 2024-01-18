<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->

  
<!-- Mirrored from ableproadmin.com/application/ecom_product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:48 GMT -->
<head>
    <title>Products | Able Pro Dashboard Template</title>
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


          {{-- aaaaaaaaaaaaaaaaaaa --}}
          



                {{-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb --}}
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
                  <li class="breadcrumb-item"><a href="javascript: void(0)">E-commerce</a></li>
                  <li class="breadcrumb-item" aria-current="page">Products</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Products</h2>
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
            <div class="ecom-wrapper">
              <div class="offcanvas-xxl offcanvas-start ecom-offcanvas" tabindex="-1" id="offcanvas_mail_filter">
                <div class="offcanvas-body p-0 sticky-xxl-top">
                  <div id="ecom-filter" class="show collapse collapse-horizontal">
                    <div class="ecom-filter">
                      <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <h5>Filter</h5>
                          <a
                            href="#"
                            class="avtar avtar-s btn-link-danger btn-pc-default"
                            data-bs-dismiss="offcanvas"
                            data-bs-target="#offcanvas_mail_filter"
                          >
                            <i class="ti ti-x f-20"></i>
                          </a>
                        </div>
                        <div class="scroll-block">
                          <div class="card-body">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item px-0 py-2">
                                <a class="btn border-0 px-0 text-start w-100" data-bs-toggle="collapse" href="#filtercollapse1">
                                  <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                                  Gender
                                </a>
                                <div class="collapse show" id="filtercollapse1">
                                  <div class="py-3">
                                    <div class="form-check my-2">
                                      <input class="form-check-input" type="checkbox" id="genderfilter1" value="option1" />
                                      <label class="form-check-label" for="genderfilter1">Male</label>
                                    </div>
                                    <div class="form-check my-2">
                                      <input class="form-check-input" type="checkbox" id="genderfilter2" value="option2" />
                                      <label class="form-check-label" for="genderfilter2">Female</label>
                                    </div>
                                    <div class="form-check my-2">
                                      <input class="form-check-input" type="checkbox" id="genderfilter3" value="option3" />
                                      <label class="form-check-label" for="genderfilter3">Kids</label>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="list-group-item px-0 py-2">
                                <a class="btn border-0 px-0 text-start w-100" data-bs-toggle="collapse" href="#filtercollapse2">
                                  <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                                  Categories
                                </a>
                                <div class="collapse show" id="filtercollapse2">
                                  <div class="py-3">
                                    <div class="form-check my-2">
                                      <input class="form-check-input" type="checkbox" id="categoryfilter1" value="option1" />
                                      <label class="form-check-label" for="categoryfilter1">All</label>
                                    </div>
                                    <div class="form-check my-2">
                                      <input class="form-check-input" type="checkbox" id="categoryfilter2" value="option2" />
                                      <label class="form-check-label" for="categoryfilter2">Electronics</label>
                                    </div>
                                    <div class="form-check my-2">
                                      <input class="form-check-input" type="checkbox" id="categoryfilter3" value="option3" />
                                      <label class="form-check-label" for="categoryfilter3">Fashion</label>
                                    </div>
                                    <div class="form-check my-2">
                                      <input class="form-check-input" type="checkbox" id="categoryfilter4" value="option1" />
                                      <label class="form-check-label" for="categoryfilter4">Kitchen</label>
                                    </div>
                                    <div class="form-check my-2">
                                      <input class="form-check-input" type="checkbox" id="categoryfilter5" value="option2" />
                                      <label class="form-check-label" for="categoryfilter5">Books</label>
                                    </div>
                                    <div class="form-check my-2">
                                      <input class="form-check-input" type="checkbox" id="categoryfilter6" value="option3" />
                                      <label class="form-check-label" for="categoryfilter6">Toys</label>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="list-group-item px-0 py-2">
                                <a class="btn border-0 px-0 text-start w-100" data-bs-toggle="collapse" href="#filtercollapse3">
                                  <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                                  Colors
                                </a>
                                <div class="collapse show" id="filtercollapse3">
                                  <div class="py-3">
                                    <div class="form-check form-check-inline color-checkbox">
                                      <input class="form-check-input" type="checkbox" />
                                      <i class="fas fa-circle text-primary"></i>
                                    </div>
                                    <div class="form-check form-check-inline color-checkbox">
                                      <input class="form-check-input" type="checkbox" />
                                      <i class="fas fa-circle text-secondary"></i>
                                    </div>
                                    <div class="form-check form-check-inline color-checkbox">
                                      <input class="form-check-input" type="checkbox" />
                                      <i class="fas fa-circle text-danger"></i>
                                    </div>
                                    <div class="form-check form-check-inline color-checkbox">
                                      <input class="form-check-input" type="checkbox" />
                                      <i class="fas fa-circle text-success"></i>
                                    </div>
                                    <div class="form-check form-check-inline color-checkbox">
                                      <input class="form-check-input" type="checkbox" />
                                      <i class="fas fa-circle text-warning"></i>
                                    </div>
                                    <div class="form-check form-check-inline color-checkbox">
                                      <input class="form-check-input" type="checkbox" />
                                      <i class="fas fa-circle text-info"></i>
                                    </div>
                                    <div class="form-check form-check-inline color-checkbox">
                                      <input class="form-check-input" type="checkbox" />
                                      <i class="fas fa-circle text-dark"></i>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="list-group-item px-0 py-2">
                                <a class="btn border-0 px-0 text-start w-100" data-bs-toggle="collapse" href="#filtercollapse4">
                                  <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                                  Price
                                </a>
                                <div class="collapse show" id="filtercollapse4">
                                  <div class="row py-3">
                                    <div class="col-6">
                                      <div class="form-check my-2">
                                        <input class="form-check-input" type="radio" name="price" id="pricefilter1" value="option1" />
                                        <label class="form-check-label" for="pricefilter1">Below $10</label>
                                      </div>
                                      <div class="form-check my-2">
                                        <input class="form-check-input" type="radio" name="price" id="pricefilter2" value="option2" />
                                        <label class="form-check-label" for="pricefilter2">$50 - $100</label>
                                      </div>
                                      <div class="form-check my-2">
                                        <input class="form-check-input" type="radio" name="price" id="pricefilter3" value="option3" />
                                        <label class="form-check-label" for="pricefilter3">$150 - $200</label>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <div class="form-check my-2">
                                        <input class="form-check-input" type="radio" name="price" id="pricefilter4" value="option1" />
                                        <label class="form-check-label" for="pricefilter4">$10 - $50</label>
                                      </div>
                                      <div class="form-check my-2">
                                        <input class="form-check-input" type="radio" name="price" id="pricefilter5" value="option2" />
                                        <label class="form-check-label" for="pricefilter5">$100 - $150</label>
                                      </div>
                                      <div class="form-check my-2">
                                        <input class="form-check-input" type="radio" name="price" id="pricefilter6" value="option3" />
                                        <label class="form-check-label" for="pricefilter6">Over $200</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="list-group-item px-0 py-2">
                                <a class="btn border-0 px-0 text-start w-100" data-bs-toggle="collapse" href="#filtercollapse5">
                                  <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                                  Rating
                                </a>
                                <div class="collapse show" id="filtercollapse5">
                                  <div class="py-3">
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" type="checkbox" value="" id="chkratt1" />
                                      <label class="form-check-label" for="chkratt1">4★ &amp; above</label>
                                    </div>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" type="checkbox" value="" id="chkratt2" />
                                      <label class="form-check-label" for="chkratt2">3★ &amp; above</label>
                                    </div>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" type="checkbox" value="" id="chkratt3" />
                                      <label class="form-check-label" for="chkratt3">2★ &amp; above</label>
                                    </div>
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" type="checkbox" value="" id="chkratt4" />
                                      <label class="form-check-label" for="chkratt4">1★ &amp; above</label>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="list-group-item px-0 py-2">
                                <a href="#" class="btn btn-light-danger w-100">Clear All</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ecom-content">
                <div class="card">
                  <div class="card-body p-3">
                    <div class="d-sm-flex align-items-center">
                      <ul class="list-inline me-auto my-1">
                        <li class="list-inline-item">
                          <div class="form-search">
                            <i class="ti ti-search"></i>
                            <input type="search" class="form-control" placeholder="Search Products" />
                          </div>
                        </li>
                      </ul>
                      <ul class="list-inline ms-auto my-1">
                        <li class="list-inline-item">
                          <select class="form-select">
                            <option>Price: High To Low</option>
                            <option>Price: Low To High</option>
                            <option>Popularity</option>
                            <option>Discount</option>
                            <option>Fresh Arrivals</option>
                          </select>
                        </li>
                        <li class="list-inline-item align-bottom">
                          <a
                            href="#"
                            class="d-xxl-none btn btn-link-secondary"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas_mail_filter"
                          >
                            <i class="ti ti-filter f-16"></i> Filter
                          </a>
                          <a
                            href="#"
                            class="d-none d-xxl-inline-flex btn btn-link-secondary"
                            data-bs-toggle="collapse"
                            data-bs-target="#ecom-filter"
                          >
                            <i class="ti ti-filter f-16"></i> Filter
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="{{route('ecomproductdetails')}}">
                          <img src="/img/application/img-prod-1.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                          <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" checked />
                            <i data-feather="heart" class="prod-likes-icon"></i>
                          </div>
                        </div>
                        <div class="btn-prod-cart card-body position-absolute end-0 bottom-0">
                          <div class="btn btn-warning">
                            <svg class="pc-icon">
                              <use xlink:href="#custom-bag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="{{route('ecomproductdetails')}}">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                          <h4 class="mb-0 text-truncate"><b>$399.00</b></h4>
                          <div class="prod-color">
                            <span class="bg-success"></span>
                            <span class="bg-dark"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="{{route('ecomproductdetails')}}">
                          <img src="/img/application/img-prod-2.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                          <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" />
                            <i data-feather="heart" class="prod-likes-icon"></i>
                          </div>
                        </div>
                        <div class="btn-prod-cart card-body position-absolute end-0 bottom-0">
                          <div class="btn btn-warning">
                            <svg class="pc-icon">
                              <use xlink:href="#custom-bag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="{{route('ecomproductdetails')}}">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                          <h4 class="mb-0 text-truncate"><b>$399.00</b></h4>
                          <div class="prod-color">
                            <span class="bg-primary"></span>
                            <span class="bg-dark"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="{{route('ecomproductdetails')}}">
                          <img src="/img/application/img-prod-3.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                          <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" />
                            <i data-feather="heart" class="prod-likes-icon"></i>
                          </div>
                        </div>
                        <div class="card-body position-absolute start-0 top-0">
                          <span class="badge bg-success">30%</span>
                        </div>
                        <div class="btn-prod-cart card-body position-absolute end-0 bottom-0">
                          <div class="btn btn-warning">
                            <svg class="pc-icon">
                              <use xlink:href="#custom-bag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="{{route('ecomproductdetails')}}">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                          <h4 class="mb-0 text-truncate"
                            ><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4
                          >
                          <div class="prod-color">
                            <span class="bg-danger"></span>
                            <span class="bg-dark"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="{{route('ecomproductdetails')}}">
                          <img src="/img/application/img-prod-4.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                          <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" checked />
                            <i data-feather="heart" class="prod-likes-icon"></i>
                          </div>
                        </div>
                        <div class="btn-prod-cart card-body position-absolute end-0 bottom-0">
                          <div class="btn btn-warning">
                            <svg class="pc-icon">
                              <use xlink:href="#custom-bag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="{{route('ecomproductdetails')}}">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                          <h4 class="mb-0 text-truncate"><b>$399.00</b></h4>
                          <div class="prod-color">
                            <span class="bg-success"></span>
                            <span class="bg-dark"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="{{route('ecomproductdetails')}}">
                          <img src="/img/application/img-prod-5.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                          <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" />
                            <i data-feather="heart" class="prod-likes-icon"></i>
                          </div>
                        </div>
                        <div class="btn-prod-cart card-body position-absolute end-0 bottom-0">
                          <div class="btn btn-warning">
                            <svg class="pc-icon">
                              <use xlink:href="#custom-bag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="{{route('ecomproductdetails')}}">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                          <h4 class="mb-0 text-truncate"><b>$399.00</b></h4>
                          <div class="prod-color">
                            <span class="bg-primary"></span>
                            <span class="bg-dark"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="{{route('ecomproductdetails')}}">
                          <img src="/img/application/img-prod-6.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                          <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" />
                            <i data-feather="heart" class="prod-likes-icon"></i>
                          </div>
                        </div>
                        <div class="card-body position-absolute start-0 top-0">
                          <span class="badge bg-success">30%</span>
                        </div>
                        <div class="btn-prod-cart card-body position-absolute end-0 bottom-0">
                          <div class="btn btn-warning">
                            <svg class="pc-icon">
                              <use xlink:href="#custom-bag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="{{route('ecomproductdetails')}}">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                          <h4 class="mb-0 text-truncate"
                            ><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4
                          >
                          <div class="prod-color">
                            <span class="bg-danger"></span>
                            <span class="bg-dark"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="{{route('ecomproductdetails')}}">
                          <img src="/img/application/img-prod-7.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                          <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" checked />
                            <i data-feather="heart" class="prod-likes-icon"></i>
                          </div>
                        </div>
                        <div class="btn-prod-cart card-body position-absolute end-0 bottom-0">
                          <div class="btn btn-warning">
                            <svg class="pc-icon">
                              <use xlink:href="#custom-bag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="{{route('ecomproductdetails')}}">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                          <h4 class="mb-0 text-truncate"><b>$399.00</b></h4>
                          <div class="prod-color">
                            <span class="bg-success"></span>
                            <span class="bg-dark"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="{{route('ecomproductdetails')}}">
                          <img src="/img/application/img-prod-8.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                          <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" checked />
                            <i data-feather="heart" class="prod-likes-icon"></i>
                          </div>
                        </div>
                        <div class="btn-prod-cart card-body position-absolute end-0 bottom-0">
                          <div class="btn btn-warning">
                            <svg class="pc-icon">
                              <use xlink:href="#custom-bag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="{{route('ecomproductdetails')}}">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                          <h4 class="mb-0 text-truncate"><b>$399.00</b></h4>
                          <div class="prod-color">
                            <span class="bg-primary"></span>
                            <span class="bg-dark"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-4">
                    <div class="card product-card">
                      <div class="card-img-top">
                        <a href="{{route('ecomproductdetails')}}">
                          <img src="/img/application/img-prod-1.jpg" alt="image" class="img-prod img-fluid" />
                        </a>
                        <div class="card-body position-absolute end-0 top-0">
                          <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" />
                            <i data-feather="heart" class="prod-likes-icon"></i>
                          </div>
                        </div>
                        <div class="btn-prod-cart card-body position-absolute end-0 bottom-0">
                          <div class="btn btn-warning">
                            <svg class="pc-icon">
                              <use xlink:href="#custom-bag"></use>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <a href="{{route('ecomproductdetails')}}">
                          <p class="prod-content mb-0 text-muted">Apple watch -4</p>
                        </a>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                          <h4 class="mb-0 text-truncate"
                            ><b>$299.00</b> <span class="text-sm text-muted f-w-400 text-decoration-line-through">$399.00</span></h4
                          >
                          <div class="prod-color">
                            <span class="bg-danger"></span>
                            <span class="bg-dark"></span>
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

<!-- Mirrored from ableproadmin.com/application/ecom_product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:50 GMT -->
</html>
