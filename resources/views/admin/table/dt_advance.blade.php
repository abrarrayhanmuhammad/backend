<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  
<!-- Mirrored from ableproadmin.com/table/dt_advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:34 GMT -->
<head>
    <title>Advance Initialization | Able Pro Dashboard Template</title>
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
    <!-- data tables css -->
    <link rel="stylesheet" href="/css/plugins/dataTables.bootstrap5.min.css">
    <!-- [Page specific CSS] end -->
    <!-- [Font] Family -->
    <link rel="stylesheet" href="/fonts/inter/inter.css" id="main-font-link" />

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="fonts/fontawesome.css" />
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
    <section class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="https://ableproadmin.com/navigation/index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">DataTable</a></li>
                  <li class="breadcrumb-item" aria-current="page">Advance Initialization</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Advance Initialization</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- DOM/Jquery table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>DOM/Jquery</h5>
                <small
                  >Events assigned to the table can be exceptionally useful for user interaction, however you must be aware that DataTables
                  will add and remove rows from the DOM.</small
                >
              </div>
              <div class="card-body">
                <div class="table-responsive dt-responsive">
                  <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- DOM/Jquery table end -->
          <!-- Column Rendering table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Column Rendering</h5>
                <small>This example shows the person's age combined with their name in the first column, hiding the age column.</small>
              </div>
              <div class="card-body">
                <div class="table-responsive dt-responsive">
                  <table id="colum-render" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Column Rendering table end -->
          <!-- Multiple Table Control Elements start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Multiple Table Control Elements</h5>
                <small
                  >In addition to this, you can also use dom to create multiple instances of these table controls. Simply include the
                  feature's identification letter where you want it to appear.</small
                >
              </div>
              <div class="card-body">
                <div class="table-responsive dt-responsive">
                  <table id="multi-table" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Multiple Table Control Elements end -->
          <!-- Complex Headers With Column Visibility table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Complex Headers With Column Visibility</h5>
                <small
                  >Complex headers (using colspan / rowspan) can be used to group columns of similar information in DataTables, creating a
                  very powerful visual effect.</small
                >
              </div>
              <div class="card-body">
                <div class="table-responsive dt-responsive">
                  <table id="complex-header" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th rowspan="2">Name</th>
                        <th colspan="2">HR Information</th>
                        <th colspan="3">Contact</th>
                      </tr>
                      <tr>
                        <th>Position</th>
                        <th>Salary</th>
                        <th>Office</th>
                        <th>Extn.</th>
                        <th>E-mail</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Salary</th>
                        <th>Office</th>
                        <th>Extn.</th>
                        <th>E-mail</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Complex Headers With Column Visibility table end -->
          <!-- Language File table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Language File</h5>
                <small
                  >As well as being able to pass language information to DataTables through the language initialization option, you can also
                  store the language information in a file</small
                >
              </div>
              <div class="card-body">
                <div class="table-responsive dt-responsive">
                  <table id="lang-file" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Language File table end -->
          <!-- Setting Defaults table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Setting Defaults</h5>
                <small
                  >When working with DataTables over multiple pages it is often useful to set the initialization defaults to common values
                </small>
              </div>
              <div class="card-body">
                <div class="table-responsive dt-responsive">
                  <table id="setting-default" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Setting Defaults table end -->
          <!-- Row Grouping table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Row Grouping</h5>
                <small
                  >Although DataTables doesn't have row grouping built-in (picking one of the many methods available would overly limit the
                  DataTables core), it is most certainly possible to give the look and feel of row grouping.</small
                >
              </div>
              <div class="card-body">
                <div class="table-responsive dt-responsive">
                  <table id="row-grouping" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Row Grouping table end -->
          <!-- Footer Callback table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Footer Callback</h5>
                <small
                  >Through the use of the header and footer callback manipulation functions provided by DataTables (headerCallback and
                  footerCallback), it is possible to perform some powerful and useful data manipulation functions.</small
                >
              </div>
              <div class="card-body">
                <div class="table-responsive dt-responsive">
                  <table id="footer-callback" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Office</th>
                        <th>age</th>
                        <th>DOB</th>
                        <th>Salary</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th colspan="5" style="text-align: right">Total:</th>
                        <th></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Footer Callback table end -->
          <!-- Custom Toolbar Elements start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Custom Toolbar Elements</h5>
                <small
                  >DataTables inserts DOM elements around the table to control DataTables features, and you can make use of this mechanism
                  as well to insert your own custom elements</small
                >
              </div>
              <div class="card-body">
                <div class="table-responsive dt-responsive">
                  <table id="c-tool-ele" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Office</th>
                        <th>age</th>
                        <th>DOB</th>
                        <th>Salary</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th colspan="5" style="text-align: right">Total:</th>
                        <th></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Custom Toolbar Elements end -->
          <!-- Row Created Callback table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Row Created Callback</h5>
                <small>The following example shows how a callback function can be used to format a particular row at draw time.</small>
              </div>
              <div class="card-body">
                <div class="table-responsive dt-responsive">
                  <table id="row-callback" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Row Created Callback table end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </section>
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
    <!-- datatable Js -->
    <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/plugins/jquery.dataTables.min.js"></script>
    <script src="/js/plugins/dataTables.bootstrap5.min.js"></script>
    <script>
      // [ DOM/jquery ]
      var total, pageTotal;
      var table = $('#dom-jqry').DataTable();
      // [ column Rendering ]
      $('#colum-render').DataTable({
        columnDefs: [
          {
            render: function (data, type, row) {
              return data + ' (' + row[3] + ')';
            },
            targets: 0
          },
          {
            visible: false,
            targets: [3]
          }
        ]
      });
      // [ Multiple Table Control Elements ]
      $('#multi-table').DataTable({
        dom: '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>'
      });
      // [ Complex Headers With Column Visibility ]
      $('#complex-header').DataTable({
        columnDefs: [
          {
            visible: false,
            targets: -1
          }
        ]
      });
      // [ Language file ]
      $('#lang-file').DataTable({
        language: {
          url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json'
        }
      });
      // [ Setting Defaults ]
      $('#setting-default').DataTable();
      // [ Row Grouping ]
      var table1 = $('#row-grouping').DataTable({
        columnDefs: [
          {
            visible: false,
            targets: 2
          }
        ],
        order: [[2, 'asc']],
        displayLength: 25,
        drawCallback: function (settings) {
          var api = this.api();
          var rows = api
            .rows({
              page: 'current'
            })
            .nodes();
          var last = null;

          api
            .column(2, {
              page: 'current'
            })
            .data()
            .each(function (group, i) {
              if (last !== group) {
                $(rows)
                  .eq(i)
                  .before('<tr class="group"><td colspan="5">' + group + '</td></tr>');

                last = group;
              }
            });
        }
      });
      // [ Order by the grouping ]
      $('#row-grouping tbody').on('click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
          table.order([2, 'desc']).draw();
        } else {
          table.order([2, 'asc']).draw();
        }
      });
      // [ Footer callback ]
      $('#footer-callback').DataTable({
        footerCallback: function (row, data, start, end, display) {
          var api = this.api(),
            data;

          // Remove the formatting to get integer data for summation
          var intVal = function (i) {
            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
          };

          // Total over all pages
          total = api
            .column(4)
            .data()
            .reduce(function (a, b) {
              return intVal(a) + intVal(b);
            }, 0);

          // Total over this page
          pageTotal = api
            .column(4, {
              page: 'current'
            })
            .data()
            .reduce(function (a, b) {
              return intVal(a) + intVal(b);
            }, 0);

          // Update footer
          $(api.column(4).footer()).html('$' + pageTotal + ' ( $' + total + ' total)');
        }
      });
      // [ Custom Toolbar Elements ]
      $('#c-tool-ele').DataTable({
        dom: '<"toolbar">frtip'
      });
      // [ Custom Toolbar Elements ]
      $('div.toolbar').html('<b>Custom tool bar! Text/images etc.</b>');
      // [ custom callback ]
      $('#row-callback').DataTable({
        createdRow: function (row, data, index) {
          if (data[5].replace(/[\$,]/g, '') * 1 > 150000) {
            $('td', row).eq(5).addClass('highlight');
          }
        }
      });
    </script>
    <!-- [Page Specific JS] end -->
  </body>
  <!-- [Body] end -->

<!-- Mirrored from ableproadmin.com/table/dt_advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:36 GMT -->
</html>
