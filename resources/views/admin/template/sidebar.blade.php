@php($user = Auth::user())

<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="#" class="b-brand text-primary">
          <!-- ========   Change your logo from here   ============ -->
          <img src="/img/logo/logo.png" />
          <span class="badge bg-light-success rounded-pill ms-2 theme-version"></span>
        </a>
      </div>
      <div class="navbar-content">
        <div class="card pc-user-card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="/img/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
              </div>
              <div class="flex-grow-1 ms-3 me-2">
                <h6 class="mb-0">{{$user->firstname}} {{$user->lastname}}</h6>
                <small>Administrator</small>
              </div>
              <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse" href="#pc_sidebar_userlink">
                <svg class="pc-icon">
                  <use xlink:href="#custom-sort-outline"></use>
                </svg>
              </a>
            </div>
            <div class="collapse pc-user-links" id="pc_sidebar_userlink">
              <div class="pt-3">
                <a href="#!">
                  <i class="ti ti-user"></i>
                  <span>My Account</span>
                </a>
                <a href="#!">
                  <i class="ti ti-settings"></i>
                  <span>Settings</span>
                </a>
                <a href="#!">
                  <i class="ti ti-lock"></i>
                  <span>Lock Screen</span>
                </a>
                <a href="#!">
                  <i class="ti ti-power"></i>
                  <span>Logout</span>
                </a>
              </div>
            </div>
          </div>
        </div>
  
        <ul class="pc-navbar">
          <li class="pc-item pc-caption">
            <label>Navigation</label>
            <i class="ti ti-dashboard"></i>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-status-up"></use>
                </svg>
              </span>
              <span class="pc-mtext">Dashboard</span>
              <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
              <span class="pc-badge">2</span>
            </a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('admin.index') }}">Default</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('analytics') }}">Analytics</a></li>
            </ul>
          </li>
          {{-- <li class="pc-item pc-caption">
            <label>E-commerce</label>
            <i class="ti ti-chart-arcs"></i>
          </li>

          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="{{ route('ecomproduct') }}">Product</a></li>
            <li class="pc-item"><a class="pc-link" href="{{ route('ecomproductdetails') }}">Product details</a></li>
            <li class="pc-item"><a class="pc-link" href="{{ route('ecomproductlist') }}">Product List</a></li>
            <li class="pc-item"><a class="pc-link" href="{{ route('ecomproductadd') }}">Add New Product</a></li>
            <li class="pc-item"><a class="pc-link" href="{{ route('ecomcheckout') }}">Checkout</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('price') }}">Price</a></li>
          </ul>
              
          </li> --}}


          <li class="pc-item pc-caption">
            <label>E-commerce</label>
            <i class="ti ti-news"></i>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-shield"></use>
                </svg>
              </span>
              <span class="pc-mtext">Produk</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('ecomproduct') }}">Product</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('ecomproductdetails') }}">Product details</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('ecomproductlist') }}">Product List</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('ecomproductadd') }}">Add New Product</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('ecomcheckout') }}">Checkout</a> </li>
              <li class="pc-item"><a class="pc-link" href="{{ route('price') }}">Price</a></li>
            </ul>
            




          {{-- <li class="pc-item pc-caption">
            <label>Login-Register</label>
            <i class="ti ti-news"></i>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-shield"></use>
                </svg>
              </span>
              <span class="pc-mtext">Masuk-Daftar</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('login') }}">Login</a></li>
              <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('register') }}">Register</a></li>
              <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('forgotpassword') }}">Forgot Password</a></li>
              <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('checkmail') }}">check mail</a></li>
              <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('resetpassword') }}">reset password</a> </li>
              <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('codeverification') }}">code verification</a></li>
            </ul> --}}


  
          {{-- <li class="pc-item pc-caption">
            <label>UI Components</label>
            <i class="ti ti-dashboard"></i>
          </li>
          <li class="pc-item">
            <a href="{{ route('bcalert') }}" class="pc-link" target="_blank"
              ><span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-box-1"></use>
                </svg> </span
              ><span class="pc-mtext">Components</span></a
            >
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"
              ><span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-mouse-circle"></use>
                </svg> </span
              ><span class="pc-mtext">Icons</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('iconfeather') }}">Feather</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('iconfontawesome') }}">Font Awesome 5</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('iconmaterial') }}">Material</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('icontabler') }}">Tabler</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('iconcustom') }}">Custom</a></li>
            </ul>
          </li> --}}
          {{-- <li class="pc-item pc-caption">
            <label>Forms</label>
            <i class="ti ti-forms"></i>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-element-plus"></use>
                </svg>
              </span>
              <span class="pc-mtext">Forms Elements</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('formelements') }}">Form Basic</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('formfloating') }}">Form Floating</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2basic') }}">Form Options</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2inputgroup') }}">Input Groups</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2checkbox') }}">Checkbox</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2radio') }}">Radio</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2switch') }}">Switch</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2megaoption') }}">Mega option</a></li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-cpu-charge"></use>
                </svg>
              </span>
              <span class="pc-mtext">Forms Plugins</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item pc-hasmenu">
                <a class="pc-link" href="#"
                  >Date<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="{{ route('form2datepicker') }}">Datepicker</a></li>
                  <li class="pc-item"><a class="pc-link" href="{{ route('form2daterangepicker') }}">Date Range Picker</a> </li>
                  <li class="pc-item"><a class="pc-link" href="{{ route('form2timepicker') }}">Timepicker</a></li>
                </ul>
              </li>
              <li class="pc-item pc-hasmenu">
                <a class="pc-link" href="#"
                  >Select<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="{{ route('form2choices') }}">Choices js</a></li>
                </ul>
              </li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2recaptcha') }}">Google reCaptcha</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2inputmask') }}">Input Masks</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2clipboard') }}">Clipboard</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2nouislider') }}">Nouislider</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2switchjs') }}">Bootstrap Switch</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2typeahead') }}">Typeahead</a></li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-text-block"></use>
                </svg>
              </span>
              <span class="pc-mtext">Text Editors</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('form2tinymce') }}">Tinymce</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2quill') }}">Quill</a></li>
              <li class="pc-item pc-hasmenu">
                <a class="pc-link" href="#"
                  >CK editor<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="{{ route('form2editorclassic') }}">classic</a></li>
                  <li class="pc-item"><a class="pc-link" href=""{{ route('form2editordocument') }}">Document</a></li>
                  <li class="pc-item"><a class="pc-link" href=""{{ route('form2editorinline') }}">Inline</a></li>
                  <li class="pc-item"><a class="pc-link" href=""{{ route('form2editorballoon') }}">Balloon</a></li>
                </ul>
              </li>
              <li class="pc-item"><a class="pc-link" href=""{{ route('form2markdown') }}">Markdown</a></li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-row-vertical"></use>
                </svg>
              </span>
              <span class="pc-mtext">Form Layouts</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('form2lay-default') }}">Layouts</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2laymulticolumn') }}">Multicolumn</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2layactionbars') }}">Actionbars</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2laystickyactionbars') }}">Sticky Action bars</a> </li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-document-upload"></use>
                </svg>
              </span>
              <span class="pc-mtext">File upload</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('fileupload') }}">Dropzone</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('form2fluuppy') }}">Uppy</a></li>
            </ul>
          </li>
          <li class="pc-item">
            <a href="{{ route('formvalidation') }}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-password-check"></use>
                </svg>
              </span>
              <span class="pc-mtext">Form Validation</span></a
            >
          </li>
          <li class="pc-item"
            ><a href="{{ route('imagecrop') }}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-crop"></use>
                </svg>
              </span>
              <span class="pc-mtext">Image cropper</span></a
            ></li
          > --}}
          <li class="pc-item pc-caption">
            <label>table</label>
            <i class="ti ti-table-export"></i>
          </li>
          {{-- <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-text-align-justify-center"></use>
                </svg>
              </span>
              <span class="pc-mtext">Bootstrap Table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('tblbootstrap') }}">Basic table</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('tblsizing') }}">Sizing table</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('tblborder') }}">Border table</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('tblstyling') }}">Styling table</a></li>
            </ul>
          </li> --}}
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-keyboard"></use>
                </svg>
              </span>
              {{-- <span class="pc-mtext">Vanilla Table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-simple.html">Basic initialization</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-dynamic-import.html">Dynamic Import</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-render-column-cells.html">Render Column Cells</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-column-manipulation.html">Column Manipulation</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-datetime-sorting.html">Datetime Sorting</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-methods.html">Methods</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-add-rows.html">Add Rows</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-fetch-api.html">Fetch API</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-filters.html">Filters</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-export.html">Export</a></li>
            </ul>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-graph"></use>
                </svg>
              </span> --}}
              <span class="pc-mtext">Data table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('dtadvance') }}">Advance initialization</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('dtstyling') }}">Styling</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('dtapi') }}">API</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('dtplugin') }}">Plug-in</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('dtsources') }}">Data sources</a></li>
            </ul>
          </li>
          {{-- <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-add-item"></use>
                </svg>
              </span>
              <span class="pc-mtext">DT extensions</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_autofill.html">Autofill</a></li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Button<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="../table/dt_ext_basic_buttons.html">Basic button</a></li>
                  <li class="pc-item"><a class="pc-link" href="../table/dt_ext_export_buttons.html">Data export</a></li>
                </ul>
              </li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_col_reorder.html">Col reorder</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_fixed_columns.html">Fixed columns</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_fixed_header.html">Fixed header</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_key_table.html">Key table</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_responsive.html">Responsive</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_row_reorder.html">Row reorder</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_scroller.html">Scroller</a></li>
              <li class="pc-item"><a class="pc-link" href="../table/dt_ext_select.html">Select table</a></li>
            </ul>
          </li> --}}
          {{-- <li class="pc-item pc-caption">
            <label>Charts</label>
            <i class="ti ti-table-export"></i>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-graph"></use>
                </svg>
              </span>
              <span class="pc-mtext">Charts</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="../chart/chart-apex.html">Apex Chart</a></li>
            </ul>
          </li> --}}
          <li class="pc-item pc-caption">
            <label>Application</label>
            <i class="ti ti-layout-kanban"></i>
          </li>
          {{-- <li class="pc-item">
            <a href="../application/calendar.html" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-calendar-1"></use>
                </svg>
              </span>
              <span class="pc-mtext">Calendar</span></a
            >
          </li> --}}
          <li class="pc-item">
            <a href="{{ route('chat') }}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-message-2"></use>
                </svg>
              </span>
              <span class="pc-mtext">Chat</span></a
            >
          </li>
          <li class="pc-item">
            <a href="{{ route('custcustomerlist') }}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-notification-status"></use>
                </svg>
              </span>
              <span class="pc-mtext">Customer</span></a
            >
          </li>
          {{-- <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-shopping-bag"></use>
                </svg>
              </span>
              <span class="pc-mtext">E-commerce</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('ecomproduct') }}">Product</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('ecomproductdetails') }}">Product details</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('ecomproductlist') }}">Product List</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('ecomproductadd') }}">Add New Product</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('ecomcheckout') }}">Checkout</a></li>
            </ul> --}}
          {{-- </li>
          <li class="pc-item">
            <a href="{{ route('filemanager') }}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-document-filter"></use>
                </svg>
              </span>
              <span class="pc-mtext">File manager</span></a
            >
          </li> --}}
          <li class="pc-item">
            <a href="{{ route('mail') }}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-direct-inbox"></use>
                </svg>
              </span>
              <span class="pc-mtext">Mail</span></a
            >
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-user-square"></use>
                </svg>
              </span>
              <span class="pc-mtext">Users</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('accountprofile') }}">Account Profile</a></li>
              {{-- <li class="pc-item"><a class="pc-link" href="{{ route('socialmedia') }}">Social media</a></li> --}}
            </ul>
          </li>


          <li class="pc-item">
            <a href="{{ route('transaction') }}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-direct-inbox"></use>
                </svg>
              </span>
              <span class="pc-mtext">Transaction</span></a
            >

  
          <li class="pc-item pc-caption">
            <label>Pages</label>
            <i class="ti ti-news"></i>
          </li>
          {{-- <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-shield"></use>
                </svg>
              </span>
              <span class="pc-mtext">Authentication</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Authentication<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('login') }}">Login</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('register') }}">Register</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('forgotpassword') }}">Forgot Password</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('checkmail') }}">check mail</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('resetpassword') }}">reset password</a> </li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('codeverification') }}">code verification</a></li>
                </ul>
              </li> --}}
              {{-- <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Authentication 2<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a> --}}
                {{-- <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/login-v2.html">Login</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/register-v2.html">Register</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/forgot-password-v2.html">Forgot password</a> </li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/check-mail-v2.html">check mail</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/reset-password-v2.html">reset password</a> </li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/code-verification-v2.html">code verification</a></li>
                </ul>
              </li> --}}
              {{-- <li class="pc-item">
                <a href="../pages/login-v3.html" target="_blank" class="pc-link">Authentication 3</a>
              </li> --}}
            {{-- </ul>
          </li> --}}
          {{-- <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-flag"></use>
                </svg>
              </span> --}}
              {{-- <span class="pc-mtext">Maintenance</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('error404') }}">Error 404</a></li>
              <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('error500') }}">Error 500</a></li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Under construction<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('underconstruction') }}">Under Construction 1</a></li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/under-construction-v2.html">Under Construction 2</a></li>
                </ul>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Coming soon<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" target="_blank" href="{{ route('comingsoon') }}">Coming soon 1</a> </li>
                  <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/coming-soon-v2.html">Coming soon 2</a> </li>
                </ul>
              </li>
            </ul>
          </li> --}}
          <li class="pc-item"
            ><a href="{{ route('contactus') }}" class="pc-link" target="_blank">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-24-support"></use>
                </svg>
              </span>
              <span class="pc-mtext">Contact us</span>
            </a>
          </li>
          {{-- <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-dollar-square"></use>
                </svg>
              </span> --}}
              {{-- <span class="pc-mtext">Price</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('price') }}">Price 1</a></li>
              <li class="pc-item"><a class="pc-link" href="../pages/price-v2.html">Price 2</a></li>
            </ul>
          </li> --}}
          <li class="pc-item"
            ><a href="{{ route('landing') }}" class="pc-link" target="_blank"
              ><span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-airplane"></use>
                </svg> </span
              ><span class="pc-mtext">Landing</span></a
            >
          </li>
  
          {{-- <li class="pc-item pc-caption">
            <label>Other</label>
            <i class="ti ti-brand-chrome"></i>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link"
              ><span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-level"></use>
                </svg> </span
              ><span class="pc-mtext">Menu levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
            ></a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Level 2.2<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                  <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                  <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"
                      >Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                    ></a>
                    <ul class="pc-submenu">
                      <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                      <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"
                  >Level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                ></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                  <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                  <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"
                      >Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                    ></a>
                    <ul class="pc-submenu">
                      <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                      <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li> --}}
          {{-- <li class="pc-item"
            ><a href="https://ableproadmin.com/other/sample-page.html" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-notification-status"></use>
                </svg>
              </span>
              <span class="pc-mtext">Sample page</span></a
            ></li
          > --}}
  
        </ul>
      </div>
    </div>
  </nav>
  <!-- [ Sidebar Menu ] end -->