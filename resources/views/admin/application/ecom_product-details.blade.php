<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->

  
<!-- Mirrored from ableproadmin.com/application/{{route('ecomproductdetails')}} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:50 GMT -->
<head>
    <title>Products Details | Able Pro Dashboard Template</title>
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
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="sticky-md-top product-sticky">
                      <div id="carouselExampleCaptions" class="carousel slide ecomm-prod-slider" data-bs-ride="carousel">
                        <div class="carousel-inner bg-light rounded position-relative">
                          <div class="card-body position-absolute end-0 top-0">
                            <div class="form-check prod-likes">
                              <input type="checkbox" class="form-check-input" />
                              <i data-feather="heart" class="prod-likes-icon"></i>
                            </div>
                          </div>
                          <div class="card-body position-absolute bottom-0 end-0">
                            <ul class="list-inline ms-auto mb-0 prod-likes">
                              <li class="list-inline-item m-0">
                                <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                  <i class="ti ti-zoom-in f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item m-0">
                                <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                  <i class="ti ti-zoom-out f-18"></i>
                                </a>
                              </li>
                              <li class="list-inline-item m-0">
                                <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                  <i class="ti ti-rotate-clockwise f-18"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="carousel-item active">
                            <img src="/img/application/img-prod-1.jpg" class="d-block w-100" alt="Product images" />
                          </div>
                          <div class="carousel-item">
                            <img src="/img/application/img-prod-2.jpg" class="d-block w-100" alt="Product images" />
                          </div>
                          <div class="carousel-item">
                            <img src="/img/application/img-prod-3.jpg" class="d-block w-100" alt="Product images" />
                          </div>
                          <div class="carousel-item">
                            <img src="/img/application/img-prod-4.jpg" class="d-block w-100" alt="Product images" />
                          </div>
                          <div class="carousel-item">
                            <img src="/img/application/img-prod-5.jpg" class="d-block w-100" alt="Product images" />
                          </div>
                          <div class="carousel-item">
                            <img src="/img/application/img-prod-6.jpg" class="d-block w-100" alt="Product images" />
                          </div>
                          <div class="carousel-item">
                            <img src="/img/application/img-prod-7.jpg" class="d-block w-100" alt="Product images" />
                          </div>
                          <div class="carousel-item">
                            <img src="/img/application/img-prod-8.jpg" class="d-block w-100" alt="Product images" />
                          </div>
                        </div>
                        <ol class="carousel-indicators position-relative product-carousel-indicators my-sm-3 mx-0">
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="w-25 h-auto active">
                            <img src="/img/application/img-prod-1.jpg" class="d-block wid-50 rounded" alt="Product images" />
                          </li>
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="w-25 h-auto">
                            <img src="/img/application/img-prod-2.jpg" class="d-block wid-50 rounded" alt="Product images" />
                          </li>
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="w-25 h-auto">
                            <img src="/img/application/img-prod-3.jpg" class="d-block wid-50 rounded" alt="Product images" />
                          </li>
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" class="w-25 h-auto">
                            <img src="/img/application/img-prod-4.jpg" class="d-block wid-50 rounded" alt="Product images" />
                          </li>
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" class="w-25 h-auto">
                            <img src="/img/application/img-prod-5.jpg" class="d-block wid-50 rounded" alt="Product images" />
                          </li>
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" class="w-25 h-auto">
                            <img src="/img/application/img-prod-6.jpg" class="d-block wid-50 rounded" alt="Product images" />
                          </li>
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" class="w-25 h-auto">
                            <img src="/img/application/img-prod-7.jpg" class="d-block wid-50 rounded" alt="Product images" />
                          </li>
                          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" class="w-25 h-auto">
                            <img src="/img/application/img-prod-8.jpg" class="d-block wid-50 rounded" alt="Product images" />
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <span class="badge bg-success f-14">In stock</span>
                    <h5 class="my-3">Apple Watch SE Smartwatch (GPS, 40mm) (Heart Rate Monitoring)</h5>
                    <div class="star f-18 mb-3">
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star-half-alt text-warning"></i>
                      <i class="far fa-star text-muted"></i>
                      <span class="text-sm text-muted">(4.0)</span>
                    </div>
                    <h5 class="mt-4 mb-3">Offer</h5>
                    <div class="offer-check-block">
                      <div class="offer-check border rounded p-3">
                        <div class="form-check">
                          <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef1" checked="" />
                          <label class="form-check-label d-block" for="customCheckdef1">
                            <span class="h6 mb-0 d-block">No Cost EMI</span>
                            <span class="text-muted offer-details"
                              >Upto ₹2,322.51 EMI interest savings on select Credit CardsUpto ₹2,322.51 EMI interest savings on select
                              Credit Cards</span
                            >
                            <span class="h6 mb-0 text-primary">1 Offer <i class="ti ti-arrow-narrow-right"></i></span>
                          </label>
                        </div>
                      </div>
                      <div class="offer-check border rounded p-3">
                        <div class="form-check">
                          <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef2" />
                          <label class="form-check-label d-block" for="customCheckdef2">
                            <span class="h6 mb-0 d-block">Bank Offer</span>
                            <span class="text-muted offer-details"
                              >Upto ₹1,250.00 discount on select Credit CardsUpto ₹2,322.51 EMI interest savings on select Credit
                              Cards</span
                            >
                            <span class="h6 mb-0 text-primary">1 Offer <i class="ti ti-arrow-narrow-right"></i></span>
                          </label>
                        </div>
                      </div>
                      <div class="offer-check border rounded p-3">
                        <div class="form-check">
                          <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef3" />
                          <label class="form-check-label d-block" for="customCheckdef3">
                            <span class="h6 mb-0 d-block">No Cost EMI</span>
                            <span class="text-muted offer-details"
                              >Upto ₹2,322.51 EMI interest savings on select Credit CardsUpto ₹2,322.51 EMI interest savings on select
                              Credit Cards</span
                            >
                            <span class="h6 mb-0 text-primary">1 Offer <i class="ti ti-arrow-narrow-right"></i></span>
                          </label>
                        </div>
                      </div>
                      <div class="offer-check border rounded p-3">
                        <div class="form-check">
                          <input type="radio" name="radio1" class="form-check-input input-primary" id="customCheckdef4" />
                          <label class="form-check-label d-block" for="customCheckdef4">
                            <span class="h6 mb-0 d-block">Bank Offer</span>
                            <span class="text-muted offer-details"
                              >Upto ₹1,250.00 discount on select Credit CardsUpto ₹2,322.51 EMI interest savings on select Credit
                              Cards</span
                            >
                            <span class="h6 mb-0 text-primary">1 Offer <i class="ti ti-arrow-narrow-right"></i></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <h5 class="mt-4 mb-3 f-w-500">About this item</h5>
                    <ul>
                      <li class="mb-2">Care Instructions: Hand Wash Only</li>
                      <li class="mb-2">Fit Type: Regular</li>
                      <li class="mb-2">Dark Blue Regular Women Jeans</li>
                      <li class="mb-2">Fabric : 100% Cotton</li>
                    </ul>
                    <div class="form-group row">
                      <label class="col-form-label col-lg-3 col-sm-12">Colors <span class="text-danger">*</span></label>
                      <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center">
                        <div class="form-check form-check-inline color-checkbox mb-0">
                          <input class="form-check-input" type="radio" name="product_color" checked />
                          <i class="fas fa-circle text-primary"></i>
                        </div>
                        <div class="form-check form-check-inline color-checkbox mb-0">
                          <input class="form-check-input" type="radio" name="product_color" />
                          <i class="fas fa-circle text-secondary"></i>
                        </div>
                        <div class="form-check form-check-inline color-checkbox mb-0">
                          <input class="form-check-input" type="radio" name="product_color" />
                          <i class="fas fa-circle text-danger"></i>
                        </div>
                        <div class="form-check form-check-inline color-checkbox mb-0">
                          <input class="form-check-input" type="radio" name="product_color" />
                          <i class="fas fa-circle text-dark"></i>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row align-items-center">
                      <label class="col-form-label col-lg-3 col-sm-12">
                        <span class="d-block">Size</span>
                        <a class="link-primary text-sm text-decoration-underline">Size Chart?</a></label
                      >
                      <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="row g-2">
                          <div class="col-auto">
                            <input type="radio" class="btn-check" id="btnrdolite1" name="btn_radio2" checked />
                            <label class="btn btn-sm btn-light-primary" for="btnrdolite1">Small</label>
                          </div>
                          <div class="col-auto">
                            <input type="radio" class="btn-check" id="btnrdolite2" name="btn_radio2" />
                            <label class="btn btn-sm btn-light-primary" for="btnrdolite2">Medium</label>
                          </div>
                          <div class="col-auto">
                            <input type="radio" class="btn-check" id="btnrdolite3" name="btn_radio2" />
                            <label class="btn btn-sm btn-light-primary" for="btnrdolite3">Large</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-lg-3 col-sm-12">Quantity <span class="text-danger">*</span></label>
                      <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="btn-group btn-group-sm mb-2 border" role="group">
                          <button type="button" id="decrease" onclick="decreaseValue('number')" class="btn btn-link-secondary"
                            ><i class="ti ti-minus"></i
                          ></button>
                          <input
                            class="wid-35 text-center border-0 m-0 form-control rounded-0 shadow-none"
                            type="text"
                            id="number"
                            value="0"
                          />
                          <button type="button" id="increase" onclick="increaseValue('number')" class="btn btn-link-secondary"
                            ><i class="ti ti-plus"></i
                          ></button>
                        </div>
                      </div>
                    </div>
                    <h3 class="mb-4"
                      ><b>$299.00</b><span class="mx-2 f-16 text-muted f-w-400 text-decoration-line-through">$399.00</span></h3
                    >
                    <div class="row">
                      <div class="col-6">
                        <div class="d-grid">
                          <button type="button" class="btn btn-primary">Buy Now</button>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="d-grid">
                          <button type="button" class="btn btn-outline-secondary">Add to cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header pb-0">
                <ul class="nav nav-tabs profile-tabs mb-0" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      id="ecomtab-tab-1"
                      data-bs-toggle="tab"
                      href="#ecomtab-1"
                      role="tab"
                      aria-controls="ecomtab-1"
                      aria-selected="true"
                      >Features
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="ecomtab-tab-2"
                      data-bs-toggle="tab"
                      href="#ecomtab-2"
                      role="tab"
                      aria-controls="ecomtab-2"
                      aria-selected="true"
                      >Specifications
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="ecomtab-tab-3"
                      data-bs-toggle="tab"
                      href="#ecomtab-3"
                      role="tab"
                      aria-controls="ecomtab-3"
                      aria-selected="true"
                      >Overview
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="ecomtab-tab-4"
                      data-bs-toggle="tab"
                      href="#ecomtab-4"
                      role="tab"
                      aria-controls="ecomtab-4"
                      aria-selected="true"
                      >Reviews<span class="badge bg-light-primary rounded-pill px-2 ms-2">275</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane show active" id="ecomtab-1" role="tabpanel" aria-labelledby="ecomtab-tab-1">
                    <div class="table-responsive">
                      <table class="table table-borderless">
                        <tbody>
                          <tr>
                            <td class="text-muted py-1">Band :</td>
                            <td class="py-1">Smart Band</td>
                          </tr>
                          <tr>
                            <td class="text-muted py-1">Compatible Devices :</td>
                            <td class="py-1">Smartphones</td>
                          </tr>
                          <tr>
                            <td class="text-muted py-1">Ideal For :</td>
                            <td class="py-1">Unisex</td>
                          </tr>
                          <tr>
                            <td class="text-muted py-1">Lifestyle :</td>
                            <td class="py-1">Fitness | Indoor | Sports | Swimming | Outdoor</td>
                          </tr>
                          <tr>
                            <td class="text-muted py-1">Basic Features :</td>
                            <td class="py-1">Calendar | Date & Time | Timer/Stop Watch</td>
                          </tr>
                          <tr>
                            <td class="text-muted py-1">Health Tracker :</td>
                            <td class="py-1">Heart Rate | Exercise Tracker</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="ecomtab-2" role="tabpanel" aria-labelledby="ecomtab-tab-2">
                    <div class="row">
                      <div class="col-md-6">
                        <h5>Product Category</h5>
                        <hr class="my-3" />
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td class="text-muted py-1">Wearable Device Type:</td>
                                <td class="py-1">Smart Band</td>
                              </tr>
                              <tr>
                                <td class="text-muted py-1">Compatible Devices :</td>
                                <td class="py-1">Smartphones</td>
                              </tr>
                              <tr>
                                <td class="text-muted py-1">Ideal For :</td>
                                <td class="py-1">Unisex</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h5>Manufacturer Details</h5>
                        <hr class="my-3" />
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td class="text-muted py-1">Brand :</td>
                                <td class="py-1">Apple</td>
                              </tr>
                              <tr>
                                <td class="text-muted py-1">Model Series :</td>
                                <td class="py-1">Watch SE</td>
                              </tr>
                              <tr>
                                <td class="text-muted py-1">Model Number :</td>
                                <td class="py-1">MYDT2HN/A</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="ecomtab-3" role="tabpanel" aria-labelledby="ecomtab-tab-3">
                    <div class="table-responsive">
                      <p class="text-muted"
                        >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s,
                        <strong class="text-body"
                          >“When an unknown printer took a galley of type and scrambled it to make a type specimen book.”</strong
                        >
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularized in the 1960s with the release of Lestrade sheets containing Lorem Ipsum passages, and
                        more recently with desktop publishing software like PageMaker including versions of Lorem Ipsum.
                      </p>
                      <p class="text-muted"
                        >It was popularized in the 1960s with the release of Learjet sheets containing Lorem Ipsum passages, and more
                        recently with desktop publishing software like PageMaker including versions of Lorem Ipsum.</p
                      >
                    </div>
                  </div>
                  <div class="tab-pane" id="ecomtab-4" role="tabpanel" aria-labelledby="ecomtab-tab-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="row justify-content-between align-items-center">
                          <div class="col-xxl-4 col-xl-5">
                            <h2 class="mb-3"
                              ><b>3.5<small class="text-muted f-18">/5</small></b></h2
                            >
                            <p class="mb-2 text-muted">Based on 275 reviews</p>
                            <div class="star mb-3 f-20">
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star-half-alt text-warning"></i>
                              <i class="far fa-star text-muted"></i>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-xl-5">
                            <div class="d-flex align-items-center">
                              <div class="w-100">
                                <div class="row align-items-center my-2">
                                  <div class="col">
                                    <div class="progress" style="height: 4px">
                                      <div class="progress-bar bg-warning" style="width: 30%"></div>
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <p class="mb-0 text-muted">5 Stars</p>
                                  </div>
                                </div>
                                <div class="row align-items-center my-2">
                                  <div class="col">
                                    <div class="progress" style="height: 4px">
                                      <div class="progress-bar bg-warning" style="width: 60%"></div>
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <p class="mb-0 text-muted">4 Stars</p>
                                  </div>
                                </div>
                                <div class="row align-items-center my-2">
                                  <div class="col">
                                    <div class="progress" style="height: 4px">
                                      <div class="progress-bar bg-warning" style="width: 75%"></div>
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <p class="mb-0 text-muted">3 Stars</p>
                                  </div>
                                </div>
                                <div class="row align-items-center my-2">
                                  <div class="col">
                                    <div class="progress" style="height: 4px">
                                      <div class="progress-bar bg-warning" style="width: 40%"></div>
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <p class="mb-0 text-muted">2 Stars</p>
                                  </div>
                                </div>
                                <div class="row align-items-center">
                                  <div class="col">
                                    <div class="progress" style="height: 4px">
                                      <div class="progress-bar bg-warning" style="width: 55%"></div>
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <p class="mb-0 text-muted">1 Stars</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div class="media align-items-start">
                          <div class="chat-avtar">
                            <img class="img-radius img-fluid wid-40" src="/img/user/avatar-1.jpg" alt="User image" />
                            <div class="bg-success chat-badge"></div>
                          </div>
                          <div class="media-body ms-3">
                            <h6 class="mb-1">Harriet Wilson</h6>
                            <p class="text-muted text-sm mb-1">2 hour ago</p>
                            <div class="star">
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star-half-alt text-warning"></i>
                              <i class="far fa-star text-muted"></i>
                            </div>
                            <p class="mb-0 text-muted mt-1"
                              >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                              industry's standard dummy text ever since the 1500.</p
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div class="media align-items-start">
                          <div class="chat-avtar">
                            <img class="img-radius img-fluid wid-40" src="/img/user/avatar-2.jpg" alt="User image" />
                            <div class="bg-success chat-badge"></div>
                          </div>
                          <div class="media-body ms-3">
                            <h6 class="mb-1">Lou Olson</h6>
                            <p class="text-muted text-sm mb-1">2 hour ago</p>
                            <div class="star">
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star-half-alt text-warning"></i>
                              <i class="far fa-star text-muted"></i>
                              <i class="far fa-star text-muted"></i>
                            </div>
                            <p class="mb-2 text-muted mt-1"
                              >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                              industry's standard dummy text ever since the 1500.</p
                            >
                            <a href="#" class="link-primary mb-1">https://phoenixcoded.net/</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center mt-3">
                      <button class="btn btn-link-primary">View more comments</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Related Product</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6 col-xl-3">
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
                  <div class="col-sm-6 col-xl-3">
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
                  <div class="col-sm-6 col-xl-3">
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
                  <div class="col-sm-6 col-xl-3">
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
      // quantity start
      function increaseValue(temp) {
        var value = parseInt(document.getElementById(temp).value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById(temp).value = value;
      }

      function decreaseValue(temp) {
        var value = parseInt(document.getElementById(temp).value, 10);
        value = isNaN(value) ? 0 : value;
        value < 1 ? (value = 1) : '';
        value--;
        document.getElementById(temp).value = value;
      }
      // quantity end
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

<!-- Mirrored from ableproadmin.com/application/{{route('ecomproductdetails')}} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:50 GMT -->
</html>
