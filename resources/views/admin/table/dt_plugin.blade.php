<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  
<!-- Mirrored from ableproadmin.com/table/dt_plugin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:36 GMT -->
<head>
    <title>Plug-ins | Able Pro Dashboard Template</title>
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
                  <li class="breadcrumb-item" aria-current="page">Plug-ins</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Plug-ins</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- API plug-in methods table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>API Plug-in Methods</h5>
                <small
                  >The DataTables API is designed to be fully extensible, with custom functions being very easy to add using the
                  $.fn.dataTable.Api.register function. This function takes two arguments</small
                >
              </div>
              <div class="card-body">
                <div class="dt-plugin-buttons"></div>
                <div class="dt-responsive table-responsive">
                  <table id="dt-plugin-method" class="table table-striped table-bordered nowrap">
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
                        <td>Tiger Nixon</td>
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
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2011/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <tr>
                        <td>Yuri Mantis</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2009/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2011/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2010/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2009/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011/08/14</td>
                        <td>$163,000</td>
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
          <!-- API plug-in methods table end -->
          <!-- Ordering plug-ins (with type detection) table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Ordering Plug-ins (with type detection)</h5>
                <small
                  >Although DataTables will automatically order data from a number of different data types using the built in methods, when
                  dealing with more complex formatted data</small
                >
              </div>
              <div class="card-body">
                <div class="dt-responsive table-responsive">
                  <table id="dt-ordering" class="table table-striped table-bordered nowrap">
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
                        <td>Tiger Nixon</td>
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
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2011/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <tr>
                        <td>Yuri Mantis</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2009/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2011/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2010/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2009/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011/08/14</td>
                        <td>$163,000</td>
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
          <!-- Ordering plug-ins (with type detection) table end -->
          <!-- Custom filtering - range search table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Custom Filtering - Range Search</h5>
                <small
                  >There may be occasions when you wish to search data presented to the end user in your own manner, common examples are
                  number range searches (in between two numbers) and date range searches</small
                >
              </div>
              <div class="card-body">
                <div class="dt-responsive table-responsive">
                  <table class="m-b-20">
                    <tbody>
                      <tr>
                        <td>Minimum age:</td>
                        <td>
                          <input class="form-control" type="text" id="min" name="min">
                        </td>
                      </tr>
                      <tr>
                        <td>Maximum age:</td>
                        <td>
                          <input class="form-control" type="text" id="max" name="max">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="dt-responsive table-responsive">
                  <table id="dt-range" class="table table-striped table-bordered nowrap">
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
                        <td>Tiger Nixon</td>
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
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2011/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <tr>
                        <td>Yuri Mantis</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2009/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2011/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2010/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2009/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011/08/14</td>
                        <td>$163,000</td>
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
          <!-- Custom filtering - range search table end -->
          <!-- Live DOM ordering table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Live DOM Ordering</h5>
                <small
                  >This example shows how you can use information available in the DOM to order columns. Typically DataTables will read
                  information to be ordered during its initialization phase</small
                >
              </div>
              <div class="card-body">
                <div class="dt-responsive table-responsive">
                  <table id="dt-live-dom" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th>Office</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>
                          <input class="form-control" type="text" id="row-1-age" name="row-1-age" value="61">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-1-position" name="row-1-position" value="System Architect">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-1-office" name="row-1-office">
                            <option value="Edinburgh" selected="selected"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>
                          <input class="form-control" type="text" id="row-2-age" name="row-2-age" value="63">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-2-position" name="row-2-position" value="Accountant">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-2-office" name="row-2-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo" selected="selected"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>
                          <input class="form-control" type="text" id="row-3-age" name="row-3-age" value="66">
                        </td>
                        <td>
                          <input
                            class="form-control"
                            type="text"
                            id="row-3-position"
                            name="row-3-position"
                            value="Junior Technical Author"
                         >
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-3-office" name="row-3-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco" selected="selected"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>
                          <input class="form-control" type="text" id="row-4-age" name="row-4-age" value="22 ">
                        </td>
                        <td>
                          <input
                            class="form-control"
                            type="text"
                            id="row-4-position"
                            name="row-4-position"
                            value="Senior Javascript Developer"
                         >
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-4-office" name="row-4-office">
                            <option value="Edinburgh" selected="selected"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>
                          <input class="form-control" type="text" id="row-5-age" name="row-5-age" value="33 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-5-position" name="row-5-position" value="Accountant">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-5-office" name="row-5-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo" selected="selected"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>
                          <input class="form-control" type="text" id="row-6-age" name="row-6-age" value="61">
                        </td>
                        <td>
                          <input
                            class="form-control"
                            type="text"
                            id="row-6-position"
                            name="row-6-position"
                            value="Integration Specialist"
                         >
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-6-office" name="row-6-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York" selected="selected"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>
                          <input class="form-control" type="text" id="row-7-age" name="row-7-age" value="59 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-7-position" name="row-7-position" value="Sales Assistant">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-7-office" name="row-7-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco" selected="selected"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>
                          <input class="form-control" type="text" id="row-8-age" name="row-8-age" value="55 ">
                        </td>
                        <td>
                          <input
                            class="form-control"
                            type="text"
                            id="row-8-position"
                            name="row-8-position"
                            value="Integration Specialist"
                         >
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-8-office" name="row-8-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo" selected="selected"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>
                          <input class="form-control" type="text" id="row-9-age" name="row-9-age" value="39 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-9-position" name="row-9-position" value="Javascript Developer">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-9-office" name="row-9-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco" selected="selected"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>
                          <input class="form-control" type="text" id="row-10-age" name="row-10-age" value="23 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-10-position" name="row-10-position" value="Software Engineer">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-10-office" name="row-10-office">
                            <option value="Edinburgh" selected="selected"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>
                          <input class="form-control" type="text" id="row-11-age" name="row-11-age" value="30 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-11-position" name="row-11-position" value="Office Manager">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-11-office" name="row-11-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London" selected="selected"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>
                          <input class="form-control" type="text" id="row-12-age" name="row-12-age" value="22 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-12-position" name="row-12-position" value="Support Lead">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-12-office" name="row-12-office">
                            <option value="Edinburgh" selected="selected"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>
                          <input class="form-control" type="text" id="row-13-age" name="row-13-age" value="36 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-13-position" name="row-13-position" value="Regional Director">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-13-office" name="row-13-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco" selected="selected"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>
                          <input class="form-control" type="text" id="row-14-age" name="row-14-age" value="43 ">
                        </td>
                        <td>
                          <input
                            class="form-control"
                            type="text"
                            id="row-14-position"
                            name="row-14-position"
                            value="Senior Marketing Designer"
                         >
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-14-office" name="row-14-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London" selected="selected"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>
                          <input class="form-control" type="text" id="row-15-age" name="row-15-age" value="19 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-15-position" name="row-15-position" value="Regional Director">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-15-office" name="row-15-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London" selected="selected"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>
                          <input class="form-control" type="text" id="row-16-age" name="row-16-age" value="66 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-16-position" name="row-16-position" value="Marketing Designer">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-16-office" name="row-16-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London" selected="selected"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>
                          <input class="form-control" type="text" id="row-17-age" name="row-17-age" value="64 ">
                        </td>
                        <td>
                          <input
                            class="form-control"
                            type="text"
                            id="row-17-position"
                            name="row-17-position"
                            value="Chief Financial Officer (CFO)"
                         >
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-17-office" name="row-17-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York" selected="selected"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>
                          <input class="form-control" type="text" id="row-18-age" name="row-18-age" value="59 ">
                        </td>
                        <td>
                          <input
                            class="form-control"
                            type="text"
                            id="row-18-position"
                            name="row-18-position"
                            value="Systems Administrator"
                         >
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-18-office" name="row-18-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York" selected="selected"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>
                          <input class="form-control" type="text" id="row-19-age" name="row-19-age" value="41 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-19-position" name="row-19-position" value="Software Engineer">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-19-office" name="row-19-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London" selected="selected"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>
                          <input class="form-control" type="text" id="row-20-age" name="row-20-age" value="35 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-20-position" name="row-20-position" value="Personnel Lead">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-20-office" name="row-20-office">
                            <option value="Edinburgh" selected="selected"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>
                          <input class="form-control" type="text" id="row-21-age" name="row-21-age" value="30 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-21-position" name="row-21-position" value="Development Lead">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-21-office" name="row-21-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York" selected="selected"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Yuri Mantis</td>
                        <td>
                          <input class="form-control" type="text" id="row-22-age" name="row-22-age" value="40 ">
                        </td>
                        <td>
                          <input
                            class="form-control"
                            type="text"
                            id="row-22-position"
                            name="row-22-position"
                            value="Chief Marketing Officer (CMO)"
                         >
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-22-office" name="row-22-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York" selected="selected"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>
                          <input class="form-control" type="text" id="row-23-age" name="row-23-age" value="21 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-23-position" name="row-23-position" value="Pre-Sales Support">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-23-office" name="row-23-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York" selected="selected"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>
                          <input class="form-control" type="text" id="row-24-age" name="row-24-age" value="23 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-24-position" name="row-24-position" value="Sales Assistant">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-24-office" name="row-24-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>
                          <input class="form-control" type="text" id="row-25-age" name="row-25-age" value="47 ">
                        </td>
                        <td>
                          <input
                            class="form-control"
                            type="text"
                            id="row-25-position"
                            name="row-25-position"
                            value="Chief Executive Officer (CEO)"
                         >
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-25-office" name="row-25-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London" selected="selected"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>
                          <input class="form-control" type="text" id="row-26-age" name="row-26-age" value="42 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-26-position" name="row-26-position" value="Developer">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-26-office" name="row-26-office">
                            <option value="Edinburgh" selected="selected"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>
                          <input class="form-control" type="text" id="row-27-age" name="row-27-age" value="28 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-27-position" name="row-27-position" value="Regional Director">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-27-office" name="row-27-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>
                          <input class="form-control" type="text" id="row-28-age" name="row-28-age" value="28 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-28-position" name="row-28-position" value="Software Engineer">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-28-office" name="row-28-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco" selected="selected"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>
                          <input class="form-control" type="text" id="row-29-age" name="row-29-age" value="48 ">
                        </td>
                        <td>
                          <input
                            class="form-control"
                            type="text"
                            id="row-29-position"
                            name="row-29-position"
                            value="Chief Operating Officer (COO)"
                         >
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-29-office" name="row-29-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco" selected="selected"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>
                          <input class="form-control" type="text" id="row-30-age" name="row-30-age" value="20 ">
                        </td>
                        <td>
                          <input class="form-control" type="text" id="row-30-position" name="row-30-position" value="Regional Marketing">
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-30-office" name="row-30-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo" selected="selected"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Michelle House</td>
                        <td>
                          <input class="form-control" type="text" id="row-31-age" name="row-31-age" value="37 ">
                        </td>
                        <td>
                          <input
                            class="form-control"
                            type="text"
                            id="row-31-position"
                            name="row-31-position"
                            value="Integration Specialist"
                         >
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-31-office" name="row-31-office">
                            <option value="Edinburgh"> Edinburgh </option>
                            <option value="London"> London </option>
                            <option value="New York"> New York </option>
                            <option value="San Francisco"> San Francisco </option>
                            <option value="Tokyo"> Tokyo </option>
                          </select>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th>Office</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Live DOM ordering table end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </section>
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
      // [ Plugin data table ]
      $.fn.dataTable.Api.register('column().data().sum()', function () {
        return this.reduce(function (a, b) {
          var x = parseFloat(a) || 0;
          var y = parseFloat(b) || 0;
          return x + y;
        });
      });

      var table = $('#dt-plugin-method').DataTable();

      $('<button class="btn  btn-primary m-b-20">sum of age in all rows</button>')
        .prependTo('.dt-plugin-buttons')
        .on('click', function () {
          alert('Column sum is: ' + table.column(3).data().sum());
        });

      $('<button class="btn  btn-primary m-r-10 m-b-20">sum of age of visible rows</button>')
        .prependTo('.dt-plugin-buttons')
        .on('click', function () {
          alert(
            'Column sum is: ' +
              table
                .column(3, {
                  page: 'current'
                })
                .data()
                .sum()
          );
        });

      $.fn.dataTable.ext.type.detect.unshift(function (d) {
        return d === 'Low' || d === 'Medium' || d === 'High' ? 'salary-grade' : null;
      });

      $.fn.dataTable.ext.type.order['salary-grade-pre'] = function (d) {
        switch (d) {
          case 'Low':
            return 1;
          case 'Medium':
            return 2;
          case 'High':
            return 3;
        }
        return 0;
      };

      $('#dt-ordering').DataTable();

      /* Custom filtering function which will search data in column four between two values */
      $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
        var min = parseInt($('#min').val(), 10);
        var max = parseInt($('#max').val(), 10);
        var age = parseFloat(data[3]) || 0; // use data for the age column

        if ((isNaN(min) && isNaN(max)) || (isNaN(min) && age <= max) || (min <= age && isNaN(max)) || (min <= age && age <= max)) {
          return true;
        }
        return false;
      });

      var dtage = $('#dt-range').DataTable();

      /* Event listener to the two range filtering inputs to redraw on input */
      $('#min, #max').keyup(function () {
        dtage.draw();
      });

      /* Create an array with the values of all the input boxes in a column */
      $.fn.dataTable.ext.order['dom-text'] = function (settings, col) {
        return this.api()
          .column(col, {
            order: 'index'
          })
          .nodes()
          .map(function (td, i) {
            return $('input', td).val();
          });
      };

      /* Create an array with the values of all the input boxes in a column, parsed as numbers */
      $.fn.dataTable.ext.order['dom-text-numeric'] = function (settings, col) {
        return this.api()
          .column(col, {
            order: 'index'
          })
          .nodes()
          .map(function (td, i) {
            return $('input', td).val() * 1;
          });
      };

      /* Create an array with the values of all the select options in a column */
      $.fn.dataTable.ext.order['dom-select'] = function (settings, col) {
        return this.api()
          .column(col, {
            order: 'index'
          })
          .nodes()
          .map(function (td, i) {
            return $('select', td).val();
          });
      };

      /* Create an array with the values of all the checkboxes in a column */
      $.fn.dataTable.ext.order['dom-checkbox'] = function (settings, col) {
        return this.api()
          .column(col, {
            order: 'index'
          })
          .nodes()
          .map(function (td, i) {
            return $('input', td).prop('checked') ? '1' : '0';
          });
      };

      /* Initialise the table with the required column ordering data types */
      $(document).ready(function () {
        $('#dt-live-dom').DataTable({
          columns: [
            null,
            { orderDataType: 'dom-text-numeric' },
            { orderDataType: 'dom-text', type: 'string' },
            { orderDataType: 'dom-select' }
          ]
        });
      });
    </script>
    <!-- [Page Specific JS] end -->
  </body>
  <!-- [Body] end -->

<!-- Mirrored from ableproadmin.com/table/dt_plugin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 03:34:36 GMT -->
</html>
