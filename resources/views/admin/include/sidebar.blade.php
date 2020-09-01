<div class="ecaps-page-wrapper sidemenu-hover-deactive">

    <div class="ecaps-sidemenu-area">
        <!-- Desktop Logo -->


        <!-- Side Nav -->
        <div class="side-menu-area">
            <!-- Sidebar Menu -->
            <nav>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="sidemenu-user-profile d-flex align-items-center">
                        <div class="user-thumbnail">
                            <img src="{{asset('template/img/logo-img/3tebal.png')}}" alt="eRROR">
                        </div>
                        <div class="user-content">
                            <h6>Perpustakaan</h6>
                            <span>SMK Mahaputra</span>
                        </div>
                    </li>

                    <div class="ecaps-logo">


                        <!-- <a href="#"><img class="desktop-logo" src="{{asset('template/img/core-img/logo.png')}}" alt="Desktop Logo"> <img class="small-logo" src="{{asset('template/img/core-img/small-logo.png')}}" alt="Mobile Logo"></a> -->

                    </div>
                    <li class="{{Request::is('home')?'active':''}}"><a href="/list-book"><i class="fa fa-bars"></i> <span>Daftar Buku </span></a></li>
                    <li class="{{Request::is('publishers')?'active':''}}"><a href="/publishers"><i class="fa fa-pencil"></i> <span>Kelola Penerbit</span></a></li>
                    <li class="{{Request::is('books')?'active':''}}"><a href="/books"><i class="fa fa-book"></i> <span>Kelola Buku</span></a></li>
                    <li class="{{Request::is('users')?'active':''}}"><a href="/users"><i class="zmdi zmdi-account-calendar"></i> <span>Kelola User</span></a></li>
                    <li class="{{Request::is('students')?'active':''}}"><a href="/students"><i class="zmdi zmdi-account-calendar"></i> <span>Kelola Siswa</span></a></li>
                    <li class="{{Request::is('borrows')?'active':''}}"><a href="/borrows"><i class="fa fa-bookmark-o"></i> <span>Kelola Peminjaman</span></a></li>

                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="">
                        <div class="" aria-labelledby="">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest

            </ul>
        </nav>
    </div>
</div>
</div>