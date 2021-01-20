<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto"></form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?= $this->session->userdata('n_cust') ?></div>
                            <img alt="image" src="<?= base_url('assets/asset_stisla/') ?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">APP RENTAL MOBIL</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">St</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/dashboard') ?>" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/data_mobil') ?>" class="nav-link"><i class="fas fa-car"></i><span>Data Mobil</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/data_tipe') ?>" class="nav-link"><i class="fas fa-grip-horizontal"></i><span>Data Type</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/customer') ?>" class="nav-link"><i class="fas fa-users"></i><span>Data Customer</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/transaksi') ?>" class="nav-link"><i class="fas fa-random"></i><span>Transaksi</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/laporan') ?>" class="nav-link"><i class="fas fa-clipboard-list"></i><span>Laporan</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('auth/logout') ?>" class="nav-link"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('auth/ubah_pass') ?>" class="nav-link"><i class="fas fa-lock"></i><span>Ganti Password</span></a>
                        </li>
                    </ul>
                </aside>
            </div>