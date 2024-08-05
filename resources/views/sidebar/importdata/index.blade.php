<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Data</title>
    <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('masterdata.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-database"></i>
                                <p>Master Data</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('importdata.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-import"></i>
                                <p>Import Data</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('absensi.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-calendar-check"></i>
                                <p>Absensi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('laporan.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Laporan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kontak.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-address-book"></i>
                                <p>Kontak</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <section class="content">
                <div class="container">
                    <h1>Import Data</h1>
                    <!-- Konten halaman import data akan ditambahkan di sini nanti -->
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <strong>Footer</strong>
        </footer>
    </div>
    <script src="{{ asset('js/adminlte.js') }}"></script>
</body>
</html>
