<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center " href="<?= base_url('dashboard'); ?> ">
                <div class="sidebar-brand-icon ">
                <img src="<?= base_url('assets'); ?>/img/icon.png" class="img-fluid" style="width: 50px;">
                </div>
                <div class="sidebar-brand-text mx-3">Penjualan</div>
            </a>
            <br>
            <!-- Heading -->
            <div class="sidebar-heading">
                <h6 style="color: rgb(212, 214, 214);"> <b>Data</b> </h6>
            </div>
            <hr class="sidebar-divider mt-1 mb-2">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Dashboard'); ?>">
                <i class="fa fa-spinner fa-spin"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <hr class="sidebar-divider mt-1 mb-2">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('barang'); ?>">
                    <i class="fas fa-cart-arrow-down"></i>
                    <span>Data Barang</span>
                </a>
            </li>
            <hr class="sidebar-divider  mb-1 d-none d-md-block">
            <li class="nav-item mb-2">
                <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        
        <!-- End of Sidebar -->