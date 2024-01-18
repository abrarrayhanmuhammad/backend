<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->


<!-- Mirrored from ableproadmin.com/application/ecom_checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:51 GMT -->
<head>
  <title>Checkout | Able Pro Dashboard Template</title>
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
                <li class="breadcrumb-item" aria-current="page">Checkout</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Checkout</h2>
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
            <div class="card-body p-0">
              <ul class="nav nav-tabs checkout-tabs mb-0" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="ecomtab-tab-1" data-bs-toggle="tab" href="#ecomtab-1" role="tab"
                    aria-controls="ecomtab-1" aria-selected="true">
                    <div class="media align-items-center">
                      <div class="avtar avtar-s">
                        <i class="ti ti-shopping-cart"></i>
                      </div>
                      <div class="media-body ms-2">
                        <h5 class="mb-0">Cart Details</h5>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="ecomtab-tab-2" data-bs-toggle="tab" href="#ecomtab-2" role="tab"
                    aria-controls="ecomtab-2" aria-selected="true">
                    <div class="media align-items-center">
                      <div class="avtar avtar-s">
                        <i class="ti ti-building-skyscraper"></i>
                      </div>
                      <div class="media-body ms-2">
                        <h5 class="mb-0">Shipping Information</h5>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="ecomtab-tab-3" data-bs-toggle="tab" href="#ecomtab-3" role="tab"
                    aria-controls="ecomtab-3" aria-selected="true">
                    <div class="media align-items-center">
                      <div class="avtar avtar-s">
                        <i class="ti ti-credit-card"></i>
                      </div>
                      <div class="media-body ms-2">
                        <h5 class="mb-0">Payment</h5>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content">
            <div class="tab-pane show active" id="ecomtab-1" role="tabpanel" aria-labelledby="ecomtab-tab-1">
              <div class="row">
                <div class="col-xl-8">
                  <div class="card">
                    <div class="card-header">
                      <div class="row align-items-center my-2">
                        <div class="col">
                          <div class="progress" style="height: 6px">
                            <div class="progress-bar bg-primary" style="width: 33%"></div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <p class="mb-0 h6">Step 1</p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body border-bottom">
                      <h5>Cart Item <span class="ms-2 f-14 px-2 badge bg-light-secondary rounded-pill">3</span></h5>
                    </div>
                    <div class="card-body p-0 table-body">
                      <div class="table-responsive">
                        <table class="table mb-0" id="pc-dt-simple">
                          <thead>
                            <tr>
                              <th>Product</th>
                              <th class="text-end">Price</th>
                              <th class="text-center">Quantity</th>
                              <th class="text-end">Total</th>
                              <th class="text-end"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="media align-items-center">
                                  <img src="/img/application/img-prod-2.jpg" alt="image"
                                    class="bg-light wid-50 rounded">
                                  <div class="media-body ms-3">
                                    <h5 class="mb-1">Apple MacBook Pro</h5>
                                    <p class="text-sm text-muted mb-0">Dark Red</p>
                                  </div>
                                </div>
                              </td>
                              <td class="text-end">
                                <h5 class="mb-0">$100.00</h5>
                                <span class="text-sm text-muted text-decoration-line-through">$129.99</span>
                              </td>
                              <td class="text-center">
                                <div class="btn-group btn-group-sm mb-2 border" role="group">
                                  <button type="button" onclick="decreaseValue('number')" class="btn btn-link-secondary"><i
                                      class="ti ti-minus"></i></button>
                                  <input class="wid-35 text-center border-0 m-0 form-control rounded-0 shadow-none"
                                    type="text" id="number" value="0">
                                  <button type="button" onclick="increaseValue('number')" class="btn btn-link-secondary"><i
                                      class="ti ti-plus"></i></button>
                                </div>
                              </td>
                              <td class="text-end">
                                <h5 class="mb-0">$100.00</h5>
                              </td>
                              <td class="text-end">
                                <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default">
                                  <i class="ti ti-trash f-18"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="media align-items-center">
                                  <img src="/img/application/img-prod-3.jpg" alt="image"
                                    class="bg-light wid-50 rounded">
                                  <div class="media-body ms-3">
                                    <h5 class="mb-1">Apple MacBook Pro</h5>
                                    <p class="text-sm text-muted mb-0">Dark Red</p>
                                  </div>
                                </div>
                              </td>
                              <td class="text-end">
                                <h5 class="mb-0">$100.00</h5>
                                <span class="text-sm text-muted text-decoration-line-through">$129.99</span>
                              </td>
                              <td class="text-center">
                                <div class="btn-group btn-group-sm mb-2 border" role="group">
                                  <button type="button" onclick="decreaseValue('number2')" class="btn btn-link-secondary"><i
                                      class="ti ti-minus"></i></button>
                                  <input class="wid-35 text-center border-0 m-0 form-control rounded-0 shadow-none"
                                    type="text" id="number2" value="0">
                                  <button type="button" onclick="increaseValue('number2')" class="btn btn-link-secondary"><i
                                      class="ti ti-plus"></i></button>
                                </div>
                              </td>
                              <td class="text-end">
                                <h5 class="mb-0">$100.00</h5>
                              </td>
                              <td class="text-end">
                                <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default">
                                  <i class="ti ti-trash f-18"></i>
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="media align-items-center">
                                  <img src="/img/application/img-prod-4.jpg" alt="image"
                                    class="bg-light wid-50 rounded">
                                  <div class="media-body ms-3">
                                    <h5 class="mb-1">Apple MacBook Pro</h5>
                                    <p class="text-sm text-muted mb-0">Dark Red</p>
                                  </div>
                                </div>
                              </td>
                              <td class="text-end">
                                <h5 class="mb-0">$100.00</h5>
                                <span class="text-sm text-muted text-decoration-line-through">$129.99</span>
                              </td>
                              <td class="text-center">
                                <div class="btn-group btn-group-sm mb-2 border" role="group">
                                  <button type="button" onclick="decreaseValue('number1')" class="btn btn-link-secondary"><i
                                      class="ti ti-minus"></i></button>
                                  <input class="wid-35 text-center border-0 m-0 form-control rounded-0 shadow-none"
                                    type="text" id="number1" value="0">
                                  <button type="button" onclick="increaseValue('number1')" class="btn btn-link-secondary"><i
                                      class="ti ti-plus"></i></button>
                                </div>
                              </td>
                              <td class="text-end">
                                <h5 class="mb-0">$100.00</h5>
                              </td>
                              <td class="text-end">
                                <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default">
                                  <i class="ti ti-trash f-18"></i>
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="text-end">
                    <a href="ecom_product.html"
                      class="btn btn-link-secondary d-inline-flex align-items-center"><i
                        class="ti ti-chevron-left me-2"></i> Back to Shopping</a>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="card">
                    <div class="card-body">
                      <button type="button" class="btn btn-sm btn-link-secondary" data-bs-toggle="modal"
                        data-bs-target="#couponModal">
                        Have a coupon code?
                      </button>
                      <div class="input-group my-2">
                        <input type="text" class="form-control" placeholder="Discount Coupon">
                        <button class="btn btn-outline-secondary" type="button">Apply</button>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body py-2">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0">
                          <h5 class="mb-0">Order Summary</h5>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="float-end">
                            <h5 class="mb-0">$300.00</h5>
                          </div><span class="text-muted">Sub Total</span>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="float-end">
                            <h5 class="mb-0">-</h5>
                          </div><span class="text-muted">Estimated Delivery</span>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="float-end">
                            <h5 class="mb-0">-</h5>
                          </div><span class="text-muted">Voucher</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body py-2">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0">
                          <div class="float-end">
                            <h5 class="mb-0">$300.00</h5>
                          </div>
                          <h5 class="mb-0 d-inline-block">Total</h5>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="d-flex align-items-center text-muted my-4">
                    <div class="avtar avtar-s bg-light-primary flex-shrink-0 me-2">
                      <i class="material-icons-two-tone text-primary f-20">security</i>
                    </div>
                    <span class="text-muted text-sm w-100">Safe & Secure Payment. Easy returns. 100% Athentic
                      products.</span>
                  </div>
                  <div class="d-grid mb-3">
                    <button class="btn btn-primary">Place an Order</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="ecomtab-2" role="tabpanel" aria-labelledby="ecomtab-tab-2">
              <div class="row">
                <div class="col-xl-8">
                  <div class="card">
                    <div class="card-header">
                      <div class="row align-items-center mb-3">
                        <div class="col">
                          <div class="progress" style="height: 6px">
                            <div class="progress-bar bg-primary" style="width: 66%"></div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <p class="mb-0 h6">Step 2</p>
                        </div>
                      </div>
                    </div>
                    <div class="collapse multi-collapse show" id="multiCollapseExample1">
                      <div class="card-body border-bottom">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Shipping Information</h5>
                          </div>
                          <div class="col-auto">
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                              data-bs-target=".multi-collapse" aria-expanded="false"
                              aria-controls="multiCollapseExample1 multiCollapseExample2">Add new Address</button>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="address-check-block">
                          <div class="address-check border rounded p-3">
                            <div class="form-check">
                              <input type="radio" name="radio1" class="form-check-input input-primary"
                                id="address-check-1" checked="">
                              <label class="form-check-label d-block" for="address-check-1">
                                <span class="h6 mb-0 d-block">Ian Carpenter <small
                                    class="text-muted">(Home)</small></span>
                                <span class="text-muted address-details">1754 Ureate Path, 695 Newga View, Seporcus,
                                  Rhode Island, Belgium - SA5 5BO</span>
                                <span class="row align-items-center justify-content-between">
                                  <span class="col-6">
                                    <span class="text-muted mb-0">+91 1234567890</span>
                                  </span>
                                  <span class="col-6 text-end">
                                    <span class="address-btns d-flex align-items-center justify-content-end">
                                      <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                      <button class="btn btn-sm btn-outline-primary">Deliver to this address</button>
                                    </span>
                                  </span>
                                </span>
                              </label>
                            </div>
                          </div>
                          <div class="address-check border rounded p-3">
                            <div class="form-check">
                              <input type="radio" name="radio1" class="form-check-input input-primary"
                                id="address-check-2">
                              <label class="form-check-label d-block" for="address-check-2">
                                <span class="h6 mb-0 d-block">Ian Carpenter <small
                                    class="text-muted">(Home)</small></span>
                                <span class="text-muted address-details">1754 Ureate Path, 695 Newga View, Seporcus,
                                  Rhode Island, Belgium - SA5 5BO</span>
                                <span class="row align-items-center justify-content-between">
                                  <span class="col-6">
                                    <span class="text-muted mb-0">+91 1234567890</span>
                                  </span>
                                  <span class="col-6 text-end">
                                    <span class="address-btns d-flex align-items-center justify-content-end">
                                      <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                      <button class="btn btn-sm btn-outline-primary">Deliver to this address</button>
                                    </span>
                                  </span>
                                </span>
                              </label>
                            </div>
                          </div>
                          <div class="address-check border rounded p-3">
                            <div class="form-check">
                              <input type="radio" name="radio1" class="form-check-input input-primary"
                                id="address-check-3">
                              <label class="form-check-label d-block" for="address-check-3">
                                <span class="h6 mb-0 d-block">Ian Carpenter <small
                                    class="text-muted">(Home)</small></span>
                                <span class="text-muted address-details">1754 Ureate Path, 695 Newga View, Seporcus,
                                  Rhode Island, Belgium - SA5 5BO</span>
                                <span class="row align-items-center justify-content-between">
                                  <span class="col-6">
                                    <span class="text-muted mb-0">+91 1234567890</span>
                                  </span>
                                  <span class="col-6 text-end">
                                    <span class="address-btns d-flex align-items-center justify-content-end">
                                      <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                      <button class="btn btn-sm btn-outline-primary">Deliver to this address</button>
                                    </span>
                                  </span>
                                </span>
                              </label>
                            </div>
                          </div>
                          <div class="address-check border rounded p-3">
                            <div class="form-check">
                              <input type="radio" name="radio1" class="form-check-input input-primary"
                                id="address-check-4">
                              <label class="form-check-label d-block" for="address-check-4">
                                <span class="h6 mb-0 d-block">Ian Carpenter <small
                                    class="text-muted">(Home)</small></span>
                                <span class="text-muted address-details">1754 Ureate Path, 695 Newga View, Seporcus,
                                  Rhode Island, Belgium - SA5 5BO</span>
                                <span class="row align-items-center justify-content-between">
                                  <span class="col-6">
                                    <span class="text-muted mb-0">+91 1234567890</span>
                                  </span>
                                  <span class="col-6 text-end">
                                    <span class="address-btns d-flex align-items-center justify-content-end">
                                      <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default">
                                        <i class="ti ti-trash f-20"></i>
                                      </a>
                                      <button class="btn btn-sm btn-outline-primary">Deliver to this address</button>
                                    </span>
                                  </span>
                                </span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                      <div class="card-body border-bottom">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="mb-0">Add new address</h5>
                          </div>
                          <div class="col-auto">
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label">Address Type :<small
                                  class="text-muted d-block">Enter Add Type</small></label>
                              <div class="col-lg-8">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="addtypecheck1" checked>
                                  <label class="form-check-label" for="addtypecheck1">
                                    Home (All day Delivery)
                                  </label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="addtypecheck2">
                                  <label class="form-check-label" for="addtypecheck2">
                                    Work (Between 10 AM to 5 PM)
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label">First Name :<small class="text-muted d-block">Enter
                                  your first name</small></label>
                              <div class="col-lg-8">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label">Last Name :<small class="text-muted d-block">Enter
                                  your last name</small></label>
                              <div class="col-lg-8">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label">Email Id :<small class="text-muted d-block">Enter
                                  Email id</small></label>
                              <div class="col-lg-8">
                                <input type="email" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label">Date of Birth :<small
                                  class="text-muted d-block">Enter
                                  the date of birth</small></label>
                              <div class="col-lg-8">
                                <input type="date" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label">Phone number :<small
                                  class="text-muted d-block">Enter
                                  Phone number</small></label>
                              <div class="col-lg-8">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label">City :<small class="text-muted d-block">Enter
                                  City name</small></label>
                              <div class="col-lg-8">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkaddres" checked>
                                <label class="form-check-label" for="checkaddres">
                                  Save this new address for future shipping
                                </label>
                              </div>
                            </div>
                            <div class="text-end btn-page mb-0 mt-4">
                              <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse"
                                data-bs-target=".multi-collapse" aria-expanded="false"
                                aria-controls="multiCollapseExample1 multiCollapseExample2">Cancel</button>
                              <button class="btn btn-primary" onClick="change_tab('#ecomtab-3')">Save & Deliver to this
                                Address</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mb-3">
                    <button class="btn btn-link-primary"><i
                        class="ti ti-arrow-narrow-left align-text-bottom me-2"></i>Back to Cart</button>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="card">
                    <div class="card-body">
                      <button type="button" class="btn btn-sm btn-link-secondary" data-bs-toggle="modal"
                        data-bs-target="#couponModal">
                        Have a coupon code?
                      </button>
                      <div class="input-group my-2">
                        <input type="text" class="form-control" placeholder="Discount Coupon">
                        <button class="btn btn-outline-secondary" type="button">Apply</button>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Order Summary</h5>
                    </div>
                    <div class="card-body p-0">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <div class="media align-items-start">
                            <img class="bg-light rounded img-fluid wid-60 flex-shrink-0"
                              src="/img/application/img-prod-2.jpg" alt="User image">
                            <div class="media-body mx-2">
                              <h5 class="mb-1">Canon EOS 1500D 24.1</h5>
                              <p class="text-muted text-sm mb-2">SLR Camera (Black) with EF</p>
                              <h5 class="mb-1"><b>$275</b><span
                                  class="mx-2 text-sm text-decoration-line-through text-muted f-w-400">$325</span></h5>
                            </div>
                            <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default flex-shrink-0">
                              <i class="ti ti-trash f-20"></i>
                            </a>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="media align-items-start">
                            <img class="bg-light rounded img-fluid wid-60 flex-shrink-0"
                              src="/img/application/img-prod-3.jpg" alt="User image">
                            <div class="media-body mx-2">
                              <h5 class="mb-1">Canon EOS 1500D 24.1</h5>
                              <p class="text-muted text-sm mb-2">SLR Camera (Black) with EF</p>
                              <h5 class="mb-1"><b>$275</b><span
                                  class="mx-2 text-sm text-decoration-line-through text-muted f-w-400">$325</span></h5>
                            </div>
                            <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default flex-shrink-0">
                              <i class="ti ti-trash f-20"></i>
                            </a>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="media align-items-start">
                            <img class="bg-light rounded img-fluid wid-60 flex-shrink-0"
                              src="/img/application/img-prod-4.jpg" alt="User image">
                            <div class="media-body mx-2">
                              <h5 class="mb-1">Canon EOS 1500D 24.1</h5>
                              <p class="text-muted text-sm mb-2">SLR Camera (Black) with EF</p>
                              <h5 class="mb-1"><b>$275</b><span
                                  class="mx-2 text-sm text-decoration-line-through text-muted f-w-400">$325</span></h5>
                            </div>
                            <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default flex-shrink-0">
                              <i class="ti ti-trash f-20"></i>
                            </a>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="float-end">
                            <h5 class="mb-0">$300.00</h5>
                          </div><span class="text-muted">Sub Total</span>
                        </li>
                        <li class="list-group-item">
                          <div class="float-end">
                            <h5 class="mb-0">-</h5>
                          </div><span class="text-muted">Estimated Delivery</span>
                        </li>
                        <li class="list-group-item">
                          <div class="float-end">
                            <h5 class="mb-0">-</h5>
                          </div><span class="text-muted">Voucher</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body py-2">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0">
                          <div class="float-end">
                            <h5 class="mb-0">$300.00</h5>
                          </div>
                          <h5 class="mb-0 d-inline-block">Total</h5>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="d-flex align-items-center text-muted my-4">
                    <div class="avtar avtar-s bg-light-primary flex-shrink-0 me-2">
                      <i class="material-icons-two-tone text-primary f-20">security</i>
                    </div>
                    <span class="text-muted text-sm w-100">Safe & Secure Payment. Easy returns. 100% Athentic
                      products.</span>
                  </div>
                  <div class="d-grid mb-3">
                    <button class="btn btn-primary">Process to Checkout</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="ecomtab-3" role="tabpanel" aria-labelledby="ecomtab-tab-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-xl-8">
                    <div class="card">
                      <div class="card-header">
                        <div class="row align-items-center my-2">
                          <div class="col">
                            <div class="progress" style="height: 6px">
                              <div class="progress-bar bg-primary" style="width: 99%"></div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <p class="mb-0 h6">Step 3</p>
                          </div>
                        </div>
                      </div>
                      <div class="card-body border-bottom">
                        <h5>Payment</h5>
                      </div>
                      <div class="card-body">
                        <div class="address-check border rounded p-3">
                          <div class="form-check">
                            <input type="radio" name="radio11" class="form-check-input input-primary" checked="">
                            <label class="form-check-label d-block">
                              <span class="row align-items-center justify-content-between">
                                <span class="col-6">
                                  <span class="h6 mb-0 d-block">Ian Carpenter <small class="text-muted">(Home)</small>
                                    <span class="badge bg-primary rounded-pill">Default</span></span>
                                </span>
                                <span class="col-6 text-end">
                                  <button class="btn btn-primary" onClick="change_tab('#ecomtab-2')"><i
                                      class="ti ti-edit-circle align-text-bottom me-1"></i>Change</button>
                                </span>
                              </span>
                              <span class="text-muted address-details">1754 Ureate Path, 695 Newga View, Seporcus,
                                Rhode Island, Belgium - SA5 5BO</span>
                              <span class="row align-items-center justify-content-between">
                                <span class="col-6">
                                  <span class="text-muted mb-0">+91 1234567890</span>
                                </span>
                              </span>
                            </label>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-md-6">
                            <div class="address-check border rounded">
                              <div class="form-check paycard"
                                style="background-image: url(images/application/img-pay-card-bg.png);">
                                <input type="radio" name="payradio1" class="form-check-input input-primary"
                                  id="paycard-check-1" checked="">
                                <label class="form-check-label d-block" for="paycard-check-1">
                                  <span class="card-body p-3 d-block">
                                    <span class="d-flex align-items-start justify-content-between">
                                      <h5>John Smith</h5>
                                      <img src="/img/application/mastercard.png" alt="images"
                                        class="img-fluid">
                                    </span>
                                    <span class="row g-2 align-items-center justify-content-between mt-2 mb-5">
                                      <span class="col-auto">
                                        <h5 class="mb-0">****</h5>
                                      </span>
                                      <span class="col-auto">
                                        <h5 class="mb-0">****</h5>
                                      </span>
                                      <span class="col-auto">
                                        <h5 class="mb-0">****</h5>
                                      </span>
                                      <span class="col-auto">
                                        <h5 class="mb-0">2599</h5>
                                      </span>
                                    </span>
                                    <span class="row  align-items-center justify-content-between">
                                      <span class="col-auto">
                                        <p class="mb-0"><span class="text-sm opacity-50">CVV</span> 085</p>
                                      </span>
                                      <span class="col-auto">
                                        <p class="mb-0"><span class="text-sm opacity-50">Expire Date</span> 05/24</p>
                                      </span>
                                    </span>
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="address-check border rounded">
                              <div class="form-check paycard"
                                style="background-image: url(images/application/img-pay-card-bg.png);">
                                <input type="radio" name="payradio1" class="form-check-input input-primary"
                                  id="paycard-check-2">
                                <label class="form-check-label d-block" for="paycard-check-2">
                                  <span class="card-body p-3 d-block">
                                    <span class="d-flex align-items-start justify-content-between">
                                      <h5>Jennifer winget</h5>
                                      <img src="/img/application/visa.png" alt="images" class="img-fluid">
                                    </span>
                                    <span class="row g-2 align-items-center justify-content-between mt-2 mb-5">
                                      <span class="col-auto">
                                        <h5 class="mb-0">****</h5>
                                      </span>
                                      <span class="col-auto">
                                        <h5 class="mb-0">****</h5>
                                      </span>
                                      <span class="col-auto">
                                        <h5 class="mb-0">****</h5>
                                      </span>
                                      <span class="col-auto">
                                        <h5 class="mb-0">2599</h5>
                                      </span>
                                    </span>
                                    <span class="row  align-items-center justify-content-between">
                                      <span class="col-auto">
                                        <p class="mb-0"><span class="text-sm opacity-50">CVV</span> 085</p>
                                      </span>
                                      <span class="col-auto">
                                        <p class="mb-0"><span class="text-sm opacity-50">Expire Date</span> 05/24</p>
                                      </span>
                                    </span>
                                    </span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="divider"><span>OR</span></div>
                        <div class="row">
                          <div class="col-xl-12 col-xxl-4">
                            <div class="address-check border rounded">
                              <div class="form-check">
                                <input type="radio" name="payoptradio1" class="form-check-input input-primary"
                                  id="payopn-check-1" checked="">
                                <label class="form-check-label d-block" for="payopn-check-1">
                                  <span class="card-body p-3 d-block">
                                    <span class="h5 mb-3 d-block">Credit Card</span>
                                    <span class="d-flex align-items-center">
                                      <span class="f-12 badge bg-success me-3">5% OFF</span>
                                      <img src="/img/application/card.png" alt="img" class="img-fluid ms-1">
                                    </span>
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-6 col-xxl-4">
                            <div class="address-check border rounded">
                              <div class="form-check">
                                <input type="radio" name="payoptradio1" class="form-check-input input-primary"
                                  id="payopn-check-2">
                                <label class="form-check-label d-block" for="payopn-check-2">
                                  <span class="card-body p-3 d-block">
                                    <span class="h5 mb-3 d-block">Pay with PayPal</span>
                                    <span class="d-flex align-items-center">
                                      <span class="f-12 badge bg-success me-3">5% OFF</span>
                                      <img src="/img/application/paypal.png" alt="img"
                                        class="img-fluid ms-1">
                                    </span>
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-6 col-xxl-4">
                            <div class="address-check border rounded">
                              <div class="form-check">
                                <input type="radio" name="payoptradio1" class="form-check-input input-primary"
                                  id="payopn-check-3">
                                <label class="form-check-label d-block" for="payopn-check-3">
                                  <span class="card-body p-3 d-block">
                                    <span class="d-flex align-items-center">
                                      <span>
                                        <span class="h5 mb-3 d-block">Cash on Delivery</span>
                                        <span class="f-12 text-muted">When you use this payment</span>
                                      </span>
                                    </span>
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label">Card Number :<small
                                  class="text-muted d-block">Enter
                                  the 16 digit card number on the card</small></label>
                              <div class="col-lg-8">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label">Expiry Date :<small
                                  class="text-muted d-block">Enter
                                  the expiration on the card</small></label>
                              <div class="col-lg-8">
                                <div class="row">
                                  <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Month">
                                  </div>
                                  <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Year">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label">CVV Number :<small class="text-muted d-block">Enter
                                  the 3 or 4 digit number on the card</small></label>
                              <div class="col-lg-8">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-lg-4 col-form-label">Password :<small class="text-muted d-block">Enter
                                  your dynamic password</small></label>
                              <div class="col-lg-8">
                                <input type="password" class="form-control">
                              </div>
                            </div>
                            <div class="text-end btn-page mb-0 mt-4">
                              <button class="btn btn-outline-secondary">Cancel</button>
                              <button class="btn btn-primary">Save & Continue</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-end mb-3">
                      <button class="btn btn-link-primary"><i
                          class="ti ti-arrow-narrow-left align-text-bottom me-2"></i>Back to Shipping
                        Information</button>
                    </div>
                  </div>
                  <div class="col-xl-4">
                    <div class="card coupon-card bg-primary">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-6 d-flex flex-column align-items-start justify-content-between">
                            <div>
                              <h4 class="text-white">Claim your rewards</h4>
                              <span class="badge bg-warning f-14 py-2 px-3">ABLEPRO50</span>
                            </div>
                            <button class="btn btn-coupon mt-3">Apply Code</button>
                          </div>
                          <div class="col-6 text-end">
                            <img src="/img/application/img-coupon.png" alt="img" class="img-fluid">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <button type="button" class="btn btn-sm btn-link-secondary" data-bs-toggle="modal"
                          data-bs-target="#couponModal">
                          Have a coupon code?
                        </button>
                        <div class="input-group my-2">
                          <input type="text" class="form-control" placeholder="Discount Coupon">
                          <button class="btn btn-outline-secondary" type="button">Apply</button>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h5>Order Summary</h5>
                      </div>
                      <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            <div class="media align-items-start">
                              <img class="bg-light rounded img-fluid wid-60 flex-shrink-0"
                                src="/img/application/img-prod-2.jpg" alt="User image">
                              <div class="media-body mx-2">
                                <h5 class="mb-1">Canon EOS 1500D 24.1</h5>
                                <p class="text-muted text-sm mb-2">SLR Camera (Black) with EF</p>
                                <h5 class="mb-1"><b>$275</b><span
                                    class="mx-2 text-sm text-decoration-line-through text-muted f-w-400">$325</span>
                                </h5>
                              </div>
                              <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default flex-shrink-0">
                                <i class="ti ti-trash f-20"></i>
                              </a>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="media align-items-start">
                              <img class="bg-light rounded img-fluid wid-60 flex-shrink-0"
                                src="/img/application/img-prod-3.jpg" alt="User image">
                              <div class="media-body mx-2">
                                <h5 class="mb-1">Canon EOS 1500D 24.1</h5>
                                <p class="text-muted text-sm mb-2">SLR Camera (Black) with EF</p>
                                <h5 class="mb-1"><b>$275</b><span
                                    class="mx-2 text-sm text-decoration-line-through text-muted f-w-400">$325</span>
                                </h5>
                              </div>
                              <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default flex-shrink-0">
                                <i class="ti ti-trash f-20"></i>
                              </a>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="media align-items-start">
                              <img class="bg-light rounded img-fluid wid-60 flex-shrink-0"
                                src="/img/application/img-prod-4.jpg" alt="User image">
                              <div class="media-body mx-2">
                                <h5 class="mb-1">Canon EOS 1500D 24.1</h5>
                                <p class="text-muted text-sm mb-2">SLR Camera (Black) with EF</p>
                                <h5 class="mb-1"><b>$275</b><span
                                    class="mx-2 text-sm text-decoration-line-through text-muted f-w-400">$325</span>
                                </h5>
                              </div>
                              <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default flex-shrink-0">
                                <i class="ti ti-trash f-20"></i>
                              </a>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="float-end">
                              <h5 class="mb-0">$300.00</h5>
                            </div><span class="text-muted">Sub Total</span>
                          </li>
                          <li class="list-group-item">
                            <div class="float-end">
                              <h5 class="mb-0">-</h5>
                            </div><span class="text-muted">Estimated Delivery</span>
                          </li>
                          <li class="list-group-item">
                            <div class="float-end">
                              <h5 class="mb-0">-</h5>
                            </div><span class="text-muted">Voucher</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body py-2">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item px-0">
                            <div class="float-end">
                              <h5 class="mb-0">$300.00</h5>
                            </div>
                            <h5 class="mb-0 d-inline-block">Total</h5>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="d-flex align-items-center text-muted my-4">
                      <div class="avtar avtar-s bg-light-primary flex-shrink-0 me-2">
                        <i class="material-icons-two-tone text-primary f-20">security</i>
                      </div>
                      <span class="text-muted text-sm w-100">Safe & Secure Payment. Easy returns. 100% Athentic
                        products.</span>
                    </div>
                    <div class="d-grid mb-3">
                      <button class="btn btn-primary">Process to Payment</button>
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

  <!-- Modal -->
  <div class="modal fade" id="couponModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="calendar-modal-title f-w-600 text-truncate">Festival gift for your</h4>
          <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
            <i class="ti ti-x f-20"></i>
          </a>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="card my-2 coupon-card bg-warning small-coupon-card">
                <div class="card-body py-2">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <h4 class="mb-0 text-white">Up to 50% Off</h4>
                      <button class="btn btn-sm btn-coupon mt-2">ABLPRO50</button>
                    </div>
                    <img src="/img/application/img-coupon-1.png" alt="img" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card my-2 coupon-card bg-success small-coupon-card">
                <div class="card-body py-2">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <h4 class="mb-0 text-white">Festival Fires</h4>
                      <button class="btn btn-sm btn-coupon mt-2">FLAT05</button>
                    </div>
                    <img src="/img/application/img-coupon-2.png" alt="img" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="overflow-hidden">
            <div class="coupon-label coupon-label-primary">
              <div class="media align-items-center">
                <div class="avtar bg-light-primary">
                  <i class="ti ti-gift f-22"></i>
                </div>
                <div class="media-body mx-3">
                  <h5 class="mb-1">Get $150 off on your subscription</h5>
                  <p class="mb-0 text-sm text-muted">When you subscribe to the unlimited consultation plan on berry.</p>
                </div>
                <button class="btn coupon-btn btn-primary">SUB150</button>
              </div>
            </div>
            <div class="coupon-label coupon-label-warning">
              <div class="media align-items-center">
                <div class="avtar bg-light-warning">
                  <i class="ti ti-trophy f-22"></i>
                </div>
                <div class="media-body mx-3">
                  <h5 class="mb-1">Save up to $200</h5>
                  <p class="mb-0 text-sm text-muted">Make 4 play store recharge code purchases & save up to $200</p>
                </div>
                <button class="btn coupon-btn btn-warning">UPTO200</button>
              </div>
            </div>
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
  <!-- Sweet Alert -->
  <script src="/js/plugins/sweetalert2.all.min.js"></script>
  <script>
    function change_tab(tab_name) {
      var someTabTriggerEl = document.querySelector('a[href="' + tab_name + '"]');
      var actTab = new bootstrap.Tab(someTabTriggerEl);
      actTab.show();
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
    document.querySelector('#btn-comp-order').addEventListener('click', function () {
      Swal.fire({
        title: 'Thank you for order!',
        html: '<p class="text-muted d-block">We will send a process notification, before it delivered.<p><p>Your order id:<span class="text-primary">2e2c9449-7cfd-58d2-b953-f0011c256c39<span></p>',
        imageUrl: 'images/application/completed.png',
        imageWidth: 500,
        imageHeight: 279,
        showCloseButton: true,
        showConfirmButton: false,
        imageAlt: 'Custom image'
      });
    });
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


<!-- Mirrored from ableproadmin.com/application/ecom_checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:53 GMT -->
</html>