 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">

         <!-- Messages Dropdown Menu -->
         <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <i class="far fa-comments"></i>
                 <span class="badge badge-danger navbar-badge">3</span>
             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                         <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                         <div class="media-body">
                             <h3 class="dropdown-item-title">
                                 Brad Diesel
                                 <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                             </h3>
                             <p class="text-sm">Call me whenever you can...</p>
                             <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                         </div>
                     </div>
                     <!-- Message End -->
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                         <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                         <div class="media-body">
                             <h3 class="dropdown-item-title">
                                 John Pierce
                                 <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                             </h3>
                             <p class="text-sm">I got your message bro</p>
                             <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                         </div>
                     </div>
                     <!-- Message End -->
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                         <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                         <div class="media-body">
                             <h3 class="dropdown-item-title">
                                 Nora Silvester
                                 <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                             </h3>
                             <p class="text-sm">The subject goes here</p>
                             <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                         </div>
                     </div>
                     <!-- Message End -->
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
             </div>
         </li>
         <!-- Notifications Dropdown Menu -->
         <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <i class="far fa-bell"></i>
                 <span class="badge badge-warning navbar-badge">15</span>
             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <span class="dropdown-item dropdown-header">15 Notifications</span>
                 <div class="dropdown-divider"></div>
                 <a href="#" class="dropdown-item">
                     <i class="fas fa-envelope mr-2"></i> 4 new messages
                     <span class="float-right text-muted text-sm">3 mins</span>
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="#" class="dropdown-item">
                     <i class="fas fa-users mr-2"></i> 8 friend requests
                     <span class="float-right text-muted text-sm">12 hours</span>
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="#" class="dropdown-item">
                     <i class="fas fa-file mr-2"></i> 3 new reports
                     <span class="float-right text-muted text-sm">2 days</span>
                 </a>
                 <div class="dropdown-divider"></div>
                 <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                 <i class="fas fa-expand-arrows-alt"></i>
             </a>
         </li>
         <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>

         <!-- Nav Item - User Information -->
         <li class="nav-item dropdown no-arrow">
             <a class="nav-link d-flex" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                 <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                     {{ auth()->user()->username }}
                     <br>
                     {{-- <small>{{ auth()->user()->role }}</small> --}}
                 </span>
                 <img class="img-profile rounded-circle"
                     src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile.svg">
             </a>
             <!-- Dropdown - User Information -->
             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                 <a class="dropdown-item" href="me">
                     <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                     Profile
                 </a>
                 <a class="dropdown-item" href="#">
                     <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                     Settings
                 </a>
                 <!-- <a class="dropdown-item" href="#">
                     <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                     Activity Log
                 </a> -->
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="{{ route('logout') }}">
                     <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                     Logout
                 </a>
             </div>
         </li>
     </ul>
 </nav>
 <!-- /.navbar -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="/" class="brand-link">
         <img src="{{ asset('adminDashboard_asset/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">TrovKa</span>
     </a>

     <!-- Sidebar  My profile-->
     <div class="sidebar">
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminDashboard_asset/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Samnang John123 </a>
        </div>
      </div> --}}

     <!-- SidebarSearch Form -->
     <div class="form-inline">
         <div class="input-group" data-widget="sidebar-search">
             <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
             <div class="input-group-append">
                 <button class="btn btn-sidebar">
                     <i class="fas fa-search fa-fw"></i>
                 </button>
             </div>
         </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             {{-- <li class="nav-item menu-open">
                 <a href="dashboard" class="nav-link active">
                     <i class="nav-icon fas fa-tachometer-alt"></i>
                     <p>
                         Dashboard
                         <i class="right fas fa-angle-left"></i>
                     </p>
                 </a> --}}
                 <li class="nav-item">
                  <a href="{{ route('admin/dashboard') }}" class="nav-link {{ isActiveMenu(['admin/dashboard']) ? 'active' : '' }}">
                      <i class="nav-icon far fa-circle text-warning"></i>
                      <p>Dashboard</p>
                  </a>
                </li>
                 <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
             </li>
             {{-- <li class="nav-item">
                 <a href="category" class="nav-link">
                     <i class="nav-icon fas fa-th"></i>
                     <p>
                         Category
                         <span class="right badge badge-danger">New</span>
                     </p>
                 </a>
             </li> --}}
             {{-- <li class="nav-item">
                 <a href="company" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>
                         Company
                         <span class="right badge badge-danger">New</span>
                     </p>
                 </a>
             </li> --}}
             {{-- <li class="nav-item">
                 <a href="maker" class="nav-link">
                     <i class="nav-icon fas fa-th"></i>
                     <p>
                         Maker
                         <span class="right badge badge-danger">New</span>
                     </p>
                 </a>
             </li> --}}
             {{-- <li class="nav-item">
                 <a href="pages/widgets.html" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>
                         Report
                         <span class="right badge badge-danger">New</span>
                     </p>
                 </a>
             </li> --}}
             {{-- <li class="nav-item">
                 <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-copy"></i>
                     <p>
                         Layout Options
                         <i class="fas fa-angle-left right"></i>
                         <span class="badge badge-info right">6</span>
                     </p>
                 </a>
                 <ul class="nav nav-treeview">
                     <li class="nav-item">
                         <a href="pages/layout/top-nav.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Top Navigation</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Top Navigation + Sidebar</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/layout/boxed.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Boxed</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Fixed Sidebar</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Fixed Sidebar <small>+ Custom Area</small></p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/layout/fixed-topnav.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Fixed Navbar</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/layout/fixed-footer.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Fixed Footer</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Collapsed Sidebar</p>
                         </a>
                     </li>
                 </ul>
             </li> --}}
             {{-- <li class="nav-item">
                 <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-chart-pie"></i>
                     <p>
                         Charts
                         <i class="right fas fa-angle-left"></i>
                     </p>
                 </a>
                 <ul class="nav nav-treeview">
                     <li class="nav-item">
                         <a href="pages/charts/chartjs.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>ChartJS</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/charts/flot.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Flot</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/charts/inline.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Inline</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/charts/uplot.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>uPlot</p>
                         </a>
                     </li>
                 </ul>
             </li> --}}
             {{-- <li class="nav-item">
                 <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-tree"></i>
                     <p>
                         UI Elements
                         <i class="fas fa-angle-left right"></i>
                     </p>
                 </a>
                 <ul class="nav nav-treeview">
                     <li class="nav-item">
                         <a href="pages/UI/general.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>General</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/UI/icons.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Icons</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/UI/buttons.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Buttons</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/UI/sliders.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Sliders</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/UI/modals.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Modals & Alerts</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/UI/navbar.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Navbar & Tabs</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/UI/timeline.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Timeline</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/UI/ribbons.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Ribbons</p>
                         </a>
                     </li>
                 </ul>
             </li> --}}
             {{-- <li class="nav-item">
                 <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-edit"></i>
                     <p>
                         Forms
                         <i class="fas fa-angle-left right"></i>
                     </p>
                 </a>
                 <ul class="nav nav-treeview">
                     <li class="nav-item">
                         <a href="pages/forms/general.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>General Elements</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/forms/advanced.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Advanced Elements</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/forms/editors.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Editors</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/forms/validation.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Validation</p>
                         </a>
                     </li>
                 </ul>
             </li> --}}
             {{-- <li class="nav-item">
                 <a href="#" class="nav-link">
                     <i class="nav-icon fas fa-table"></i>
                     <p>
                         Tables
                         <i class="fas fa-angle-left right"></i>
                     </p>
                 </a>
                 <ul class="nav nav-treeview">
                     <li class="nav-item">
                         <a href="pages/tables/simple.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>Simple Tables</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/tables/data.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>DataTables</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="pages/tables/jsgrid.html" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                             <p>jsGrid</p>
                         </a>
                     </li>
                 </ul>
             </li> --}}
             <!-- <li class="nav-header">EXAMPLES</li> -->
             <!-- <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Kanban Board
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/faq.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v1
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v1</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v2
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/login-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>My </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/register-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password</p>
                    </a>
                  </li>
                </ul>
              </li>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/search/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enhanced</p>
                </a>
              </li>
            </ul>
          </li> -->
             <!-- <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="iframe.html" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Tabbed IFrame Plugin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li> -->
             <!-- <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> -->
             <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li> -->
             <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li> -->
             <li class="nav-header">Setting</li>
             <li class="nav-item">
              <a href="{{ route('category.index') }}" class="nav-link {{ isActiveMenu(['admin/category']) ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Category</p>
              </a>
            </li>
             <li class="nav-item">
              <a href="{{ route('company.index') }}" class="nav-link {{ isActiveMenu(['admin/company']) ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Company</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('maker.index') }}" class="nav-link {{ isActiveMenu(['admin/maker']) ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Maker</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('brand.index') }}" class="nav-link {{ isActiveMenu(['admin/brand']) ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Brand</p>
              </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('productTitle.index') }}" class="nav-link {{ isActiveMenu(['admin/productTitle']) ? 'active' : '' }}">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Title</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('productColor.index') }}" class="nav-link {{ isActiveMenu(['admin/productColor']) ? 'active' : '' }}">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Color</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('productSize.index') }}" class="nav-link {{ isActiveMenu(['admin/productSize']) ? 'active' : '' }}">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Size</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('productStorage.index') }}" class="nav-link {{ isActiveMenu(['admin/productStorage']) ? 'active' : '' }}">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Storage</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('productUsed.index') }}" class="nav-link {{ isActiveMenu(['admin/productUsed']) ? 'active' : '' }}">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Used</p>
            </a>
          {{-- </li>
             <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon far fa-circle text-warning"></i>
                         <p class='text'>Product <i class="fas fa-angle-left right"></i></p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="productTitle" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Title</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="productColor" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Color</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="productSize" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Size</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="productStorage" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Storage</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="productUsed" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Used</p>
                             </a>
                         </li>
                     </ul>
                </li> --}}
             {{-- <li class="nav-item">
                 <a href="{{ route('brand.index') }}" class="nav-link {{ isActiveMenu(['admin/brand']) ? 'active' : '' }}">
                     <i class="nav-icon far fa-circle text-warning"></i>
                     <p>Brand</p>
                 </a>
             </li> --}}
             <li class="nav-item">
                 <a href="#" class="nav-link ">
                     <i class="nav-icon far fa-circle text-info"></i>
                     <p>Informational</p>
                 </a>
             </li>
             <li class="nav-item {{ isActiveMenu(['admin/users', 'roles', 'permission']) ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ isActiveMenu(['admin/users', 'roles', 'permission']) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p> Authentication <i class="fas fa-angle-left right"></i></p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('users.index') }}" class="nav-link {{ isActiveMenu(['admin/users']) ? 'active' : '' }}">
                          <i class="fas fa-users nav-icon"></i>
                          <p>Users/Staff</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('roles.index') }}" class="nav-link {{ isActiveMenu(['admin/roles']) ? 'active' : '' }}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Role</p>
                      </a>
                  </li>
              </ul>
          </li>
         </ul>
     </nav>
     <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>