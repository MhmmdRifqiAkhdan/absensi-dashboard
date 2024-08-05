<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                @if(Auth::check())
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    <span class="badge badge-success">Online</span>
                @else
                    <a href="#" class="d-block">Muhammad Rifqi Akhdan </a>
                    <span class="badge badge-secondary">Offline</span>
                @endif
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Home -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>

                <!-- Master Data -->
                <li class="nav-item">
                    <a href="{{ route('masterdata.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>Master Data</p>
                    </a>
                </li>

                <!-- Import Data -->
                <li class="nav-item">
                    <a href="{{ route('importdata.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-import"></i>
                        <p>Import Data</p>
                    </a>
                </li>

                <!-- Absensi -->
                <li class="nav-item">
                    <a href="{{ route('absensi.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>Absensi</p>
                    </a>
                </li>

                <!-- Laporan -->
                <li class="nav-item">
                    <a href="{{ route('laporan.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Laporan</p>
                    </a>
                </li>

                <!-- Kontak -->
                <li class="nav-item">
                    <a href="{{ route('kontak.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>Kontak</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
