<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fab fa-superpowers"></i>
                </div>
                <div class="sidebar-brand-text mx-3">DEPARTEMENT MARKETING</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>depart_market/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_market/dataOrder">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <span>Data Order</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_market/customer">
                    <i class="fa fa-user-circle"></i>
                    <span>Customer</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_market/penjualan">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <span>Data Penjualan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_market/produk">
                    <i class="fa fa-cube" aria-hidden="true"></i>
                    <span>Produk</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_market/orderList">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <span>Purchase List</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_market/laporan">
                    <i class="fa fa-chart-pie" aria-hidden="true"></i>
                    <span>Laporan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>depart_market/pengaturan">
                    <i class="fas fa-cogs"></i>
                    <span>Pengaturan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->