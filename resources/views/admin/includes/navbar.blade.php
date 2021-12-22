<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0);"><i class="ficon bx bx-menu"></i></a>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a>
                    </li>
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up"></span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">2 new Notification</span><span class="text-bold-400 cursor-pointer">Mark all as read</span></div>
                            </li>
                            <li class="scrollable-container media-list">
                                <a class="d-flex justify-content-between" href="javascript:void(0);">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="{{ asset('backend/app-assets/images/portrait/small/user.png')}}" alt="avatar" height="39" width="39" /></div>
                                        </div>
                                        <div class="media-body">
                                        <h6 class="media-heading"><span class="text-bold-500">New Message</span> received</h6>
                                            <small class="notification-text">Dec 21 12:32pm</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="d-flex justify-content-between read-notification cursor-pointer" href="javascript:void(0);">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="{{ asset('backend/app-assets/images/portrait/small/user.png')}}" alt="avatar" height="39" width="39" /></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">New Message</span> received</h6>
                                            <small class="notification-text">You have 18 unread messages</small>
                                        </div>
                                    </div>
                                </a> 
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name">{{ Auth::user()->name }}</span><span class="user-status text-muted"></span></div>
                            <span><img class="round" src="{{ asset('backend/app-assets/images/portrait/small/user.png')}}" alt="avatar" height="40" width="40" /></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0">
                            <a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a
                                class="dropdown-item"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            >
                                <i class="bx bx-power-off mr-50"></i> {{__('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
