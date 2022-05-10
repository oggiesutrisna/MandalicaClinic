<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('assets-backend/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Control Center</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets-backend/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="Gambar">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            {{ __('Dashboard') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contacts.index') }}"
                        class="nav-link {{ request()->routeIs('contacts.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            {{ __('Pesan') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pasiens.index') }}"
                        class="nav-link {{ request()->routeIs('pasiens.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            {{ __('Pasien') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('obats.index') }}"
                        class="nav-link {{ request()->routeIs('obats.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            {{ __('Obat') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blogs.index') }}"
                        class="nav-link {{ request()->routeIs('blogs.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-paragraph"></i>
                        <p>
                            {{ __('Blogs') }}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        <div class="sidebar-custom">
            <a class="btn btn-primary" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
