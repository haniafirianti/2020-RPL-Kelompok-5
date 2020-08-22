<div class="ecaps-sidemenu-area">
    <!-- Desktop Logo -->
    <div class="ecaps-logo">
        <a href="index.html"><img class="desktop-logo" src="{{asset('template/img/core-img/logo.png')}}" alt="Desktop Logo"> <img class="small-logo" src="{{asset('template/img/core-img/small-logo.png')}}" alt="Mobile Logo"></a>
    </div>

    <!-- Side Nav -->
    <div class="ecaps-sidenav" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area">
            <!-- Sidebar Menu -->
            <nav>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="sidemenu-user-profile d-flex align-items-center">
                        <div class="user-thumbnail">
                            <img src="{{asset('template/img/member-img/1.png')}}" alt="eRROR">
                        </div>
                        <div class="user-content">
                            <h6>Ajoy Das</h6>
                            <span>Pro User</span>
                        </div>
                    </li>
                    <li class="{{Request::is('home')?'active':''}}"><a href="/list-book"><i class="fa fa-bars"></i> <span>Daftar Buku </span></a></li>
                    <li class="{{Request::is('books')?'active':''}}"><a href="/books"><i class="fa fa-book"></i> <span>Kelola Buku</span></a></li>
                    <li class="{{Request::is('publishers')?'active':''}}"><a href="/publishers"><i class="fa fa-pencil"></i> <span>Kelola Penerbit</span></a></li>
                    <li class="{{Request::is('users')?'active':''}}"><a href="/users"><i class="zmdi zmdi-account-calendar"></i> <span>Kelola User</span></a></li>
                    <li class="{{Request::is('students')?'active':''}}"><a href="/students"><i class="zmdi zmdi-account-calendar"></i> <span>Kelola Student</span></a></li>
                    <li class="{{Request::is('borrows')?'active':''}}"><a href="/borrows"><i class="fa fa-bookmark-o"></i> <span>Kelola Peminjaman</span></a></li>

                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="icon_laptop"></i> <span>Apps</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="calendar.html">- Calendar</a></li>
                            <li><a href="chat-box.html">- Chat box</a></li>
                            <li><a href="project-list.html">- Project List</a></li>
                            <li><a href="project-details.html">- Project Details</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>