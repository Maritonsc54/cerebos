<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <li class="nav-item"><a href="index.html" class="navbar-brand nav-link">
            <img alt="branding logo" src="{{ asset('public/app-assets/images/logo/robust-logo-light.png') }}" data-expand="{{ asset('public/app-assets/images/logo/robust-logo-light.png') }}" data-collapse="{{ asset('public/app-assets/images/logo/robust-logo-small.png') }}" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
            </ul>
            <ul class="nav navbar-nav float-xs-right">
              <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
                  </li>
                  <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-cart3 icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">You have new order!</h6>
                          <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-monitor3 icon-bg-circle bg-red bg-darken-1"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading red darken-1">99% Server load</h6>
                          <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-server2 icon-bg-circle bg-yellow bg-darken-3"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                          <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-check2 icon-bg-circle bg-green bg-accent-3"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Complete the task</h6><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last week</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left valign-middle"><i class="icon-bar-graph-2 icon-bg-circle bg-teal"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Generate monthly report</h6><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-mail6"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up">8</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0">4 New</span></h6>
                  </li>
                  <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{ asset('public/app-assets/images/portrait/small/avatar-s-1.png') }}" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Margaret Govan</h6>
                          <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start the project.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="{{ asset('public/app-assets/images/portrait/small/avatar-s-2.png') }}" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Bret Lezama</h6>
                          <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tuesday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{ asset('public/app-assets/images/portrait/small/avatar-s-3.png') }}" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Carie Berra</h6>
                          <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Friday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="{{ asset('public/app-assets/images/portrait/small/avatar-s-6.png') }}" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Eric Alsobrook</h6>
                          <p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p><small>
                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="{{ asset('public/app-assets/images/portrait/small/avatar-s-1.png') }}" alt="avatar"><i></i></span><span class="user-name">John Doe</span></a>
                <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="icon-head"></i> Edit Profile</a><a href="#" class="dropdown-item"><i class="icon-mail6"></i> My Inbox</a><a href="#" class="dropdown-item"><i class="icon-clipboard2"></i> Task</a><a href="#" class="dropdown-item"><i class="icon-calendar5"></i> Calender</a>
                  <div class="dropdown-divider"></div><a href="#" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header" >
      <style>
        #time{
          font-size: 45px;
          margin-top:0px;
          margin-bottom:0px;
          padding-top:0px;
          padding-bottom:0px;
        }

        .day{
          font-size: 16px;
          margin-top:10px;
          margin-bottom:0px;
        }
        
      </style>
        <div class="row">
          <div class="col-md-6">
            <p id="time">12:00</p>
          </div>
          <div class="col-md-6">
            <p class="day">sunday</p>
            <p>28 Des 2017</p>
          </div>
        </div>
       
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item">
            <a href="{{ url('/carts') }}">
              <i class="icon-ios-cart"></i>
              <span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Carts</span>
            </a>
          </li>
          <li class=" nav-item"><a href="{{ url('/tasks') }}">
            <i class="icon-clipboard2"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Task</span></a>
          </li>
          <li class=" nav-item"><a href="{{ url('/calender') }}">
            <i class="icon-calendar4"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Calender</span></a>
          </li>
          <li class=" nav-item"><a href="#">
            <i class="icon-paper"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Surveys</span></a>
            <ul class="menu-content">
              <li><a href="layout-1-column.html" data-i18n="nav.page_layouts.1_column" class="menu-item">1 column</a>
              </li>
              <li><a href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns" class="menu-item">2 columns</a>
              </li>
            </ul>
          </li>
          
          <li class=" navigation-header"><span data-i18n="nav.category.support">Admin Managements</span><i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
          <li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2">2</span></a>
            <ul class="menu-content">
              <li><a href="index.html" data-i18n="nav.dash.main" class="menu-item">Dashboard</a>
              </li>
              <li><a href="dashboard-2.html" data-i18n="nav.dash.main" class="menu-item">Dashboard 2</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#">
            <i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Campaigns</span></a>
            <ul class="menu-content">
              <li><a href="layout-1-column.html" data-i18n="nav.page_layouts.1_column" class="menu-item">1. UpGroup</a>
              </li>
              <li><a href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns" class="menu-item">2. Promotions</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="">
            <i class="icon-android-contacts"></i><span data-i18n="nav.project.main" class="menu-title">Customers</span></a>
            <ul class="menu-content">
              <li><a href="{{ url('/customers') }}" data-i18n="nav.invoice.invoice_template" class="menu-item">All Customers</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#">
            <i class="icon-product-hunt"></i><span data-i18n="nav.cards.main" class="menu-title">Products</span></a>
            <ul class="menu-content">
              <li><a href="{{ url('/products') }}" data-i18n="nav.cards.card_bootstrap" class="menu-item">All Products</a>
              </li>
              <li><a href="{{ url('/products/expired') }}" data-i18n="nav.cards.card_bootstrap" class="menu-item">Expired</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#">
            <i class="icon-bubble2"></i><span data-i18n="nav.cards.main" class="menu-title">Promotions</span></a>
            <ul class="menu-content">
              <li><a href="{{ url('/promotions') }}" data-i18n="nav.cards.card_bootstrap" class="menu-item">All Promotions</a>
              </li>
              <li><a href="{{ url('/products/expired') }}" data-i18n="nav.cards.card_bootstrap" class="menu-item">Expired</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#">
            <i class="icon-android-contact"></i><span data-i18n="nav.advance_cards.main" class="menu-title">Users</span></a>
            <ul class="menu-content">
              <li><a href="{{ url('/users') }}" data-i18n="nav.cards.card_statistics" class="menu-item">All Users</a></li>
              <li><a href="{{ url('/permission') }}" data-i18n="nav.cards.card_charts" class="menu-item">Permissions</a></li>
            </ul>
          </li>
          
          

          <li class=" nav-item"><a href="#"><i class="icon-android-funnel"></i><span data-i18n="nav.menu_levels.main" class="menu-title">Reposts</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.menu_levels.second_level" class="menu-item">Calls Report</a></li>
              <li><a href="#" data-i18n="nav.menu_levels.second_level" class="menu-item">NCCC Report</a></li>
              <li><a href="#" data-i18n="nav.menu_levels.second_level" class="menu-item">Cybersource Report</a></li>
              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Survey Report</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Survey 1</a></li>
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Survey 2</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.support">Support</span><i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="https://github.com/pixinvent/robust-free-bootstrap-admin-template/issues"><i class="icon-support"></i><span data-i18n="nav.support_raise_support.main" class="menu-title">Raise Support</span></a>
          </li>
          <li class=" nav-item"><a href="https://pixinvent.com/free-bootstrap-template/robust-lite/documentation"><i class="icon-document-text"></i><span data-i18n="nav.support_documentation.main" class="menu-title">Documentation</span></a>
          </li>
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->