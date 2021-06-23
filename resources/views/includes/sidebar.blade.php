<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user pb-0">
        <div class="user-body">
            <span class="avatar avatar-xxl brround text-center cover-image" data-image-src="{{ asset("assets/images/users/default.png") }}"></span>
        </div>
        <div class="user-info">
            <a href="#" class="ml-2"><span class="text-dark app-sidebar__user-name font-weight-semibold">{{ Auth::user()->name }}</span><br>
                <span class="text-muted app-sidebar__user-name text-sm">{{ Auth::user()->poste }}</span>
            </a>
        </div>
    </div>

    <div class="tab-menu-heading siderbar-tabs border-0 p-0">
        <div class="tabs-menu ">
            <!-- Tabs -->
            <ul class="nav panel-tabs">
                <li><a href="#index1" data-toggle="tab"><i class="fa fa-home fs-17"></i></a></li>
                <!--<li><a href="#index2" data-toggle="tab"><i class="fa fa-envelope fs-17"></i></a></li>-->
                <!--<li><a href="#index3" data-toggle="tab"><i class="fa fa-user fs-17"></i></a></li>-->
                <li><a href="{{ route("logout", app()->getLocale()) }}" title="logout"><i class="fa fa-power-off fs-17"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
        <div class="tab-content">
            <div class="tab-pane active " id="index1">
                <div class="row row-demo-list">
                    <div id="parentVerticalTab" class="col-md-12">
                        <ul class="resp-tabs-list hor_1">
                            <li @isset($currentModule) @if ($currentModule=='dashboard') class="resp-tab-active active" @endif @endisset><i class="side-menu__icon typcn typcn-device-desktop"></i></li>
                            <li @isset($currentModule) @if ($currentModule=='settings') class="resp-tab-active active" @endif @endisset><i class="side-menu__icon typcn typcn-cog-outline"></i></li>
                            @can("Access_documentation")
                            <li @isset($currentModule) @if ($currentModule=='documentation') class="resp-tab-active active" @endif @endisset><i class="side-menu__icon fa fa-book"></i></li>
                            @endcan
                            <!--
                            <li><i class="side-menu__icon typcn typcn-th-large-outline"></i></li>
                            <li><i class="side-menu__icon typcn typcn-arrow-move-outline"></i></li>
                            <li><i class="side-menu__icon typcn typcn-chart-pie-outline"></i></li>
                            <li><i class="side-menu__icon typcn typcn-spanner-outline"></i></li>
                            <li><i class="side-menu__icon typcn typcn-briefcase"></i></li>
                            <li><i class="side-menu__icon typcn typcn-document"></i></li>
                            <li><i class="side-menu__icon typcn typcn-point-of-interest-outline"></i></li>
                            <li><i class="side-menu__icon typcn typcn-calendar-outline"></i></li>
                            <li><i class="side-menu__icon typcn typcn-clipboard"></i></li>
                            <li><i class="side-menu__icon typcn typcn-shopping-cart"></i></li>
                            <li><i class="side-menu__icon typcn typcn-download-outline"></i></li>
                            <li><i class="side-menu__icon typcn typcn-info-outline"></i></li>
                            -->
                        </ul>
                        <div class="resp-tabs-container hor_1">
                            <div @isset($currentModule) @if ($currentModule=='dashboard')  class="resp-tab-content-active" @endif @endisset>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">{{ __("Dashboard") }}</h4>
                                        <a class="slide-item" href="{{ route("dashboard.general", app()->getLocale()) }}"><span class="fa fa-map-o"></span> &nbsp;&nbsp;{{ __("General status") }}</a>
                                        <!--
                                        <a class="slide-item" href="#"><span class="fa fa-list-alt"></span> &nbsp;&nbsp;{{ __("Actions status") }}</a>
                                        <a class="slide-item" href="#"><span class="fa fa-desktop"></span> &nbsp;&nbsp;{{ __("Servers status") }}</a>
                                        -->
                                    </div>
                                </div>
                            </div>
                            <div @isset($currentModule) @if ($currentModule=='settings')  class="resp-tab-content-active" @endif @endisset>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">{{ __("Settings") }}</h4>
                                        @can("manage_user")
                                            <a href="{{ route("settings.users", app()->getLocale()) }}" class="slide-item"><span class="fa fa-users"></span> &nbsp;&nbsp;{{ __("Users") }}</a>
                                        @endcan
                                        @can("manage_role")
                                            <a href="{{ route("settings.roles", app()->getLocale()) }}" class="slide-item"><span class="fa fa-user-md"></span> &nbsp;&nbsp;{{ __("Roles") }}</a>
                                        @endcan
                                        @can("manage_permission")
                                            <a href="{{ route("settings.permissions", app()->getLocale()) }}" class="slide-item"><span class="fa fa-address-card"></span> &nbsp;&nbsp;{{ __("Permissions") }}</a>
                                        @endcan
                                        <a href="{{ route("settings.languages", app()->getLocale()) }}" class="slide-item"><span class="fa fa-language"></span> &nbsp;&nbsp;{{ __("Languages") }}</a>
                                    </div>
                                </div>
                            </div>
                            <div @isset($currentModule) @if ($currentModule=='documentation')  class="resp-tab-content-active" @endif @endisset>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">{{ __("Documentation") }}</h4>
                                        <a href="{{ route("doc.api", app()->getLocale()) }}" class="slide-item"><span class="fa fa-language"></span> &nbsp;&nbsp;API</a>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">Widget</h4>
                                        <a href="widgets.html" class="slide-item">Widget</a>
                                        <a href="maps.html" class="slide-item">Maps</a>
                                        <a href="#" class="btn btn-primary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">Charts</h4>
                                        <a href="chart-chartist.html" class="slide-item">Chartist Charts </a>
                                        <a href="chart-morris.html" class="slide-item">Morris Charts</a>
                                        <a href="chart-js.html" class="slide-item">Charts js</a>
                                        <a href="chart-peity.html" class="slide-item">Pie Charts</a>
                                        <a href="chart-echart.html" class="slide-item">Echart Charts</a>
                                        <a href="chart-flot.html" class="slide-item">Flot Charts</a>
                                        <a href="chart-high.html" class="slide-item">High Charts</a>
                                        <a href="chart-nvd3.html" class="slide-item">Nvd3 Charts</a>
                                        <a href="chart-dygraph.html" class="slide-item">Dygraph Charts</a>
                                        <a href="#" class="btn btn-primary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">Elements</h4>
                                        <a href="alerts.html" class="slide-item">Alerts</a>
                                        <a href="buttons.html" class="slide-item">Buttons</a>
                                        <a href="colors.html" class="slide-item">Colors</a>
                                        <a href="avatars.html" class="slide-item">Avatars</a>
                                        <a href="dropdown.html" class="slide-item">Drop downs</a>
                                        <a href="thumbnails.html" class="slide-item">Thumbnails</a>
                                        <a href="mediaobject.html" class="slide-item">Media Object</a>
                                        <a href="list.html" class="slide-item">List</a>
                                        <a href="tags.html" class="slide-item">Tags</a>
                                        <a href="pagination.html" class="slide-item">Pagination</a>
                                        <a href="navigation.html" class="slide-item">Navigation</a>
                                        <a href="typography.html" class="slide-item">Typography</a>
                                        <a href="breadcrumbs.html" class="slide-item">Breadcrumbs</a>
                                        <a href="badge.html" class="slide-item">Badges</a>
                                        <a href="jumbotron.html" class="slide-item">Jumbotron</a>
                                        <a href="panels.html" class="slide-item">Panels</a>
                                        <a href="#" class="btn btn-primary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">Advanced UI</h4>
                                        <a href="modal.html" class="slide-item">Modal</a>
                                        <a href="tooltipandpopover.html" class="slide-item">Tooltip and popover</a>
                                        <a href="progress.html" class="slide-item">Progress</a>
                                        <a href="carousel.html" class="slide-item">Carousels</a>
                                        <a href="accordion.html" class="slide-item">Accordions</a>
                                        <a href="tabs.html" class="slide-item">Tabs</a>
                                        <a href="headers.html" class="slide-item">Headers</a>
                                        <a href="footers.html" class="slide-item">Footers</a>
                                        <a href="crypto-currencies.html" class="slide-item">Crypto-currencies</a>
                                        <a href="users-list.html" class="slide-item">User List</a>
                                        <a href="search.html" class="slide-item">Search page</a>
                                        <a href="#" class="btn btn-primary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">Forms</h4>
                                        <a href="form-elements.html" class="slide-item">Form Elements</a>
                                        <a href="form-wizard.html" class="slide-item">Form-wizard</a>
                                        <a href="wysiwyag.html" class="slide-item">Text Editor</a>
                                        <a href="#" class="btn btn-primary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">Icons</h4>
                                        <a href="icons.html" class="slide-item">Font Awesome</a>
                                        <a href="icons2.html" class="slide-item">Material Design Icons</a>
                                        <a href="icons3.html" class="slide-item">Simple Line Iocns</a>
                                        <a href="icons4.html" class="slide-item">Feather Icons</a>
                                        <a href="icons5.html" class="slide-item">Ionic Icons</a>
                                        <a href="icons6.html" class="slide-item">Flag Icons</a>
                                        <a href="icons7.html" class="slide-item">pe7 Icons</a>
                                        <a href="icons8.html" class="slide-item">Themify Icons</a>
                                        <a href="icons9.html" class="slide-item">Typicons Icons</a>
                                        <a href="icons10.html" class="slide-item">Weather Icons</a>
                                        <a href="#" class="btn btn-primary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">Calendar</h4>
                                        <a href="calendar.html" class="slide-item">Default calendar</a>
                                        <a href="calendar2.html" class="slide-item">Full calendar</a>
                                        <a href="#" class="btn btn-primary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">Tables</h4>
                                        <a href="tables.html" class="slide-item">Default table</a>
                                        <a href="datatable.html" class="slide-item">Data Table</a>
                                        <a href="#" class="btn btn-primary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">Pages</h4>
                                        <a href="profile.html" class="slide-item">Profile</a>
                                        <a href="editprofile.html" class="slide-item">Edit Profile</a>
                                        <a href="email.html" class="slide-item">Email</a>
                                        <a href="emailservices.html" class="slide-item">Email Inbox</a>
                                        <a href="gallery.html" class="slide-item">Gallery</a>
                                        <a href="about.html" class="slide-item">About Company</a>
                                        <a href="services.html" class="slide-item">Services</a>
                                        <a href="faq.html" class="slide-item">FAQS</a>
                                        <a href="terms.html" class="slide-item">Terms and Conditions</a>
                                        <a href="empty.html" class="slide-item">Empty Page</a>
                                        <a href="construction.html" class="slide-item">Under Construction</a>
                                        <a href="blog.html" class="slide-item">Blog</a>
                                        <a href="invoice.html" class="slide-item">Invoice</a>
                                        <a href="pricing.html" class="slide-item">Pricing Tables</a>
                                        <a href="#" class="btn btn-primary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">E-commerce</h4>
                                        <a href="shop.html" class="slide-item">Products</a>
                                        <a href="shop-des.html" class="slide-item">Product Details</a>
                                        <a href="cart.html" class="slide-item">Shopping Cart</a>
                                        <a href="#" class="btn btn-primary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">Custom</h4>
                                        <a href="login.html" class="slide-item">Login</a>
                                        <a href="register.html" class="slide-item">Register</a>
                                        <a href="forgot-password.html" class="slide-item">Forgot password</a>
                                        <a href="lockscreen.html" class="slide-item">Lock screen</a>
                                        <a href="#" class="btn btn-primary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-semibold">Error pages</h4>
                                        <a href="400.html" class="slide-item">400 Error</a>
                                        <a href="401.html" class="slide-item">401 Error</a>
                                        <a href="403.html" class="slide-item">403 Error</a>
                                        <a href="404.html" class="slide-item">404 Error</a>
                                        <a href="500.html" class="slide-item">500 Error</a>
                                        <a href="503.html" class="slide-item">503 Error</a>
                                        <a href="#" class="btn btn-primary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                        -->
                        </div>
                    </div>
                </div><!-- col-4 -->
            </div>
            <div class="tab-pane border-top" id="index2">
                <div class="list-group list-group-transparent mb-0 mail-inbox">
                    <div class="mt-3 mb-3 ml-3 mr-3 text-center">
                        <a href="email.html" class="btn btn-primary btn-block"><i class="typcn typcn-pencil fs-14"></i> <span class="email-text">Compose</span></a>
                    </div>
                    <a href="emailservices.html" class="list-group-item list-group-item-action d-flex align-items-center active">
                        <span class="icon mr-3"><i class="fe fe-inbox"></i></span><span class="email-text">Inbox</span> <span class="ml-auto badge-pill badge badge-success email-text">05</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-send"></i></span><span class="email-text">Sent Mail</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-alert-circle"></i></span><span class="email-text">Important</span> <span class="ml-auto badge-pill badge badge-danger email-text">01</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-star"></i></span><span class="email-text">Starred</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-file"></i></span><span class="email-text">Drafts</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-tag"></i></span><span class="email-text">Tags</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-trash-2"></i></span><span class="email-text"> Trash</span>
                    </a>
                </div>
            </div>
            <div class="tab-pane border-top" id="index3">
                <div class="list-group list-group-flush ">
                    <form class="form-inline p-4 m-0">
                        <div class="search-element">
                            <input class="form-control header-search w-100" type="search" placeholder="Search..." aria-label="Search">
                            <span class="Search-icon"><i class="fa fa-search"></i></span>
                        </div>
                    </form>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/female/12.jpg") }}"><span class="avatar-status bg-green"></span></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Mozelle Belt</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/female/21.jpg") }}"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Florinda Carasco</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/female/29.jpg") }}"><span class="avatar-status bg-green"></span></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Alina Bernier</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/female/2.jpg") }}"><span class="avatar-status bg-green"></span></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Zula Mclaughin</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/male/34.jpg") }}"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Isidro Heide</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/male/12.jpg") }}"><span class="avatar-status bg-green"></span></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Mozelle Belt</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/male/21.jpg") }}"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Florinda Carasco</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/male/29.jpg") }}"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Alina Bernier</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/male/2.jpg") }}"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Zula Mclaughin</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/female/14.jpg") }}"><span class="avatar-status bg-green"></span></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Isidro Heide</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/male/11.jpg") }}"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Florinda Carasco</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/male/9.jpg") }}"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Alina Bernier</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/male/22.jpg") }}"><span class="avatar-status bg-green"></span></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Zula Mclaughin</div>
                        </div>
                    </div>
                    <div class="list-group-item d-flex  align-items-center">
                        <div class="mr-2">
                            <span class="avatar avatar-md brround cover-image" data-image-src="{{ asset("assets/images/users/female/4.jpg") }}"></span>
                        </div>
                        <div class="user-name">
                            <div class="font-weight-semibold">Isidro Heide</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!--sidemenu end-->
