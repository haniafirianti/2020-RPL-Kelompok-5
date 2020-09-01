<header class="top-header-area d-flex align-items-center justify-content-between">
    <div class="left-side-content-area d-flex align-items-center">
        <!-- Mobile Logo -->
        <div class="mobile-logo mr-3 mr-sm-4">
            <a href="index.html"><img src="{{asset('layout/img/core-img/small-logo.png')}}" alt="Mobile Logo"></a>
        </div>

        <!-- Triggers -->
        <div class="ecaps-triggers mr-1 mr-sm-3">
            <div class="menu-collasped" id="menuCollasped">
                <i class="zmdi zmdi-menu"></i>
            </div>
            <div class="mobile-menu-open" id="mobileMenuOpen">
                <i class="zmdi zmdi-menu"></i>
            </div>
        </div>

        <!-- Left Side Nav -->
        <ul class="left-side-navbar d-flex align-items-center">
            <li class="hide-phone app-search mr-15"></li>
        </ul>
    </div>

    <div class="right-side-navbar d-flex align-items-center justify-content-end">
        <!-- Mobile Trigger -->
        <div class="right-side-trigger" id="rightSideTrigger">
            <i class="ti-align-left"></i>
        </div>

        <!-- Top Bar Nav -->
        <ul class="right-side-content d-flex align-items-center">
        <li class="fa fa-user-circle">
        <span style="font-size: 15px; color: #e83e8c; font-weight:bold;">{{Auth::user()->user_full_name}}</span>
        </li>
            <!-- Full Screen Mode -->
            <!-- <li class="full-screen-mode ml-1">
                <a href="javascript:" id="fullScreenMode"><i class="zmdi zmdi-fullscreen"></i></a>
            </li> -->

           <!--  <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="border-radius-50" src="{{asset('layout/img/member-img/1.png')}}" alt=""></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- User Profile Area -->
                    <!-- <div class="user-profile-area">
                        <div class="user-profile-heading">
                            <!-- Thumb -->
                            <!-- <div class="profile-thumbnail">
                                <img class="border-radius-50" src="{{asset('layout/img/member-img/1.png')}}" alt="">
                            </div>
                            <!-- Profile Text -->
                            <!-- div class="profile-text">
                                <h6>Ajoy Das</h6>
                                <span>ajoydas@example.com</span>
                            </div> -->
                        <!-- /div> -->
                        <!-- <a href="#" class="dropdown-item"><i class="ti-user text-default" aria-hidden="true"></i> My profile</a>
                        <a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open text-success" aria-hidden="true"></i> Messages</a>
                        <a href="#" class="dropdown-item"><i class="ti-settings text-default" aria-hidden="true"></i> Account settings</a>
                        <a href="#" class="dropdown-item"><i class="ti-heart text-purple" aria-hidden="true"></i> Support</a>
                        <a href="#" class="dropdown-item"><i class="ti-unlink text-warning" aria-hidden="true"></i> Sign-out</a>
                    </div> -->
                <!-- </div>
            </li>   -->
        </ul>
    </div>
</header>
<!-- 
<div class="row">
    <div class="col-12">
        <div class="dahboard-header-area d-sm-flex align-items-center justify-content-between">
            <div class="dahboard-header-title d-flex align-items-center">
                <h6 class="mb-0 mr-3">Dashboard</h6>
                <p class="mb-0 mr-3 font-13">#6598452</p>
                <div class="nav-item dropdown">
                    <button class="btn btn-primary dropdown-toggle font-12" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add new</button 
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                        <a href="#" class="dropdown-item">- Profile</a>
                        <a href="#" class="dropdown-item">- Messages</a>
                        <a href="#" class="dropdown-item">- Settings</a>
                    </div>
                </div>
            </div>

            <div class="dahsboard-header-link">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="inbox.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Email"><i class="zmdi zmdi-email"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="chat-box.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat"><i class="zmdi zmdi-camera-mic"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="todo-list.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo"><i class="zmdi zmdi-check-square"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="calendar.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar"><i class="zmdi zmdi-calendar-note"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div> -->